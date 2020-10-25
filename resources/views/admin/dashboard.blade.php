@extends('layouts.site')

@section('title')
داشبورد ادمین
@endsection

@section('content')

<div class="container margin_10">
  <div class="row">
   <div class="col-sm-3">
    <div class="m-1 bg-white border border-secondary rounded shadow p-2">
       <ul class="list-unstyled p-0 m-0">
          <li>
             <a class="d-block font-16 p-2 text-secondary text-right text decoration-none" href="{{ url('/admin') }}">
             داشبورد
             </a>
          </li> 

          <li>
             <a class="d-block font-16 p-2 text-secondary text-right text decoration-none" href="{{ url('/admin/article') }}">
             مقالات
             </a>
          </li> 

          <li>
             <a class="d-block font-16 p-2 text-secondary text-right text decoration-none" href="{{ url('/admin/files') }}">
             مدریت فایل
             </a>
          </li> 
       </ul>
   </div>
</div>
<div class="col-sm-9">
   <div class="m-1 bg-white border border-secondary rounded shadow p-2">
     @yield('adminContent')
   </div>

</div>
</div>
</div>

@endsection

