@extends('principal')
@section('content')

<br>
<br>
<br>

<div class="container">
  <div class="row">
    <div class="col-sm">
    <div class="card">
    <img class="card-img-top" src="{{url('imagenes/4.jpg')}}">
    
    <div class="card-body">
      <h5 class="card-title">Juguete pelota para perro</h5>
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
    <img class="card-img-top" src="{{url('imagenes/5.jpg')}}">
    <div class="card-body">
      <h5 class="card-title">Plato de comer lento para perro</h5>
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
    <img class="card-img-top" src="{{url('imagenes/6.jpg')}}">
    <div class="card-body">
      <h5 class="card-title">Snack para perro adulto</h5>
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
    <img class="card-img-top" src="{{url('imagenes/7.jpg')}}">
    <div class="card-body">
      <h5 class="card-title">Juguete con forma perrito</h5>
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
    <img class="card-img-top" src="{{url('imagenes/8.jpg')}}">
    <div class="card-body">
      <h5 class="card-title">Alimento para perro</h5>
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
    <img class="card-img-top" src="{{url('imagenes/9.jpg')}}">
    <div class="card-body">
      <h5 class="card-title">Juguete antiestres para perro</h5>
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