<?php

namespace App\Http\Controllers;

use App\Models\Categorys;
use App\Models\Products;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
use Termwind\Components\Dd;

class CartController extends Controller
{
    /**php
     * Summary of add
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add(Request $request)
    {
        $productId = $request->input('id');
        $quality
            = $request->input('quality
    ');
        $product = Products::find($productId);
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found');
        }
        $Products = Products::where('user_id', auth()->id())
            ->where('id', $productId)
            ->first();
        if ($Products) {
            $Products->quality
                += $quality
            ;
            $Products->save();
        } else {
            $Products = new Products();
            $Products->user_id = auth()->id();
            $Products->product_id = $productId;
            $Products->quality
                = $quality
            ;
            $Products->price = $product->price;
            $Products->save();
        }
        return redirect()->route('cart')->with('success', 'Product added to Products');
    }
}
