@extends('admin_layout')
@section('admin_content')

<h1 class="h3 mb-3"><strong>Từ khóa đã tìm kiếm: {{ $search ?? 'Tất cả danh mục' }}</strong></h1>

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
            <th colspan="2">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Customers as $customer)  <!-- Lưu ý biến ở đây phải là $customers -->
        <tr>
            <td>{{ $customer->id_kh }}</td>
            <td>{{ $customer->hoten }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->sdt }}</td>
            <td>{{ $customer->diachi }}</td>
            <td>
                <a href="{{ route('customer.edit', ['customer' => $customer]) }}" class="btn btn-warning">Sửa</a>
            </td>
            <td>
            <form method="POST" action="{{ route('customer.destroy', ['customer' => $customer]) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Xóa</button>
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
            <a class="page-link" href="{{ $Customers->url(1) }}{{ request()->has('search') ? '&search=' . request()->get('search') : '' }}">First</a>
        </li>

        <!-- Previous Page Link -->
        <li class="page-item @if($Customers->currentPage() === 1) disabled @endif">
            <a class="page-link" href="{{ $Customers->previousPageUrl() }}{{ request()->has('search') ? '&search=' . request()->get('search') : '' }}">Previous</a>
        </li>

        <!-- Page Number Links -->
        @for ($i = 1; $i <= $Customers->lastPage(); $i++)
            <li class="page-item @if($Customers->currentPage() === $i) active @endif">
                <a class="page-link" href="{{ $Customers->url($i) }}{{ request()->has('search') ? '&search=' . request()->get('search') : '' }}">{{ $i }}</a>
            </li>
        @endfor

        <!-- Next Page Link -->
        <li class="page-item @if($Customers->currentPage() === $Customers->lastPage()) disabled @endif">
            <a class="page-link" href="{{ $Customers->nextPageUrl() }}{{ request()->has('search') ? '&search=' . request()->get('search') : '' }}">Next</a>
        </li>

        <!-- Last Page Link -->
        <li class="page-item @if($Customers->currentPage() === $Customers->lastPage()) disabled @endif">
            <a class="page-link" href="{{ $Customers->url($Customers->lastPage()) }}{{ request()->has('search') ? '&search=' . request()->get('search') : '' }}">Last</a>
        </li>
    </ul>
</nav>
@endsection