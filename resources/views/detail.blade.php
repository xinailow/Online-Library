@extends('layouts.app')

@section('content')
    @foreach($detail as $key => $details)
        <div class="container-fluid" style="margin-top: 60px;">
            <div class="row">
                <div class="col-md-8" style="margin: auto; border: none;">
                    @isset($hasRent)    
                        @if ($hasRent > 0)
                            <form method="POST" action="/detail/{{$details->id}}">
                                {{method_field('PUT')}}
                        @else
                            <form method="post" action="/detail" >
                        @endif
                    @endisset
                    @csrf
                    <div class="card" style="padding-right: 10px; border-radius: 10px;  background-color: #f2f2f2">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img src="{{ asset('img') }}/{{$details->image}}" alt="Book Image" class="img-fluid" style="padding-left:105px; margin: 20px 0 20px 0; height: 320px;">
                                </div>
                                <div class="col-sm-6" style="margin-top: 3vh;">
                                    <h3 class="card-title" style="font-family: 'Concert One', cursive;font-size: 23.5px;">{{$details->filename}}</h3>
                                    <div><b>Gategory: </b>{{$details->category}}</div><br>
                                    <div><b>Description: <br></b>{{$details->description}}</div>
                                <div>
                            </div>                        
                            <br/> 	
                            @isset($hasRent)
                                @if ($hasRent > 0)
                                    <button type="submit" name="submit" class="btn btn-outline-secondary" value="{{$details->id}}">Return</button>						
                                @else
                                    <button type="submit" name="submit" class="btn btn-outline-secondary" value="{{$details->id}}">Rent</button>						
                                @endif
                            @endisset	&nbsp;			
                            <b>Available: </b> {{$currentRent}} / {{$details->rent_limit}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    @include('footer')
@endsection