<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class PhotoController extends Controller
{
    public function delete(string $id)
    {

        $photo = Photo::findorFail($id);

        //Deleting File
        File::delete(public_path($photo->src));

        //Deleting Data
        $photo->forceDelete();

        Alert::success('عملیات موفق','عکس حذف شد.');
        return redirect()->back();

    }
}
