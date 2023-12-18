     @extends('partials.main')

     @section('contenu')

      <!-- Slider -->
      <header class="slider">
        <div class="main-slider">
           <div class="swiper-wrapper">
              <div class="swiper-slide">
                 <div class="slide-image wow fadeInUp" data-wow-delay="0.3s" data-background="{{asset('assets/wp-content/uploads/2022/06/slider1.jpg')}}"></div>
                 <div class="container">
                    <h1>There Is No Room <br>
                       For Excuses In Health
                    </h1>
                    <p>Get the best healthcare with our competent and experienced staff. </p>
                    <div class="bosluks2"></div>
                    <div class="or">
                       <a href="#">Learn More →</a>
                    </div>
                 </div>
              </div>
              <div class="swiper-slide">
                 <div class="slide-image wow fadeInUp" data-wow-delay="0.3s" data-background="{{asset('assets/wp-content/uploads/2022/06/slider2.jpg')}}"></div>
                 <div class="container">
                    <h1>For A <br>
                       Healthier Life
                    </h1>
                    <p>We are at your service for a healthier life. </p>
                    <div class="bosluks2"></div>
                    <div class="or">
                       <a href="#">Learn More →</a>
                    </div>
                 </div>
              </div>
              <div class="swiper-slide">
                 <div class="slide-image wow fadeInUp" data-wow-delay="0.3s" data-background="{{asset('assets/wp-content/uploads/2022/06/slider3.jpg')}}"></div>
                 <div class="container">
                    <h1>Competent <br>
                       Experienced Physicians
                    </h1>
                    <p>Your health is in safe hands with our expert and experienced staff. </p>
                    <div class="bosluks2"></div>
                    <div class="or">
                       <a href="#">Learn More →</a>
                    </div>
                 </div>
              </div>
              <div class="swiper-slide">
                 <div class="slide-image wow fadeInUp" data-wow-delay="0.3s" data-background="{{asset('assets/wp-content/uploads/2022/06/slider4.jpg')}}"></div>
                 <div class="container">
                    <h1>Do Not Delay <br>
                       Your Health
                    </h1>
                    <p>Your health is everything. </p>
                    <div class="bosluks2"></div>
                    <div class="or">
                       <a href="#">Learn More →</a>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <div class="button-prev">❮</div>
        <div class="button-next">❯</div>
        <div class="swiper-pagination"></div>
     </header>

     <section class="departments">
        <div class="h-yazi-ortalama h-yazi-margin-orta-3 wow fadeInUp" data-wow-delay="0.4s">
           <h2 class="h2-baslik-hizmetler-2 wow fade">Our Departments</h2>
           <p class="h2-baslik-hizmetler-2__paragraf wow fade animated">
              We provide you the best service with our strong staff and high technology.
           </p>
        </div>
        <div class="bosluk3ps"></div>
        <div class="container">
           <div class="row">
              <div class="col-lg-3 wow bounceInLeft" data-wow-delay="0.5s">
                 <div class="dep" onclick="location.href='urology/index.html';" style="cursor:pointer;">
                    <div class="icon"><i class="flaticon-uterus"></i></div>
                    <h3 class="baslik-3 h-yazi-margin-kucuk1">Urology</h3>
                 </div>
              </div>
              <div class="col-lg-3 wow bounceInLeft" data-wow-delay="0.6s">
                 <div class="dep" onclick="location.href='gastroenterology/index.html';" style="cursor:pointer;">
                    <div class="icon"><i class="flaticon-intestines"></i></div>
                    <h3 class="baslik-3 h-yazi-margin-kucuk1">Gastroenterology</h3>
                 </div>
              </div>
              <div class="col-lg-3 wow bounceInRight" data-wow-delay="0.7s">
                 <div class="dep" onclick="location.href='chest-diseases/index.html';" style="cursor:pointer;">
                    <div class="icon"><i class="flaticon-human-lungs"></i></div>
                    <h3 class="baslik-3 h-yazi-margin-kucuk1">Chest Diseases</h3>
                 </div>
              </div>
              <div class="col-lg-3 wow bounceInRight" data-wow-delay="0.8s">
                 <div class="dep" onclick="location.href='cardiac-surgery/index.html';" style="cursor:pointer;">
                    <div class="icon"><i class="flaticon-heart-1"></i></div>
                    <h3 class="baslik-3 h-yazi-margin-kucuk1">Cardiac Surgery</h3>
                 </div>
              </div>
              <div class="col-lg-3 wow bounceInLeft" data-wow-delay="0.5s">
                 <div class="dep" onclick="location.href='radiology/index.html';" style="cursor:pointer;">
                    <div class="icon"><i class="flaticon-medical-1"></i></div>
                    <h3 class="baslik-3 h-yazi-margin-kucuk1">Radiology</h3>
                 </div>
              </div>
              <div class="col-lg-3 wow bounceInLeft" data-wow-delay="0.6s">
                 <div class="dep" onclick="location.href='dental-diseases/index.html';" style="cursor:pointer;">
                    <div class="icon"><i class="flaticon-human-teeth"></i></div>
                    <h3 class="baslik-3 h-yazi-margin-kucuk1">Dental Diseases</h3>
                 </div>
              </div>
              <div class="col-lg-3 wow bounceInRight" data-wow-delay="0.7s">
                 <div class="dep" onclick="location.href='gynecology-obstetrics/index.html';" style="cursor:pointer;">
                    <div class="icon"><i class="flaticon-human-fetus"></i></div>
                    <h3 class="baslik-3 h-yazi-margin-kucuk1">Gynecology & Obstetrics</h3>
                 </div>
              </div>
              <div class="col-lg-3 wow bounceInRight" data-wow-delay="0.8s">
                 <div class="dep" onclick="location.href='brain-surgery/index.html';" style="cursor:pointer;">
                    <div class="icon"><i class="flaticon-brain"></i></div>
                    <h3 class="baslik-3 h-yazi-margin-kucuk1">Brain Surgery</h3>
                 </div>
              </div>
           </div>
        </div>
        <div class="bosluksv"></div>
        <div class="container">
           <div class="row">
              <div class="col-md-12 wow fadeInUp" data-wow-delay="0.6s">
                 <div class="ortabuton">
                    <a href="all-departments/index.html" class="custom-button">All Departments →</a>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!--About Info Alanı-->
     <div class="bosluk8"></div>
     <section class="hakkimizda-bolumu-anasayfa">
        <div class="h-yazi-ozel h-yazi-margin-ozel"></div>
        <div class="tablo">
           <div class="tablo--1-ve-2 wow rollIn" data-wow-delay="0.5s">
              <div class="galeri1">
                 <img class="imagerotate" src="{{asset('assets/wp-content/uploads/2022/06/medidoc-technology.png')}}" alt="" >
              </div>
              <div class="galeri wow slideInUp" data-wow-delay="100ms" data-wow-duration="1500ms" data-tilt>
                 <img src="{{asset('assets/wp-content/uploads/2022/06/medidoc-about.png')}}" alt="Webone About" class="galeri__gorsel galeri__gorsel--3 zimage">
              </div>
           </div>
           <!--Galeri Görsel Alanı-->
           <div class="tablo--1-ve-3 wow fadeInUp" data-wow-delay="0.5s">
              <h2 class="h2-baslik-anasayfa-ozel wow fadeInUp" data-wow-delay="0.6s"> New Generation High Technology </h2>
              <div class="bosluk333"></div>
              <p class="paragraf wow fadeInRight" data-wow-delay="0.6s">
              <p class="paragraf wow fade animated">We provide services in our hospital by moving forward with confidence with constantly renewed technology and future-oriented investments. It receives reports with state-of-the-art devices. We start the treatment by making the correct diagnosis with our specialist physicians.</p>
              <div class="bosluk333"></div>
              <img class="divider" width="120" height="15" title="divider" alt="divider" src="{{asset('assets/wp-content/uploads/2022/05/divider.jpg')}}">
              <div class="bosluk333"></div>
              <div class="row">
                 <div class="col-sm-2 wow  fadeInRight" data-wow-delay="0.7s">
                    <div class="iconleft"><i class="flaticon-medicine-1"></i></div>
                 </div>
                 <div class="col-sm-10 wow fadeInRight" data-wow-delay="0.8s">
                    <h3 class="baslik-3s h-yazi-margin-kucuk1">Safe Treatment</h3>
                    <br>
                    <p class="paragraf-info">We treat you safely with our expert staff in the field.</p>
                    <br>
                 </div>
              </div>
              <div class="bosluk13qs"></div>
              <div class="row">
                 <div class="col-sm-2 wow fadeInRight" data-wow-delay="0.9s">
                    <div class="iconleft"><i class="flaticon-medical-history"></i></div>
                 </div>
                 <div class="col-sm-10 wow fadeInRight" data-wow-delay="1s">
                    <h3 class="baslik-3s h-yazi-margin-kucuk1">Quick Result</h3>
                    <br>
                    <p class="paragraf-info">We receive your reports quickly with the latest technology devices.</p>
                    <br>
                 </div>
              </div>
              <div class="bosluk1"></div>
              <a href="about-us/index.html" class="custom-button wow fadeInUp" data-wow-delay="1.3s">Get to know us →</a>
              <div class="bosluk3rh"></div>
           </div>
        </div>
     </section>
     <div class="bosluk4"></div>
     <!--Information Top-->
     <!--Information 1-->
     <section class="info-top">
        <div class="tabloozellik">
           <div class="tablo--1-ve-4">
              <div class="paketler wow fadeInLeft" data-wow-delay="0.5s" onclick="location.href='#';" style="cursor:pointer;">
                 <div class="hizmet-kutu">
                    <div class="kutu-duzen">
                       <h3><a href="#">Wellness Center</a></h3>
                       <div class="boslukicon"></div>
                       <div class="icon-box">
                          <span class="border-layer"></span>
                          <i class="flaticon-medicine"></i>
                       </div>
                       <p>In our wellness center, we strive to be your most reliable guide in your health journey with personalized supportive treatment packages.</p>
                    </div>
                 </div>
              </div>
           </div>
           <div class="tablo--1-ve-4">
              <div class="paketler wow fadeInLeft" data-wow-delay="0.6s" onclick="location.href='#';" style="cursor:pointer;">
                 <div class="hizmet-kutu">
                    <div class="kutu-duzen">
                       <h3><a href="#">Online Interview</a></h3>
                       <div class="boslukicon"></div>
                       <div class="icon-box">
                          <span class="border-layer"></span>
                          <i class="flaticon-table"></i>
                       </div>
                       <p>You can make an online appointment with our doctors in our hospital from where you are and talk to your doctor from the comfort of your home.</p>
                    </div>
                 </div>
              </div>
           </div>
           <div class="tablo--1-ve-4">
              <div class="paketler wow fadeInRight" data-wow-delay="0.7s" onclick="location.href='#';" style="cursor:pointer;">
                 <div class="hizmet-kutu">
                    <div class="kutu-duzen">
                       <h3><a href="#">Operations</a></h3>
                       <div class="boslukicon"></div>
                       <div class="icon-box">
                          <span class="border-layer"></span>
                          <i class="flaticon-transfusion"></i>
                       </div>
                       <p>We attach importance to ensuring patient safety in our operating room equipped with state-of-the-art medical devices in all branches.</p>
                    </div>
                 </div>
              </div>
           </div>
           <div class="tablo--1-ve-4">
              <div class="paketler wow fadeInRight" data-wow-delay="0.8s" onclick="location.href='#';" style="cursor:pointer;">
                 <div class="hizmet-kutu">
                    <div class="kutu-duzen">
                       <h3><a href="#">Safe Hospital</a></h3>
                       <div class="boslukicon"></div>
                       <div class="icon-box">
                          <span class="border-layer"></span>
                          <i class="flaticon-first-aid-kit"></i>
                       </div>
                       <p>COVID-19 measures have been taken in our hospital, where you can have all your tests and treatments, both outpatient and inpatient.</p>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!--TITLE-->
     <section class="ozellika" data-background="#f3f3f3">
        <div class="container">
           <div class="row align-items-center no-gutters">
              <div class="col-lg-12">
                 <div class="wow fadeInUp" data-wow-delay="0.3s">
                    <div class="boslukalt"></div>
                    <h2 class="h2-baslik-hizmetler-2 wow fadeInRight" data-wow-delay="0.4s">Our Expert Doctors</h2>
                    <p class="h2-baslik-hizmetler-2__paragraf wow fadeInUp" data-wow-delay="0.4s">
                       Your health is entrusted to us.
                    </p>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!--Team Alanı-->
     <section class="team-section">
        <div class="container">
           <div class="row">
              <div class="col-12">
                 <div class="carousel-classes">
                    <div class="swiper-wrapper">
                       <div class="swiper-slide">
                          <div class="class-box">
                             <div class="services-kutu2 wow fadeInLeft" data-wow-delay="0.5s" style="cursor:pointer;">
                                <div class="member-box wow reveal-effect">
                                   <figure>
                                      <img src="{{asset('assets/wp-content/uploads/2022/06/team1.jpg')}}" alt="Image">
                                      <figcaption>
                                         <h6>Jack Smith</h6>
                                         <p class="paragraf-sol-beyaz-orta">Urology Doctor</p>
                                         <ul>
                                            <li><a href="#"><i class="lni-facebook"></i></a></li>
                                            <li><a href="#"><i class="lni-instagram"></i></a></li>
                                            <li><a href="#"><i class="lni-twitter"></i></a></li>
                                         </ul>
                                      </figcaption>
                                   </figure>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="swiper-slide">
                          <div class="class-box">
                             <div class="services-kutu2 wow fadeInLeft" data-wow-delay="0.6s" style="cursor:pointer;">
                                <div class="member-box wow reveal-effect">
                                   <figure>
                                      <img src="{{asset('assets/wp-content/uploads/2022/06/team2.jpg')}}" alt="Image">
                                      <figcaption>
                                         <h6>Adam Brown</h6>
                                         <p class="paragraf-sol-beyaz-orta">Gastroenterology Doctor</p>
                                         <ul>
                                            <li><a href="#"><i class="lni-facebook"></i></a></li>
                                            <li><a href="#"><i class="lni-instagram"></i></a></li>
                                            <li><a href="#"><i class="lni-twitter"></i></a></li>
                                         </ul>
                                      </figcaption>
                                   </figure>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="swiper-slide">
                          <div class="class-box">
                             <div class="services-kutu2 wow fadeInLeft" data-wow-delay="0.7s" style="cursor:pointer;">
                                <div class="member-box wow reveal-effect">
                                   <figure>
                                      <img src="{{asset('assets/wp-content/uploads/2022/06/team3.jpg')}}" alt="Image">
                                      <figcaption>
                                         <h6>Michael Lee</h6>
                                         <p class="paragraf-sol-beyaz-orta">Chest Diseases Doctor</p>
                                         <ul>
                                            <li><a href="#"><i class="lni-facebook"></i></a></li>
                                            <li><a href="#"><i class="lni-instagram"></i></a></li>
                                            <li><a href="#"><i class="lni-twitter"></i></a></li>
                                         </ul>
                                      </figcaption>
                                   </figure>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="swiper-slide">
                          <div class="class-box">
                             <div class="services-kutu2 wow fadeInRight" data-wow-delay="0.8s" style="cursor:pointer;">
                                <div class="member-box wow reveal-effect">
                                   <figure>
                                      <img src="{{asset('assets/wp-content/uploads/2022/06/team4.jpg')}}" alt="Image">
                                      <figcaption>
                                         <h6>Olivia Lee</h6>
                                         <p class="paragraf-sol-beyaz-orta">Dental Doctor</p>
                                         <ul>
                                            <li><a href="#"><i class="lni-facebook"></i></a></li>
                                            <li><a href="#"><i class="lni-instagram"></i></a></li>
                                            <li><a href="#"><i class="lni-twitter"></i></a></li>
                                         </ul>
                                      </figcaption>
                                   </figure>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="swiper-pagination"></div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!--Yorumlar-->
     <section class="yorumlar-alani-sayfa">
        <div class="container">
           <div class="row">
              <div class="col-12 wow animated fadeIn animated" data-wow-delay="0.5s">
                 <div class="h-yazi-ortalama h-yazi-margin-orta-3">
                    <h2 class="h2-baslik-hizmetler-yorum wow fadeInUp" data-wow-delay="0.5s"> What Are Our Customers Saying ? </h2>
                 </div>
                 <p class="h2-baslik-hizmetler-yorum__yorum wow fadeInUp" data-wow-delay="0.5s">
                    Every customer is valuable to us. Here are the reviews of some of our customers who chose us.
                 </p>
                 <div class="bosluk3a"></div>
              </div>
              <div class="col-12">
                 <div class="carousel-classes">
                    <div class="swiper-wrapper">
                       <div class="swiper-slide wow animated fadeInLeft animated" data-wow-delay="0.5s">
                          <div class="class-box">
                             <div class="testimonial-card">
                                <div class="testimon-text">
                                   I was extremely satisfied with the experience and dialogue between the physicians I went to. Thanks.                    <i class="fas fa-quote-right quote"></i>
                                </div>
                                <div class="testimonialimg">
                                   <div class="testimonimg"><img src="{{asset('assets/wp-content/uploads/2022/06/testimonial1.png')}}" alt="">
                                   </div>
                                   <h3 class='person'>Jane</h3>
                                </div>
                             </div>
                          </div>
                          <!-- end swiper-slide -->
                       </div>
                       <div class="swiper-slide wow animated fadeInLeft animated" data-wow-delay="0.5s">
                          <div class="class-box">
                             <div class="testimonial-card">
                                <div class="testimon-text">
                                   He cleaned the tartar in my mouth and applied laser gum treatment. I did not have any problems after the treatment. A really great clinic.                    <i class="fas fa-quote-right quote"></i>
                                </div>
                                <div class="testimonialimg">
                                   <div class="testimonimg"><img src="{{asset('assets/wp-content/uploads/2022/06/testimonial2.png')}}" alt="">
                                   </div>
                                   <h3 class='person'>Michael</h3>
                                </div>
                             </div>
                          </div>
                          <!-- end swiper-slide -->
                       </div>
                       <div class="swiper-slide wow animated fadeInLeft animated" data-wow-delay="0.5s">
                          <div class="class-box">
                             <div class="testimonial-card">
                                <div class="testimon-text">
                                   For the first time, I leave a dentist happily. Because I know that my teeth are now in professional hands. Glad I had the opportunity to get to know you.                    <i class="fas fa-quote-right quote"></i>
                                </div>
                                <div class="testimonialimg">
                                   <div class="testimonimg"><img src="{{asset('assets/wp-content/uploads/2022/06/testimonial3.png')}}" alt="">
                                   </div>
                                   <h3 class='person'>Robert</h3>
                                </div>
                             </div>
                          </div>
                          <!-- end swiper-slide -->
                       </div>
                       <div class="swiper-slide wow animated fadeInLeft animated" data-wow-delay="0.5s">
                          <div class="class-box">
                             <div class="testimonial-card">
                                <div class="testimon-text">
                                   If you have a gum problem, get examined without any hesitation. She makes you feel safe with her smiling face and comforting attitude during the treatment process.                    <i class="fas fa-quote-right quote"></i>
                                </div>
                                <div class="testimonialimg">
                                   <div class="testimonimg"><img src="{{asset('assets/wp-content/uploads/2022/06/testimonial5.png')}}" alt="">
                                   </div>
                                   <h3 class='person'>Adam</h3>
                                </div>
                             </div>
                          </div>
                          <!-- end swiper-slide -->
                       </div>
                    </div>
                    <div class="swiper-pagination"></div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!--Posts-->
     <section class="yorumlar-alani-sayfa">
        <div class="container">
           <div class="row">
              <div class="col-12 wowfade">
                 <div class="h-yazi-ortalama h-yazi-margin-orta-3">
                    <h2 class="h2-baslik-hizmetler-yorum wow fadeInUp" data-wow-delay="0.4s"> Resent New & Articles </h2>
                 </div>
                 <p class="h2-baslik-hizmetler-yorum__yorum wow fadeInUp" data-wow-delay="0.5s">
                    Important information for your health.
                 </p>
                 <div class="bosluksv5"></div>
              </div>
           </div>
        </div>
        <div class="container">
           <div class="row">
              <div class="col-12">
                 <div class="carousel-classes">
                    <div class="swiper-wrapper">
                       <div class="swiper-slide wow fadeInLeft" data-wow-delay="0.5s" data-tilt>
                          <div class="post-kutu" style="cursor:pointer;">
                             <img width="373" height="223" src="{{asset('assets/wp-content/uploads/2022/06/news1-banner-373x223.png')}}" class="attachment-custom-size size-custom-size wp-post-image" alt="" decoding="async" fetchpriority="high" srcset="https://garantiwebtasarim.com/wordpress/medidoc/wp-content/uploads/2022/06/news1-banner-373x223.png 373w, https://garantiwebtasarim.com/wordpress/medidoc/wp-content/uploads/2022/06/news1-banner-300x180.png 300w, https://garantiwebtasarim.com/wordpress/medidoc/wp-content/uploads/2022/06/news1-banner.png 700w" sizes="(max-width: 373px) 100vw, 373px" />
                             <div class="datesection">
                                <span class="date">
                                05.06.2022                            </span>&nbsp;<span class="tt">-</span>&nbsp;
                                <ul class="post-categories">
                                   <li><a href="category/medical/index.html" rel="category tag">Medical</a></li>
                                </ul>
                             </div>
                             <h3 class="baslik-3 h-yazi-margin-kucuk">Unknowns in Implant Treatment</h3>
                             <p class="post-kutu--yazi">
                             <p>An implant is an artificial titanium tooth root placed in the jawbone in the treatment of missing teeth. Beforehand, panoramic [&hellip;]</p>
                             <div class="h-yazi-ortalama h-yazi-margin-4">
                                <a href="unknowns-in-implant-treatment/index.html" class="custom-button">More</a>
                             </div>
                          </div>
                       </div>
                       <div class="swiper-slide wow fadeInLeft" data-wow-delay="0.5s" data-tilt>
                          <div class="post-kutu" style="cursor:pointer;">
                             <img width="373" height="223" src="{{asset('assets/wp-content/uploads/2022/06/news2-banner-373x223.png')}}" class="attachment-custom-size size-custom-size wp-post-image" alt="" decoding="async" srcset="https://garantiwebtasarim.com/wordpress/medidoc/wp-content/uploads/2022/06/news2-banner-373x223.png 373w, https://garantiwebtasarim.com/wordpress/medidoc/wp-content/uploads/2022/06/news2-banner-300x180.png 300w, https://garantiwebtasarim.com/wordpress/medidoc/wp-content/uploads/2022/06/news2-banner.png 700w" sizes="(max-width: 373px) 100vw, 373px" />
                             <div class="datesection">
                                <span class="date">
                                05.06.2022                            </span>&nbsp;<span class="tt">-</span>&nbsp;
                                <ul class="post-categories">
                                   <li><a href="category/medical/index.html" rel="category tag">Medical</a></li>
                                </ul>
                             </div>
                             <h3 class="baslik-3 h-yazi-margin-kucuk">Amazing Methods for Toothache</h3>
                             <p class="post-kutu--yazi">
                             <p>Amazing Methods for Toothache There is hardly a person who has never had a toothache in his life. No matter [&hellip;]</p>
                             <div class="h-yazi-ortalama h-yazi-margin-4">
                                <a href="amazing-methods-for-toothache/index.html" class="custom-button">More</a>
                             </div>
                          </div>
                       </div>
                       <div class="swiper-slide wow fadeInLeft" data-wow-delay="0.5s" data-tilt>
                          <div class="post-kutu" style="cursor:pointer;">
                             <img width="373" height="223" src="{{asset('assets/wp-content/uploads/2022/06/news3-banner-373x223.png')}}" class="attachment-custom-size size-custom-size wp-post-image" alt="" decoding="async" srcset="https://garantiwebtasarim.com/wordpress/medidoc/wp-content/uploads/2022/06/news3-banner-373x223.png 373w, https://garantiwebtasarim.com/wordpress/medidoc/wp-content/uploads/2022/06/news3-banner-300x180.png 300w, https://garantiwebtasarim.com/wordpress/medidoc/wp-content/uploads/2022/06/news3-banner.png 700w" sizes="(max-width: 373px) 100vw, 373px" />
                             <div class="datesection">
                                <span class="date">
                                05.06.2022                            </span>&nbsp;<span class="tt">-</span>&nbsp;
                                <ul class="post-categories">
                                   <li><a href="category/medical/index.html" rel="category tag">Medical</a></li>
                                </ul>
                             </div>
                             <h3 class="baslik-3 h-yazi-margin-kucuk">It&#8217;s Now Easy to Have Perfect Smiles</h3>
                             <p class="post-kutu--yazi">
                             <p>What are the consequences of dental crowding in terms of general health? How is the treatment done? Tooth crowding can [&hellip;]</p>
                             <div class="h-yazi-ortalama h-yazi-margin-4">
                                <a href="its-now-easy-to-have-perfect-smiles/index.html" class="custom-button">More</a>
                             </div>
                          </div>
                       </div>
                       <div class="swiper-slide wow fadeInLeft" data-wow-delay="0.5s" data-tilt>
                          <div class="post-kutu" style="cursor:pointer;">
                             <img width="373" height="223" src="{{asset('assets/wp-content/uploads/2022/06/news5-banner-373x223.png')}}" class="attachment-custom-size size-custom-size wp-post-image" alt="" decoding="async" srcset="https://garantiwebtasarim.com/wordpress/medidoc/wp-content/uploads/2022/06/news5-banner-373x223.png 373w, https://garantiwebtasarim.com/wordpress/medidoc/wp-content/uploads/2022/06/news5-banner-300x180.png 300w, https://garantiwebtasarim.com/wordpress/medidoc/wp-content/uploads/2022/06/news5-banner.png 700w" sizes="(max-width: 373px) 100vw, 373px" />
                             <div class="datesection">
                                <span class="date">
                                05.06.2022                            </span>&nbsp;<span class="tt">-</span>&nbsp;
                                <ul class="post-categories">
                                   <li><a href="category/medical/index.html" rel="category tag">Medical</a></li>
                                </ul>
                             </div>
                             <h3 class="baslik-3 h-yazi-margin-kucuk">Stress threatens oral and dental health!</h3>
                             <p class="post-kutu--yazi">
                             <p>Stress, one of the most important diseases of our age, brings many diseases such as headache, heart disease, obesity, nausea, [&hellip;]</p>
                             <div class="h-yazi-ortalama h-yazi-margin-4">
                                <a href="stress-threatens-oral-and-dental-health/index.html" class="custom-button">More</a>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <div class="swiper-pagination"></div>
     </section>
     <!--Footer Alanı-->

     @endsection
