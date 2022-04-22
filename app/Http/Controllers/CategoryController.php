<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories_deleted = Category::withoutTrashed()->where('id','')->restore();
        // dd($categories_deleted);
        $categories = Category::all();        
        return view('admin.admin-course-category',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories',
            'description' =>'required|unique:categories'
        ]);
        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;

        if($request->has('view'))            
            $category->view = 1;
        else
            $category->view = 0;

        $category->view_count = 0;
        $category->save();
        return redirect()->back()->with('message','Category Saved successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Category $category)
    {
        $category->delete();
        return redirect()->back()->with('message','Category Deleted Successfully!!');
    }
    
    public function upgrade(Category $category)
    {
        if($category->view == 1)
            $category->view =0;
        else
            $category->view = 1;
        $category->save();
        return redirect()->back()->with('message','Category Upgrade Successfully!!');
    }
}
