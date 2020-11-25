@extends('principal')
@section('content')

<br>
<br>
<br>

<div class="container">
  <div class="row">
    <div class="col-sm">
    <div class="card">
    <img class="card-img-top" src="{{url('imagenes/10.jpg')}}">
    
    <div class="card-body">
      <h5 class="card-title">Juguete con forma de raton</h5>
      <p class="card-text">
      
<ul>
@foreach($item1 as $i1)

<li>{{$i1}}

@endforeach
</ul>

      </p>
    </div>
    <div class="card-footer">
    <button type="button" class="btn btn-primary btn-md" >Comprar</button>
    </div>
  </div>
    </div>
    <div class="col-sm">
    <div class="card">
    <img class="card-img-top" src="{{url('imagenes/11.jpg')}}">
    <div class="card-body">
      <h5 class="card-title">Set de juguetes para gato</h5>
      <p class="card-text">
      
      <ul>
@foreach($item2 as $i2)

<li>{{$i2}}

@endforeach
</ul>

      </p>
    </div>
    <div class="card-footer">
    <button type="button" class="btn btn-primary btn-md">Comprar</button>
    </div>
  </div>
    </div>
    <div class="col-sm">
    <div class="card">
    <img class="card-img-top" src="{{url('imagenes/12.jpg')}}">
    <div class="card-body">
      <h5 class="card-title">Alimento para gato</h5>
      <p class="card-text">
      
      <ul>
@foreach($item3 as $i3)

<li>{{$i3}}

@endforeach
</ul>
      
      </p>
    </div>
    <div class="card-footer">
    <button type="button" class="btn btn-primary btn-md">Comprar</button>
    </div>
  </div>
    </div>
  </div>
</div>

<br>
<br>

<!--//////////////////////////////////////////////////////-->

<div class="container">
  <div class="row">
    <div class="col-sm">
    <div class="card">
    <img class="card-img-top" src="{{url('imagenes/13.jpg')}}">
    <div class="card-body">
      <h5 class="card-title">Snack para gatos</h5>
      <p class="card-text">
      
      <ul>
@foreach($item4 as $i4)

<li>{{$i4}}

@endforeach
</ul>
      
      
      </p>
    </div>
    <div class="card-footer">
    <button type="button" class="btn btn-primary btn-md">Comprar</button>
    </div>
  </div>
    </div>
    <div class="col-sm">
    <div class="card">
    <img class="card-img-top" src="{{url('imagenes/14.jpg')}}">
    <div class="card-body">
      <h5 class="card-title">Comedero diseño de gato</h5>
      <p class="card-text">
      
      <ul>
@foreach($item5 as $i5)

<li>{{$i5}}

@endforeach
</ul>
      
      
</p>
    </div>
    <div class="card-footer">
    <button type="button" class="btn btn-primary btn-md">Comprar</button>
    </div>
  </div>
    </div>
    <div class="col-sm">
    <div class="card">
    <img class="card-img-top" src="{{url('imagenes/15.jpg')}}">
    <div class="card-body">
      <h5 class="card-title">Casa de juegos para gato</h5>
      <p class="card-text">
      
      <ul>
@foreach($item6 as $i6)

<li>{{$i6}}

@endforeach
</ul> 
      
      
      </p>
    </div>
    <div class="card-footer">
    <button type="button" class="btn btn-primary btn-md">Comprar</button>
    </div>
  </div>
    </div>
  </div>
</div>

<br>
<br>




@stop