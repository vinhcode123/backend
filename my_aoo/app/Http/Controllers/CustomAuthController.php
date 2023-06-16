<?php
namespace App\Http\Controllers;

use App\Models\Categorys;
use App\Models\Products;
use App\Models\Products_Image;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
use Termwind\Components\Dd;
use Illuminate\Pagination\Paginator;

//Unknow
class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if (auth()->user()->role == '1') {
                return redirect()->route('admin');
            }
            return redirect()->intended('/')
                ->withSuccess('Signed in');
        }

        return redirect("/")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }


    public function AddUser(Request $request)
    {
        return view('Admin/AddUser');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6'
        ], [
                'password.confirmed' => 'The password confirmation does not match.',
            ]);

        // Tạo user mới và lưu vào CSDL
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect("account")->withSuccess('You have signed-in');
    }
    public function RegisterUsersAdmin(Request $request)
    {
        $request->validate([
            'name' => 'required|min:1|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6|max:255'
        ], [
                'password.confirmed' => 'The password confirmation does not match.',
                'name' => 'The name litmit is 255 word',
            ]);

        // Tạo user mới và lưu vào CSDL
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect("index6")->withSuccess('You have signed-in');
    }


    public function DeleteUser(Request $request)
    {
        User::where('id', $request->deleteID)->delete();

        return redirect("index6")->withSuccess('You have signed-in');
    }



    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }
    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }
    public function _404()
    {
        return view('404');
    }
    public function account()
    {
        return view('account');
    }
    //Hiển thị tất cả sản phẩm trong blog
    public function blog2()
    {


        $categoryName = 'name'; // tên danh mục cần lấy sản phẩm

        $categoryId = DB::table('categorys')
            ->where('name', $categoryName)
            ->value('id');

        $products = DB::table('products')
            ->leftJoin('products_image', 'products.id', '=', 'products_image.products_id')
            ->leftJoin('categorys', 'products.categorys_id', '=', 'categorys.id')
            ->select('products.*', 'products_image.img_name', 'categorys.name as category_name')
            ->paginate(6);
        return view('Blog.blog-archive-2', compact('products'));
    }
    //Comment
    public function blog($id)
    {
        $categoryName = 'name'; // tên danh mục cần lấy sản phẩm
        $categoryId = DB::table('categorys')
            ->where('name', $categoryName)
            ->value('id');

        $products = Products::leftJoin('products_image', 'products.id', '=', 'products_image.products_id')
            ->leftJoin('categorys', 'products.categorys_id', '=', 'categorys.id')
            ->select('products.*', 'products_image.img_name', 'categorys.name as category_name')
            ->where('products.id', $id)
            ->first();

        if ($products) {
            $productWithComments = Products::with('comments')->find($id);
            $commentCount = $productWithComments->comments->count();
            if ($productWithComments) {
                $comments = $productWithComments->comments;

            }

        } else {
            $productWithComments = null;
            $comments = null;
            $products = null;
            $commentCount = null;
        }

        // dd($productWithComments);
        return view('blog.posts', compact('productWithComments', 'comments', 'products', 'commentCount'));

    }
    public function cart()
    {
        return view('cart');
    }
    public function checkout()
    {
        return view('checkout');
    }
    public function contact()
    {
        return view('contact');
    }
    // Type_Products ,Chia sẻ biến data_type cho các blade vào appservice
    public function type_products($id)
    {
        $data_type = Categorys::all();
        $data_categories = Categorys::find($id);
        $categories = Categorys::with([
            'products' => function ($query) {
                $query->join('products_image', 'products.id', '=', 'products_image.products_id')
                    ->select('products.*', 'products_image.img_name');
            }
        ])->where('id', $id)->get();

        return view('products.type_products', compact('categories', 'data_type', 'data_categories'));
    }


    // Hien thi san pham theo danh muc
    public function indexUserCustomer()
    {
        $categories = Categorys::with([
            'products' => function ($query) {
                $query->join('products_image', 'products.id', '=', 'products_image.products_id')
                    ->select('products.*', 'products_image.img_name');
            }
        ])->get();

        return view('home.index', compact('categories'));
    }


    public function product_detail($id)
    {
        $product = Products::find($id);


        return view('products.productdetail', ['product' => $product]);
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function RegisterProductsAdmin(Request $request, $category_id)
    {
        $request->validate([
            'products_name' => 'required',
            'products_price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            'categorys_id' => 'required',
        ]);

        $data = $request->all();
        $file = $request->file('image');
        $fileImage = $file->getClientOriginalName();
        $category_id = $request->input('category_id');
        $category = Categorys::find($category_id);
        $categoryPath = 'img/' . $category->name . '/';
        $destinationPath = public_path($category_id = $request->input('category_id'));
        $file->move($destinationPath, $fileImage);
        $imageUrl = $categoryPath . $fileImage;

        $product = $this->createProduct($data);
        $this->createProduct_Image(['img_name' => $imageUrl], $product->id);

        return redirect("index7")->withSuccess('Product created successfully.');
    }

    public function createProduct($data)
    {
        return Products::create([
            'products_name' => $data['products_name'],
            'products_price' => $data['products_price'],
            'description' => $data['description'],
            'categorys_id' => $data['categorys_id']
        ]);
    }

    public function createProduct_Image($data, $product_id)
    {
        $productImage = new Products_Image;
        $productImage->img_name = $data['img_name'];
        $productImage->products_id = $product_id;
        $productImage->save();
    }
    public function AddProduct(Request $request)
    {
        $categories = Categorys::all();
        $category_id = $request->input('category_id');
        return view('Admin/AddProduct', compact('categories', 'category_id'));
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////


    public function DeleteProduct(Request $request)
    {
        Products::where('id', $request->deleteIDProduct)->delete();

        return redirect("index7")->withSuccess('You have signed-in');
    }

    public function product()
    {
        return view('product');
    }
    public function wishlist()
    {
        return view('wishlist');
    }
    public function index5()
    {
        return view('admin.index5');
    }
    public function success()
    {
        return view('success');
    }
    public function index6(Request $request)
    {
        $name = $request->input('key');
        $users = User::where('name', 'like', '%' . $name . '%')->paginate(2);
        return view('admin.index6', compact('users'));
    }
    public function index7(Request $request)
    {
        $name = $request->input('key');
        $categories = Categorys::with([
            'products' => function ($query) use ($name) {
                $query->join('products_image', 'products.id', '=', 'products_image.products_id')
                    ->select('products.*', 'products_image.img_name')
                    ->where('products.products_name', 'like', '%' . $name . '%');
            }
        ])->paginate(1);
        return view('admin.index7', compact('categories'));
    }
    public function search(Request $request)
    {
        $name = $request->input('key');
        $categories = Categorys::with([
            'products' => function ($query) use ($name) {
                $query->join('products_image', 'products.id', '=', 'products_image.products_id')
                    ->select('products.*', 'products_image.img_name')
                    ->where('products.products_name', 'like', '%' . $name . '%');
            }
        ])->get();
        return view('home.searchproductuser', compact('categories'));
    }
    //edit user admin
    public function editUser(Request $request)
    {
        $user = User::find($request->user_id);

        // $user = User::find($id);
        return view('admin.editUser', compact('user'));
    }
    public function updateUser(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
        ]);

        $user = User::find($request->user_id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();
        return redirect('index6')->with('success', 'User updated successfully');
    }
}