<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Editar Mascota</title>
</head>

<body>
    <div class="container">
        <div class="col-12 text-center">
            <div class="alert alert-success" role="alert">
                <h1 class="mb-0" >Editar Mascota</h1>
            </div>
        </div>
        <p></p>
        <p></p>
        <form method="POST" action="{{ route('mascota.update', ['mascota' => $mascota->id]) }}">

            @method('put')
            @csrf
            <hr>

            <div class="row justify-content-center align-items-center">
                <div class="col-md-4" style="margin-right: 435px;">
                    <div class="mb-3">
                        <label for="codigo" class="form-label">Id</label>
                        <input type="text" class="form-control" id="id" aria-describedby="codigoHelp" name="id" disabled="disabled" value="{{$medico->id}}">
                        <!-- <div id="codigoHelp" class="form-text">Codigo</div> -->
                    </div>
                </div>
            </div>

            <div class="row justify-content-center align-items-center">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" required class="form-control" id="nombre" placeholder="Edit nombre" name="nombre" value="{{$mascota->nombre}}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="codigo" class="form-label">Especie</label>
                        <input type="text" class="form-control" id="especie" placeholder="Edit especie" name="especie" value="{{$mascota->especie}}">
                    </div>
                </div>
            </div>



            <!-- ============================================================================================== -->


            <div class="row justify-content-center align-items-center">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="especialidad" class="form-label">Raza</label>
                        <input type="text" class="form-control" id="raza" name="raza" placeholder="raza" value="{{$mascota->raza}}">
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="horario_fecha" class="form-label">edad</label>
                        <input type="number" class="form-edad" id="edad" name="edad" value="{{$mascota->edad}}" >
                    </div>
                </div>



                <div id="botones" class="row justify-content-start align-items-start" style=" width: 66%;">
                    <div class="col-md-4">
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('mascota.index') }}" class="btn btn-warning">Cancel</a>
                        </div>
                    </div>
                </div>



        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>