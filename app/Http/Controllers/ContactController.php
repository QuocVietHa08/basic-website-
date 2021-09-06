<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Message;
use PDO;

class ContactController extends Controller
{
    public function submit(ContactRequest $request){
        $message = new Message();
        $message->name = $request->input('name');
        $message->email= $request->input('email');
        $message->tel= $request->input('tel');
        $message->message= $request->input('message');
        $message->save();
        
        return redirect()->route('home')->with('success', 'Message send successful!');;
    }
    public function getMessages(){
        $message = Message::all();
        return view('message',['message' => $message]);
    }
}
