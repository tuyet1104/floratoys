@extends('admin_layout')

@section('admin_content')
    <h1 class="h3 mb-3"><strong>Danh sách đơn hàng</strong></h1>

    <div>
        @if(session()->has('success'))
            <div class="alert alert-success mb-3">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <div class="mb-4">
        <!-- Form tìm kiếm -->
        <form action="{{ route('orders.search') }}" method="GET" class="d-flex align-items-center">
            <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Nhập để tìm kiếm..." class="form-control" style="width: auto;" required>
            <button class="btn btn-primary ml-2" type="submit">Tìm kiếm</button>
        </form>
    </div>

    <!-- Hiển thị các đơn hàng tìm được -->
    @if($orders->isEmpty())
        <p class="text-center mt-3">Không tìm thấy đơn hàng nào phù hợp với từ khóa "{{ $search }}"</p>
    @else
        <table class="table table-hover my-0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Phương thức TT</th>
                    <th>Ngày đặt</th>
                    <th>Ngày giao</th>
                    <th>Trạng thái</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id_dathang }}</td>
                        <td class="d-none d-xl-table-cell">{{ $order->phuongthucthanhtoan }}</td>
                        <td class="d-none d-xl-table-cell">{{ $order->ngaydathang }}</td>
                        <td class="d-none d-xl-table-cell">{{ $order->ngaygiaohang ? date('d/m/Y', strtotime($order->ngaygiaohang)) : 'Chưa giao' }}</td>
                        <td>
                            <span class="badge bg-{{ $order->trangthai == 'đang xử lý' ? 'primary' : ($order->trangthai == 'chờ lấy hàng' ? 'warning' : ($order->trangthai == 'đang giao hàng' || $order->trangthai == 'giao thành công' ? 'success' : 'danger')) }}">
                                {{ $order->trangthai }}
                            </span>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <a href="{{ route('orders.edit', ['orders' => $order->id_dathang]) }}" class="btn btn-primary">Edit</a>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <!-- Phân trang -->
    <ul class="pagination">
        <li class="page-item @if($orders->currentPage() === 1) disabled @endif">
            <a class="page-link" href="{{ $orders->previousPageUrl() }}">Previous</a>
        </li>
        @for ($i = 1; $i <= $orders->lastPage(); $i++)
            <li class="page-item @if($orders->currentPage() === $i) active @endif">
<a class="page-link" href="{{ $orders->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        <li class="page-item @if($orders->currentPage() === $orders->lastPage()) disabled @endif">
            <a class="page-link" href="{{ $orders->nextPageUrl() }}">Next</a>
        </li>
    </ul>
@endsection