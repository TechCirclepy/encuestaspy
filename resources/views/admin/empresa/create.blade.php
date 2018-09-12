@extends('layouts.admin')
@section('content')
	@include('admin.empresa.mensajes')
	@include('admin.empresa.form', ['empresa' => $empresa, 'url' => '/empresas', 'method' => 'POST'])
@endsection