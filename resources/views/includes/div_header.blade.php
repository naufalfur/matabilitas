<div class="top_header" id="home">
		<!-- Fixed navbar -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="nav_top_fx_w3ls_agileinfo">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					    aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
					<div class="logo-w3layouts-agileits">
						<a class="navbar-brand" href="index.php"><img src="{{ asset('app-assets/images/matabilitas.png') }}" alt="Logo" /></a>
					</div>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<div class="nav_right_top">
						<ul class="nav navbar-nav">
							<li class="{{ (Request::is('/') or Request::is('index')) ? 'active' : '' }}"><a href="{{ route('index') }}">Home</a></li>
							<li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ route('about') }}">Tentang Kami</a></li>
							<li class="{{ Request::is('lapor') ? 'active' : '' }}"><a href="{{ route('lapor') }}">Lapor</a></li>
							<li class="{{ Request::is('lokasi') ? 'active' : '' }}"><a href="{{ route('lokasi') }}">Lokasi</a></li>
							<li><a></a></li>
							<li>
							<div class="bnr-button">
								<a class="act" href="{{ route('signin') }}">Masuk</a>
							</div>
							</li>
						</ul>
					</div>
				</div>
				<!--/.nav-collapse -->
			</div>
		</nav>
	</div>