<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Mail\BecomeAdmin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function review(){
        $articleToReview = Article::where('accepted', null)->first();
        $lastReviewed = Article::orderBy('created_at', 'desc')->where('accepted', true)->orWhere('accepted', false)->first();
        return view('article.review', compact('articleToReview'), compact('lastReviewed'));
    }
    
    public function approve(Article $article){
        $article->setAccepted(true);
        return redirect()->back()->with('message', 'Articolo approvato');
    }
    
    public function reject(Article $article){
        $article->setAccepted(false);
        return redirect()->back()->with('message', 'Articolo rifiutato');
    }
}
    
    
    
    

