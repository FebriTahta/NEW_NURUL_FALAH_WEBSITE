@extends('layouts.master')

@section('content')
<a href="https://tabungamal.id/ramadhan" target="_blank" style="margin-top: 0; padding-top: 0;">
    <img id="tabungamal-mobile" src="{{ asset('bersamaquran.png') }}" style="max-width: 100%" alt="">
</a>
<section class="listing_details_bottom" style="background-color: rgb(32, 175, 175);" >
   
    <div class="container">
        <div class="row">
            <div class="col-xl-12" >
                <div class="listing_details_bottom_left">
                    <div class="listing_details_bottom_left_content" >
                        <ul class="post_rating_and_view_list list-unstyled" >
                            <li style="color: white; text-transform: uppercase"><i class="fas fa-video-camera" style="color: white"></i> Daftar Media Nurul Falah Surabaya</li>
                            <li style="color: white;"><small>Pilih salah satu jenis media yang kamu minati..</small></li>
                        </ul>
                    </div>
                </div>
                <div class="listing_details_bottom_right">
                    <div class="listing_details_bottom_right_btn">
                        @foreach ($post as $item)
                        <a style="margin-bottom: 10px" href="/media/{{$item->slug}}"><i class="fa fa-newspaper"></i>{{$item->name}} selengkapnya..</a>
                        @endforeach
                        {{-- <a href="https://tabungamal.id" target="_blank" aria-disabled="true" style="margin-bottom: 10px"><i class="fa fa-arrow-right"></i> Lazis Nurul Falah</a> --}}
                        {{-- <a style="margin-bottom: 10px" href="/contact"><i class="fa fa-envelope"></i>Contact</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cities_one" style="padding-top: 20px; margin-top: 20px; padding-bottom: 0; margin-bottom: 0;">
    <div class="container">
        <div class="owl-carousel owl-theme categories_carousel owl-loaded owl-drag">
            <div class="owl-stage-outer">
                <div class="owl-stage"
                    style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 996px; padding-left: 50px; padding-right: 50px;">
                    @foreach ($artikels as $key => $item)
                        <div class="owl-item active" style="width: 108px; margin-right: 20px;">
                            <div class="item_version_2">
                                <a href="/post/{{ $item->jenisposting->slug }}/{{ $item->slug }}">
                                    <figure>
                                        <span>{{ $key }}</span>
                                        <img src="{{ asset('img_thumbnail/' . $item->thumbnail) }}"
                                            data-src="{{ asset('img_thumbnail/' . $item->thumbnail) }}"
                                            alt="" class="owl-lazy" width="350" height="450"
                                            style="opacity: 1;">
                                        <div class="info">
                                            <h3 style="font-size: 10px">{{ $item->kategoriposting->name }}</h3>
                                            <small style="font-size: 8px">
                                                @if (strlen($item->judul) > 20)
                                                    {{ substr($item->judul, 0, 20) }}..
                                                @else
                                                    {{ $item->judul }}
                                                @endif
                                            </small>
                                        </div>
                                    </figure>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev disabled"><i
                        class="arrow_left"></i></button><button type="button" role="presentation"
                    class="owl-next"><i class="arrow_right"></i></button></div>
            <div class="owl-dots disabled"></div>
        </div>
    </div>
    <div class="container" style="padding-bottom: 0; margin-bottom: 0;">
        <hr style="background: linear-gradient(to right, #3369ff 0%, #99ffb3 100%)">
    </div>
</section>
@endsection