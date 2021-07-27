


<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Creacion de usuarios</title>
  </head>
  <body>
    
  <div class="container">

        <h1>Registrar Datos</h1>

        <form action="{{url('/datos/'.$empleado->id)}}" method="post" class="form-control mt-4" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center mt-4">
            <div class="">
            {{method_field('PATCH')}}
                <label for="">Correo</label>
                <input type="Email" name="Correo" value="{{$empleado->Correo}}" required>

                <label for="">Nombre</label>
                <input type="text" name="Nombre" value="{{$empleado->Nombre}}" required>
                
            
                <label for="">Apellido</label >
                <input type="text" name="Apellido" value="{{$empleado->Apellido}}" required>

                <label for="">Codigo</label>
                <select name="Codigo" >
                    <option value="1" selected >Activos</option>
                    <option value="2">Inactivos</option>
                    <option value="3">En proceso</option>
                </select>
            </div>
        </div>

        <div class="row justify-content-center" >
            <div class="col-2 mt-4">  
                <input type="submit" class="btn btn-primary form-control" value="Enviar" >
            </div>
        </div>
        </form>

        <a href="{{url('datos/')}}" class="btn  mt-2">Regresar</a>
  </div>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>