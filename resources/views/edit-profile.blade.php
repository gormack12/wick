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
			        <div class="col-md-12 form-group skills">
			        	<label for="programming-language">Aptitude en programmation</label>

		        	    <input type="text" id="skillSearch" class="form-control" v-model="search" placeholder="Commencer à taper.."/>
			        	
			        	<ul class="list-group">
		        			<li class="list-group-item" v-for="(skill, index) in filteredList"><a href="javascript:void(0);" v-on:click="addSkill(index)">@{{ skill.name }}</a></li>
			        	</ul>

			        	<a class="btn btn-default btn-sm" v-show="selectedSkillsList.length > 1" v-on:click="removeAllSkill">Tout retirer</a><br /><br />

			        	<ul class="list-group">
			        		<li class="list-group-item" v-for="(skill, index) in selectedSkillsList" v-on:click="removeSkill(index)">
			        			<a class="row" href="javascript:void(0);">
			        				<div class="col-md-8">
			        				@{{ skill.name }}
				        			</div>
					        		<div class="col-md-4">
					        			<!-- <a href="javascript:void(0);" class=""> -->
					        				<i class="glyphicon glyphicon-minus warning"></i>
					        			<!-- </a> -->
					        		</div>
			        			</a>
			        		</li>
			        	</ul>

			        	<input type="text" name="skills" v-model="setSkills" v-bind:value="setSkills" />
			        	<div v-model="setSkills">@{{ setSkills }}</div>
			        </div>

			       
			    </div>
			</div>
		</form>
	</div>

<script type="text/javascript">
	class Skill {
	  	constructor(name, genre) {
	    	this.name = name;
		}
	}

	const app = new Vue ({
	  	el: '#app',
	  	data: {
	    	search: '',
	    	skills: [],
	    	selectedSkillsList: [],
		    skillsList : [
		    <?php
		    	foreach ($skills as $skill) {
		    		echo "new Skill(\n";
		    		echo "\t'".$skill->name."',\n";
		    		echo "),\n";
		    	}
		    ?>
		    ]
		},

		computed: {
			filteredList() {
				if (this.search) {
					return this.skillsList.filter(skill => {
						return skill.name.toLowerCase().includes(this.search.toLowerCase())
					})
				}
			},

			setSkills() {
				console.log(this.selectedSkillsList)
				
			},
		},

		methods: {
			addSkill: function(maskIndex) {
				var toRemove = this.filteredList[maskIndex];
				var realIndex = this.skillsList.findIndex(function(skill) {
					return skill.name.toLowerCase().localeCompare(toRemove.name.toLowerCase()) == 0;
				});
				this.selectedSkillsList.push(this.filteredList[maskIndex]);
				this.skillsList.splice(realIndex, 1);
				this.search = '';
				document.getElementById("skillSearch").focus();
			},

			removeSkill: function(index) {
				this.skillsList.push(this.selectedSkillsList[index]);
				this.selectedSkillsList.splice(index, 1);
				this.skillsList.sort(sortSkillsList);
			},

			removeAllSkill: function() {
				this.skillsList = this.skillsList.concat(this.selectedSkillsList).sort(sortSkillsList);
				this.selectedSkillsList = [];
			},

			
		}
	})

	var sortSkillsList = function (a, b) {
		return a.name > b.name;
	}

	app.skillsList.sort(sortSkillsList);
</script>
@endsection