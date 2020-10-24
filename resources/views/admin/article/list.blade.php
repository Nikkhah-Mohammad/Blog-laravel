@extends('admin.dashboard')
@section('adminContent')
<a href="{{ url('/admin/article/new') }}" class="btn btn-outline-success d-block w_25"><li class="yt"> مقاله جدید + </li></a>
<table class="table  table-hover table-striped text-right">

<thead>
<tr>
<td style="width: 10px;">کاربر</td>
    <td>عنوان</td>
    <td style="width:10px">ویرایش</td>
    <td style="width:10px">حذف</td>
</tr>
</thead>
<tbody>
@if($list && sizeof($list) > 0)
    @foreach($list as $k => $v)
     <tr id="art_{{ $v->id }}">
      <td> {{ $k+1 }}</td>
      <td> {{ $v->title }}</td>
      <td>
        <a href="{{url('/admin/article/edit').'/'.$v->id }} " class="btn btn-primary"><li class="yt"> ویرایش </li></a>
      </td>
      <td>
        <a href="{{url('/admin/article/').'?action=delete&pid='.$v->id }}" class="btn btn-danger"><li class="yt"> حذف </li></a>
      </td>
     </tr>

    @endforeach

@else
  <p class="alert alert-warning p-2 text-center">
  مقاله ای وجود ندارد.
  </p>
@endif
</tbody>
</table>
@endsection