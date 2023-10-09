<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('contact.index');
    }

    public function confirm(Request $request){

        $request->validate([
            'name_last'=>'required',
            'name_first'=>'required',
            'company'=>'required',
            'email'=>'required|email',
            'tel'=>'required',
        ]);

        $inputs = $request->all();

        return view('contact.confirm',[
            'inputs'=>$inputs,
        ]);
    }

    public function send(Request $request){
        $request->validate([
            'name_last'=>'required',
            'name_first'=>'required',
            'company'=>'required',
            'email'=>'required|email',
            'tel'=>'required',
        ]);

        $action = $request->input('action');
        
        $inputs = $request->except('action');


        if($action !== 'submit'){
            return redirect()
                ->route('contact.index')
                ->withInput($inputs);

        } else {

            $post = new Contact();
            $post->name_last = $request->name_last;
            $post->name_first = $request->name_first;
            $post->company = $request->company;
            $post->email = $request->email;
            $post->tel = $request->tel;
            $post->save();

            return view('contact.thanks');
        }
    }
}
