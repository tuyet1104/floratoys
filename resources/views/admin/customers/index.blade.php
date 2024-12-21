@extends('admin_layout')
@section('admin_content')


<h1 class="h3 mb-3"><strong>Danh sách khách hàng</strong></h1>

<div class="">
  @if(session()->has('success'))
      <div class="alert alert-success mb-3">
          {{session('success')}}
      </div>
  @endif
</div>
<div class="d-flex justify-content-between mb-3">
    <form action="{{ route('customers.search') }}" method="GET" class="d-flex">
        <input type="text" value="{{ $search ?? '' }}" placeholder="Nhập để tìm kiếm..." name="search" 
               class="form-control" style="width: unset;" required>
        <button class="btn btn-primary" type="submit">
            <i class="align-middle" data-feather="search"></i> 
        </button>
    </form>
</div>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên khách hàng</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th>Chức vụ<th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($Customers as $customer)
    <tr>
        <td>{{ $customer->id_kh }}</td>
        <td>{{ $customer->hoten }}</td>
        <td>{{ $customer->email }}</td>
        <td>{{ $customer->sdt }}</td>
        <td>{{ $customer->diachi }}</td>
        <td>{{ $customer -> id_phanquyen }}</td>
        <td colspan="2">
            <!-- Chỉ truyền ID vào route, không phải đối tượng -->
        <a href="{{ route('customer.edit', ['customer' => $customer->id_kh]) }}" class="btn btn-warning mb-2">Edit</a>
        <form method="POST" action="{{ route('customer.destroy', ['id_kh' => $customer->id_kh]) }}" >
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa khách hàng này không?')">Delete</button>
        </form>
        </td>
    </tr>
@endforeach
    </tbody>
</table>
<!--phântrang-->
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <!-- First Page Link -->
        <li class="page-item @if($Customers->currentPage() === 1) disabled @endif">
            <a class="page-link" href="{{ $Customers->url(1) }}{{ request()->get('search') ? '&search=' . request()->get('search') : '' }}">First</a>
        </li>

        <!-- Previous Page Link -->
        <li class="page-item @if($Customers->currentPage() === 1) disabled @endif">
            <a class="page-link" href="{{ $Customers->previousPageUrl() }}{{ request()->get('search') ? '&search=' . request()->get('search') : '' }}">Previous</a>
        </li>

        <!-- Page Number Links -->
        @for ($i = 1; $i <= $Customers->lastPage(); $i++)
            <li class="page-item @if($Customers->currentPage() === $i) active @endif">
                <a class="page-link" href="{{ $Customers->url($i) }}{{ request()->get('search') ? '&search=' . request()->get('search') : '' }}">{{ $i }}</a>
            </li>
        @endfor

        <!-- Next Page Link -->
        <li class="page-item @if($Customers->currentPage() === $Customers->lastPage()) disabled @endif">
            <a class="page-link" href="{{ $Customers->nextPageUrl() }}{{ request()->get('search') ? '&search=' . request()->get('search') : '' }}">Next</a>
        </li>

        <!-- Last Page Link -->
        <li class="page-item @if($Customers->currentPage() === $Customers->lastPage()) disabled @endif">
            <a class="page-link" href="{{ $Customers->url($Customers->lastPage()) }}{{ request()->get('search') ? '&search=' . request()->get('search') : '' }}">Last</a>
        </li>
    </ul>
</nav>
@endsection