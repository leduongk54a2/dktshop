@extends('layouts.admin.layout')
@section('content')
    <div class="container" style="margin-top: 30px;">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Sua Tin</div>
                <form method="post" action="" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="panel-body">
                        <!-- row -->
                        <div class="row">
                            <div class="col-md-3">Tên Tin </div>
                            <div class="col-md-9"><input type="text" value="{{$news->title}}" name="title" required class="form-control"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Mô Tả Tin </div>
                            <div class="col-md-9"><textarea type="text" name="description" rows="5" required class="form-control">{{$news->description}}</textarea></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Nội Dung Tin </div>
                            <div class="col-md-9"><textarea type="text" name="content"  rows="5" required class="form-control">{{$news->content}}</textarea></div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">Ảnh Tin </div>
                            <div class="col-md-9"><input type="file" accept="image/png, image/gif, image/jpeg"  name="img" class=""></div>
                        </div>
                        <!-- row -->
                        <div class="row" style="margin-top:5px;">
                            <div class="col-md-2"></div>
                            <div class="col-md-10">
                                <input type="submit" value="Sua Tin" class="btn btn-primary">
                                <input type="reset" value="Reset" class="btn btn-danger">
                                <a href="{{route('admin.news')}}" class="btn btn-warningr"> Huy </a>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
