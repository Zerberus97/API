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
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top row">

        <div class="container">
            <a class="navbar-brand" href="#">DoorSystem</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item active">
                        <a class="nav-link active" href="{{ url('/') }}">Inicio <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="#">Profesores <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/graficosala')}}">Salas <span class="sr-only">(current)</span></a>
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
                        <h4 class="card-title">Grafico Sala Laboratorio 6</h4>
                        <p class="card-text">
                            <div id="myChart"></div>
                        </p>

                    </div>

                </div> <!--Cierre de el card LAB 5-->
            </div>
            <div class="col-md-1"></div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-1"> </div>
            <div class="col-md-10">
                <div class="card"> <!--CARD DE LAB L-->
                    <div class="card-body">
                        <h4 class="card-title">Grafico Sala Laboratorio Leica</h4>
                        <p class="card-text">
                        <div id="myChart2"></div>
                        </p>

                    </div>

                </div> <!--Cierre de el card LAB L-->
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

</main>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/r-2.2.2/datatables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>


<script type="text/javascript">
    google.load('visualization','1.0',{'packages':['corechart']});
    google.setOnLoadCallback(grafico);
    google.setOnLoadCallback(grafico2);

    function grafico(){
        var data = new google.visualization.DataTable();
        data.addColumn('string','Profesor');
        data.addColumn('number','Uso');
        data.addRows([


            @foreach($profesores as $profe)
            ['{{$profe->name}} {{$profe->apellido}}',

                <?php
                $mysqli = new mysqli('localhost','root','','prueba');
                $sql = $mysqli->query("SELECT count(sala_id) FROM registros WHERE sala_id= 1 && user_id = $profe->id");
                $datos = mysqli_fetch_array($sql);
                ?>

                {{$datos['count(sala_id)']}}],
            @endforeach

            ]
        );

        var opciones = {'title':'Uso de sala',
                        'width':800,
                        'height':400};
        var grafica = new google.visualization.BarChart(document.getElementById('myChart'));
        grafica.draw(data,opciones);
    }
    function grafico2(){
        var data = new google.visualization.DataTable();
        data.addColumn('string','Profesor');
        data.addColumn('number','Uso');
        data.addRows([


                        @foreach($profesores as $profe)
                ['{{$profe->name}} {{$profe->apellido}}',

                    <?php
                    $mysqli = new mysqli('localhost','root','','prueba');
                    $sql = $mysqli->query("SELECT count(sala_id) FROM registros WHERE sala_id= 2 && user_id = $profe->id");
                    $datos = mysqli_fetch_array($sql);
                    ?>

                        {{$datos['count(sala_id)']}}],
                    @endforeach

            ]
        );

        var opciones = {'title':'Uso de sala',
            'width':800,
            'height':400};
        var grafica = new google.visualization.BarChart(document.getElementById('myChart2'));
        grafica.draw(data,opciones);
    }

</script>

<script>
    setTimeout("location.reload()", 30000);
</script>


</body>
</html>

