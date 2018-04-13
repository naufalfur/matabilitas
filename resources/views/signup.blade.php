@extends('layouts.frontend')

@section('content')
    <div class="banner_inner_con">
    </div>
    <!--//banner_info-->
    <div class="banner_bottom">
        <div class="container">
            <div class="tittle-w3ls_head">
                <h3 class="tittle-w3ls three">Daftar</h3>
            </div>
            <div class="inner_sec_info_wthree_agile">
                <div class="signin-form">
                    <div class="login-form-rec">
                        <form action="#" method="post">
                            <input type="text" name="name" placeholder="Nama Depan" required="">
                            <input type="text" name="name" placeholder="Nama Belakang" required="">
                            <input type="email" name="email" placeholder="Email" required="">
                            <input type="password" name="password" id="password1" placeholder="Password" required="">
                            <input type="password" name="password" id="password2" placeholder="Konfirmasi Password" required="">
                            <p>Pilih jenis ketunaan/ disabilitas (bisa lebih dari 1)</p>
                            <img src="{{ asset('app-assets/images/daksa2.png') }}" alt="Logo"/>

                            <img src="{{ asset('app-assets/images/netra2.png') }}" alt="Logo"/>
                            <img src="{{ asset('app-assets/images/grahita2.png') }}" alt="Logo"/>
                            <br/>&emsp;&emsp;&nbsp;
                            <input type="checkbox" name="ketunaan" value="daksa">&emsp;&emsp;&emsp;&emsp;&ensp;
                            <input type="checkbox" name="ketunaan" value="netra">&emsp;&emsp;&emsp;&emsp;&ensp;
                            <input type="checkbox" name="ketunaan" value="grahita">&emsp;&emsp;&emsp;
                            <input type="submit" value="Daftar">
                        </form>
                    </div>
                    <p class="reg"><a href="#">Sudah punya akun? Silahkan Login</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection