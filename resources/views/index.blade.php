@extends('layouts.frontend')

@section('content')
		<!-- banner -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1" class=""></li>
		<li data-target="#myCarousel" data-slide-to="2" class=""></li>
	</ol>
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<div class="container">
				<div class="carousel-caption">
					<h3>MATABILITAS</h3>
					<p>Buka Mata Peduli Sesama</p>
					<div class="top-buttons">
						<div class="bnr-button">
							<a class="act" href="single.html">Selengkapnya</a>
						</div>
						<div class="bnr-button">
							<a href="portfolio.html" class="two scroll ">Lapor</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
		<div class="item item2">
			<div class="container">
				<div class="carousel-caption">
					<h3>Berbagi Dengan Sesama</h3>
					<p>Amati Fasilitas di Sekitar Kita</p>
					<div class="top-buttons">
						<div class="bnr-button">
							<a class="act" href="single.html">Selengkapnya</a>
						</div>
						<div class="bnr-button">
							<a href="portfolio.html" class="two scroll ">Lokasi</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
		<div class="item item3">
			<div class="container">
				<div class="carousel-caption">
					<h3>Foto, Upload, dan Dapatkan Poin</h3>
					<p>Tukarkan Poin dengan Reward</p>
				</div>
			</div>
		</div>
	</div>
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="fa fa-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="fa fa-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
	<!-- The Modal -->
</div>
<!--//banner -->
<div class="services-breadcrumb">
    <div class="inner_breadcrumb">
        <ul class="short">
            <li>Home<span>|</span></li>
            <li><a href="{{ route('about') }}">Tentang Kami</a><span>|</span></li>
            <li><a href="{{ route('lapor') }}">Lapor</a><span>|</span></li>
            <li><a href="{{ route('lokasi') }}">Lokasi</a></li>
        </ul>
    </div>
</div>
<!--/ab-->
<div class="banner_bottom">
	<div class="container">
		<h3 class="tittle-w3ls">Tentang Kami</h3>
		<div class="inner_sec_info_wthree_agile">
			<div class="help_full">

				<div class="col-md-3 col-md-offset-1 banner_bottom_grid help">
					<img src="{{ asset('app-assets/images/nav.png') }}" alt="Gambar" class="img-responsive">
				</div>
				<div class="col-md-7 banner_bottom_left">
					<h4>Matabilitas | Buka Mata Peduli Sesama</h4>
					<p>Matabilitas merupakan sebuah aplikasi yang bertujuan untuk memberikan informasi mengenai suatu tempat, apakah sudah ramah bagi penyandang disabilitas atau belum. Aplikasi ini memberikan ruang bagi semua orang untuk dapat berbagi informasi mengenai suatu tempat.</p>
					<div class="ab_button">
						<a class="btn btn-primary btn-lg hvr-underline-from-left" href="single.html" role="button">Baca Lebih</a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="news-main">
			<h3 class="tittle-w3ls">Fitur Aplikasi</h3>
			<div class="col-md-4 banner_bottom_left">
				<div class="banner_bottom_pos">
					<div class="banner_bottom_pos_grid">
						<div class="col-xs-3 banner_bottom_grid_left">
							<div class="banner_bottom_grid_left_grid">
								<span class="fa fa-laptop" aria-hidden="true"></span>
							</div>
						</div>
						<div class="col-xs-9 banner_bottom_grid_right">
							<h4>Daftar</h4>
							<p>Fitur untuk mendaftarkan akun Matabilitas. Pengguna mendaftar mengisi nama, email, password, dan jenis disabilitas. Jenis disabilitas digunakan sebagai filter dalam memberikan informasi.</p>

						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<div class="col-md-4 banner_bottom_left">
				<div class="banner_bottom_pos">
					<div class="banner_bottom_pos_grid">
						<div class="col-xs-3 banner_bottom_grid_left">
							<div class="banner_bottom_grid_left_grid">
								<span class="fa fa-pencil-square-o" aria-hidden="true"></span>
							</div>
						</div>
						<div class="col-xs-9 banner_bottom_grid_right">
							<h4>Lapor</h4>
							<p>Fitur untuk melaporkan fasilitas suatu tempat terhadap disabilitas. Apakah fasilitas tersebut masih baik, rusak, maupun tidak ada. Menggugah gambar yang berhubungan dengan tempat tersebut.</p>

						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<div class="col-md-4 banner_bottom_left">
				<div class="banner_bottom_pos">
					<div class="banner_bottom_pos_grid">
						<div class="col-xs-3 banner_bottom_grid_left">
							<div class="banner_bottom_grid_left_grid">
								<span class="fa fa-newspaper-o" aria-hidden="true"></span>
							</div>
						</div>
						<div class="col-xs-9 banner_bottom_grid_right">
							<h4>Lokasi</h4>
							<p>Fitur yang menampilkan informasi mengenai suatu lokasi beserta fasilitas-fasilitas yang tersedia. Informasi berasal dari laporan-laporan dan di verifikasi oleh Tim Matabilitas.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--//ab-->
