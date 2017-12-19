@extends('layouts.app')

@section('content')
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Register</h3>
            </div>

            <div class="panel-body">
                <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="col-md-6 form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                        <label for="firstname">firstname</label>

                        <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>

                        @if ($errors->has('firstname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('firstname') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-6 form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                        <label for="lastname">lastname</label>

                        <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required>

                        @if ($errors->has('lastname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('lastname') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-12 form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <label for="username">username</label>

                        <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required>

                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">E-Mail Address</label>

                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password">Password</label>

                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="password-confirm">Confirm Password</label>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 form-group">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
