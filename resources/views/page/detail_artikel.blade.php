@extends('layouts.master')

@section('head')
<link href="{{ asset('/assets3/css/detail-page.css') }}" rel="stylesheet">
<link href="{{ asset('/assets3/css/blog.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="container margin_detail_2">
    <div class="row">
        <div class="col-lg-8">
            <div class="detail_page_head clearfix">
                <div class="rating">
                    <div class="score"><span>15 view</div>
                </div>
                <div class="title">
                    <h1 style="text-transform: uppercase">selamat datang bulan ramadhan</h1>
                    12 Agustus 2022
                    <ul style="list-style: none">
                        <li><a class="badge badge-info" style="color: white; padding: 5px">Kajian Al Qur'an</a></li>
                    </ul>
                </div>
            </div>
            <!-- /detail_page_head -->
            <h6 style="margin-top: 10px">Ustadz Mim Syaiful Hadi</h6>
        </div>
        <div class="col-lg-4">
            <div class="pictures magnific-gallery clearfix">
               <figure>
                    <a href="{{asset('1.jpeg')}}" title="Photo title" data-effect="mfp-zoom-in">
                        <img src="{{asset('1.jpeg')}}" data-src="{{asset('1.jpeg')}}" class="lazy loaded" alt="" data-was-processed="true">
                    </a>
                </figure>
                <figure>
                    <a href="{{asset('1.jpeg')}}" title="Photo title" data-effect="mfp-zoom-in">
                        <img src="{{asset('1.jpeg')}}" data-src="{{asset('1.jpeg')}}" class="lazy loaded" alt="" data-was-processed="true">
                    </a>
                </figure>
                <figure>
                    <a href="{{asset('1.jpeg')}}" title="Photo title" data-effect="mfp-zoom-in">
                    <img src="{{asset('1.jpeg')}}" data-src="{{asset('1.jpeg')}}" class="lazy loaded" alt="" data-was-processed="true">
                </a>
                </figure>
                <figure>
                    <a href="{{asset('1.jpeg')}}" title="Photo title" data-effect="mfp-zoom-in">
                        <img src="{{asset('1.jpeg')}}" data-src="{{asset('1.jpeg')}}" class="lazy loaded" alt="" data-was-processed="true">
                    </a>
                </figure>
                <figure>
                    <a href="{{asset('1.jpeg')}}" title="Photo title" data-effect="mfp-zoom-in">
                        <img src="{{asset('1.jpeg')}}" data-src="{{asset('1.jpeg')}}" class="lazy loaded" alt="" data-was-processed="true">
                    </a>
                </figure>
                {{-- <figure>
                    <a href="img/detail_gallery/detail_5.jpg" title="Photo title" data-effect="mfp-zoom-in">
                        <span class="d-flex align-items-center justify-content-center">+10</span>
                        <img src="img/thumb_detail_5.jpg" data-src="img/thumb_detail_5.jpg" class="lazy loaded" alt="" data-was-processed="true">
                    </a>
                </figure> --}}
            </div>
        </div>
    </div>
    <!-- /row -->
</div>

<nav class="secondary_nav sticky_horizontal" style="background: linear-gradient(to right, #33ccff 0%, #99ffb3 100%);">
    <div class="container">
        <ul id="secondary_nav" >
            <li><a href="https://tabungamal.id" target="_blank" style="background-color: white">Amil Zakat LAZIS NF</a></li>
        </ul>
    </div>
    <span></span>
</nav>

<div class="container margin_60_20">			
    <div class="row">
        <div class="col-lg-9">
            <div class="singlepost">
                <figure><img alt="" class="img-fluid" src="{{asset('1.jpeg')}}"></figure>
                <h1>SELAMAT DATANG BULAN RAMADHAN</h1>
                <div class="postmeta">
                    <ul>
                        <li><a href="#"><i class="icon_folder-alt"></i> Kajian Al Qur'an</a></li>
                        <li><a href="#"><i class="icon_pencil-edit"></i> Ustadz Mim Syaiful Hadi</a></li>
                    </ul>
                </div>
                <!-- /post meta -->
                <div class="post-content" style="text-align: justify">
                    <div class="dropcaps">
                        <p>Aorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>

                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                </div>
                <!-- /post -->
            </div>
            <!-- /single-post -->

            <div id="comments">
                <h5>Comments</h5>
                <ul>
                    <li>
                        <div class="avatar">
                            <a href="#"><img src="img/avatar1.jpg" alt="">
                            </a>
                        </div>
                        <div class="comment_right clearfix">
                            <div class="comment_info">
                                By <a href="#">Anna Smith</a><span>|</span>25/10/2019<span>|</span><a href="#">Reply</a>
                            </div>
                            <p>
                                Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="avatar">
                            <a href="#"><img src="img/avatar1.jpg" alt="">
                            </a>
                        </div>
                    </li>
                </ul>
            </div>

            <hr>

            <br>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <input type="text" name="name" id="name2" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <input type="text" name="email" id="email2" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="form-group">
                        <input type="text" name="email" id="website3" class="form-control" placeholder="Website">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="comments" id="comments2" rows="6" placeholder="Comment"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" id="submit2" class="btn btn-primary">TINGGALKAN KOMENTAR</button>
            </div>

        </div>
        <!-- /col -->

        <aside class="col-lg-3">
            <div class="widget">
                <div class="widget-title first">
                    <h4>Latest Post</h4>
                </div>
                <ul class="comments-list">
                    <li>
                        <div class="alignleft">
                            <a href="#0"><img src="img/blog-5.jpg" alt=""></a>
                        </div>
                        <small>Category - 11.08.2016</small>
                        <h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
                    </li>
                    <li>
                        <div class="alignleft">
                            <a href="#0"><img src="img/blog-6.jpg" alt=""></a>
                        </div>
                        <small>Category - 11.08.2016</small>
                        <h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
                    </li>
                    <li>
                        <div class="alignleft">
                            <a href="#0"><img src="img/blog-4.jpg" alt=""></a>
                        </div>
                        <small>Category - 11.08.2016</small>
                        <h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
                    </li>
                </ul>
            </div>
            <!-- /widget -->
            <div class="widget">
                <div class="widget-title">
                    <h4>Categories</h4>
                </div>
                <ul class="cats">
                    <li><a href="#">Food <span>(12)</span></a></li>
                    <li><a href="#">Places to visit <span>(21)</span></a></li>
                    <li><a href="#">New Places <span>(44)</span></a></li>
                    <li><a href="#">Suggestions and guides <span>(31)</span></a></li>
                </ul>
            </div>
            <!-- /widget -->
            <div class="widget">
                <div class="widget-title">
                    <h4>Popular Tags</h4>
                </div>
                <div class="tags">
                    <a href="#">Food</a>
                    <a href="#">Bars</a>
                    <a href="#">Cooktails</a>
                    <a href="#">Shops</a>
                    <a href="#">Best Offers</a>
                    <a href="#">Transports</a>
                    <a href="#">Restaurants</a>
                </div>
            </div>
            <!-- /widget -->
        </aside>
        <!-- /aside -->
    </div>
    <!-- /row -->	
</div>
@endsection