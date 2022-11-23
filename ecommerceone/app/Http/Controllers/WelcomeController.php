<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Auth;

class WelcomeController extends Controller
{
    
    public function index()
    {        
        

        $read1 = Product::take(4)->orderBy('id', 'desc')->get();
        $read2 = Product::take(4)->orderBy('id')->get();
      
        $user = Auth::user();
       
        if($user){

            if (is_null($user->email_verified_at)){
                $verification=0;
            }else{
                $verification = $user->email_verified_at;
                
            }
            $cart_count = cart::where('user_id',$user->id)->count();
            // $cart_count = (string) $cart_count;
            return view('welcome', compact(['verification','read1','read2','cart_count']));
            
            }

            
        return view('welcome',compact(['read1','read2']));
    }
    
    public function private()
    {
        if(Gate::allows('admin-only',auth()->user())){
            return view('dashboard.private');
        }else{
            return redirect()->route('welcome');;
        }
        
    }

    public function addcart(Request $request , $id){

        if(Auth::id()){
            $user = Auth::user();
            $product = Product::find($id);

            $cart = new cart();
            $cart->user_id = $user->id;
            $cart->product_id = $product->id;
            $cart->product_title = $product->name;
            $cart->price= $product->price;
            $cart->quatity = $request->quantity;
            $cart->save();

            return redirect()->back();
        }else{
            return redirect('login');
        }
    }

    public function showcart(){
        
        $user = Auth::user();
       
        if($user){

            if (is_null($user->email_verified_at)){
                $verification=0;
            }else{
                $verification = $user->email_verified_at;
                
            }
            $cart_count = cart::where('user_id',$user->id)->count();
            $carts = cart::where('user_id',$user->id)->get();

            return view('user.showcart', compact(['verification','cart_count','carts']));
            
            }

       
    }

    public function showprofile(User $user){
        if(Auth::user()){
            if (is_null($user->email_verified_at)){
                $verification=0;
            }else{
                $verification = $user->email_verified_at;
                
            }
            $cart_count = cart::where('user_id',$user->id)->count();
            return view ('showprofile', compact(['verification','user','cart_count']));
        }
        $read1 = Product::take(4)->orderBy('id', 'desc')->get();
        $read2 = Product::take(4)->orderBy('id')->get();
      
        return view('welcome',compact(['read1','read2']));
    }
}
