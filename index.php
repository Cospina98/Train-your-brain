<?php?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
  <!-- css file -->
  <link rel="stylesheet" href="estilos.css">
  <!-- Favicon -->
  <link rel="shortcut icon" href="./imagenes/banner4.jpg" type="image/x-icon">
  <!-- title -->
  <title>Fundación de idiomas | Home</title>
</head>

<body class="white">
  <!-- BARRA DE NAVEGACIÓN -->
  <nav class="navbar navbar-expand-lg sticky navbar-dark gris scrolling-navbar fixed-top">

    <div class="container">
      <a class="navbar-brand" href="index.php"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="" index.php>Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#idiomas">Idiomas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#maestros">Maestros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cursos.html">Cursos</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto nav-flex-icons">
          <li class="nav-item">
            <a class="nav-link waves-effect waves-light" href="https://www.facebook.com/" target="_blank">
              <i class="fab fa-facebook fa-lg"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect waves-light" href="https://www.instagram.com/?hl=es-la" target="_blank">
              <i class="fab fa-instagram fa-lg"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
              <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal">
                Inciar sesión</button>
              <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal1">Registrarse</button>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="text-center border border-light p-5" action="#!">

            <p class="h4 mb-4">Sign in</p>

            <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

            <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

            <div class="d-flex justify-content-around">
              <div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                  <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                </div>
              </div>
              <div>
                <a href="">Forgot password?</a>
              </div>
            </div>

            <button class="btn btn-info btn-block my-4 btn-secondary" type="submit"><a class="text-white" href="miscursos.html"> Sign in </a></button>

            <p>Not a member?
              <a href="">Register</a>
            </p>

          </form>
        </div>

      </div>
    </div>
  </div>



  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="text-center border border-light p-5" action="#!">

            <p class="h4 mb-4">Sign up</p>

            <div class="form-row mb-4">
              <div class="col">
                <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name">
              </div>
              <div class="col">
                <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name">
              </div>
            </div>

            <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

            <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
            <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
              At least 8 characters and 1 digit
            </small>

            <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
            <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
              At least 8 characters and 1 digit
            </small>
            <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
            <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
              Optional - for two step authentication
            </small>


            <button class="btn btn-info my-4 btn-block btn-secondary" type="submit">Sign in</button>


            <hr>


          </form>
        </div>

      </div>
    </div>
  </div>

  <!-- CARRUSEL -->

  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <center><img src="imagenes/banner1.jpg" class="img-fluid" alt="..."></center>
      </div>
      <div class="carousel-item">
        <center><img src="imagenes/banner3.jpg" class="img-fluid" alt="..."></center>
      </div>
      <div class="carousel-item">
        <center><img src="imagenes/banner4.jpg" class="img-fluid" alt="..."></center>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- CARRUSEL MULTIPLE DE SERVICIOS -->



  <div class="container py-4" id="idiomas">
    <div class="row">
      <div class="col-lg-4 ">
        <a href="" target="_blank"><img class="card-img-top rounded-circle example hoverable" src="imagenes/italiano.jpg"></a>
        <h2 class="card-title">Italiano</h2>
        <p class="card-text">Es una lengua romance que proviene del Toscano arcaico y pertenece al grupo itálico de la familia de lenguas indoeuropeas.</p>
      </div>


      <div class="col-lg-4 clearfix  d-md-block">
        <a href="" target="_blank"><img class="card-img-top rounded-circle example hoverable" src="imagenes/Portugues.jpg"></a>
        <h2 class="card-title">Portugués</h2>
        <p class="card-text">Actualmente, es la lengua principal de Portugal, Brasil, Angola, Guinea-Bissau, Mozambique, Cabo Verde, Santo Tomé y Príncipe y Timor Oriental</p>
      </div>

      <div class="col-lg-4 clearfix  d-md-block">
        <a href="" target="_blank"><img class="card-img-top rounded-circle example hoverable" src="imagenes/frances.jpg"></a>
        <h2 class="card-title">Francés</h2>
        <p class="card-text">El idioma francés es una lengua hablada en la Unión Europea, especialmente en Francia.</p>
      </div>
    </div>

  </div>


  <!-- SECCION NOSOTROS -->


  <div class="container-fluid grey lighten-4" id="nosotros">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1> NOSOTROS</h1>
          <P> Somos una fundación especializada en la enseñanza de idiomas extranjeros, tenemos el objetivo de certificar personas con la capacidad de hablar idiomas como el italiano, francés y portugués de manera fluida. Utilizamos herramientas de realidad virtual y clases en vivo disponbles las 24 horas para poder brindarles una experiencia unica a nuestros estudiantes. Aprende con nosotros.</P>
        </div>

        <div class="col-md-6   d-none d-sm-block">
          <img src="imagenes/Nosotros.jpg" alt="" style="width:100%;">
        </div>
      </div>
    </div>
  </div>


  <!-- TARJETAS CON ACORDEON -->
  <div class="container-fluid bg-black">
    <div class="container" id="maestros">
      <h2 class="text-center mt-5 display-4">Nuestros Maestros</h2>
      <div class="row">
        <!-- TRES COLUMNAS -->
        <div class="col-md-4">
          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#ejemplo1" aria-expanded="false" aria-controls="collapseExample">
            <img class="z-depth-2" src="imagenes/1.jpg" style="width:100%;margin:0px" alt="...">
          </button>
        </div>
        <div class="collapse" id="ejemplo1">
          <div class="card card-body d-block d-md-none">

          </div>
        </div>


        <div class="col-md-4">
          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#ejemplo2" aria-expanded="false" aria-controls="collapseExample">
            <img class="z-depth-2" src="imagenes/2.jpg" style="width:100%;margin:0px" alt="...">
          </button>
        </div>
        <div class="collapse" id="ejemplo2">
          <div class="card card-body d-block d-md-none">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
          </div>
        </div>


        <div class="col-md-4">
          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#ejemplo3" aria-expanded="false" aria-controls="collapseExample">
            <img class="z-depth-2" src="imagenes/3.jpg" style="width:100%;margin:0px" alt="...">

          </button>
        </div>
        <!-- FIN TRES COLUMNAS -->


        <!-- COLLAPSE PRIMEROS 3 COLUMNAS -->

        <div class="collapse" id="ejemplo1">
          <div class="card card-body d-none d-md-block">
            Juan es un estudiante universitario en francia, se encuentra estudiando español, su amor por enseñar es lo que más destaca de él, por eso hace parte de nuestra fundación 
          </div>
        </div>


        <div class="collapse" id="ejemplo2">
          <div class="card card-body card card-body d-none d-md-block ">
            Alicia es una mujer proveniente de la ciudad Tokio, en Japon. Tiene 42 años. Es maestra de Francés, habla Alemán, español, ingles y francés, ademas de su idioma natal, y trabaja desde hace 10 años en la institución universitaria salazar y herrera.
          </div>
        </div>


        <div class="collapse" id="ejemplo3">
          <div class="card card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
          </div>
        </div>
        <!-- FIN COLLASPSE 3 PRIMERAS COLUMNAS -->

        <!-- TRES COLUMNAS -->
        <div class="col-md-4">
          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#ejemplo4" aria-expanded="false" aria-controls="collapseExample">
            <img class="z-depth-2" src="imagenes/4.jpg" style="width:100%;margin:0px" alt="...">

          </button>
        </div>

        <div class="collapse" id="ejemplo4">
          <div class="card card-body d-block d-md-none">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
          </div>
        </div>


        <div class="col-md-4">
          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#ejemplo5" aria-expanded="false" aria-controls="collapseExample">
            <img class="z-depth-2" src="imagenes/5.jpg" style="width:100%;margin:0px" alt="...">

          </button>
        </div>

        <div class="collapse" id="ejemplo5">
          <div class="card card-body d-block d-md-none">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
          </div>
        </div>


        <div class="col-md-4">
          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#ejemplo6" aria-expanded="false" aria-controls="collapseExample">
            <img class="z-depth-2" src="imagenes/6.jpg" style="width:100%;margin:0px" alt="...">

          </button>
        </div>
        <!-- FIN TRES COLUMNAS -->

        <!-- COLLAPSE SEGUNDAS TRES COLUMNAS -->
        <div class="collapse" id="ejemplo4">
          <div class="card card-body d-none d-md-block">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
          </div>
        </div>


        <div class="collapse" id="ejemplo5">
          <div class="card card-body d-none d-md-block">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
          </div>
        </div>


        <div class="collapse" id="ejemplo6">
          <div class="card card-body">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
          </div>
        </div>
        <!--  FIN COLLAPSE SEGUNDAS TRES COLUMNAS -->


      </div>
      <!-- FIN ROW -->
    </div>
    <!-- FIN CONTAINER PROFES -->
  </div>
  <!-- FIN CONTAINER FLUID -->




  <!-- Footer -->
  <footer class="page-footer font-small  pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-4 mx-auto">

          <!-- Content -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Footer Content</h5>
          <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
            consectetur
            adipisicing elit.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->


    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <i class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i class="fab fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
          <i class="fab fa-google-plus-g"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1">
          <i class="fab fa-linkedin-in"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-dribbble mx-1">
          <i class="fab fa-dribbble"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>

</html>