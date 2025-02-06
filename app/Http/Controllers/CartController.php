<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductToShoppingCart;
use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function index()
    {
        $cart = session('cart', []);
        // Build a small list of items from the session-based cart
        $items = [];
        foreach ($cart as $productId => $qty) {
            $product = Product::find($productId);
            if ($product) {
                $items[] = (object) [
                    'product' => $product,
                    'total_amount' => $qty,
                ];
            }
        }
        return view('cart', compact('items'));
    }

    public function add(Request $request)
    {
        $productId = $request->input('product_id');
        $cart = session('cart', []);

        if (!isset($cart[$productId])) {
            $cart[$productId] = 0;
        }
        $cart[$productId]++;
        session(['cart' => $cart]);
        $totalCount = array_sum($cart);

        // Produktinformationen holen
        $productsInCart = [];
        foreach ($cart as $prodId => $qty) {
            $product = \App\Models\Product::find($prodId);
            if ($product) {
                $productsInCart[] = "{$qty} x {$product->product_name}";
            }
        }

        // Antwort zurückgeben
        return response()->json([
            'message' => 'Produkt hinzugefügt',
            'totalCount' => $totalCount,
            'productsInCart' => $productsInCart,
        ]);
    }


    public function remove(Request $request)
    {
        $productId = $request->input('product_id');
        $cart = session('cart', []);
        if (isset($cart[$productId])) {
            unset($cart[$productId]);
        }
        session(['cart' => $cart]);
        return redirect()->back();
    }

    public function clear()
    {
        session()->forget('cart');
        return redirect()->back();
    }

    public function show($id)
    {
        $items = ProductToShoppingCart::where('shopping_cart_id', $id)
            ->with('product')
            ->get();
        return view('cart', compact('items'));
    }

    public function update(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = max(1, (int) $request->input('quantity', 1));

        $cart = session('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId] = $quantity;
        }

        session(['cart' => $cart]);

        $newSubtotal = 0;
        foreach ($cart as $prodId => $qty) {
            $product = Product::find($prodId);
            if ($product) {
                $newSubtotal += $product->retail_price * $qty;
            }
        }

        return response()->json([
            'message' => 'Produktmenge geändert',
            'newSubtotal' => $newSubtotal,
            'session' => $cart
        ]);
    }


    public function getTotalPrice(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = (int) $request->input('quantity', 1);
        $product = \App\Models\Product::find($productId);
        if ($product) {
            $price = $product->retail_price * $quantity;
            return response()->json([
                'price' => $price
            ]);
        } else {
            return response()->json([
                'error' => 'Produkt nicht gefunden'
            ]);
        }
    }

    public function getTotalCartPrice()
    {
        $cart = session('cart', []);

        session(['cart' => $cart]);

        $total = 0;
        foreach ($cart as $prodId => $qty) {
            $product = \App\Models\Product::find($prodId);
            if ($product) {
                $total += $product->retail_price * $qty;
            }
        }

        return response()
            ->json([
                'subtotal' => $total,
                'total' => $total
            ]);
    }
}
