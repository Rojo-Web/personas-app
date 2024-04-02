<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de paises</title>
  </head>
  <body>
    <div class= "container">
    <h1>Listado de paises</h1>
    <a href="{{ route('paises.create')}}" class="btn btn-success">Add</a>
    <table class="table">

        <thead>

            <tr>
            <th scope="col">Code</th>
            <th scope="col">paises</th>
            <th scope="col">Pais_Code</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($paises as $pais)
                <tr>
                    <th scope="row">{{$pais->pais_codi}}</th>
                    <td>{{$pais->pais_nomb}}</td>
                    <td>{{$pais->pais_capi}}</td>
                    <td>
                    <a href="{{ route('paises.edit',['pais'=>$pais->pais_codi])}}" class="btn btn-info">Edit</a>
                        <form action="{{route('paises.destroy', ['pais' => $pais->pais_codi])}}" method="POST" style="display: inline-block">
                            @method('delete')
                            @csrf
                            <input class="btn btn-danger" type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Mostrar enlaces de paginación -->
    @if ($paises->previousPageUrl())
    <a href="{{ $paises->previousPageUrl() }}" class="btn btn-primary">Previous</a>
@endif

@if ($paises->nextPageUrl())
    <a href="{{ $paises->nextPageUrl() }}" class="btn btn-primary">Next</a>
@endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
