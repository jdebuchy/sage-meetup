<header class="banner">
	<div class="d-flex flex-column flex-md-row justify-content-md-between align-items-center p-3 px-md-4 mb-3 border-bottom shadow-sm">
	  <a class="brand" href="{{ home_url('/') }}"><img src="{{ \App\asset_path("images/logo.png") }}" class="img-fluid" alt=""></a>
	  <nav class="nav-primary my-2 my-md-0 mr-md-3">
	    @if (has_nav_menu('primary_navigation'))
	      {!! wp_nav_menu($primarymenu) !!}
	    @endif
	  </nav>
  </div>
</header>
