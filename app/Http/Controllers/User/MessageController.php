<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMessageRequest;
use App\Models\Message;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MessageController extends Controller
{
    public function index()
    {
        return view('user.contact');
    }

    public function store(StoreMessageRequest $request)
    {
        $message = new Message();
        $message->first_name = $request->first_name;
        $message->last_name = $request->last_name;
        $message->mobile = $request->mobile;
        $message->message = $request->message;
        $message->save();

        Alert::success('عملیات موفق', 'پیام ثبت شد.');

        return redirect()->back();
    }
}
