<div class="footer">
	<div class="footer_inner_info_w3ls_agileits">
		<div class="col-md-4 footer-left">
			<a href="index.php"><img src="{{ asset('app-assets/images/matabilitas.png') }}" alt="Logo" /></a>
			<p>{!! $settings->about_site !!}</p>
			<ul class="social-nav model-3d-0 footer-social social two">
				<li>
					<a href="#" class="facebook">
						<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
					</a>
				</li>
				<li>
					<a href="#" class="twitter">
						<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
					</a>
				</li>
				<li>
					<a href="#" class="instagram">
						<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
					</a>
				</li>
			</ul>
		</div>
		<div class="col-md-7 col-md-offset-1 footer-right">
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Navigasi</h4>
					<ul>
						<li><a href="{{ route('index') }}">Home</a></li>
						<li><a href="{{ route('about') }}">Tentang Kami</a></li>
						<li><a href="{{ route('lapor') }}">Lapor</a></li>
						<li><a href="{{ route('lokasi') }}">Lokasi</a></li>
						<li><a href="{{ route('signin') }}">Masuk</a></li>
					</ul>
				</div>
				<div class="col-md-6 col-md-offset-2 sign-gd-two">
					<h4>Kontak Kami</h4>
					<div class="address">
						<div class="address-grid">
							<div class="address-left">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="address-right">
								<h6>Nomor Telepon</h6>
								<p>{{ $settings->contact_number }}</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="address-grid">
							<div class="address-left">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="address-right">
								<h6>Email</h6>
								<p>Email :<a href="{{ $settings->contact_email }}"> {{ $settings->contact_email }}</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="address-grid">
							<div class="address-left">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="address-right">
								<h6>Lokasi</h6>
								<p>{{ $settings->address }}</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>

				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">&copy 2018 Matabilitas. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a> and <a href="{{ route('index') }}"> Matabilitas</a> </p>
	</div>
</div>