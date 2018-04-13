@extends('layouts.frontend')

@section('content')
        <!--/banner_info-->
<div class="banner_inner_con">
</div>
<div class="services-breadcrumb">
    <div class="inner_breadcrumb">

        <ul class="short">
            <li><a href="{{ route('home') }}">Home</a><span>|</span></li>
            <li>Tentang Kami<span>|</span></li>
            <li><a href="{{ route('lapor') }}">Lapor</a><span>|</span></li>
            <li><a href="{{ route('lokasi') }}">Lokasi</a></li>
        </ul>
    </div>
</div>
<!--//banner_info-->

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
                    <p>Matabilitas merupakan sebuah aplikasi yang bertujuan untuk memberikan informasi mengenai suatu tempat, apakah sudah ramah bagi penyandang disabilitas atau belum. Aplikasi ini memberikan ruang bagi semua orang untuk dapat berbagi informasi mengenai suatu tempat.<br/><br/>

                        Aplikasi ini akan menerima laporan-laporan berupa informasi fasilitas suatu tempat dari semua pengguna, termasuk masyarakat non-disabilitas dengan cara mendaftarkan dirinya terlebih dahulu untuk memiliki akun. Laporan yang telah di verifikasi akan ditampilkan pada daftar tempat untuk nantinya dapat dilihat oleh semua penyadang disabilitas sesuai dengan jenis disabilitas yang dimiliki. Sehingga para penyandang disabilitas dapat mengetahui informasi mengenai tempat yang akan mereka kunjungi.<br/><br/>

                        Secara umum aplikasi ini dapat digunakan oleh semua orang, namun secara khusus aplikasi ini bertujuan untuk membantu para penyandang disabilitas.</p>
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

<!-- /team -->
<div class="banner_bottom proj">
    <div class="container">
        <h3 class="tittle-w3ls">Tim Matabilitas</h3>
        <div class="inner_sec_info_wthree_agile">
            <div class="col-md-4 team_grid_info">
                <img src="{{ asset('app-assets/images/t2.jpg') }}" alt=" " class="img-responsive" />
                <h3>Hillmar Fatkhul Ilmi </h3>
                <!--<p>CEO</p>-->

                <div class="team_icons">
                    <ul>
                        <li><a href="https://www.facebook.com/hillmar.ilmi" target="_blank" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" target="_blank" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/hillmarfi" target="_blank" class="dribble"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 team_grid_info">
                <img src="{{ asset('app-assets/images/t3.jpg') }}" alt=" " class="img-responsive" />
                <h3>Iga Alicya</h3>
                <!--<p>Project Manager</p>-->

                <div class="team_icons">
                    <ul>
                        <li><a href="https://www.facebook.com/igaalicya" target="_blank" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" target="_blank" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/iga_alicya" target="_blank" class="dribble"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>

            </div>
            <div class="col-md-4 team_grid_info">
                <img src="{{ asset('app-assets/images/t4.jpg') }}" alt=" " class="img-responsive" />
                <h3>M. Naufal Furqon </h3>
                <!--<p>HR Manager</p>-->

                <div class="team_icons">
                    <ul>
                        <li><a href="https://www.facebook.com/Akasaka77" target="_blank" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" target="_blank" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/naufalfur" target="_blank" class="dribble"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<!-- /newsletter-->
<div class="newsletter_w3ls_agileits">


    <div class="clearfix"></div>
</div>
<!-- //newsletter-->
@endsection