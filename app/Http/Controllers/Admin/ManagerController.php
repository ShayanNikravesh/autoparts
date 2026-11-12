<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreManagerRequest;
use App\Http\Requests\UpdateManagerRequest;
use App\Models\Manager;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $managers = Manager::all();
        $title = 'حذف مدیر!';
        $text = "آیا از حذف این مدیر اطمینان دارید؟";
        confirmDelete($title, $text);
        return view('admin.manager.index',compact('managers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.manager.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreManagerRequest $request)
    {
         
        Alert::error('عملیات ناموفق');

        $password = Hash::make($request->password);
        $manager = new Manager();
        $manager->first_name = $request->first_name;
        $manager->last_name = $request->last_name;
        $manager->email = $request->email;
        $manager->mobile = $request->mobile;
        $manager->password = $password;
        $manager->level = $request->level;

        $manager->save();

        Alert::success('عملیات موفق.', 'مدیر جدید ثبت شد.');

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
        //$id = Auth::guard('admin')->user()->id;
        $manager = Manager::findOrFail($id);
        return view('admin.manager.edit',compact('manager'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateManagerRequest $request, string $id)
    {
        
        Alert::error('عملیات ناموفق');
        
        //$id = Auth::guard('admin')->user()->id;
        $manager = Manager::findOrfail($id);
        
        $request -> validate([
            'email'=>['exclude_if:email,'.$manager->email,'email','string','required','max:255','unique:managers,email'],
        ]);


        //saving photo
        if($request->hasFile('profile_photo')){

            //Photo Validation
            $request -> validate([
                'profile_photo'=>['mimes:jpg,jpeg,png','max:1024']
            ]);

            //Old Photo
            $old_photo = $manager->photo()->first();

            if($old_photo){
                
                //Delete File
                File::delete(public_path($old_photo->src));

                //Delete Intermediate 
                $old_photo->manager()->detach($id);
                
                //Delete Data
                $old_photo->forceDelete();
            }

            //File name
            $fileName = time().'_'.$request->profile_photo->getClientOriginalName();
            $suffix_photo = pathinfo($_FILES['profile_photo']['name'], PATHINFO_EXTENSION);

            //Store File
            $filePath = $request->profile_photo->storeAs('managers_photos',$fileName,'public');
            
            //Store Data
            $photo = new Photo();
            $photo->name = $fileName;
            $photo->src = 'storage/'.$filePath;
            $photo->suffix = $suffix_photo;
            $photo->save();

            //Manager Photo
            $photo->manager()->attach($manager);

        }

        $manager->first_name = $request->first_name;
        $manager->last_name = $request->last_name;
        $manager->mobile = $request->mobile;
        $manager->email = $request->email;
        if ($request->filled('password')) {
            $password = Hash::make($request->password);
            $manager->password = $password;
        }
        $manager->save();

        Alert::success('عملیات موفق.', 'اطلاعات ویرایش شد.');

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function ChangeStatus(string $id)
    {
        $manager = Manager::findOrFail($id);

        $status = $manager->status;
        
        switch ($status) {
            case 'active':
                $status = 'inactive';
                break;
            case 'inactive':
                $status = 'suspend';
                break;
            case'suspend':
                $status = 'active';
                break;
            default:
                break;
        }

        $manager->status = $status;
        $manager->save();

        return response()->json([
            'success' => true,
            'message' => 'وضعیت تغییر کرد.',
        ]);
    }

    public function ChangeLevel(string $id)
    {
        $manager = Manager::findOrFail($id);

        $level = $manager->level;

        switch ($level) {
            case 'manager':
                $level = 'operator';
                break;
            case 'operator':
                $level = 'manager';
                break;
            default:
                break;
        }

        $manager->level = $level;
        $manager->save();

        return response()->json([
            'success' => true,
            'message' => 'سطح تغییر کرد.',
        ]);
    }
}
