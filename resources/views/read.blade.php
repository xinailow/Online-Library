@extends('layouts.app')

@section('content')
    <h2 style="margin-left: 220px;">{{$category[0]}}</h2>
    @foreach ($files as $detail)
        <div class="container">   
            <div class="col-sm-12">     
                <div class="row" style="margin-bottom:20px;">
                    <div class="col-sm-2" style="margin-top: 20px;">
                        <img src="{{ asset('img') }}/{{$detail->image}}" alt="Book Image" style="height: 100%; width: 100%; display: block;" alt="">	                    
                    </div>
                    <div class="col-sm-10"> <br><br>  
                        <div class="caption">
                            <h3 id="thumbnail-label">{{$detail->filename}}</h3><br>
                            <p>{{$detail->description}}<br/><br/></p>
                            <p><a class="btn btn-default" href="./../detail/{{$detail->id}}"><b>Read More</b></a></p>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    @endforeach
@endsection