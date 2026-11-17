<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Photo;
use Illuminate\Http\Request;

class BannerControlller extends Controller
{
    public function show(string $id)
    {
        $banner = Banner::findorFail($id);
        $title = 'حذف عکس!';
        $text = "آیا از حذف این عکس اطمینان دارید؟";
        confirmDelete($title, $text);
        return view('admin.banner.photo',compact('banner'));
    }

    public function storePhoto(Request $request)
    {

        if($request->hasFile('banner_photo')){

            //Photo Validation
            $request -> validate([
                'banner_photo'=>['mimes:jpg,jpeg,png','max:1024']
            ]);

            $id = $request->banner_id;
            $banner = Banner::findOrFail($id);

            //File Name
            $fileName = time().'_'.$request->banner_photo->getClientOriginalName();
            $suffix_photo = pathinfo($_FILES['banner_photo']['name'], PATHINFO_EXTENSION);

            ////Storing File
            $filePath = $request->banner_photo->storeAs('banners',$fileName,'public');
            
            //Storing Data
            $photo = new Photo();
            $photo->name = $fileName;
            $photo->src = 'storage/'.$filePath;
            $photo->suffix = $suffix_photo;
            $photo->save();

            //Banner Photo
            $photo->banner()->attach($banner);

            return response()->json([
                'success' => true,
                'icon' => 'success',
                'message' => 'عکس ذخیره شد.',
            ]);
            
        }
    }
}
