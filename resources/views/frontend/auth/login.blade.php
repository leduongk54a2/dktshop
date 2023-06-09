@extends('layouts.layout')
@section('content')
<div class="template-customer">
    <h1>Đăng nhập tài khoản</h1>
    <p>Nếu bạn có tài khoản xin vui lòng đăng nhập</p>
    <div class="row" style="margin-top:50px;">
        <div class="col-md-6">
            <div class="wrapper-form">
                 @if(isset($errMsg))
                     <p style="color: red">{{$errMsg}}</p>
                @endif
                <form method='post' action="">

                    @csrf
                    <p class="title"><span>Đăng nhập tài khoản</span></p>
                    <div class="form-group">
                        <label>HoTen<b id="req">*</b></label>
                        <input type="text" class="input-control" name="name" required="">
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu:<b id="req">*</b></label>
                        <input type="password" class="input-control" name="password" required="">
                    </div>
                    <input type="submit" class="button" value="Đăng nhập">
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="wrapper-form">
                <p class="title"><span>Tạo tài khoản mới</span></p>
                <p>Đăng ký tài khoản để mua hàng nhanh hơn. Theo dõi đơn đặt hàng, vận chuyển. Cập nhật các sự kiện và chương trình giảm giá của chúng tôi.</p>
                <a href="{{route('register')}}" class="button">Đăng Ky</a> </div>
        </div>
    </div>
</div>
@endsection
