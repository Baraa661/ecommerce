<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Category;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::allows('admin-only',auth()->user())){
            $products = Product::all()->sortByDesc('id');
            return view('dashboard.products.index',compact("products"));
        }else{
            return redirect()->route('welcome');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Gate::allows('admin-only',auth()->user())){
            $categories = Category::all()->sortBy('name');
            return view('dashboard.products.addproduct', compact('categories'));
        }else{
            return redirect()->route('welcome');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Gate::allows('admin-only',auth()->user())){
            $product = new Product();
            $product->category_id = $request->category_id;
            $product->name = $request->name;
            $product->price = $request->price;
            $product->description = $request->description;
            $product->quantity = $request->quantity;
            $image = $request->file;
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->file->move('productimage',$imagename);
            $imagename = join(array("/productimage/",$imagename));
            $product->image = $imagename;
            $product->save();

        return redirect()->route('products');
        }else{
            return redirect()->route('welcome');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        if(Gate::allows('admin-only',auth()->user())){
            return view ('dashboard.products.show', compact('product'));
        }else{
            return redirect()->route('welcome');
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        if(Gate::allows('admin-only',auth()->user())){

            if(Gate::allows('is-moderator',auth()->user())){
                $categories = Category::all()->sortBy('name');
                return view ('dashboard.products.update', compact('categories', 'product'));
            }else{
                return redirect()->route('products');
            }

        }else{
            return redirect()->route('welcome');
        }
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Gate::allows('admin-only',auth()->user())){

            if(Gate::allows('is-moderator',auth()->user())){
                $data = Product::find($id);
                $data->category_id = $request->category_id;
                $data->name = $request->name;
                $data->price = $request->price;
                $data->description = $request->description;
                $data->quantity = $request->quantity;
                $image = $request->file;
                $imagename = time().'.'.$image->getClientOriginalExtension();
                $request->file->move('productimage',$imagename);
                $imagename = join(array("/productimage/",$imagename));
                $data->image = $imagename;
                $data->save();
                return redirect()->route('products');
            }else{
                return redirect()->route('products');
            }
            
        }else{
            return redirect()->route('welcome');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if(Gate::allows('admin-only',auth()->user())){

            if(Gate::allows('is-moderator',auth()->user())){
                $product->delete();
                return redirect()->route('products');
            }else{
                return redirect()->route('products');
            }

        }else{
            return redirect()->route('welcome');
        }
    }

    public function search(){
        $search_text = $_GET['query'];
        $products = Product::where('name','LIKE','%'.$search_text.'%')->get();
        $user = Auth::user();
       
        if($user){

        if (is_null($user->email_verified_at)){
            $verification=0;
        }else{
            $verification = $user->email_verified_at;
            
        }
        $cart_count = cart::where('user_id',$user->id)->count();
        return view ('search', compact('verification', 'products','cart_count'));            
        }
    
    }

}
