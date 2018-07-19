@extends('layouts.app')
@section('content')
<div class="container">
	@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>
							{{$error}}
						</li>
					@endforeach
				</ul>
			</div>
			@endif
	<h1>Agregar Empresa</h1>
	@include('admin.empresa.form', ['empresa' => $empresa, 'url' => '/empresas', 'method' => 'POST'])
</div>
@endsection