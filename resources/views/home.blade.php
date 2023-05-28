@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header text-center">{{ __('Bảng điều khiển') }}</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bạn đã đăng nhập thành công!') }}
                </div>
                <div class="list-group m-2">
                    <a href="{{URL::to('list-product')}}" class="list-group-item list-group-item-action">Danh Sách Sản Phẩm</a>
                    <a href="{{URL::to('add-product')}}" class="list-group-item list-group-item-action list-group-item-primary">Thêm Sản Phẩm</a>
                    <a href="{{URL::To('update-product')}}" class="list-group-item list-group-item-action list-group-item-secondary">Cập Nhật Sản Phẩm</a>
                    <a href="{{URL::To('detail-product')}}" class="list-group-item list-group-item-action list-group-item-success">Chi Tiết Sản Phẩm</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
