@extends('new_layouts.master')

@section('content')
	<!-- Start of slider section
			============================================= -->
			<section id="slide" class="slider-section pt150">
				<div id="slider-item" class="slider-item-details">
					<div  class="slider-area relative-position">
						<img src="{{asset('slider.jpg')}}" alt="">
					</div>
				</div>
			</section>
	<!-- End of slider section
		============================================= -->

	<!-- Start latest section
		============================================= -->
		<section id="latest-area" class="latest-area-section home-page-three">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="latest-area-content">
							<div class="section-title-2 mb65 headline text-left "  >
								<h2>Berita <span>Terkini.</span></h2>
							
							</div>
							<div class="latest-news-posts">
								<div class="blog-post-img-content">
									<div class="blog-img-date relative-position">
										<div class="blog-thumnile">
											<img src="{{$berita->thumbnail}}" alt="">
										</div>
										<div class="course-price text-center gradient-bg">
											<span>{{ Carbon\Carbon::parse($berita->created_at)->isoFormat('D MMMM Y') }}</span>
										</div>
									</div>
									<div class="blog-title-content headline">
										<h3>
											<a href="/post/{{ $berita->jenisposting->jenis_slug }}/{{ $berita->slug }}">
												@if (strlen(strip_tags($berita->judul)) > 40)
												{{ substr(strip_tags($berita->judul), 0, 40) }}..
												@else
												{!! $berita->judul !!}
												@endif
											</a>
										</h3>
										<div class="blog-content">
											@if (strlen(strip_tags($berita->deskripsi)) > 120)
											{{ substr(strip_tags($berita->deskripsi), 0, 120) }}..
											@else
											{!! $berita->deskripsi !!}
											@endif
										</div>

										<div class="view-all-btn bold-font">
											<a href="/post/{{ $berita->jenisposting->jenis_slug }}/{{ $berita->slug }}">Read More <i class="fas fa-chevron-circle-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /latest-news -->
					<div class="col-md-4">
						<div class="latest-area-content">
							<div class="section-title-2 mb65 headline text-left "  >
								<h2>Seputar <span>Nurul Falah.</span></h2>
							</div>
							<div class="latest-news-posts">
								@foreach ($beritas as $item)
									<div class="latest-news-area "  >
										<div class="latest-news-thumbnile relative-position">
											<img src="{{$item->thumbnail}}" alt="">
											<div class="hover-search">
												<i class="fas fa-search"></i>
											</div>
											<div class="blakish-overlay"></div>
										</div>
										<div class="date-meta">
											<i class="fas fa-calendar-alt"></i> {{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}
										</div>
										<h3 class="latest-title bold-font">
											<a href="/post/{{ $item->jenisposting->jenis_slug }}/{{ $item->slug }}">
												@if (strlen(strip_tags($item->judul)) > 40)
												{{ substr(strip_tags($item->judul), 0, 40) }}..
												@else
												{!! $item->judul !!}
												@endif
											</a>
										</h3>
										<div class="course-viewer ul-li">
											<ul>
												<li>
													<a href=""><i class="fas fa-eye"></i>
														@if ($item->views !== null)
														{{$item->views}}        
													   	@else
													   	~ 0 
													   	@endif 
													</a>
												</li>
												<li><a href=""><i class="fas fa-comment-dots"></i> - </a></li>
											</ul>
										</div>
									</div>
								@endforeach
								<div class="view-all-btn bold-font ">
									<a href="/list-berita">View All News <i class="fas fa-chevron-circle-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="latest-area-content">
							<div class="section-title-2 mb65 headline text-left "  >
								<h2>Upcoming <span>Events.</span></h2>
							</div>
							<div class="latest-events "  >
								<div class="latest-event-item">
									<div class="events-date  relative-position text-center">
										<div class="gradient-bdr"></div>
										<span class="event-date bold-font">04</span>
										Juni 2022
									</div>
									<div class="event-text">
										<h3 class="latest-title bold-font"><a href="#">Diklat Standarisasi Guru Al Quran Level 1.</a></h3>
										<div class="course-meta">
											<span class="course-category"><a href="#">Diklat</a></span>
											<span class="course-author"><a href="#">Guru</a></span>
										</div>
									</div>
								</div>
							</div>

							<div class="latest-events "  >
								<div class="latest-event-item">
									<div class="events-date  relative-position text-center">
										<div class="gradient-bdr"></div>
										<span class="event-date bold-font">11</span>
										Juni 2022
									</div>
									<div class="event-text">
										<h3 class="latest-title bold-font"><a href="#">Diklat Standarisasi Guru Al Quran Level 2.</a></h3>
										<div class="course-meta">
											<span class="course-category"><a href="#">Diklat</a></span>
											<span class="course-author"><a href="#">Guru</a></span>
										</div>
									</div>
								</div>
							</div>

							<div class="latest-area-content">
								<div class="latest-video-poster relative-position mb20 "  >
									<img src="{{asset('gambar1.png')}}" alt="">
									<div class="video-play-btn text-center gradient-bg">
										<a class="popup-with-zoom-anim" href="https://www.youtube.com/watch?v=OPzTZ0A0gDc"><i class="fas fa-play"></i></a>
									</div>
								</div>
								<h3 class="latest-title bold-font "  ><a href="#">Pesantren Al Quran Nurul Falah.</a></h3>
								<p class="mb25 "  >Simak profile singkat mengenai Pesantren Al Quran Nurul Falah Surabaya berikut ini.</p>
								<div class="view-all-btn bold-font "  >
									<a href="https://www.youtube.com/channel/UC1Xkdp_DKN0hJL85UWxH_Gg/playlists" target="_blank">View All Youtube <i class="fas fa-chevron-circle-right"></i></a>
								</div>
							</div>

							{{-- <div class="view-all-btn bold-font "  >
								<a  href="#">Check Calendar   <i class="fas fa-calendar-alt"></i></a>
							</div> --}}
						</div>
					</div>
					<!-- /events -->

					<div class="col-md-4" style="display: none">
						<div class="latest-area-content">
							<div class="section-title-2 mb65 headline text-left "  >
								<h2>Video <span>Profil.</span></h2>
							</div>
							<div class="latest-video-poster relative-position mb20 "  >
								<img src="{{asset('gambar1.png')}}" alt="">
								<div class="video-play-btn text-center gradient-bg">
									<a class="popup-with-zoom-anim" href="https://www.youtube.com/watch?v=OPzTZ0A0gDc"><i class="fas fa-play"></i></a>
								</div>
							</div>
							<h3 class="latest-title bold-font "  ><a href="#">Pesantren Al Quran Nurul Falah.</a></h3>
							<p class="mb25 "  >Simak profile singkat mengenai Pesantren Al Quran Nurul Falah Surabaya berikut ini.</p>
							<div class="view-all-btn bold-font "  >
								<a href="https://www.youtube.com/channel/UC1Xkdp_DKN0hJL85UWxH_Gg/playlists" target="_blank">View All Youtube <i class="fas fa-chevron-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /. -->
				</div>
			</div>
		</section>
	<!-- End latest section
		============================================= -->

	<!-- Start why choose section
		============================================= -->
		
		{{-- <section id="why-choose" class="why-choose-section backgroud-style"> --}}
			<section id="why-choose" class="backgroud-style">
				<img src="{{asset('mashilmi.png')}}" alt="">
			</section>
			
	<!-- End why choose section
		============================================= -->

	<!-- Start popular course
		============================================= -->
		<section id="popular-course" class="popular-course-section popular-three">
			<div class="container">
				<div class="section-title mb45 headline text-left "  >
					<span class="subtitle text-uppercase">Hot Topics</span>
					<h2><span>Artikel</span> Terbaru.</h2>
				</div>
				
				<div id="course-slide-item" class="course-slide">
					@foreach ($artikels as $item)
						<div class="course-item-pic-text">
							<div class="course-pic relative-position mb25 "  >
								<img src="{{$item->thumbnail}}" alt="">
								<div class="course-price text-center gradient-bg">
									<span>{{$item->kategoriposting->name}}</span>
								</div>
								<div class="course-details-btn">
									<a href="#">Selengkapnya <i class="fas fa-arrow-right"></i></a>
								</div>
							</div>
							<div class="course-item-text">
								<div class="course-meta">
									<span class="course-category"><a href="#" class="text-capitalize">{{$item->sumberposting->name}}</a></span>
									<span class="course-author bold-font"><a href="#">{{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM Y') }}</a></span>
									<div class="course-rate">
										<span class="trend-badge text-uppercase bold-font"><i class="fas fa-bolt"></i> TRENDING</span>
									</div>
								</div>
								<div class="course-title mt10 headline pb45 relative-position">
									<h3>
										<a href="#" class="text-uppercase">
											@if (strlen($item->judul) > 20)
												{{ substr($item->judul, 0, 20) }}..
											@else
												{{ $item->judul }}
											@endif
										</a> 
									</h3>
								</div>
								
								<div class="course-viewer ul-li">
									<ul>
										<li style="width: 25%"><a href=""><i class="fas fa-eye"></i> 1.220</a></li>
										<li style="width: 25%"><a href=""><i class="fas fa-comment-dots"></i> 0</a></li>
										<li style="width: 47%">
											<div class="view-all-btn bold-font" >
												<a href="/post/{{ $item->jenisposting->slug }}/{{ $item->slug }}">Read More <i class="fas fa-chevron-circle-right"></i></a>
											</div>
										</li>
									</ul>
								</div>
								
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</section>
	<!-- End popular course
		============================================= -->



	<!-- Start of best course
		============================================= -->
		<section id="best-course" class="best-course-section best-course-v2">
			<div class="container">
				<div class="section-title mb45 headline text-center "  >
					<span class="subtitle text-uppercase">DIKLAT / PELATIHAN</span>
					<h2>Diklat / Pelatihan<span> Mendatang.</span></h2>
				</div>
				<div class="best-course-area mb45">
					<div class="row">
						<div class="col-md-3">
							<div class="best-course-pic-text relative-position "  >
								<div class="best-course-pic relative-position">
									<img src="{{asset('gambar1.jpeg')}}" alt="">
									<div class="trend-badge-2 text-center text-uppercase">
										<i class="fas fa-bolt"></i>
										<span>Trending</span>
									</div>
									<div class="course-price text-center gradient-bg">
										<span>175k</span>
									</div>
									<div class="course-rate ul-li">
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
									<div class="course-details-btn">
										<a href="#">COURSE DETAIL <i class="fas fa-arrow-right" ></i></a>
									</div>
									<div class="blakish-overlay"></div>
								</div>
								<div class="best-course-text">
									<div class="course-title mb20 headline relative-position">
										<h3><a href="#">Diklat Standarisasi Guru Al Quran Level 1.</a></h3>
									</div>
									<div class="course-meta">
										<span class="course-category"><a href="#">Diklat</a></span>
										<span class="course-author"><a href="#">250 Guru</a></span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="best-course-pic-text relative-position "  >
								<div class="best-course-pic relative-position">
									<img src="{{asset('diklat1.jpeg')}}" alt="">
									<div class="trend-badge-2 text-center text-uppercase">
										<i class="fas fa-bolt"></i>
										<span>Trending</span>
									</div>
									<div class="course-price text-center gradient-bg">
										<span>200k</span>
									</div>
									<div class="course-rate ul-li">
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
									<div class="course-details-btn">
										<a href="#">COURSE DETAIL <i class="fas fa-arrow-right" ></i></a>
									</div>
									<div class="blakish-overlay"></div>
								</div>
								<div class="best-course-text">
									<div class="course-title mb20 headline relative-position">
										<h3><a href="#">Diklat Standarisasi Guru Al Quran Level 2.</a></h3>
									</div>
									<div class="course-meta">
										<span class="course-category"><a href="#">Diklat</a></span>
										<span class="course-author"><a href="#">250 Guru</a></span>
									</div>
								</div>
							</div>
						</div>
						<!-- /course -->
					</div>
				</div>
				<div class="container">
					<div class="best-product-section third-home-version">
						<div class="section-title-2 mb65 headline text-left "  >
							<h2>Best <span>Products.</span></h2>
						</div>
						<div id="best-product-slide-item" class="best-product-slide">
							<div class="product-img-text "  >
								<div class="product-img text-center mb20">
									<img src="https://tilawati.id/cdn/uploads/120210303143020.jpg" alt="">
								</div>
								<div class="product-text-content relative-position">
									<div class="best-title-price float-left">
										<div class="course-title headline">
											<h3><a href="#">Quran Waqof & Ibtida'</a></h3>
										</div>
										<div class="price-start">
											Rp -
										</div>
									</div>
									<div class="add-cart text-center">
										<i class="fas fa-cart-plus"></i>
									</div>
								</div>
							</div>
	
							<div class="product-img-text "  >
								<div class="product-img text-center mb20">
									<img src="https://tilawati.id/cdn/uploads/120210303142945.jpg" alt="">
								</div>
								<div class="product-text-content relative-position">
									<div class="best-title-price float-left">
										<div class="course-title headline">
											<h3><a href="#">Tilawati Hard Cover.</a></h3>
										</div>
										<div class="price-start">
											Rp -
										</div>
									</div>
									<div class="add-cart text-center">
										<i class="fas fa-cart-plus"></i>
									</div>
								</div>
							</div>
							<div class="product-img-text "  >
								<div class="product-img text-center mb20">
									<img src="https://tilawati.id/cdn/uploads/120210303143001.jpg" alt="">
								</div>
								<div class="product-text-content relative-position">
									<div class="best-title-price float-left">
										<div class="course-title headline">
											<h3><a href="#">Panduan 7 Lagu tartil.</a></h3>
										</div>
										<div class="price-start">
											Rp -
										</div>
									</div>
									<div class="add-cart text-center">
										<i class="fas fa-cart-plus"></i>
									</div>
								</div>
							</div>
							<div class="product-img-text "  >
								<div class="product-img text-center mb20">
									<img src="https://tilawati.id/cdn/uploads/120210303142916.jpg" alt="">
								</div>
								<div class="product-text-content relative-position">
									<div class="best-title-price float-left">
										<div class="course-title headline">
											<h3><a href="#">Terjemah Lafdziyah.</a></h3>
										</div>
										<div class="price-start">
											Rp -
										</div>
									</div>
									<div class="add-cart text-center">
										<i class="fas fa-cart-plus"></i>
									</div>
								</div>
							</div>
							<div class="product-img-text "  >
								<div class="product-img text-center mb20">
									<img src="https://tilawati.id/cdn/uploads/120210303143201.jpg" alt="">
								</div>
								<div class="product-text-content relative-position">
									<div class="best-title-price float-left">
										<div class="course-title headline">
											<h3><a href="#">VCD Lagu Ros Juz 1.</a></h3>
										</div>
										<div class="price-start">
											Rp -
										</div>
									</div>
									<div class="add-cart text-center">
										<i class="fas fa-cart-plus"></i>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
		</section>
	<!-- End of best course
		============================================= -->

		
	<!-- Start of genius teacher v2
		============================================= -->
		<section id="genius-teacher-2" class="genius-teacher-section-2">
			
		</section>
	<!-- End of genius teacher v2
		============================================= -->


	

		
	<!-- Start of sponsor section
		============================================= -->
		{{-- <section id="sponsor" class="sponsor-section">
			<div class="container">
				<div class="section-title-2 mb65 headline text-left">
					<h2>Genius <span>Sponsors.</span></h2>
				</div>
				
			</div>
		</section> --}}
	<!-- End of sponsor section
		============================================= -->		

	<!-- Start of contact area
		============================================= -->
		<section id="contact-area" class="contact-area-section backgroud-style">
			<div class="container">
				<div class="contact-area-content">
					<div class="row">
						<div class="col-md-6">
							<div class="contact-left-content">
								<div class="section-title  mb45 headline text-left">
									<span class="subtitle ml42  text-uppercase">CONTACT US</span>
									<h2><span>Nurul Falah</span></h2>
									<h5 class="text-white">
										Anda dapat menghubungi kami melalui kontak yang tertera dibawah ini.
									</h5>
								</div>

								<div class="contact-address">
									<div class="contact-address-details">
										<div class="address-icon relative-position text-center float-left">
											<i class="fas fa-map-marker-alt"></i>
										</div>
										<div class="address-details ul-li-block">
											<ul>
												<li><span>Utama: </span>Jl. Ketintang Timur PTT VB, Pesantren Nurul Falah.</li>
											</ul>
										</div>
									</div>

									<div class="contact-address-details">
										<div class="address-icon relative-position text-center float-left">
											<i class="fas fa-phone"></i>
										</div>
										<div class="address-details ul-li-block">
											<ul>
												<li><a href="tel:0318281278"><span>Utama: </span>(031) 8281278</a></li>
												<li><a href="tel:081235761862"><span>Kedua: </span>(+62) 81235761862</a></li>
											</ul>
										</div>
									</div>

									<div class="contact-address-details">
										<div class="address-icon relative-position text-center float-left">
											<i class="fas fa-envelope"></i>
										</div>
										<div class="address-details ul-li-block">
											<ul>
												<li><a href="mailto:pes_nf@yahoo.co.id"><span>Utama: </span>pes_nf@yahoo.co.id</a></li>
												<li><a href="mailto:nurulfalah_2017@gmail.com"><span>Kedua: </span>nurulfalah_2017@gmail.com</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="genius-btn mt60 gradient-bg text-center text-uppercase ul-li-block bold-font">
								<a href="#">Contact Us <i class="fas fa-caret-right"></i></a>
							</div>
						</div>

						<div class="col-md-6">
							<div id="contact-map" class="contact-map-section">
								<div id="google-map">
									{{-- <div id="googleMaps" class="google-map-container"></div> --}}
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.3669660483256!2d112.72820171530392!3d-7.312607873930874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb12ae9aeeb3%3A0xf64b5d223ef0d319!2sPesantren%20Al-Qur&#39;an%20Nurul%20Falah!5e0!3m2!1sid!2sid!4v1652858211547!5m2!1sid!2sid" width="820" height="590" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div><!-- /#google-map-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of contact area
		============================================= -->
@endsection



 	