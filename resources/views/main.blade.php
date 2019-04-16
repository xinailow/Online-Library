@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3> <strong>Science</strong> </h3>
                <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div id="scienceContent" class="MultiCarousel-inner">    
                        @foreach($files as $users)
                            @if($users->category === "Science")
                                <div class="item">                                                       
                                    <a href='./detail/{{ $users->id }}' style="color: #3f4e59; text-decoration: none;"> 
                                        <img src="./img/{{ $users->image}}" style="position: relative; top: 0; left: 0; max-width:80%; height:192px;">
                                        <p><b>{{ $users-> filename }}</b></p>
                                    </a>                               
                                </div>
                            @endif
                        @endforeach
                    </div>
                        <button class="btn btn-primary leftLst"><</button>
                        <button class="btn btn-primary rightLst">></button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h3> <strong>Biology</strong> </h3>
                <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div id="technologyContent" class="MultiCarousel-inner">   
                        @foreach($files as $users)
                            @if ($users->category === "Biology")
                                <div class="item">                                                       
                                    <a href='./detail/{{ $users-> id }}' style="color: #3f4e59; text-decoration: none;"> 
                                        <img src="./img/{{ $users-> image }}" style="position: relative; top: 0; left: 0; max-width:80%; height:192px;">
                                        <p><b>{{ $users-> filename }}</b></p>
                                    </a>                               
                                </div>
                            @endif
                        @endforeach
                    </div>
                        <button class="btn btn-primary leftLst"><</button>
                        <button class="btn btn-primary rightLst">></button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h3><strong>Technology</strong></h3>
                <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div id="technologyContent" class="MultiCarousel-inner"> 
                        @foreach($files as $users)
                            @if ($users->category === "Technology")
                                <div class="item">                                                       
                                    <a href='./detail/{{ $users-> id }}' style="color: #3f4e59; text-decoration: none;"> 
                                        <img src="./img/{{ $users-> image }}" style="position: relative; top: 0; left: 0; max-width:80%; height:192px;">
                                        <p><b>{{ $users-> filename }}</b></p>
                                    </a>                               
                                </div>
                            @endif
                        @endforeach
                    </div>
                        <button class="btn btn-primary leftLst"><</button>
                        <button class="btn btn-primary rightLst">></button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h3><strong>Lifestyle</strong></h3>
                <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div id="technologyContent" class="MultiCarousel-inner">    
                        @foreach($files as $users)
                            @if ($users->category === "Lifestyle")
                                <div class="item">                                                       
                                    <a href='./detail/{{ $users-> id }}' style="color: #3f4e59; text-decoration: none;"> 
                                        <img src="./img/{{ $users-> image }}" style="position: relative; top: 0; left: 0; max-width:80%; height:192px;">
                                        <p><b>{{ $users-> filename }}</b></p>
                                    </a>                               
                                </div>
                            @endif
                        @endforeach
                    </div>
                        <button class="btn btn-primary leftLst"><</button>
                        <button class="btn btn-primary rightLst">></button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h3><strong>Politics & Laws</strong></h3>
                <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div id="technologyContent" class="MultiCarousel-inner">         
                        @foreach($files as $users)
                            @if ($users->category === "Politics & Laws")
                                <div class="item">                                                       
                                    <a href='./detail/{{ $users-> id }}' style="color: #3f4e59; text-decoration: none;"> 
                                        <img src="./img/{{ $users-> image }}" style="position: relative; top: 0; left: 0; max-width:80%; height:192px;">
                                        <p><b>{{ $users-> filename }}</b></p>
                                    </a>                               
                                </div>
                            @endif
                        @endforeach
                    </div>
                        <button class="btn btn-primary leftLst"><</button>
                        <button class="btn btn-primary rightLst">></button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
            <h3><strong>Business & Career</strong></h3>
                <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div id="technologyContent" class="MultiCarousel-inner">
                        @foreach($files as $users)
                            @if ($users->category === "Business & Career")
                                <div class="item">                                                       
                                    <a href='./detail/{{ $users-> id }}' style="color: #3f4e59; text-decoration: none;"> 
                                        <img src="./img/{{ $users-> image }}" style="position: relative; top: 0; left: 0; max-width:80%; height:192px;">
                                        <p><b>{{ $users-> filename }}</b></p>
                                    </a>                               
                                </div>
                            @endif
                        @endforeach
                    </div>
                        <button class="btn btn-primary leftLst"><</button>
                        <button class="btn btn-primary rightLst">></button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h3><strong>Academic & Education</strong></h3>
                <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                    <div id="technologyContent" class="MultiCarousel-inner">
                        @foreach($files as $users)
                            @if ($users->category === "Academic & Education")
                                <div class="item">                                                       
                                    <a href='./detail/{{ $users-> id }}' style="color: #3f4e59; text-decoration: none;"> 
                                        <img src="./img/{{ $users-> image }}" style="position: relative; top: 0; left: 0; max-width:80%; height:192px;">
                                        <p><b>{{ $users-> filename }}</b></p>
                                    </a>                               
                                </div>
                            @endif
                        @endforeach
                    </div>
                        <button class="btn btn-primary leftLst"><</button>
                        <button class="btn btn-primary rightLst">></button>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
@endsection