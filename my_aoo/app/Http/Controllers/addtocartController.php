<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Categorys;

use App\Models\Products_Image;
use App\Models\User;
use App\Models\Coupons;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
use Termwind\Components\Dd;
use Illuminate\Support\Facades\Redirect;


class addtocartController extends Controller
{
    //


    public function productaddtoCart($id)
    {
        //lấy id
        $product = Products::find($id);
        //đọc dữ liệu
        $cart = session()->get('cart', []);
        //kiểm tra tồn tại
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->products_name,
                "quantity" => 1,
                "price" => $product->products_price,
                "image  " => $product->img_name
            ];
        }
        // lưu dữ liêu
        session()->put('cart', $cart);

        //session()->forget('cart');
        return redirect()->back();

    }
    public function deleteProductToCart($id)
    {

        $cart = session('cart');

        if (array_key_exists($id, $cart)) {
            // Xóa sản phẩm khỏi mảng 'cart'
            unset($cart[$id]);

            // Lưu lại mảng 'cart' đã xóa vào session
            session(['cart' => $cart]);
            return redirect()->back();
        }
    }
      public function addCoupon(){
    $coupon = Coupons::all();
    // $content = $request->input("coupon");
    return view('cart',['coupons'=>$coupon]);
  }

      public function productaddtoWish($id)
  {
//lấy id
      $product = Products::find($id);
   //đọc dữ liệu
      $wish = session()->get('wish', []);
      //kiểm tra tồn tại
      if(isset($wish[$id])) {
          $wish[$id]['quantity']++;
      } else {
          $wish[$id] = [
              "name" => $product->products_name,
              "quantity" => 1,
              "price" => $product->products_price,
              "image  " => $product->img_name
          ];
      }
      // lưu dữ liêu
      session()->put('wish', $wish);

          //session()->forget('cart');
      return redirect()->back();

      }

    public function deleteProductToWish($id)
    {

        $wish = session('wish');

        if (array_key_exists($id, $wish)) {
            // Xóa sản phẩm khỏi mảng 'cart'
            unset($wish[$id]);

            // Lưu lại mảng 'cart' đã xóa vào session
            session(['wish' => $wish]);
            return redirect()->back();
        }
    }
}
