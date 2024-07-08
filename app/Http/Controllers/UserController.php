<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BecomeAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class UserController extends Controller
{
    public function register()
    {
        return view("auth.register");
    }
    
    
    public function login()
    {
        return view("auth.login");
    }
    
    public function adminrequest(){
        return view("mail.admin-request-form");
    }
    public function submitadminrequest(Request $request){
        $name=$request->name;
        $email=$request->email;
        $description=$request->description;
        $content =compact("name","email","description");
        Mail::to("teamprometheus@gmail.com")->send(new Becomeadmin(Auth::user(), $content));
        return redirect(route("home"))->with("message","La tua candidatura è stata ricevuta");
    }

    public function acceptAdminRequest(User $user){
        Artisan::call('app:make-admin', ['email' => $user->email]);
        return redirect()->back()->with('message', 'Richiesta approvata.');
    }

    public function rejectAdminRequest(){
        return redirect()->back()->with('message', 'Richiesta rigettata.');
    }
}
