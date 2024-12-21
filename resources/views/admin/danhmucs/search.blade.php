@extends('admin_layout')

@section('admin_content')

<h1 class="h3 mb-3"><strong>Danh sách danh mục</strong></h1>

<div class="">
  @if(session()->has('success'))
      <div class="alert alert-success mb-3">
          {{ session('success') }}
      </div>
  @endif
</div>

<a class="btn btn-primary" href="{{ route('danhmucs.create') }}">Thêm danh mục</a>

<!-- Tìm kiếm danh mục -->
<form action="{{ route('danhmucs.search') }}" method="GET" class="d-flex align-items-center mt-3">
    <input type="text" value="{{ $search ?? '' }}" placeholder="Nhập từ khóa tìm kiếm..." name="search" class="form-control" style="width: auto;" required>
    <button class="btn btn-primary ml-2" type="submit">Tìm kiếm</button>
</form>

<!-- Hiển thị các danh mục tìm được -->
@if($Danhmucs->isEmpty())
    <p class="text-center mt-3">Không tìm thấy danh mục nào phù hợp với từ khóa "{{ $search }}"</p>
@else
    <table class="table table-hover my-0">
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
                    <td>
                        <a href="{{ route('danhmucs.edit', ['danhmuc' => $danhmuc->id_danhmuc]) }}" class="btn btn-warning">Edit</a>
                        <form method="POST" action="{{ route('danhmucs.destroy', ['danhmuc' => $danhmuc->id_danhmuc]) }}" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Phân trang -->
    <ul class="pagination">
        <li class="page-item @if($Danhmucs->currentPage() === 1) disabled @endif">
            <a class="page-link" href="{{ $Danhmucs->previousPageUrl() }}">Previous</a>
        </li>
        @for ($i = 1; $i <= $Danhmucs->lastPage(); $i++)
            <li class="page-item @if($Danhmucs->currentPage() === $i) active @endif">
                <a class="page-link" href="{{ $Danhmucs->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        <li class="page-item @if($Danhmucs->currentPage() === $Danhmucs->lastPage()) disabled @endif">
            <a class="page-link" href="{{ $Danhmucs->nextPageUrl() }}">Next</a>
        </li>
    </ul>
@endif

@endsection
