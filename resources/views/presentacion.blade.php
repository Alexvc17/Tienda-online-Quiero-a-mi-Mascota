@extends('principal')
@section('content')

<br>

<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="{{url('imagenes/1.jpg')}}"
          alt="First slide" width="400" height="400">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">¡Bienvenido a Quiero a mi Mascota!</h3>
        <p>Productos a precios comodos</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="{{url('imagenes/2.jpg')}}"
          alt="Second slide" width="400" height="400">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">¡Bienvenido a Quiero a mi Mascota!</h3>
        <p>Alimentación y accesorios para mascotas al mejor precio</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="{{url('imagenes/3.jpg')}}"
          alt="Third slide" width="400" height="400">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">¡Bienvenido a Quiero a mi Mascota!</h3>
        <p>Sorprendete con nuestros grandes descuentos</p>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
<br>
<br>
<br>
<br>


<div class="container">
<div class="row">
    <div class="col-1">
      
    </div>
    <div class="col-9">
      
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
      aria-selected="true">Sobre nosotros</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
      aria-selected="false">Comida para perros y gatos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
      aria-selected="false">Accesorios para perros y gatos</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  
  Disponemos de una amplia gama de alimentación para mascotas a precios bajos. Nuestro objetivo es poder
   ofrecerte alimentación y accesorios de calidad al mejor precio. Entra en bitiba y descubre nuestra
    gama de alimentación para perros, gatos y pequeños animales ¡siempre a precios bajos!
  
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  
  
  Cuidar la alimentación de tu mejor amigo es fundamental. En bitiba te ofrecemos un amplio surtido 
  de marcas y tipologías de pienso para perros y pienso para gatos. Además, puedes completar su dieta
   con comida húmeda para perros y también comida húmeda para gatos</div>

  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  
  
  En nuestra tienda online también encontrarás un mundo de accesorios indispensables para tu mascota:
Si tienes un perro, las bandejas higiénicas y bolsitas te resultarán muy útiles cuando éste es un cachorro.
 A cualquier edad, tu perro necesita juguetes para desarrollar sus destrezas y crear un vínculo entre los 
 dos. 
  
    </div>
    <div class="col-3">
      
    </div>
  </div>
</div>











  
  </div>
</div>

@stop