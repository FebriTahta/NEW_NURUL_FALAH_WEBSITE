@extends('layouts.master')

@section('content')
<section class="page-header" style="margin-bottom: 0;background-image: url({{asset('asset/images/gedung.png')}});">
    <div class="container">
        <div class="page-header-inner">
            <h2>Cabang Tilawati</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="/">Home</a></li>
                <li><span>/</span></li>
                <li>Tilawati</li>
            </ul>
        </div>
    </div>
</section>
<section class="companies" style="padding-top: 0; margin-top: 20px;">
    <div class="container" style="padding-top: 0; margin-top: 0;">
        <div class="row">
            <div class="col-lg-12" id="text-cabang">
                <div class="cabang-section" style="padding: 10px;text-align: center;">
                    <h1 style="font-size: 35px; font-weight: 700; margin-bottom: 20px;">CABANG TILAWATI</h1>
                    <p  style="font-size: 20px;" class="text-muted">Tilawati merupakan metode belajar membaca Al- Qur'an yang disampakan secara simbang antara pembiasaan melalui pendekatan klasikal dan kebenaran membaca melalui pendekatan individual dan teknik baca simak yang berkembang di berbagai wilayah di Indonesia</p>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="filter">
                    <div class="filter_inner_content">
                        <div class="left">
                            <div class="left_icon">
                                <a class="list-icon active icon-list"></a>
                            </div>
                            <div class="left_text">
                                <h4>Total 6 Cabang Ditemukan</h4>
                            </div>
                        </div>
                        <div class="right">
                            <input type="text" class="form-control" placeholder="search here..">
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($cabang as $item)
            <div class="col-xl-4 col-lg-4" >
                <div class="companies_single" style="">
                    <div class="companies_content" style="text-align: center;padding: 20px;" style="background-color: white">
                        <div class="membership_plan_icon">
                            <span class="icon-house"></span>
                        </div>
                        <div class="companies_title" style="text-align: center; padding: 10px">
                            <h3 style="text-transform: uppercase">{{$item->name}}</h3>
                        </div>
                        <div class="companies_contact_info list-unstyled" style="font-size: 16px">
                            <div>
                                <div class="text" style="color: rgb(44, 156, 156)">
                                    <i class="fas fa-phone-square-alt"> </i><a style="color: rgb(44, 156, 156)" href="tel:{{$item->telp}}"> {{$item->telp}}</a>
                                </div>
                            </div>
                            <div>
                                <div class="icon" style="color: rgb(50, 125, 168)">
                                    <i class="fa fa-map"></i>
                                </div>
                                <div class="text" >
                                    <a style="color: rgb(138, 138, 138)">{{$item->alamat}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="companies__social" >
                            @if ($item->gmap !== null)
                                <iframe class="maps" src="{{$item->gmap}}" width="250" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            @else
                                <img src="{{asset('asset/images/gedung.png')}}" style="height: 200px; width: 100%" alt="">    
                            @endif
                            
                        </div>
                    </div>
                </div>
            </div> 
            @endforeach
            
        </div>
    </div>
</section>
@endsection