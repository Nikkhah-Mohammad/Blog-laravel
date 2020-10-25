 @extends('admin.dashboard')
@section('adminContent')
<div class="container">
 <div class="row">
     <div  class="col-sm-12">
     <p class="alert alert-info text-right font14">
       @if($edite)
       ویرایش
          @else
           ایجاد
          @endif 
        مقاله 

     </p>
     </div> 
 </div>
</div>


<div class="container">
 <div class="row">
     <div  class="col-sm-12">
     <form action="{{url('/admin/article/create')}}" method="psot" enctype="multipart/form-data">
      @if($edite)

        <input type="hidden" name="pid" value="{{ $edite->id }}">
        <input type="hidden" name="action" value="update">
      @endif

      @csrf

     <p class="text-right font-14 text-secondary d-block">عنوان مقاله :</p>
     <input type="text"
     @if($edite && $edite->title) value="{{$edite->title }}"@endif
     name="title" id="" class="form-control">


     <p class="text-right font-14 text-secondary d-block">محتوا مقاله :</p>
     <textarea name="content" class="form-control "rows=8>
     @if($edite && $edite->content) value="<?php echo $edite->content ?>" @endif
     </textarea>


     
     <p class="text-right font-14 text-secondary d-block">تصویر مقاله :</p>

     @if($edite && $edite->avatar)
     <img src="{{ $edite->avatar }}" width=150px alt="">
     @endif
     <input type="text" name="avatar" 
         @if($edite && $edite->avatar) value="<?php echo $edite->avatar ?>" @endif
          class="form-control" id="">
     <button class="btn btn-success w-25 d-block m-2 " type="submit">ذخیره </button>

     </form>
     </div> 
 </div>
</div>

@endsection