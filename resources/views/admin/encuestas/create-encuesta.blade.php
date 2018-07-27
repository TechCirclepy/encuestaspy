@extends('layouts.app')
@section('content')
<div class="container">
	@include('admin.encuestas.form', ['encuesta' => $encuesta, 'url' => '/crear-encuesta', 'method' => 'POST'])
</div>
@endsection