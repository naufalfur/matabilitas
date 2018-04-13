@extends('layouts.frontend')

@section('content')
    <div class="banner_inner_con">
    </div>
    <div class="services-breadcrumb">
        <div class="inner_breadcrumb">
            <ul class="short">
                <li><a href="{{ route('index') }}">Home</a><span>|</span></li>
                <li><a href="{{ route('about') }}">Tentang Kami</a><span>|</span></li>
                <li>Lapor<span>|</span></li>
                <li><a href="{{ route('lokasi') }}">Lokasi</a></li>
            </ul>
        </div>
    </div>
        <!--//banner_info-->
        <!--/ab-->
        <div class="banner_bottom">
            <div class="container">
                <h3 class="tittle-w3ls">Lapor</h3>
                <!-- Form Laporan -->
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading" >Membuat Laporan Fasilitas</div>

                        <div class="panel-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="title">Judul</label>
                                    <input type="text" id="title" name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="featured">Foto Kerusakan</label>
                                    <input type="file" id="featured" name="featured" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="category">Kategori Disabilitas</label>
                                    <select name="category_id" id="category" class="form-control">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="category">Kota Disabilitas</label>
                                    <select name="city_id" id="city" class="form-control">
                                        @foreach($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="content_post">Content</label>
                                    <textarea name="content_post" id="content_post" rows="5" cols="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="text-center">
                                        <button class="btn btn-info" type="submit">Laporkan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--//projects-->

        </div>
        <!--//bottom-->
@endsection