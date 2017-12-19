<nav id="sidebar">
	<ul class="side-nav">
	    <li>
	    	<a href="{{ route('user.show', [Auth::user()->id, Auth::user()->username]) }}">Profil</a>
	    </li>
	    <li>
	    	<a href="{{ route('user.edit', [Auth::user()->id]) }}">Editer</a>
	    </li>
	</ul>
</nav>