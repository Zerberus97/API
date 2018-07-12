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
            <a class="navbar-brand" href="{{ url('/') }}">DoorSystem</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link active" href="{{ url('/') }}">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/profesores') }}">Profesores <span class="sr-only">(current)</span></a>
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
                        <h4 class="card-title">Profesores</h4>
                        <p class="card-text">

                        <table class="table" id="Tabla">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Docente</th>
                                <th scope="col">Fecha de agregacion</th>
                                <!--<th scope="col">Hora</th>-->
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>

                        </p>
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#nuevoP">Agregar Profesor</a>
                    </div>

                </div> <!--Cierre de el card LAB 5-->
            </div>
            <div class="col-md-1"></div>
        </div>

        <div class="row">
            <p> </p>
        </div>

    </div> <!-- /container -->

    <div class="modal fade" id="nuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- aqui va el contenido -->

                    <form class="form-group">
                        <div class="form-group">
                            <label for="nombrePT">Nombre Profesor</label>
                            <input type="text" class="form-control" id="nombreP" placeholder="Introduzca un nombre">
                        </div>
                        <div class="form-group">
                            <label for="descripcionPT">Descripcion</label>
                            <textarea class="form-control" id="descripcionPT" placeholder="Descripcion del producto"></textarea>
                        </div>
                        <!-- valores -->
                        <div class="">
                            <div class="form-group">
                                <label for="stockPT">stock Producto</label>
                                <input type="text" class="form-control" id="stockPT" placeholder="Introduzca stock">
                            </div>
                            <div class="form-group">
                                <label for="valorPT">Valor Producto</label>
                                <input type="text" class="form-control" id="valorPT" placeholder="Introduzca un valor">
                            </div>
                            <div class="form-group">
                                <label for="NetoPT">Neto Producto</label>
                                <input type="text" class="form-control" id="NetoPT" placeholder="Neto del producto">
                            </div>
                            <div class="form-group">
                                <label for="IVAPT">IVA Producto</label>
                                <input type="text" class="form-control" id="IVAPT" placeholder="IVA del producto">
                            </div>
                        </div>
                        <div class="col-md-8 form-inline"></div>
                        <label>Marca</label>
                        <button type="submit" id="btnGuardarP" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div

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

    });
</script>

<script>

</script>


</body>
</html>

