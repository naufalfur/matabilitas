@extends('layouts.frontend')

@section('content')
        <!--/banner_info-->
<div class="banner_inner_con">
</div>
<div class="services-breadcrumb">
    <div class="inner_breadcrumb">

        <div class="services-breadcrumb">
            <div class="inner_breadcrumb">
                <ul class="short">
                    <li><a href="{{ route('index') }}">Home</a><span>|</span></li>
                    <li><a href="{{ route('about') }}">Tentang Kami</a><span>|</span></li>
                    <li><a href="{{ route('lapor') }}">Lapor</a><span>|</span></li>
                    <li>Lokasi</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--//banner_info-->
<!--/ab-->
<div class="banner_bottom proj">
    <div class="wrap_view">
        <h3 class="tittle-w3ls">Lokasi</h3>
        <div class="inner_sec_info_wthree_agile">
            <!--/projects-->
            <ul class="portfolio-categ filter">
                <li class="port-filter all active">
                    <a href="#">Semua</a>
                </li>
                @foreach($cities as $city)
                    <li class="cat-item-{{ $city->id }}">
                        <a href="#" title="Category {{ $city->id }}">{{ $city->name }}</a>
                    </li>
                @endforeach
            </ul>


            <ul class="portfolio-area">
                @foreach($posts as $post)
                    <li class="portfolio-item2" data-id="id-{{ $post->id }}" data-type="cat-item-{{$post->city->id}}">
                        <div>
							<span class="image-block img-hover">
                                <a class="image-zoom" href="{{ $post->featured }}" rel="prettyPhoto[gallery]">

                                    <img src="{{ $post->featured }}" class="img-responsive" alt="Conceit">
                                    <div class="port-info">
                                        <h5>{{ $post->title }}</h5>
                                        <p>{{ $post->category->name }}</p>
                                    </div>
                                </a>
						    </span>
                        </div>
                    </li>
                @endforeach

                <div class="clearfix"></div>
            </ul>
            <!--end portfolio-area -->

        </div>

    </div>
    <!--//projects-->

</div>
<!--//bottom-->
@endsection