<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <!--boobstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos.css">
    <title>REGISTRAR</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TOGUs</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page"  href="{{route('welcome.index')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="{{route('registrar.index')}}">Registrate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login.index')}}">Inicia sesion</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>
<!-------------------------------------------------------------------------------------->
    <form style="text-align:center; margin-top: 130px;" action="/registrar" method="POST" >
    @csrf
     <h1 style="color:blue; margin-bottom:45px">Registrate</h1>
  <div class="mb-3">
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 30%; margin:10px auto;" placeholder="Nombre de usuario" name="Nombre_usuario">

  </div>
  <div class="mb-3">
    <input type="password" class="form-control" id="exampleInputPassword1" style="width: 30%; margin:10px auto;" placeholder="Contraseña" name="password">
  </div>
  <div class="mb-3">
    <input type="password" class="form-control" id="exampleInputPassword1" style="width: 30%; margin:10px auto;" placeholder="Confirma tu Contraseña" name="password_confirmation">
  </div>

  <button type="submit" class="btn btn-primary" style="width: 30%; ">Enviar</button>
</form>
</body>
</html>
