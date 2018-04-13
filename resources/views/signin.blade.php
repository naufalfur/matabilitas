@extends('layouts.frontend')

@section('content')
    <div class="banner_inner_con">
    </div>

    <!--//banner_info-->
    <!-- /inner_content -->
    <div class="banner_bottom">
        <div class="container">
            <div class="tittle-w3ls_head">
                <h3 class="tittle-w3ls three">Masuk</h3>
            </div>
            <div class="inner_sec_info_wthree_agile">
                <div class="signin-form">
                    <div class="login-form-rec">
                        <form action="#" method="post">
                            <input type="email" name="email" placeholder="E-mail" required="">
                            <input type="password" name="password" placeholder="Password" required="">
                            <div class="tp">
                                <input type="submit" value="Signin">
                            </div>
                        </form>
                    </div>
                    <div class="login-social-grids">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                    <p><a href="{{ route('signup') }}">Tidak punya akun? Silahkan Daftar</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection