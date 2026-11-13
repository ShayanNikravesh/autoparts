<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTitleRequest;
use App\Models\Article;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        $title = 'حذف مقاله!';
        $text = "آیا از حذف این مقاله اطمینان دارید؟";
        confirmDelete($title, $text);
        return view('admin.article.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTitleRequest $request)
    {
        Alert::error('عملیات ناموفق');

        $request->validate([
            'first_name' => ['required','string'],
            'last_name' => ['required','string'],
            'article' => ['required','string'],
        ]);

        $article = new Article();
        $article->first_name = $request->first_name;
        $article->last_name = $request->last_name;
        $article->title = $request->title;
        $article->english_title = $request->english_title;
        $article->article = $request->article;
        $article->save();

        Alert::success('عملیات موفق', 'مقاله ثبت شد.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Article::with('photo')->findOrFail($id);
        $title = 'حذف عکس!';
        $text = "آیا از حذف این عکس اطمینان دارید؟";
        confirmDelete($title, $text);
        return view('admin.article.photo',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::findOrFail($id);
        return view('admin.article.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreTitleRequest $request, string $id)
    {
        Alert::error('عملیات ناموفق');

        $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'article' => ['required'],
        ]);

        $article = Article::findOrFail($id);
        $article->first_name = $request->first_name;
        $article->last_name = $request->last_name;
        $article->title = $request->title;
        $article->english_title = $request->english_title;
        $article->article = $request->article;
        $article->save();

        Alert::success('عملیات موفق', 'مقاله ویرایش شد.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $article = Article::findOrFail($id);

        //Article Photo
        $photo = $article->photo()->first();

        if($photo){
            
            //Delete File
            File::delete(public_path($photo->src));

            //Delete Intermediate 
            $photo->article()->detach($id);
            
            //Delete Data
            $photo->forceDelete();
        }

        $article->forceDelete();

        Alert::success('عملیات موفق', 'مقاله حذف شد.');
        return redirect()->back();
    }

    //Storing Photo
    public function storePhoto(Request $request)
    {

        if($request->hasFile('article_photo')){

            //Photo Validation
            $request -> validate([
                'article_photo'=>['mimes:jpg,jpeg,png','max:1024']
            ]);

            //ID
            $id = $request->article_id;

            //Get Old Photo
            $article = Article::findOrFail($id);
            $old_photo = $article->photo()->first();

            if($old_photo){
                
                //Delete File
                File::delete(public_path($old_photo->src));

                //Delete Intermediate 
                $old_photo->article()->detach($id);
                
                //Delete Data
                $old_photo->forceDelete();
            }

            //File name
            $fileName = time().'_'.$request->article_photo->getClientOriginalName();
            $suffix_photo = pathinfo($_FILES['article_photo']['name'], PATHINFO_EXTENSION);

            //Storing File
            $filePath = $request->article_photo->storeAs('articles',$fileName,'public');

            //Storing Data
            $photo = new Photo();
            $photo->name = $fileName;
            $photo->src = 'storage/'.$filePath;
            $photo->suffix = $suffix_photo;
            $photo->save();

            //Article Photo
            $photo->article()->attach($article);

            return response()->json([
                'success' => true,
                'icon' => 'success',
                'message' => 'عکس ذخیره شد.',
            ]);
            
        }
    }

    //Change Status
    public function ChangeStatus(string $id)
    {
        $article = Article::findOrFail($id);

        $status = $article->status;
        
        $status = ChangeStatus($status);

        $article->status = $status;
        $article->save();

        return response()->json([
            'success' => true,
            'message' => 'وضعیت تغییر کرد.',
        ]);
        
    }
}
