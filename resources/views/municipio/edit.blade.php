<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add municipio</title>
  </head>
  <body>
    <div class="container">
        <h1>Update municipio</h1>
        <form method="POST" action="{{route('municipios.update',['municipio'=> $municipio->muni_codi])}}">
            @method('put')
            @csrf
            <!-- genera un token oculto -->
            <div class="mb-3">
                <label for="id" class="form-label">code</label>
                <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disabled" value="{{$municipio->muni_codi}}">
                <div id="idHelp" class="form-text">municipio code</div>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">municipio</label>
                <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="name" placeholder="municipio name." value="{{$municipio->muni_nomb}}">
            </div>


            <label for="departamento">Departamentos</label>
            <select class="form-select" id="departamento" name="code" required>
                <Option selected disabled value="">Elije uno</Option>
                @foreach ($departamentos as $departamento)
                    @if($departamento->depa_codi == $municipio->depa_codi)
                    <option selected value="{{$departamento->depa_codi}}"> {{$departamento->depa_nomb}} </option>
                    @else
                        <option value="{{$departamento->depa_codi}}"> {{$departamento->depa_nomb}} </option>
                    @endif
                @endforeach
            </select>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('municipios.index')}}" class="btn btn-warning">cancel</a>
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
