@extends('auth.base')
@section('content')
<div class="auth-box bg-dark border-top border-secondary">
        <div>
        <div class="text-center p-t-20 p-b-20">
            <span class="db"><!--<img src="{{asset('admin/assets/images/logo.png')}}" alt="logo" />-->
                <div class="form-inline">
                <img src="{{asset('admin/assets/images/logo-icon.png')}}" alt="homepage" class="light-logo" />
                <div style="padding: 8px;"></div>
                <h3 class="text-white text-center"><b>Encuestas PY</b></h3>
                </div>
               
            </span>
        </div>
        <!-- Form -->
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="row p-b-30">
                <div class="col-12">
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                        </div>
                        <input type="text" class="form-control form-control-lg" placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1" name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    </div>
                    <!-- email -->
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                        </div>
                        <input type="email" class="form-control form-control-lg" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="fa fa-lock"></i></span>
                        </div>
                        <input id="password" type="password" class="form-control form-control-lg" name="password"  placeholder="Contraseña" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-info text-white" id="basic-addon2"><i class="fa fa-lock"></i></span>
                        </div>
                        <input id="password-confirm" type="password" class="form-control form-control-lg" placeholder="Confirmar contraseña" name="password_confirmation" required>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-info text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                        </div>
                        <input type="text" class="form-control form-control-lg" placeholder="Telefono" aria-label="Password" aria-describedby="basic-addon1" name="telefono" required value="{{ old('telefono') }}">
                        @if ($errors->has('telefono'))
                            <span class="help-block">
                                <strong>{{ $errors->first('telefono') }}</strong>
                            </span>
                        @endif
                    </div>
                    </div>
                </div>
            </div>
            <div class="row border-top border-secondary">
                <div class="col-12">
                    <div class="form-group">
                        <div class="p-t-20">
                            <button class="btn btn-block btn-lg btn-info" type="submit">Registrarme</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
