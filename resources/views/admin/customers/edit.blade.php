@extends('admin_layout')
@section('admin_content')
<h1 class="h3 mb-3"><strong>Sửa khách hàng</strong></h1>

    <div class="err">
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <form method="POST" action="{{ route('customer.update', ['customer' => $customer->id_kh]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">id phân quyền:</label>
            <input type="text" class="form-control" id="name" name="id_phanquyen" value="{{$customer->id_phanquyen}}" required>
        </div>

        <div>
            <input type="submit" class="btn btn-primary" value="Update">
            &nbsp;<a class="btn btn-secondary" href="{{URL::to('/admin/customer')}}">Hủy</a>
        </div>
    </form>

@endsection