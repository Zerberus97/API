@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <nav class="navbar navbar-expand-md fixed-top row" style="background-color:#Cc0000">

            <div class="container">
            <!-- <img src="/LogoCompletoBlanco.png" width="160" height="80" class="d-inline-block align-top" alt=""  href="{{ url('/') }}">-->
                <a class="navbar-brand" style="color: #ffffff" href="{{ url('/') }}">DoorSystem</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation" style="background-color:#ffffff">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault" >
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link active" style="color: #ffffff" href="{{ url('/') }}">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" style="color: #ffffff" href="{{ route('login') }}">Profesores <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" style="color: #ffffff" href="{{ url('/graficosala') }}">Salas <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
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
                                            <thead class="" style="background-color: #cc0001">
                                            <tr>
                                                <th scope="col" style="color: #ffffff">#</th>
                                                <th scope="col" style="color: #ffffff">Docente</th>
                                                <th scope="col" style="color: #ffffff">Fecha de ingreso</th>
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
                                            <tr id="" value="{{$profe->id}}">
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
                                <br>
                                <a ></a>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <a href="" class="btn" style="background-color: #cc0001; color: #ffffff"  data-toggle="modal" data-target="#nuevoP">Agregar Profesor</a>
                        <!--<a href="" class="btn btn-primary" data-toggle="modal" data-target="#eliminarP">Eliminar Profesor</a>-->
                </div>
            </div>
        </div>
    </div>


    <!-- modal -->
    <div class="modal fade" id="nuevoP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo profesor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- aqui va el contenido -->

                    <form method="POST" action="{{route('User')}}" class="form-group">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="descripcionPT">Rut</label>
                            <input class="form-control" id="rutP" name="rutP" placeholder="Ingrese el rut del docente">
                        </div>
                        <div class="form-group">
                            <label for="nombrePT">Nombre Profesor</label>
                            <input type="text" class="form-control" id="nombreP" name="nombreP" placeholder="Introduzca un nombre">
                        </div>
                        <!-- valores -->
                        <div class="">
                            <div class="form-group">
                                <label for="apellidoP">Apellido</label>
                                <input type="text" class="form-control" id="apellidoP" name="apellidoP" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="apellido2P">Segundo apellido</label>
                                <input type="text" class="form-control" id="apellido2P" name="apellido2P" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="emailP">Ingrese su correo electronico</label>
                                <input type="email" class="form-control" id="emailP" name="emailP" placeholder="Ingrese su correo">
                            </div>
                            <div class="form-group">
                                <label for="passP">Ingrese una contraseña</label>
                                <input type="password" class="form-control" id="passP" name="passP" placeholder="Ingrese una contraseña">
                            </div>
                        </div>
                        <button type="submit" id="btnGuardarP" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal eliminar -->
    <div class="modal fade" id="eliminarP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEliminar">Eliminar profesor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- aqui va el contenido -->

                    <form method="POST" action="{{route('UserD')}}" class="form-group">

                        <div class="form-group">
                            <label for="selectP">Seleccione profesor</label>
                            <select class="form-control" id="selectP" name="selectP">

                                <?php
                                $profesores = \App\User::all();
                                ?>
                                @foreach($profesores as $profe)
                                    @if($profe->id !== 1)
                                            <option id="selectP" value="{{$profe->id}}">{{$profe->name}} {{$profe->apellido}} {{$profe->apellido2}} </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" id="btnEliminar" class="btn btn-primary">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



</div>

    <script>

        $('#btnEliminarP').click(function(event) {

            var valor = $("#selectP").val();
            console.long(valor);
        });

    </script>
@endsection
