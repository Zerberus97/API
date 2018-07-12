@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top row" style="background-color:#Cc0000">

            <div class="container">
            <!-- <img src="/LogoCompletoBlanco.png" width="160" height="80" class="d-inline-block align-top" alt=""  href="{{ url('/') }}">-->
                <a class="navbar-brand" href="{{ url('/') }}">DoorSystem</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation" style="background-color:#ffffff">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault" >
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link active" href="{{ url('/') }}">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('login') }}">Profesores <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/graficosala') }}">Salas <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                            <div class="col-md-1"> </div>
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Profesores</h4>
                                        <p class="card-text">

                                        <table class="table" id="Tabla">
                                            <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Docente</th>
                                                <th scope="col">Fecha de ingreso</th>
                                                <!--<th scope="col">Hora</th>-->
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <!-- cuerpo de la tabla -->
                                            <?php $x = 1 ?>
                                            <?php
                                            $profesores = \App\User::all();
                                            ?>
                                            @foreach($profesores as $profe)
                                                @if($profe->id !== 1)
                                            <tr id="{{$profe->id}}">
                                                <th scope="row">{{$x++}}</th>
                                                <td>
                                                {{$profe->name}} {{$profe->apellido}} {{$profe->apellido2}}
                                                    
                                                </td>
                                                <td>{{$profe->created_at}}</td>
                                            </tr>
                                            @endif
                                            @endforeach

                                            </tbody>
                                        </table>

                                        </p>

                                    </div>

                                </div> <!--Cierre de el card LAB 5-->
                            </div>
                            <div class="col-md-1"></div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
