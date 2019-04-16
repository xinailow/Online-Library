@extends('layouts.app')

@section('content')
@isset($logs)    
    @foreach($logs as $log)
        <div class="container">
            <div class="row" style="margin-bottom:20px;">
                <div class="col-sm-3 col-md-2" style="">
                    <img src="{{ asset('img') }}/{{$log->image}}" style="height: auto; width: 100%; display: block;" alt="">	                    
                </div>
                <div class="col-sm-9 col-md-10">
                    <div class="caption"><br>
                        <h3 id="thumbnail-label">{{$log->filename}}<a class="anchorjs-link" href="#thumbnail-label"><span class="anchorjs-icon"></span></a></h3> <br>
                        <p>{{$log->description}}</p>
                        <a href="./log/book/{{$log->id}}"><button type="button" name="submit" class="btn btn-outline-secondary" value="">Read</button></a>
                        <a href="/detail/{{$log->id}}" ><button type="submit" name="submit" class="btn btn-outline-secondary" value="">Return</button></a>				
                    </div>
                </div>
            </div>    	     
        </div>
    @endforeach
@endisset
@endsection