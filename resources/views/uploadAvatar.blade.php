@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Upload Image</div><br>
                <form action="{{route('upload.image')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="file" name="avatar" class="form-control"><br>
                    <button type="submit" class="btn btn-success btn-lg btn-block">Upload Image</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 