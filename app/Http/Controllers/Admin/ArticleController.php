<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->get('action') =="delete"){
            $del = Article::where(['id'=>$request->get('pid')])->update(['delete'=>1]);
        }


        $list = Article::where(['delete'=>0])->get();
        
        return view('admin.article.list',['list'=>$list]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)

    {
        if($request->post('action') && $request->get('action') =="update"){
            $save=Article::where(['id'=>$request->get('pid')])->first();
        }else{
            $save=new Article();
        }

        $save->title = $request->get('title');
        $save->content = $request->get('content');
        $save->avatar = $request->get('avatar');
        $save->save();

        return redirect()->back()->with('alert',"ذخیره شد");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edite = Article::where(['id'=>$id])->first();
        return View('admin.article.edit',['edite'=>$edite]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
