@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6">
    	<div class="row">
	      <div class="col-sm-4 col-lg-4 col-md-4">
	            <div class="thumbnail">
	                <img src="http://placehold.it/320x150" alt="">
	                <div class="caption">
	                    <h4><a href="{{ url('/empresas') }}">Empresas</a>
	                    </h4>
	                    <p>Administra las empresas</p>
	                </div>
	            </div>
	        </div>
	    </div>
    </div>
    <div class="col-sm-6">
      <div class="row">
	      <div class="col-sm-4 col-lg-4 col-md-4">
	            <div class="thumbnail">
	                <img src="http://placehold.it/320x150" alt="">
	                <div class="caption">
	                    <h4><a href="#">Encuesta</a>
	                    </h4>
	                    <p>Administra las encuestas</p>
	                </div>
	            </div>
	        </div>
	    </div>
    </div>
  </div>
</div>
@endsection