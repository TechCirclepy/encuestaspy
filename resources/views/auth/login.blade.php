@extends('auth.base')

@section('content')
<div class="auth-box bg-dark border-top border-secondary">
    <div id="loginform">
        <div class="text-center p-t-20 p-b-20">
            <span class="db"><img src="{{asset('admin/assets/images/logo.png')}}" alt="logo" /></span>
        </div>
        <!-- Form -->
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') || $errors->has('telefono') ? ' has-error' : '' }}">
                <div class="row p-b-30">
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                            </div>
                            <input placeholder="Telefono o email" id="telefono" type="text" class="form-control form-control-lg" name="telefono" value="{{ old('telefono') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif

                            @if ($errors->has('telefono'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('telefono') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                </div>
                                    <input placeholder="Contraseña" id="password" type="password" class="form-control form-control-lg" name="password" aria-label="Password" aria-describedby="basic-addon1" required="" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif 
                            </div>
                            <div class="input-group mb-3">
                                <input type="checkbox" name="remember"{{ old('remember') ? 'checked' : '' }}>
                                <label for=""><b class="text-info">Recuerdame</b></label>  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top border-secondary">
                    <div class="col-12">
                        <div class="form-group">
                            <div class="p-t-20">
                                <a class="btn btn-info" href="{{ route('password.request') }}">
                                        <i class="fa fa-lock m-r-5"></i>
                                        Olvidaste tu clave?
                                </a>
                                <button type="submit" class="btn btn-success float-right">
                                        Ingresar
                                    </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
