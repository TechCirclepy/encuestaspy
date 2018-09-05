@extends('layouts.app_user')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                @foreach($empresas as $empresa)
                <a href="{{url('encuestaspy',array($empresa->id))}}">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="{{asset('imagenes/empresas/'.$empresa->foto)}}" height="320" width="150" alt="">
                            <div class="caption">
                                <h4><a href="#">{{$empresa->name}}</a>
                                </h4>
                                <p>pagina web <a target="_blank" href="http://www.bootsnipp.com">www.ejemplo.com</a>.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 encuestas</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </a>    
                @endforeach
            </div>
        </div>
        <div class="col-md-3">
            <h1>Informaciones</h1>
            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, est maxime, magnam nemo tenetur unde deleniti eius eos doloribus, labore totam rerum debitis esse harum ut. Perspiciatis quasi unde eius.</span>
            <span>Quas suscipit repudiandae neque odit enim, quasi, ullam voluptas adipisci possimus voluptates repellat est cum ut quibusdam, eaque at similique blanditiis perferendis temporibus. Voluptate quas aliquam odio, inventore harum explicabo.</span>
            <span>Error inventore sed fuga modi nesciunt iste fugit incidunt rerum pariatur. Dolorem reiciendis dolor soluta totam commodi expedita fugiat a nihil dolore modi voluptate aperiam, laborum ex sint vero debitis.</span></p>
        </div>
    </div>
</div>
@endsection