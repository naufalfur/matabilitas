@extends('layouts.frontend')

@section('content')
    <!--/banner_info-->
    <div class="banner_inner_con">
    </div>
    <!--//banner_info-->
    <!-- /inner_content -->
    <div class="banner_bottom">
        <div class="container">
            <h3 class="tittle-w3ls">Profil</h3>
            <div class="inner_sec_info_wthree_agile">
                <div class="signin-form">
                    <div class="col-md-3 col-md-offset-2 banner_bottom_grid help">
                        <img src="{{ $profile->avatar }}" alt="Gambar" class="img-responsive">
                    </div>
                    <div class="col-md-7 login-form-rec ">
                        <form action="#" method="post">
                            <p>Nama Depan</p>
                            <input type="text" name="name" value="{{ $first_name }}" required="" disabled>
                            <p>Nama Belakang</p>
                            <input type="text" name="name"  value="{{ $last_name }}" required="" disabled>
                            <p>Email</p>
                            <input type="email" name="email" value="{{ $profile->user->email }}" placeholder="Email" required="" disabled>
                            <p>Jenis Disabilitas</p>
                            <input type="text" name="ketunaan" value="Tuna Netra" disabled>
                        </form>
                    </div>
                    <p class="reg"><a href="#"> </a></p>

                </div>
            </div>
        </div>
    </div>
@endsection