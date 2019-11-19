@extends('layouts.app')
@section('content')
    <div class="container otherview" align="center">
        <div class="row">
            <div class="col-md-12 center">
            @csrf
            <img src="{{asset('img/call-to-action-bg.jpg')}}" alt="image profile" class="rounded-circle" width="100px" height="100px">
            <hr>
            <p>{{$user->name}}, {{$user->age}}</p>
            <p>Descriçao <br> {{$user->more->descriptionfuture}}</p>
            <p>Visão futura <br> {{$user->more->loking}}</p>
            <section id="skills">
                    <div class="container">
                        
                        <header class="section-header">
                            <h3>Habilidades</h3>
                        </header>
                        
                        <div class="skills-content">
                            @foreach ($user->skill as $users)
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="{{$users->level}}" aria-valuemin="0" aria-valuemax="100">
                                    <span class="skill">{{$users->name}} <i class="val">{{$users->level}}%</i></span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        
                    </div>
                </section>            
            </div>
        </div>
    </div>
@endsection