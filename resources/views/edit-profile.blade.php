@extends('layouts.app')

@section('content')
		<div class="col-md-4">
	        <form method="POST" action="{{ route('register') }}">
		            {{ csrf_field() }}
        		<div class="panel panel-default">

					<div class="panel-body">

			            <div class="col-md-6 form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
			                <label for="firstname">prénom</label>
			                
			                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ $user->firstname }}" required autofocus>

			                @if ($errors->has('firstname'))
			                    <span class="help-block">
			                        <strong>{{ $errors->first('firstname') }}</strong>
			                    </span>
			                @endif
			            </div>

			            <div class="col-md-6 form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
			                <label for="lastname">nom</label>
		                    
		                    <input id="lastname" type="text" class="form-control" name="lastname" value="{{ $user->lastname }}" required>

		                    @if ($errors->has('lastname'))
		                        <span class="help-block">
		                            <strong>{{ $errors->first('lastname') }}</strong>
		                        </span>
		                    @endif
			            </div>

			            <div class="col-md-12">
				            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
				                <label for="username">username</label>

			                    <input id="username" type="text" class="form-control" name="username" value="{{ $user->username }}" required>

			                    @if ($errors->has('username'))
			                        <span class="help-block">
			                            <strong>{{ $errors->first('username') }}</strong>
			                        </span>
			                    @endif
				            </div>

				            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
				                <label for="email">adresse E-Mail</label>

			                    <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>

			                    @if ($errors->has('email'))
			                        <span class="help-block">
			                            <strong>{{ $errors->first('email') }}</strong>
			                        </span>
			                    @endif
				            </div>
				        </div>
			    	</div>
			    </div>

        		<div class="panel panel-default">
				    <div class="panel-body">
				        <div class="col-md-6 form-group skills">
				        	<label for="programing-language">languages de programmation</label>

				        	<input type="text" class="form-control" />

				        	<ul class="list-group">
				        		
				        	</ul>
				        </div>

				        <div class="col-md-6 form-group skills">
				        	<label for="dbms">sgbd</label>

				        	<input type="text" class="form-control" />

				        	<ul class="list-group">
				        		@foreach ($dbms as $item)
				        			<li class="list-group-item">{{ $item->name }}</li>
				        		@endforeach
				        	</ul>
				        </div>

				        <div class="col-md-6 form-group skills">
				        	<label for="programming-language">application mobile</label>

				        	<input type="text" class="form-control" />

				        	<ul class="list-group">
					        	@foreach ($mobile_os as $item)
				        			<li class="list-group-item">{{ $item->name }}</li>
				        		@endforeach
				        	</ul>
				        </div>

				        <div class="col-md-6 form-group skills">
				        	<label for="dbms">frameworks</label>

				        	<input type="text" class="form-control" />

				        	<ul class="list-group">
					        	@foreach ($frameworks as $item)
				        			<li class="list-group-item">{{ $item->name }}</li>
				        		@endforeach
				        	</ul>
				        </div>
				    </div>
				</div>
			</form>
		</div>s
@endsection