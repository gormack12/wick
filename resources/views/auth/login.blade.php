@extends('layouts.app')

@section('content')
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Connexion</h3>
            </div>

            <div class="panel-body">
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="col-md-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">E-Mail Address</label>

                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-12 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password">Password</label>

                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-12 form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>

                    <div class="col-md-6 form-group">
                        <button type="submit" class="btn btn-primary">
                            Login
                        </button>
                    </div>

                    <div class="col-md-6">
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
