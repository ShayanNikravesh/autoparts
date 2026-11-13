<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTitleRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $parent_categories = Category::whereNull('parent_id')->get();
        $title = 'حذف دسته!';
        $text = "آیا از حذف این دسته اطمینان دارید؟";
        confirmDelete($title, $text);
        return view('admin.category.index',compact('categories','parent_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $parent_categories = Category::wherenull('parent_id')->get();
        return view('admin.category.create',compact('parent_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTitleRequest $request)
    {
        Alert::error('عملیات ناموفق');

        $category = new Category();
        $category->title = $request->title;
        $category->english_title = $request->english_title;
        $category->parent_id = $request->parent_id;
        $category->save();
        
        Alert::success('عملیات موفق', 'دسته ثبت شد.');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        $parent_categories = Category::wherenull('parent_id')->get();
        return view('admin.category.edit',compact('category','parent_categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreTitleRequest $request, string $id)
    {
        Alert::error('عملیات ناموفق');

        $category = Category::findOrFail($id);
        $category->title = $request->title;
        $category->english_title = $request->english_title;
        $category->parent_id = $request->parent_id;
        $category->save();

        Alert::success('عملیات موفق', 'دسته ویرایش شد.');

        return redirect()->back(); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $child = Category::where('parent_id',$id)->first();

        if(empty($child))
        {

            $category = Category::findOrFail($id);

            $product = $category->products()->first();
            
            if(empty($product)){
                
                $category->forceDelete();

                Alert::success('عملیات موفق','دسته حذف شد.');
                return redirect()->back();

            }else
            {
                Alert::warning('اخطار','در این دسته محصول ثبت شده است.');
                return redirect()->back();
            }
        }

        Alert::warning('اخطار','دسته دارای زیرمجموعه است.');
        return redirect()->back();
    }

    public function ChangeStatus(string $id)
    {
        $category = Category::findOrFail($id);

        $status = $category->status;

        $status = ChangeStatus($status);

        $category->status = $status;
        $category->save();

        return response()->json([
            'success' => true,
            'message' => 'وضعیت تغییر کرد.',
        ]);
    }
}
