@extends('layouts.user')
@section('content')
<section class="text-center mb-4">
<div class="row wow fadeIn">
  @foreach($empresas as $empresa)
    @if($empresa->activo == 1)
      <?php $count=0; ?>
      @foreach($preguntas as $pregunta)
        @if($empresa->id == $pregunta->user_id and $pregunta->estado == 1)
          <?php $count+=1; ?>
        @endif
      @endforeach
        <div class="col-lg-3 col-md-3 mb-3">
          <div class="card">
            <div class="view overlay">
              @if(!empty($empresa->foto))
                <a href="{{url('encuestaspy',array($empresa->id))}}">
                <img class="card-img-top" src="{{asset('imagenes/empresas/'.$empresa->foto)}}" height="200" width="300" alt="">
                </a>
              @else
                <img src="{{asset('user/img/sample.jpg')}}" height="200" width="300" alt="">
              @endif
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <div class="card-body text-center">
              <h5>
                <strong>
                  <a id="link" href="{{url('encuestaspy',array($empresa->id))}}" class="dark-grey-text">{{$empresa->name}}
                    @if($count != 0)
                      <span class="badge badge-pill danger-color">{{$count}}</span>
                    @endif
                  </a>
                </strong>
              </h5>
            </div>
          </div>
        </div>
    @endif
  @endforeach
</div>
</section>
@endsection