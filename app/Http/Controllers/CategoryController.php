<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $page_title = 'All Categories';
        $page_sub_title = 'Categories';
        $categoriesList = \DB::table('categories')->where('parent_id',0)
                            ->get()
                            ->transform(function($item,$key){
                                $item->sub_cat = \DB::table('categories')
                                        ->where('parent_id',$item->id)
                                        ->get();
                                return $item;

                            });
        return view('admin.pages.categories.home', [
            'categoriesList' => $categoriesList,
            'page_title' => $page_title,
            'page_sub_title' => $page_sub_title,
        ]);
    }

    public function create(Category $Category) 
    {
        $page_title     = 'Create Categories';
        $page_sub_title = 'Categories'; 

        $categoriesList = Category::where('parent_id',0)->get();
        
        return view('admin.pages.categories.create', [
            'page_title' => $page_title,
            'page_sub_title' => $page_sub_title,
            'categoriesList' => $categoriesList,
        ]);
    }    

    public function store(Request $request) 
    {   
        
        $Category = new Category;
        $Category->name = $request->catName; 
        if($request->parentCat == null){
            $Category->parent_id = 0;
        }
        else{
            $Category->parent_id = $request->parentCat;
        }
        $Category->save();   

        return Redirect::to(route('categories'))
                            ->with('flash_alert_notice', 'New Category successfully created!');
    }

    public function edit($id, Request $request)
    {
        $page_title = 'Edit Categories';
        $page_sub_title = 'Categories';
        $categoriesList = Category::where('id','!=',$id)->where('parent_id',0)->get();
        $selectedCategories = Category::where('id',$id)->first();
        return view('admin.pages.categories.edit', [
            'categoriesList' => $categoriesList,
            'page_title' => $page_title,
            'page_sub_title' => $page_sub_title,
            'selectedCategories' => $selectedCategories,
        ]);
    }
    public function update($id, Request $request)
    {
        $selectedCategories = Category::find($id);
        $selectedCategories->name = $request->catName; 
        if($request->parentCat == null){
            $selectedCategories->parent_id = 0;
        }
        else{
            $selectedCategories->parent_id = $request->parentCat;
        }
        $selectedCategories->save(); 

        return Redirect::to(route('categories'))
                        ->with('flash_alert_notice', 'Category successfully updated.');

    }
    public function delete($id)
    {
        Category::where('id',$id)->delete();
        return Redirect::to(route('categories'))
                        ->with('flash_alert_notice', 'Category successfully deleted.');
    }
}
