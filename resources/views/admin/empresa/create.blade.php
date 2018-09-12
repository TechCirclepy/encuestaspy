@extends('layouts.admin')
@section('content')
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
	@include('admin.empresa.form', ['empresa' => $empresa, 'url' => '/empresas', 'method' => 'POST'])
@endsection