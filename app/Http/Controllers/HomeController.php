<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

class HomeController extends Controller
{
   
    public function index()
    {

        $list = Article::where(['delete'=>0])
        ->get(['title','content','id','avatar']);
        return view('welcome',['list'=>$list]);
    }

    public function call(){
        return view('call');
    }

    public function getArticle($id){
          
        if($article =Article::where(['id'=>$id,'delete'=>0])->first()){
            $article->view = $article->view+1;
            $article->save();
            return view('show_article',['article'=>$article]);

        }else{
            abort('404');
        }
    }

    public function about(){
        return view('about');
    }

  
}
