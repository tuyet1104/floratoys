@extends('admin_layout')
@section('admin_content')

<h1 class="h3 mb-3"><strong>Danh sách danh mục</strong></h1>

<div class="">
  @if(session()->has('success'))
      <div class="alert alert-success mb-3">
          {{session('success')}}
      </div>
  @endif
</div>
<div>
<a class="btn btn-primary" href="{{route('danhmuc.create')}}">Thêm danh mục</a>
<form action="{{ route('danhmucs.search') }}" method="GET" class="d-flex align-items-center mt-3">
    <input type="text" value="{{ $search ?? '' }}" placeholder="Nhập từ khóa tìm kiếm..." name="search" class="form-control" style="width: auto;" required>
    <button class="btn btn-primary ml-2" type="submit">Tìm kiếm</button>
</form>
</div>
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Tên danh mục</th>
        <th colspan="2">Actions</th>
      </tr>
    </thead>

    <tbody>
    @foreach($Danhmucs as $danhmuc)
    <tr>
        <td>{{ $danhmuc->id_danhmuc }}</td>
        <td>{{ $danhmuc->ten_danhmuc }}</td>
        <td colspan="2">
            <!-- Chỉ truyền ID vào route, không phải đối tượng -->
            <a href="{{ route('danhmuc.edit', ['danhmuc' => $danhmuc->id_danhmuc]) }}" class="btn btn-warning mb-2">Edit</a>
            
            <form method="post" action="{{ route('danhmuc.destroy', ['danhmuc' => $danhmuc->id_danhmuc]) }}">
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-danger" value="Delete"
                onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?')">
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
  </table>
 
@endsection