<!--/what-->
<div class="works">
	<div class="container">
		<h3 class="tittle-w3ls cen">Layanan Terbaik</h3>
		<div class="inner_sec_info_wthree_agile">
			<div class="ser-first">
				<div class="col-md-3 ser-first-grid text-center">
					<span class="fa fa-image" aria-hidden="true"></span>
					<h3>Media</h3>
					<p>Mengetahui Lokasi dan fasilitas yang tidak aman untuk disabilitas dengan media foto</p>
				</div>
				<div class="col-md-3 ser-first-grid text-center">
					<span class="fa fa-arrows-alt" aria-hidden="true"></span>
					<h3>Cakupan Luas</h3>
					<p>Laporan fasilitas umum seluruh Indonesia</p>
				</div>
				<div class="col-md-3 ser-first-grid text-center">
					<span class="fa fa-map-marker" aria-hidden="true"></span>
					<h3>Lokasi</h3>
					<p>Pilih lokasi foto laporan sesuai domisili pengguna</p>
				</div>
				<div class="col-md-3 ser-first-grid text-center">
					<span class="fa fa-gift" aria-hidden="true"></span>
					<h3>Poin dan <i>Reward</i></h3>
					<p>Dapatkan poin untuk ditukarkan dengan hadiah</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

	</div>
</div>
<!--//what-->

<!--/projects-->
<div class="banner_bottom proj">
	<div class="wrap_view">
		<h3 class="tittle-w3ls">Disabilitas</h3>
		<div class="inner_sec">
			<ul class="portfolio-categ filter">
				<li class="port-filter all active">
					<a href="#">All</a>
				</li>
                @foreach($categories as $category)
                    <li class="cat-item-{{ $category->id }}">
                        <a href="#" title="Category {{ $category->id }}">{{$category->name}}</a>
                    </li>
                @endforeach
			</ul>


			<ul class="portfolio-area">
                @foreach($posts as $post)
                    <li class="portfolio-item2" data-id="id-{{ $post->id }}" data-type="cat-item-{{$post->category->id}}">
                        <div>
							<span class="image-block img-hover">
                                <a class="image-zoom" href="{{ $post->featured }}" rel="prettyPhoto[gallery]">

                                    <img src="{{ $post->featured }}" class="img-responsive" alt="Conceit">
                                    <div class="port-info">
                                        <h5>{{ $post->title }}</h5>
                                        <p>{{ $post->city->name }}</p>
                                    </div>
                                </a>
						    </span>
                        </div>
                    </li>
                @endforeach

				<div class="clearfix"></div>
			</ul>
			<!--end portfolio-area -->
            <div class="ab_button text-center">
                <a class="btn btn-primary btn-lg hvr-underline-from-left" href="{{ route('lokasi') }}" role="button">Lihat Selengkapnya</a>
            </div>

		</div>

	</div>
</div>

<!--//projects-->

<!--/testimonials-->
<div class="tesimonials">
	<div class="container">
		<h3 class="tittle-w3ls cen">Testimoni</h3>
		<div class="inner_sec">
			<div class="test_grid_sec">
				<div class="col-md-offset-2 col-md-8">
					<div class="carousel slide two" data-ride="carousel" id="quote-carousel">
						<!-- Bottom Carousel Indicators -->
						<ol class="carousel-indicators two">
							<li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#quote-carousel" data-slide-to="1"></li>
							<li data-target="#quote-carousel" data-slide-to="2"></li>
						</ol>

						<!-- Carousel Slides / Quotes -->
						<div class="carousel-inner">

							<!-- Quote 1 -->
							<div class="item active">
								<blockquote>
									<div class="test_grid">
										<div class="col-sm-3 text-center test_img">
											<img src="{{ asset('app-assets/images/wilda.jpg') }}" class="img-responsive" alt="">

										</div>
										<div class="col-sm-9 test_img_info">
											<p>Matabilitas membantu saudara kita yang memiliki kebutuhan khusus untuk lebih mengetahui fasilitas yang mereka butuhkan. Selain itu, Matabiltas menjadi platform untuk saling berbagi informasi dan kebaikan.</p>
											<h6>Wilda Nafiatul I.</h6>
										</div>
									</div>
								</blockquote>
							</div>
							<!-- Quote 2 -->
							<div class="item">
								<blockquote>
									<div class="test_grid">
										<div class="col-sm-3 text-center test_img">
											<img src="{{ asset('app-assets/images/bilal2.jpg') }}" class="img-responsive" alt="">
										</div>
										<div class="col-sm-9 test_img_info">
											<p>Fitur yang diberikan sangat menarik dan bermanfaat, penyandang difabel dapat memanfaatkan aplikasi ini sebaik mungkin.</p>
											<h6>Putra Fisabil</h6>
										</div>
									</div>
								</blockquote>
							</div>
							<!-- Quote 3 -->
							<div class="item">
								<blockquote>
									<div class="test_grid">
										<div class="col-sm-3 text-center test_img">
											<img src="{{ asset('app-assets/images/mirza.png') }}" class="img-responsive" alt="">
										</div>
										<div class="col-sm-9 test_img_info">
											<p>Aplikasi ini menjawab keresahan para penyandang difabel yang khawatir akan fasilitas umum yang tidak tersedia bahkan membahayakan difabel.</p>
											<h6>Mirza Rizky</h6>
										</div>
									</div>
								</blockquote>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--//testimonials-->

<!-- /newsletter-->
<div class="newsletter_w3ls_agileits">


	<div class="clearfix"></div>
</div>
<!-- //newsletter-->
@endsection