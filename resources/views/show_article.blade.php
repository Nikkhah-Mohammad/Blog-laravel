@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="row">
            <div class="m-1 d-block w-100">
               <div class="shadow bg-white text-right">
               <div class="col-sm-12 p-0">
                   <h4 class="h1 font-20 d-block alert alert-secondary w-100 p-3"> 
                      {{ $article->title }}
                   </h4>
               </div>  
               <div class="col-sm-12 p-0">
             
                <img src=" {{ $article->avatar }}" class="w-75 d-block m-auth">
               </div>
               <div class="col-sm-12">
                    <div id="content">{{ $article->content}}</div>
               </div>
               <div class="col-sm-12 margin_20">
                   تعداد بازدید:
                   <span> {{$article->view }} </span>
               </div>
            </div>
       </div>
    </div>
</div>


@endsection