
@extends('principal')
@section('content')


<div class="container">
  <div class="row">
    <div class="col">
    </div>
    <div class="col-6">
      
<!-- Default form register -->
<form class="text-center border border-light p-5" action="#!">

    <p class="h4 mb-4">Contacta con nosotros</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Nombre">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Apellido">
        </div>
    </div>

    <!-- E-mail -->
    <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

    <!-- Password -->
    <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Contraseña" aria-describedby="defaultRegisterFormPasswordHelpBlock">
    <br>
    <br>

    

    <!-- Newsletter -->
    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
        <label class="custom-control-label" for="defaultRegisterFormNewsletter">Quiero recibir promociones y comunicaciones comerciales</label>
    </div>

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Sign in</button>

    <!-- Social register -->
    

    <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

    <hr>

    

</form>
<!-- Default form register -->



    </div>
    <div class="col">
    </div>
  </div>

  </div>


  @stop