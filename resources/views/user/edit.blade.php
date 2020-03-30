@extends('layouts.app')
@section('content')

    <!-- #intro -->

    <main id="main">
        <!--==========================About Us Section============================-->
        <section id="about" class="otherviewedit">
            <div class="container">
                
                <header class="section-header">
                    <p>Completemente seu cadastro para que as empresas saibam mais sobre você</p>
                </header>
                
                <div class="row about-cols">
                    
                    <div class="col-md-4 wow fadeInUp">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Pessoais</a></h2>
                            <div class="container">
                                <form method="POST" class="form-validate" action="{{route('user.update', ['id' => auth()->user()->id])}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="name">Nome</label>
                                            <input type="name" class="form-control" id="name" name="name" placeholder="nome" value="{{auth()->user()->name}}">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="email">Endereço de Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="email" value="{{auth()->user()->email}}">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="age">Idade</label>
                                            <input type="age" class="form-control" id="age" name="age" placeholder="idade" value="{{auth()->user()->age}}">
                                        </div>
                                        <div class="col-md-12" align="center">
                                            <br>
                                            <button type="submit" class="btn btn-success">salvar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <br>
                        </div>
                    </div>
                    
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/about-plan.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-list-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#">O que Procura?</a></h2>
                            <form action="{{route('more.description')}}" method="POST">
                                @csrf    
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="description">Descrição</label>
                                            @if (auth()->user()->more)
                                                <textarea name="loking" class="form-control" id="loking" cols="30" placeholder="Descrição" rows="5">{{auth()->user()->more->loking}}</textarea>
                                            @else
                                                <textarea name="loking" class="form-control" id="loking" cols="30" placeholder="Descrição" rows="5"></textarea>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="descriptionfuture">Visão futura</label>
                                            @if (!empty($user->more->descriptionfuture))
                                                <textarea name="descriptionfuture" class="form-control" id="descriptionfuture" cols="30" placeholder="Descrição" rows="5">{{auth()->user()->more->descriptionfuture}}</textarea>
                                            @else
                                                <textarea name="descriptionfuture" class="form-control" id="descriptionfuture" cols="30" placeholder="Descrição" rows="5"></textarea>
                                            @endif
                                        </div>
                                   
                                        <div class="col-md-12" align="center">
                                            <br>
                                            <button type="submit" class="btn btn-success">salvar</button>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </form>
                        </div>
                    </div>
                    
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Habilidades</a></h2>
                            <form action="{{route('skill.insertupdate')}}" method="POST">
                                @csrf    
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input class="form-control" required type="text"  pattern="A-Za-z]"  name="name" id="name" placeholder="Habilidade">
                                        </div>
                                        <div class="col-md-12" align="center">
                                            <br>
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                <label class="btn btn-secondary">
                                                    <input type="radio" name="level" id="option1" autocomplete="off" value="24" required>Baixo
                                                </label>
                                                <label class="btn btn-secondary">
                                                    <input type="radio" name="level" id="option2" autocomplete="off" value="74" required>Médio
                                                </label>
                                                <label class="btn btn-secondary">
                                                    <input type="radio" name="level" id="option3" autocomplete="off" value="99" required>Avançado
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12" align="center">
                                            <br>
                                            <button type="submit" class="btn btn-success">Adicionar/Editar</button>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </form>
                            <div class="col-md-12">
                                <a href="#skills" class="scrollto">
                                    <em class="fa fa-fw fa-eye"></em>Habilidades
                                </a>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- #about -->
                        
        <!--==========================Skills Section============================-->
        <section id="skills">
            <div class="container">
                
                <header class="section-header">
                    <h3>Suas Habilidades</h3>
                    <p>Aqui é a lista das sua habilidades cadastradas e seu nivel em porcentagem</p>
                </header>
                
                <div class="skills-content">
                    @forelse ($user->skills as $skill)
                    <div class="row">
                        <div class="col-11">
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="{{$skill->level}}" aria-valuemin="0" aria-valuemax="100">
                                <span class="skill">{{$skill->name}} <i class="val">{{$skill->level}}%</i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-1">
                            <form id="form-delete-skill" action="{{route('skill.destroy', $skill->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                        <span id="span-send" class="skill mx-auto span-cursor">Delete</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    @empty
                        <div class="col-12 text-center">Não há itens para listar</div>
                    @endforelse
                </div>        
            </div>
        </section>              
    </main> 
@endsection
@section('js')
    <script>
        $('#span-send').on('click', function(){
            $('#form-delete-skill').submit();
        });
    </script>
@stop