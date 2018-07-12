<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>DoorSystem</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/r-2.2.2/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

</head>
<body>
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

<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h2 class="display-4">DoorSystem</h2>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->

        <div class="row">
            <div class="col-md-1"> </div>
            <div class="col-md-10">
                <div class="card"> <!--CARD DE LAB 5-->
                    <div class="card-body">
                        <h4 class="card-title">Laboratorio 5</h4>
                        <p class="card-text">

                        <table class="table" id="Tabla">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Docente</th>
                                <th scope="col">Fecha</th>
                                <!--<th scope="col">Hora</th>-->
                            </tr>
                            </thead>
                            <tbody>
                            <!-- cuerpo de la tabla -->
                            <?php $x = 1 ?>
                            @foreach($registros as $registro)
                                @if($registro->sala_id === 1 )
                            <tr id="{{$registro->id}}">
                                <th scope="row">{{$x++}}</th>
                                <td>
                                    <?php
                                        foreach ($profesores as $profe)
                                            if ($registro->user_id === $profe->id && $profe->id !== 1){
                                                $ElprofeN = $profe->name;
                                                $ElprofeA1 = $profe->apellido;
                                                $ElprofeA2 = $profe->apellido2;
                                            }
                                    ?>
                                    {{$ElprofeN}} {{$ElprofeA1}} {{$ElprofeA2}}

                                </td>
                                <td>{{$registro->created_at}}</td>
                            </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>

                        </p>
                        <a href="#" class="btn btn-primary">Ver lista detallada</a>
                    </div>

                </div> <!--Cierre de el card LAB 5-->
            </div>
            <div class="col-md-1"></div>
        </div>

        <div class="row">
            <p> </p>
        </div>

        <div class="row">
            <div class="col-md-1"> </div>
            <div class="col-md-10">
                <div class="card"> <!--CARD DE LAB LEICA-->
                    <div class="card-body">
                        <h4 class="card-title">Laboratorio Leica</h4>
                        <p class="card-text">
                        <table class="table" id="Tabla2">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Docente</th>
                                <th scope="col">Fecha</th>
                                <!--<th scope="col">Hora</th>-->
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1 ?>
                            @foreach($registros as $registro)
                                @if($registro->sala_id === 2 )

                                    <tr id="{{$registro->id}}">

                                        <th scope="row">{{$i++}}</th>
                                        <td>

                                            <?php
                                            foreach ($profesores as $profe)
                                                if ($registro->user_id === $profe->id){
                                                    $ElprofeN = $profe->name;
                                                    $ElprofeA1 = $profe->apellido;
                                                    $ElprofeA2 = $profe->apellido2;
                                                }
                                            ?>
                                            {{$ElprofeN}} {{$ElprofeA1}} {{$ElprofeA2}}

                                        </td>
                                        <td>{{$registro->created_at}}</td>

                                    </tr>

                                @endif
                            @endforeach

                            </tbody>
                        </table>

                        </p>
                        <a href="#" class="btn btn-primary">Ver lista detallada</a>
                    </div>

                </div> <!--Cierre de el card LAB LEICA-->
            </div>
            <div class="col-md-1"></div>
        </div>

        <div class="row">
            <p> </p>
        </div>


        <div class="row">
            <p> </p>
        </div>
    </div> <!-- /container -->

</main>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/r-2.2.2/datatables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<script>
    $(document).ready( function () {
        $('#Tabla').DataTable({
            responsive: true
        });
        $('#Tabla2').DataTable({
            responsive: true
        });
    });
</script>

<script>
    setTimeout("location.reload()", 60000);
</script>


</body>
</html>

