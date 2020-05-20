<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Sent;
use Mail;
use Session;

class ContactController extends Controller
{
    public function notification(){
        return Contact::where('seen',0)->count();
    }
    public function notification_update(){
        Contact::where('seen', 0)->update(array('seen' => 1));
        return Contact::where('seen',0)->count();
    }

    public function index(Request $request)
    {
        
        
    	$contact = new Contact();

    	$contact->name = $request->name;
    	$contact->email = $request->email;
    	$contact->subject = $request->subject;
    	$contact->body = $request->body;

    	$contact->save();

    	return redirect()->back()->with('msg','Message sent!!');
    }
    public function SingleMessage($id)
    {
    	$contact = Contact::find($id);
    	return view('admin.message.messagesingle',['contact'=>$contact]);
    }
    public function MessageAll()
    {
    	$contacts = Contact::orderBy('id','desc')->get();
    	return view('admin.message.message',['contacts'=>$contacts]);
    }
    public function MessageDelete($id)
    {
    	$contact = Contact::find($id);
    	$contact->delete();

    	return redirect('/message')->with('message','Message deleted successfully');
    }
    public function MessageSend(Request $request)
    {
        $sent = new Sent();

        $sent->name = $request->name;
        $sent->subject = $request->subject;
        $sent->frommail = $request->frommail;
        $sent->editor1 = $request->editor1;
        $sent->save();

        $sentId = $sent->id;
        $sentName = $sent->name;
        $sentReply = $sent->editor1;

        Session::put('sentId',$sentId);
        Session::put('sentName',$sentName);
        Session::put('sentReply',$sentReply);

        $email = $sent['frommail'];
        $messageData = ['email'=>$sent['frommail'],'name'=>$sent['name'],'reply'=>strip_tags($sent['editor1'])];
        //$data = $sent->toArray();
        Mail::send('admin.mail.confirmMail',$messageData, function($message) use ($email){
            $message->to($email);
            $message->subject('Miscellaneous');
        });

        return redirect()->back()->with('msg','Message sent!!');
    }
}
