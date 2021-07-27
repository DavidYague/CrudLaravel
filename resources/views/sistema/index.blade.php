
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tabla de datos</title>
  </head>
  <body>
    
  <div class="container">

  <h1> Tabla de datos </h1> 

<table class="table table-dark">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Correo</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Codigo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($empleados as $empleado)
        <tr>
            <td>{{ $empleado->id}}</td>
            <td>{{$empleado->Correo}}</td>
            <td>{{$empleado->Apellido}}</td>
            <td>{{$empleado->Nombre}}</td>
            <td>{{$empleado->Codigo }}</td>

            <td> <a href="{{url('/datos/'.$empleado->id.'/edit')}}">Editar</a>   ||
             <form method="post" action="{{url('/datos/'.$empleado->id)}}">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" onclick="return confirm('Seguro que quieres borrar?')" value="Borrar" >
             </form>   
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{url('datos/create')}}" class="btn btn-primary">Inserta nuevo registro</a>


   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>