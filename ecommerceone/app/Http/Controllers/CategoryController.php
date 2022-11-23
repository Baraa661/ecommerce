<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Gate::allows('admin-only',auth()->user())){
            $categories = Category::all()->sortByDesc('id');
            return view('dashboard.categories.index',compact("categories"));
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
            return view('dashboard.categories.addcategory');
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
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect()->route('categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        if(Gate::allows('admin-only',auth()->user())){
            return view ('dashboard.categories.show', compact('category'));
        }else{
            return redirect()->route('welcome');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {   
        if(Gate::allows('admin-only',auth()->user())){

            if(Gate::allows('is-moderator',auth()->user())){
                return view ('dashboard.categories.update', compact('category'));
            }else{
                return redirect()->route('categories');
            }

        }else{
            return redirect()->route('welcome');
        }
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(Gate::allows('admin-only',auth()->user())){

            if(Gate::allows('is-moderator',auth()->user())){
                $data = Category::find($id);
                $data->name = $request->name;
                $data->save();
                return redirect()->route('categories');
            }else{
                return redirect()->route('categories');
            }

        }else{
            return redirect()->route('welcome');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if(Gate::allows('admin-only',auth()->user())){

            if(Gate::allows('is-moderator',auth()->user())){
                $category->delete();
                return redirect()->route('categories');
            }else{
                return redirect()->route('categories');
            }

        }else{
            return redirect()->route('welcome');
        }
    }
}
