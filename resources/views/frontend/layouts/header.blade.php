@section('header')
<body>
<!-- banner -->
<!-- <div class="banner jarallax">
<div class="agile_dot_info one"> -->
<div @yield('homepage')>
<div @yield('homepage_or_others')>
	<div class="header-top">
		<div class="container">
			<div class="w3-header-top-left">
	 			<div class="agileinfo-social-grids">
					<ul>
						<li><a href="#"><span class="fa fa-facebook"></span></a></li>
						<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						<li><a href="#"><span class="fa fa-rss"></span></a></li>
						<li><a href="#"><span class="fa fa-vk"></span></a></li>
					</ul>
				</div>
			</div>
			<div class="header-top-right">
				<p><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example1.com</a></p>
				<p><i class="fa fa-phone" aria-hidden="true"></i> +1 234 567 8901</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
		<div class="head">
			<div class="container">
					<div class="navbar-top">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
								 <div class="navbar-brand logo ">
									<h1 class="animated wow pulse" data-wow-delay=".5s">
									<a href="{{url('/')}}">Fabricator</a></h1>
								</div>

							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							 <ul class="nav navbar-nav link-effect-4">
							<!-- <li class="active"><a href="index.html" data-hover="Home">Home</a> </li> -->
                                <li @yield('index_status')><a href="{{url('/')}}" data-hover="Home">Home</a> </li>
								<li  @yield('about_status')><a href="{{url('/about')}}" data-hover="About">About </a> </li>
								<li  @yield('projects_status')><a href="{{url('/projects')}}"  data-hover="Projects">Projects</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Pages <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="icons.html">Icons</a></li>
										<li><a href="typography.html">Short Codes</a></li>
									</ul>
							  </li>
								<li @yield('contact_status')><a href="{{url('/contact')}}" data-hover="Contact">Contact</a></li>
								<li><a href="{{url('/admin/login')}}" data-hover="Contact">Login</a></li>
								<li><a href="{{url('/register')}}" data-hover="Contact">Register</a></li>
								
							  </ul>
							</div><!-- /.navbar-collapse -->
							
						

						</div>
					  <div class="clearfix"></div>	
			</div>
		</div>
            @yield('homepage_header_content')
</div>
</div>
<!-- //banner -->
@endsection