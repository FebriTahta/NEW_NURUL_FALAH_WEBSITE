@extends('layouts.master')

@section('content')
    <!--Page Header Start-->
    <section class="page-header" style="background-color: cadetblue;">
        <div class="container">
            <div class="page-header-inner">
                <h2>Contact</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li><span>/</span></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Locations Start-->
    <section class="locations">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--Locations Single-->
                    <div class="locations_three_single">
                        <div class="locations_three_title">
                            <h3>Alamat</h3>
                            <p>Pesantren Al Quran Nurul Falah</p>
                        </div>
                        <div class="locations_three_contact">
                            <p>Jl. Ketintang Timur PTT VB, Pesantren Nurul Falah Surabaya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--Locations Single-->
                    <div class="locations_three_single">
                        <div class="locations_three_title">
                            <h3>Email</h3>
                            <p>Tinggalkan Pesan ke Email Kami</p>
                        </div>
                        <div class="locations_three_contact">
                            <a href="mailto:pes_nf@yahoo.co.oid" class="mail_box">pes_nf@yahoo.co.oid</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <!--Locations Single-->
                    <div class="locations_three_single">
                        <div class="locations_three_title">
                            <h3>Telephone</h3>
                            <p>Hubungi kami langsung melalui telephone</p>
                        </div>
                        <div class="locations_three_contact">
                            <a href="tel:0318281278" class="number_box">(031) 8281278</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Locations End-->

    <!--Contact Start-->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="block-title text-left" style="text-transform: uppercase">
                        <h4>Contact Us</h4>
                        <h2>Tiggalkan Pesan</h2>
                    </div>
                    <div class="contact_text">
                        <p>Ada yang perlu disampaikan kepada kami ? ataupun ada yang mau ditanyakan kepada kami ?
                            silahkan tinggalkan pesan melalui form berikut.
                        </p>
                        <p>Atau langsung kontak kami melalui sosial media kami dibawah ini</p>
                    </div>
                    <div class="contact__social">
                        <a href="#" target="_blank"><i class="fab fa-facebook-square"></i></a>
                        <a href="mailto:pes_nf@yahoo.co.id"><i class="icon-message"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                    <form action="inc/sendemail.php" class="contact__form">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="comment_input_box">
                                    <input type="text" placeholder="Your name" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment_input_box">
                                    <input type="email" placeholder="Email address" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="comment_input_box">
                                    <input type="text" placeholder="Phone number" name="phone">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment_input_box">
                                    <input type="email" placeholder="Subject" name="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="comment_input_box">
                                    <textarea name="message" placeholder="Write message"></textarea>
                                </div>
                                <button type="submit" class="thm-btn comment-form__btn">Tinggalkan Pesan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Contact End-->

    <!--Google Map-->
    <section class="google_map">
        
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.3669660483256!2d112.72820171530392!3d-7.312607873930874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb12ae9aeeb3%3A0xf64b5d223ef0d319!2sPesantren%20Al-Qur&#39;an%20Nurul%20Falah!5e0!3m2!1sid!2sid!4v1648777140846!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </section>
@endsection