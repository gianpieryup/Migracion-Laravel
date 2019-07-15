@extends('welcome')

@section('content')
    <div class="container">
      <section "carro">
       <h1>NOVEDADES </h1>
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
 <div class="carousel-inner">
   <div class="carousel-item active">
     <a href="productos.php">
       <img class="imagen-carro w-50" src="images/productos/mouse2.png" alt="First slide">
     </a>
   </div>
   <div class="carousel-item">
     <a href="productos.php">
     <img class="imagen-carro w-50" src="images/productos/teclado3.png" alt="Second slide">
     </a>
   </div>
   <div class="carousel-item">
     <img class="imagen-carro w-50" src="images/productos/auricular.png" alt="Third slide">
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
     </section>
    </div>

    <div class="container">
        <article class="informacion">
        <div class="info-seguridad">
          <img class="seguridad" src="images/productos/seguridad.png" alt="" width="130px" height="130px">
          <div class="data-seguridad">
          </div>
        </div>
        <div class="info-seguridad">
          <img class="seguridad" src="images/productos/tarjeta.png" alt="" width="130px" height="130px">
          <div class="data-seguridad">
          </div>
        </div>
        <div class="info-seguridad">
          <img class="seguridad" src="images/productos/camion.png" alt="" width="130px" height="130px">
          <div class="data-seguridad">
          </div>
        </div>
        </article>
    </div>

    <div class="container">
      <h1 class="ofertasdelmes">OFERTAS //</h1>
      <section class="product-container">
        <article class="product-logo">
          <a href="productos.php">
            <img class="product-img-ofertas img-fluid" src="images/productos/mouse3.png" alt="" width="325px" height="300px">
          </a>
          <img class="promo img-fluid"src="images/productos/descuento.png" alt="" width="100px" height="50px">
        </article>
        <article class="product-logo">
          <a href="productos.php">
            <img class="product-img-ofertas img-fluid" src="images/productos/teclado.png" alt="" width="325px" height="300px">
          </a>
          <img class="oferta img-fluid"src="images/productos/oferta.png" alt="" width="140px" height="110px">
        </article>
        <article class="product-logo">
          <a href="productos.php">
            <img class="product-img-ofertas img-fluid" src="images/productos/auricular2.png" alt="" width="325px" height="300px">
          </a>
          <img class="ofertita img-fluid"src="images/productos/ofertita.png" alt="" width="80px" height="40px">
        </article>
    </div>

    <div class="container">
      <h1 class="ofertasdelmes">INGRESOS //</h1>
      <section class="info">
        <div class="card">
        <img class="product-img img-fluid" src="images/productos/mouse.png" alt="" width="350px" height="200px">
        <div class="card-body">
          <h5 class="card-title">Mouse Gamer</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          <a href="productos.php" class="btn btn-primary">Ver mas</a>
          </div>
          </div>
          <div class="card">
          <img class="product-img img-fluid" src="images/productos/auricular3.png" alt="" width="350px" height="200px">
          <div class="card-body">
            <h5 class="card-title">Auricular Gamer</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            <a href="productos.php" class="btn btn-primary">Ver mas</a>
            </div>
            </div>
            <div class="card">
            <img class="product-img img-fluid" src="images/productos/teclado2.png" alt="" width="350px" height="200px">
            <div class="card-body">
              <h5 class="card-title">Teclado Gamer</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
              <a href="productos.php" class="btn btn-primary">Ver mas</a>
              </div>
              </div>
      </section>

    </div>
    <marquee class="marque"><img class="fotos-marque" src="https://fakeimg.pl/300x100/"><img class="fotos-marque" src="https://fakeimg.pl/300x100/"><img class="fotos-marque" src="https://fakeimg.pl/300x100/"><img class="fotos-marque" src="https://fakeimg.pl/300x100/"><img class="fotos-marque" src="https://fakeimg.pl/300x100/"><img class="fotos-marque" src="https://fakeimg.pl/300x100/"></marquee>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection
