<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Photo;
use App\Models\Product;
use App\Models\ProductPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $title = 'حذف محول!';
        $text = "آیا از حذف این محصول اطمینان دارید؟";
        confirmDelete($title, $text);
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::whereNotNull('parent_id')->get();
        $brands = Brand::all();
        return view('admin.product.create',compact('categories','brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $code = random_int(111111111,999999999);
        $tracking_code = 'BA-'.$code;

        dd($request);
        $product = new Product();
        $product->title = $request->title; 
        $product->english_title = $request->english_title;
        $product->category_id = $request->category;
        $product->brand_id = $request->brand;
        $product->tracking_code = $tracking_code;
        $product->price = $request->price;
        $product->price_discounted = $request->price_discounted;
        $product->status = $request->status;
        $product->stock = $request->stock;
        $product->description = $request->description;
        $product->review = $request->review;
        $product->save();

        Alert::success('عملیات موفق', 'محصول ثبت شد.');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findorFail($id);
        return view('admin.product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findorFail($id);
        return view('admin.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, string $id)
    {
        $product = Product::findorFail($id);

        $product->title = $request->title; 
        $product->english_title = $request->english_title;
        $product->price = $request->price;
        $product->price_discounted = $request->price_discounted;
        $product->stock = $request->stock;
        $product->description = $request->description;
        $product->review = $request->review;
        $product->save();

        Alert::success('عملیات موفق', 'محصول ویرایش شد.');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Photo
        $photo = Photo::findorFail($id);

        //Product 
        $product_id = ProductPhoto::where('photo_id', $photo->id)->pluck('product_id')->firstOrFail();

        //Delete File & Data
        File::delete(public_path($photo->src));
        $photo->forceDelete();
        
        //Product Photos
        $product_photos = ProductPhoto::where('product_id', $product_id)->orderBy('sort')->get();

        //Sort
        foreach ($product_photos as $index => $product_photo) {
            
            $product_photo->sort = $index + 1;
            $product_photo->save();

        }

        Alert::success('عملیات موفق','عکس حذف شد.');
        return redirect()->back();
    }

    public function changeStatus(string $id, string $status)
    {
        $product = Product::findOrFail($id);
        $product->status = $status;
        $product->save();

        return response()->json([
            'success' => true,
            'message' => 'وضعیت تغییر کرد.',
        ]);
    }

    public function showProductPhoto(string $id)
    {
        $product = Product::findorFail($id);
        $title = 'حذف عکس!';
        $text = "آیا از حذف این عکس اطمینان دارید؟";
        confirmDelete($title, $text);
        return view('admin.product.photo',compact('product'));
    }
    
    //Storing Photo
    public function storePhoto(Request $request)
    {
        if($request->hasFile('product_photo')){

            //Photo Validation
            $request -> validate([
                'product_photo'=>['mimes:jpg,jpeg,png','max:1024']
            ]);
            
            //ID
            $id = $request->product_id;

            //Product Photos Count 
            $count = ProductPhoto::where('product_id', $id)->count();

            //Product
            $product = Product::findorFail($id);

            if($count >= 5){
     
                return response()->json([
                    'success' => false,
                    'icon' => 'warning',
                    'message' => 'حداکثر ۵ عکس مجاز است.',
                ]);

            }

            //Sort
            $sort = $count + 1;

            //File name
            $fileName = time().'_'.$request->product_photo->getClientOriginalName();
            $suffix_photo = pathinfo($_FILES['product_photo']['name'], PATHINFO_EXTENSION);

            //Storing File
            $filePath = $request->product_photo->storeAs('products',$fileName,'public');
            
            //Storing Data
            $photo = new Photo();
            $photo->name = $fileName;
            $photo->src = 'storage/'.$filePath;
            $photo->suffix = $suffix_photo;
            $photo->save();

            //Product Photo
            $photo->product()->attach($product,['sort'=>$sort]);

            return response()->json([
                'success' => true,
                'icon' => 'success',
                'message' => 'عکس ذخیره شد.',
            ]);
            
        }
    }
}
