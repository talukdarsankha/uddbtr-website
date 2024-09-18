<?php include("include/head.php");?>

<body>
   <!-- HTML for preloader -->
<?php include("include/preloader.php");?>

    <?php include("include/header.php");?>
    <main>
        <!-- Hero area S t a r t-->
        <section class="hero-padding-for-three video-overlay position-relative">
            <!-- Video -->
            <div class="hero-bg-video">
                <video class="hero-slider-video video-cover" 
                    poster="assets/images/hero/hero-three-banner.png" loop autoplay muted>
                    <source src="assets/images/videos/kokrajhar-modify.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="container">
                <div class="row align-items-center justify-content-between g-4">
                    <div class="col-xl-12">
                        <div class="hero-caption-three position-relative z-3">
                            <h3 class="title wow fadeInUp" data-wow-delay="0.0s" style="color:white">
                                Urban Development Kokrajhar
                            </h3>
                            <p class="pera wow fadeInUp" data-wow-delay="0.1s">
                               To monitor the growth of new urban areas in BTR and include them under planning procedures to ensure their efficient and orderly growth.
                            </p>
                        </div>
                        <!-- <div class="hero-footer position-relative z-3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="all-user">
                                <div class="happy-user">
                                    <img src="assets/images/hero/user-1.jpeg" alt="travello">
                                </div>
                                <div class="happy-user">
                                    <img src="assets/images/hero/user-2.png" alt="travello">
                                </div>
                                <div class="happy-user">
                                    <img src="assets/images/hero/user-3.png" alt="travello">
                                </div>
                                <div class="happy-user">
                                    <img src="assets/images/hero/user-4.jpeg" alt="travello">
                                </div>
                                <div class="happy-user-count">
                                    <p class="user-count">5k+</p>
                                </div>
                                <p class="pera">Happy Customer</p>
                                <span class="wave-emoji">
                                    <img src="assets/images/icon/hand.png" alt="travello">
                                </span>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!--/ End-of Hero-->
        <!-- Plan area S t a r t -->
        <section class="plan-area">
        <div class="container">
            <div class="plan-section plan-shadow">
                <div class="select-dropdown-section">
                    <div class="d-flex gap-10 align-items-center">
                        <img src="assets/images/icon/location.png" style="max-width: 30px;">
                        <h4 class="select2-title">DISTRICT</h4>
                    </div>
                    <select class="destination-dropdown district-dropdown" id="districtDropdown">
                        <option selected disabled>SELECT DISTRICT</option>
                        <option value="Baksa">Baksa</option>
                        <option value="Chirang">Chirang</option>
                        <option value="Kokrajhar">Kokrajhar</option>
                        
                        <option value="Udalguri">Udalguri</option>
                    </select>
                </div>
                <div class="divider plan-divider d-none d-lg-block"></div>
                <div class="select-dropdown-section">
                    <div class="d-flex gap-10 align-items-center">
                        <img src="assets/images/icon/ulb.png" style="max-width: 30px;">
                        <h4 class="select2-title">ULB</h4>
                    </div>
                    <select class="destination-dropdown ulb-dropdown" id="ulbDropdown">
                        <option selected disabled>SELECT ULB</option>
                        
                    </select>
                </div>
                <div class="sign-btn">
                    <button class="button-signin" onclick="visitULB()">
                        VISIT ULB
                        <svg fill="currentColor" viewBox="0 0 24 24" class="icon">
                            <path
                            clip-rule="evenodd"
                            d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z"
                            fill-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
        <!--/ End-of Plan-->
<!-- Brand S t a r t -->
<!-- Testimonial S t a r t -->




        <section class="testimonial-area-three position-relative section-bg-before-two top-padding">
            <div class="container">
                <div class="row justify-content-center position-relative">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-title mx-430 mx-auto text-center">
                            <!-- <span class="highlights fancy-font font-400">Testimonial</span> -->
                            <h4 class="title"> 
                                Message from Executive Member, BTC
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row g-4 align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="swiper testimonialThree-active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide testimonial-card">
                                    <div class="testimonial-header">
                                        <div class="user-img">
                                            <!-- <img src="assets/images/gallery/EM.jpg" alt="smartBTR"> -->
                                            <img src="assets/images/style-images/em.PNG" alt="EM image">
                                            
                                        </div>
                                        <div class="user-info" style="margin-top: 50px">
                                            <p class="name fs-2" style="color: #5ab6ec;">Wilson Hasda</p>
                                            <p class="designation fs-6 fw-bold">Executive Member, BTC</p>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="testimonial-body">
                                        <p class="pera">
                                            The beauty of Indian democracy lies in the role played by its citizens. The citizens make their representatives responsible to ensure peace, freedom and progress in the society.
                                            
                                            As a people's representative, I am happy for the opprtunity I have got to serve the people and lead them towards a better future. Grateful to all for your love and immense support.


                                        </p>
                                    </div>
                                    
                                </div>
                                
                                
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="hero-banner imgEffect2 o-hidden radius-20">
                            <img src="assets/images/gallery/em-mssg.jpg" alt="travello">
                            <!-- shape 01 -->
                            <div class="shape">
                                <img src="assets/images/icon/feature-shape.png" alt="travello">
                            </div>
                            <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" data-fancybox="video-gallery" class="wow bounceIn" data-wow-delay=".2s">
                                <div class="video-player">
                                    <i class="ri-play-fill"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- / End Slider -->
                </div>
            </div>
            <!-- <div class="shape-testimonial">
                <img src="assets/images/icon/graphic.png" alt="travello">
            </div> -->
        </section>
        <!--/ End of Testimonial -->

        <section class="why-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="border-section-title">
                            <h4 class="title">Welcome to Urban Development Department</h4>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-3">
                        <div class="section-title mx-430 mb-30 w-md-100">
                            <!-- <span class="highlights fancy-font font-400">About Us</span> -->
                            <!-- <h4 class="title">
                                Overview
                            </h4> -->
                                <p class="pera">
                                    The main function of the department is coordination between the Urban Local Bodies of the BTR and discharging the statutory responsibilities under the provisions of the Assam Municipal Act, 1956 as adopted by B.T.C. The other functions including administering the provisions of the Assam Town & Country Planning Act, 1958 by way of publishing the Master Plan of each and enforcement of building by-laws as per Assam Notified Urban Areas Building Rules (other than Guwahati) 2014 in every urban areas of BTR. 
                                </p>
                                
                            <!-- <div class="section-button mt-27 d-inline-block">
                                <a href="about.html" class="btn-primary-icon-sm radius-20">
                                    <p class="pera mt-0">Read More</p>
                                    <i class="ri-arrow-right-up-line"></i>
                                </a>
                            </div> -->
                            
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="about-count-section about-count-before-bg">
                            <div class="banner">
                                <img src="assets/images/gallery/overview.jpg" alt="travello">
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="news-details-banner imgEffect">
                                <div class="comment-section">
                                    <div class="main-profile">
                                        <div class="user-img-lg">
                                            <img src="assets/images/news/chd_small.jpg" alt="travello">

                                        </div>
                                        <div class="user-info">
                                            <h4 class="name">
                                                <i class="ri-double-quotes-l fs-1 opacity-50"></i>
                                                Message from Council Head of Department</h4>
                                            <p class="desg">Sri Lankeswar Owarie</p>
                                           <p class="pera">Bodoland Territorial Region (BTR) is an autonomous region within the state of Assam with the total population of 31,55,395 residing in 8970 sq km area....<span style="font-size: 13px;
                                          font-weight: 700;color: #fff;background-color: #f9710e;padding: 2px 8px 2px;border-radius: 5px">READ MORE</span>
                                          </p>
                                          <h4><i class="ri-double-quotes-r fs-1 opacity-50"></i> </h4>
                                        </div>
                                    </div>

                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="swiper whySwiper-active">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="why-points">
                                            <div class="why-point">
                                                <div class="why-icon">
                                                    <img src="assets/images/icon/information.png" style="max-width: 40px">
                                                </div>
                                                <div class="why-content">
                                                    <h4 class="title line-clamp-1">About us</h4>
                                                    <p class="pera line-clamp-3">
                                                       The main function of the department is coordination between the Urban Local Bodies of the BTR and discharging the statutory responsibilities under the provisions of the Assam Municipal Act, 1956 as adopted by B.T.C.
                                                    </p>
                                                    <a href="about-us.php">
                                                    <span style="width: 100px; margin-left: auto; font-size: 13px;font-weight: 700;color: #fff;background-color: #f9710e;padding: 2px 8px 2px;border-radius: 5px">READ MORE</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="why-points">
                                            <div class="why-point">
                                                <div class="why-icon">
                                                    <img src="assets/images/icon/goal.png" style="max-width: 40px">
                                                </div>
                                                <div class="why-content">
                                                    <h4 class="title line-clamp-1">Our Objectives</h4>
                                                    <p class="pera line-clamp-3">
                                                            To formulate Master Plans to ensure sustainable urban development in notified urban areas of BTR. 
                                                    </p>
                                                    <a href="objectives.php">
                                                    <span style="width: 100px; margin-left: auto; font-size: 13px;font-weight: 700;color: #fff;background-color: #f9710e;padding: 2px 8px 2px;border-radius: 5px">READ MORE</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="swiper-slide">
                                        <div class="why-points">
                                            <div class="why-point">
                                                <div class="why-icon">
                                                    <img src="assets/images/icon/department.png" style="max-width: 40px">
                                                </div>
                                                <div class="why-content">
                                                    <h4 class="title line-clamp-1">Overview Of Department</h4>
                                                    <p class="pera line-clamp-3">
                                                       The main function of the department is coordination between the Urban Local Bodies of the BTR and discharging the statutory responsibilities under the provisions of the Assam Municipal Act, 1956 as adopted by B.T.C
                                                    </p>
                                                    <a href="overview.php">
                                                    <span style="width: 100px; margin-left: auto; font-size: 13px;font-weight: 700;color: #fff;background-color: #f9710e;padding: 2px 8px 2px;border-radius: 5px">READ MORE</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="swiper-slide">
                                        <div class="why-points">
                                            <div class="why-point">
                                                <div class="why-icon">
                                                    <img src="assets/images/icon/history.png" style="max-width: 40px">
                                                </div>
                                                <div class="why-content">
                                                    <h4 class="title line-clamp-1">History</h4>
                                                    <p class="pera line-clamp-3">
                                                        The Bodoland Territorial Council (BTC) is an autonomous district council for the Bodoland Territorial Region in India. It was established in February 2003
                                                    </p>
                                                    
                                                   <a href="history.php"> <span style="width: 100px; margin-left: auto; font-size: 13px;font-weight: 700;color: #fff;background-color: #f9710e;padding: 2px 8px 2px;border-radius: 5px">READ MORE</span>
                                                   </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="why-points">
                                            <div class="why-point">
                                                <div class="why-icon">
                                                    <img src="assets/images/icon/version-control.png" style="max-width: 40px">
                                                </div>
                                                <div class="why-content">
                                                    <h4 class="title line-clamp-1">BTR, ASSAM</h4>
                                                    <p class="pera line-clamp-3">
                                                        Bodoland Territorial Region is an autonomous region in Assam, Northeast India. It is made up of four districts (Kokrajhar, Chirang, Baksa and Udalguri)
                                                    </p>
                                                    <a href="btr-assam.php">
                                                    <span style="width: 100px; margin-left: auto; font-size: 13px;font-weight: 700;color: #fff;background-color: #f9710e;padding: 2px 8px 2px;border-radius: 5px">READ MORE</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End of Brand -->
        <style type="text/css">
            .flex-container {
    display: flex;
    align-items: center; /* Align items vertically */
}
.circle2 {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden; /* Ensure image stays within the circle */
   background: linear-gradient(111.04deg, rgb(246, 121, 11) -0.63%, rgb(251, 83, 38) 107.47%);
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px solid white; /* Add border */
}

.circle2 img {
    width: 100%;
    height: auto;
    display: block;
     height :25px;
      width:20px; 
}
.circle3 {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden; /* Ensure image stays within the circle */
   background: linear-gradient(129.62deg, rgb(0, 30, 74) 1.95%, rgb(0, 73, 181) 100%);
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px solid white; /* Add border */
}

.circle3 img {
    width: 100%;
    height: auto;
    display: block;
     height :25px;
      width:20px; 
}

 .list {
    padding: 15px;
    margin-bottom: 15px;
    /*background-color: #ffffff;*/
    background: linear-gradient(180deg, #9af7ea 0%, rgba(143, 64, 166, 0) 100%);
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); 
    border-radius: 8px;
  }
        </style>
<!-- Testimonial S t a r t -->
        <section class="testimonial-area top-padding">
            <div class="container">
                <div class="row justify-content-center">
                  
                    <div class="col-xl-12 col-lg-12 d-flex justify-content-center mx-430" >

                        <div class="section-title text-center position-relative mb-60">
                            <!-- <span class="highlights">Explore The Word</span> -->
                            <h4 class="title">
                                Honourable Dignities
                            </h4>
                          
                            <!-- <p>List of various online services provided by the ULB for citizens.</p> -->
                        </div>
                        <!-- / -->
                        
                    </div>

                </div>
                <div class="row g-0">
                    <div class="col-lg-8">
                        <div class="swiper h-calc testimonialTwo-active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide testimonial-card-two h-calc">
                                   
                                    
                                    <div class="testimonial-footer">
                                        <div class="all-user">
                                            <div class="happy-user">
                                                <img src="assets/images/gallery/EM.jpg" alt="travello">
                                            </div>
                                            
                                            <div class="user-info">
                                                <p class="name">Wilson Hasda</p>
                                                <p class="designation">Executive Member, BTR</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <p class="pera">
                                            Pramod Boro (Born 1 March 1975) is an Indian politician serving as the president of The United People's Party Liberal (UPPL) since 25 February 2020 and Chief Executive Member of Bodoland Territorial Region, an autonomous region in Assam since 15 December 2020. He was the former president of All Bodo Students Union. Pramod Boro was born to Late Ghanashyam Boro. He is a resident of Tamulpur, Baksa district.As the CEM of BTC, Pramod Boro exemplifies a dedicated leader who is driven by the welfare of the people and the progress of the region. His efforts to bring about positive change and his commitment to inclusive development make him an influential figure in the Bodoland Territorial Council.
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide testimonial-card-two h-calc">
                                    
                                    
                                    <div class="testimonial-footer">
                                        <div class="all-user">
                                            <div class="happy-user">
                                                <img src="assets/images/gallery/chief.jpg" alt="travello">
                                            </div>
                                            
                                            <div class="user-info">
                                                <p class="name">Promod Boro</p>
                                                <p class="designation">Chief Executive Member, BTR</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-body">
                                        <p class="pera">
                                            Wilson Hasda is an esteemed individual who currently serves as an executive member of the Bodoland Territorial Council. He is affiliated with the United People's Party Liberal (UPPL) and has made significant contributions to the community as a social worker in various non-governmental organizations (NGOs).As an executive member of the Bodoland Territorial Council, Wilson Hasda plays a crucial role in the governance and decision-making processes. His deep understanding of social issues and his commitment to public service make him a valuable asset to the council.
                                        </p>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="swiper-button-next">
                                <i class="ri-arrow-right-line"></i>
                            </div>
                            <div class="swiper-button-prev">
                                <i class="ri-arrow-left-line"></i>
                            </div>
                        </div>
                    </div>
                 
                      <div class="col-lg-4" style="background-color: #f9f8f6;">
                        <div class="swiper testimonialThree-active">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide testimonial-card">
                                       
                                       
                                        <div class="image-wrapper">
                                          <img src="assets/images/gallery/btrmap.png" class="img-fluid" alt="Image">
                                        </div>
                                  
                                    
                                    <div class="testimonial-body">
                                        
                                        <p class="name text-center" style="color: #60aef6;font-size: 30px;font-weight: 700;line-height: 1.2;">BTR, ASSAM</p>
                                        <p class="pera">
                                            <ul>
                                                <li><strong>Established:</strong><span style="font-size: 15px"> 9 February, 2003</span></li>
                                                <li><strong>Govt. Type:</strong> <span style="font-size: 15px"> Autonomus Administrative Region</span></li>
                                                <li><strong>Body:</strong> <span style="font-size: 15px"> Autonomus Administrative Region</span></li>
                                                <li><strong>Total Area:</strong> <span style="font-size: 15px"> 8,970 Km2</span></li>
                                                <li><strong>Official Languages:</strong> <span style="font-size: 15px"> Bodo, English, Assamese</span></li>
                                            </ul>
                                        </p>
                                    </div>
                                    
                                </div>
                                
                                
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                      </div>
  


                </div>
            </div>
        </section>
        <!--/ End of Testimonial -->
        <!-- <div class="col-lg-5">
                        <div class="search-filter-section">
                                    
                                    
                                    <div class="heading">
                                     
                                        <h4 class="title">USEFUL LINKS</h4>
                                        <img style="max-width: 40px" src="assets/images/style-images/useful-inks-removebg-preview.png" alt="">
                                    </div>

                                    <ul class="recent-news-list2">
                                        <li class="list">
                                            <h5 class="title line-clamp-2 list"><a href="https://bodoland.gov.in/index.php">BTR GOVERNMENT WEB PORTAL  <i class="fas fa-long-arrow-alt-right" style="font-size: 15px; color: #5ab6ec"></i> <img class="blink" src="assets/images/icon/n2.png" style="max-width: 60px"></a></h5>
                                            
                                        </li>
                                        <li class="list">
                                            <h4 class="title line-clamp-2"><a href="https://seedbtr.com/">BTR SEED DEPARTMENT  <i class="fas fa-long-arrow-alt-right" style="font-size: 15px; color: #5ab6ec"></i> <img class="blink" src="assets/images/icon/n2.png" style="max-width: 60px"></a></h4>
                                            
                                        </li>
                                        <li class="list">
                                            <h4 class="title line-clamp-2"><a href="https://skill.assam.gov.in/">GOVERNMENT OF ASSAM SKILL EMPLOYMENT AND ENTREPRENEUR  <i class="fas fa-long-arrow-alt-right" style="font-size: 15px; color: #5ab6ec"></i></a></h4>
                                            
                                        </li>
                                        <li class="list">
                                            <h4 class="title line-clamp-2">
                                                <a href="https://www.pmkvyofficial.org/">PRADHAN MANTRI KAUSHAL VIKASH YOJNA 
                                                    <i class="fas fa-long-arrow-alt-right" style="font-size: 15px; color: #5ab6ec"></i>
                                                </a>
                                            </h4>
                                        </li>
                                        <li class="list">
                                            <h4 class="title line-clamp-2">
                                                <a href="https://assam.gov.in/">GOVERNMENT OF ASSAM
                                                    <i class="fas fa-long-arrow-alt-right" style="font-size: 15px; color: #5ab6ec"></i>
                                                </a>
                                            </h4>
                                        </li>
                                        <li class="list">
                                            <h4 class="title line-clamp-2">
                                                <a href="https://dma.assam.gov.in/">DIRECTORATE OF MUNICIPAL ADMINISTRATION, GOVT OF ASSAM
                                                    <i class="fas fa-long-arrow-alt-right" style="font-size: 15px; color: #5ab6ec"></i>
                                                </a>
                                            </h4>
                                        </li>
                                        

                                        
                                       
                                    </ul>
                                    
                                </div>
                    </div> -->
        <!-- notices -->

        <!-- <section class="destination-details-section section-padding2" style="background-image: url('assets/images/style-images/Capture.PNG');"> -->
        <section class="destination-details-section section-padding2">
            <div class="container">

                <!-- <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="section-title mx-430 mx-auto text-center">
                            <span class="highlights">Testimonial</span>
                            <h4 class="title">
                                <img style="max-width: 100px" src="assets/images/style-images/notice-removebg-preview (1).png" alt=""> Notices and Press Release
                                <img style="max-width: 80px" src="assets/images/style-images/news-flaticon-removebg-preview.png" alt="">

                                
                                
                            </h4>
                        </div>
                    </div>
                </div> -->
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-4" style="padding: 0px 16px;">
                        <div class="row g-4 position-sticky top-0">
                            <div class="col-lg-12">
                                <div class="search-filter-section">
                                    
                                    
                                    <div class="heading">
                                        <!-- <span class="line"></span> -->
                                        <h4 class="title">RECENT NEWS</h4>
                                       <!--  <img  style="max-width: 80px" src="assets/images/style-images/recent-news-removebg-preview.png" alt=""> -->
                                    </div>
                                   
                                    <ul class="recent-news-list">
                                        <li class="list">

                                            <h4 class="title "><a href="news-details.html">BTC Chief Pramod Boro launches online grievance redressal system in Kokrajhar. <img class="blink" src="assets/images/icon/n1.png" style="max-width: 60px"></a></h4>
                                            <div class="d-flex justify-content-between flex-wrap gap-8">
                                                <div class="d-flex align-items-center gap-8">
                                               
                                                    <p class="date">Jan 23, 2025</p>
                                                </div>
                                               
                                            </div>
                                        </li>
                                        <li class="list">
                                            <h4 class="title line-clamp-2"><a href="news-details.html">asdrfse vwerar</a></h4>
                                            <div class="d-flex justify-content-between flex-wrap gap-8">
                                                <div class="d-flex align-items-center gap-8">
                                                
                                                    <p class="date">Jan 23, 2025</p>
                                                </div>
                                                
                                            </div>
                                        </li>
                                        <li class="list">
                                            <h4 class="title line-clamp-2"><a href="news-details.html">asdrfse vwerar</a></h4>
                                            <div class="d-flex justify-content-between flex-wrap gap-8">
                                                <div class="d-flex align-items-center gap-8">
                                           
                                                    <p class="date">Jan 23, 2025</p>
                                                </div>
                                        
                                            </div>
                                        </li>
                                        <li class="list">
                                            <h4 class="title line-clamp-2"><a href="news-details.html">asdrfse vwerar</a></h4>
                                            <div class="d-flex justify-content-between flex-wrap gap-8">
                                                <div class="d-flex align-items-center gap-8">
                                        
                                                    <p class="date">Jan 23, 2025</p>
                                                </div>
                                                
                                            </div>
                                        </li>
                                       
                                    </ul>
                                    
                                </div>
                            </div>
                            
                        </div>
                       
                        
                        
                    </div>
                    <div class="col-xl-4 col-lg-4 m-30" style="padding: 0px 16px;" >
                        <div class="row g-4 position-sticky top-0">
                            <div class="col-lg-12">
                                <div class="search-filter-section">
                                    
                                    
                                    <div class="heading">
                                     
                                        <h4 class="title">USEFUL LINKS</h4>
                                        <!-- <img style="max-width: 40px" src="assets/images/style-images/useful-inks-removebg-preview.png" alt=""> -->
                                    </div>

                                    <ul class="recent-news-list2">
                                        <li class="list">
                                            <h5 class="title line-clamp-2"><a href="https://bodoland.gov.in/index.php">BTR GOVERNMENT WEB PORTAL  <i class="fas fa-long-arrow-alt-right" style="font-size: 15px; color: #5ab6ec"></i> <img class="blink" src="assets/images/icon/n2.png" style="max-width: 60px"></a></h5>
                                            
                                        </li>
                                        <li class="list">
                                            <h4 class="title line-clamp-2"><a href="https://seedbtr.com/">BTR SEED DEPARTMENT  <i class="fas fa-long-arrow-alt-right" style="font-size: 15px; color: #5ab6ec"></i> <img class="blink" src="assets/images/icon/n2.png" style="max-width: 60px"></a></h4>
                                            
                                        </li>
                                        <li class="list">
                                            <h4 class="title line-clamp-2"><a href="https://skill.assam.gov.in/">GOVERNMENT OF ASSAM SKILL EMPLOYMENT AND ENTREPRENEUR  <i class="fas fa-long-arrow-alt-right" style="font-size: 15px; color: #5ab6ec"></i></a></h4>
                                            
                                        </li>
                                        <!-- <li class="list">
                                            <h4 class="title line-clamp-2">
                                                <a href="https://www.pmkvyofficial.org/">PRADHAN MANTRI KAUSHAL VIKASH YOJNA 
                                                    <i class="fas fa-long-arrow-alt-right" style="font-size: 15px; color: #5ab6ec"></i>
                                                </a>
                                            </h4>
                                        </li>
                                        <li class="list">
                                            <h4 class="title line-clamp-2">
                                                <a href="https://assam.gov.in/">GOVERNMENT OF ASSAM
                                                    <i class="fas fa-long-arrow-alt-right" style="font-size: 15px; color: #5ab6ec"></i>
                                                </a>
                                            </h4>
                                        </li>
                                        <li class="list">
                                            <h4 class="title line-clamp-2">
                                                <a href="https://dma.assam.gov.in/">DIRECTORATE OF MUNICIPAL ADMINISTRATION, GOVT OF ASSAM
                                                    <i class="fas fa-long-arrow-alt-right" style="font-size: 15px; color: #5ab6ec"></i>
                                                </a>
                                            </h4>
                                        </li>
                                         -->

                                        
                                       
                                    </ul>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 m-30" style="padding: 0px 16px;" >
                        <div class="row g-4 position-sticky top-0">
                            <div class="col-lg-12">
                                <div class="search-filter-section">
                                    
                                    
                                    <div class="heading">
                                     
                                        <h4 class="title">SCHEMES</h4>
                                       <!--  <img style="max-width: 40px" src="assets/images/style-images/useful-inks-removebg-preview.png" alt=""> -->
                                    </div>

                                    <ul class="recent-news-list2">
                                        <li class="list">
                                            <h5 class="title line-clamp-2"><a href="https://bodoland.gov.in/index.php">BTR GOVERNMENT WEB PORTAL  <i class="fas fa-long-arrow-alt-right" style="font-size: 15px; color: #5ab6ec"></i> <img class="blink" src="assets/images/icon/n2.png" style="max-width: 60px"></a></h5>
                                            
                                        </li>
                                        <li class="list">
                                            <h4 class="title line-clamp-2"><a href="https://seedbtr.com/">BTR SEED DEPARTMENT  <i class="fas fa-long-arrow-alt-right" style="font-size: 15px; color: #5ab6ec"></i> <img class="blink" src="assets/images/icon/n2.png" style="max-width: 60px"></a></h4>
                                            
                                        </li>
                                        <li class="list">
                                            <h4 class="title line-clamp-2"><a href="https://skill.assam.gov.in/">GOVERNMENT OF ASSAM SKILL EMPLOYMENT AND ENTREPRENEUR  <i class="fas fa-long-arrow-alt-right" style="font-size: 15px; color: #5ab6ec"></i></a></h4>
                                            
                                        </li>
                                        <!-- <li class="list">
                                            <h4 class="title line-clamp-2">
                                                <a href="https://www.pmkvyofficial.org/">PRADHAN MANTRI KAUSHAL VIKASH YOJNA 
                                                    <i class="fas fa-long-arrow-alt-right" style="font-size: 15px; color: #5ab6ec"></i>
                                                </a>
                                            </h4>
                                        </li>
                                        <li class="list">
                                            <h4 class="title line-clamp-2">
                                                <a href="https://assam.gov.in/">GOVERNMENT OF ASSAM
                                                    <i class="fas fa-long-arrow-alt-right" style="font-size: 15px; color: #5ab6ec"></i>
                                                </a>
                                            </h4>
                                        </li>
                                        <li class="list">
                                            <h4 class="title line-clamp-2">
                                                <a href="https://dma.assam.gov.in/">DIRECTORATE OF MUNICIPAL ADMINISTRATION, GOVT OF ASSAM
                                                    <i class="fas fa-long-arrow-alt-right" style="font-size: 15px; color: #5ab6ec"></i>
                                                </a>
                                            </h4>
                                        </li>
                                         -->

                                        
                                       
                                    </ul>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- <div class="col-xl-4 col-lg-5">
                        <div class="row g-4 position-static top-0">
                            
                            <div class="col-lg-12">
                                <div class="tour-list-card">
                                    <h4 class="title">Press Release</h4>
                                    <ul class="tour-listing">
                                    
                                        <li class="list">
                                            <div class="package-img imgEffect4">
                                                <a href="tour-details.html"><img src="assets/images/videos/bodoland.png" alt="smartBTR"></a>
                                            </div>
                                            <div class="package-content">
                                                <h4 class="area-name">
                                                    <a href="tour-details.html">asd asdad</a>
                                                </h4>
                                                <p>ewrsdf sdfs sdfsf</p>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <div class="name">Kokrajhar, Assam</div>
                                                </div>
                                                
                                            </div>
                                        </li>
                                        
                                        <li class="list">
                                            <div class="package-img imgEffect4">
                                                <a href="tour-details.html"><img src="assets/images/videos/btc-secretary.png" alt="travello"></a>
                                            </div>
                                            <div class="package-content">
                                                <h4 class="area-name">
                                                    <a href="tour-details.html">asd asda</a>
                                                </h4>
                                                <p>asdad</p>
                                                <div class="location">
                                                    <i class="ri-map-pin-line"></i>
                                                    <div class="name">Udalguri, Assam</div>
                                                </div>
                                                
                                            </div>
                                        </li>
                                     
                                        
                                    </ul>
                                    <div class="text-center mt-10">
                                        <a href="tour-list.html">
                                            <button>
                                              <div class="svg-wrapper-1">
                                                <div class="svg-wrapper">
                                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M7 7h8.586L5.293 17.293l1.414 1.414L17 8.414V17h2V5H7v2z"/></svg>
                                                </div>
                                              </div>
                                              <span>See more</span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    
                </div>

            </div>
        </section>

        <!-- notices ends -->



         <!-- Explore S t a r t -->
        <section class="explore-area section-padding2">
            <div class="container">
                <div class="row justify-content-center">
                  
                    <div class="col-xl-12 col-lg-12 d-flex justify-content-center mx-430" >

                        <div class="section-title text-center position-relative mb-60">
                            <!-- <span class="highlights">Explore The Word</span> -->
                            <h4 class="title">
                                Citizen Services
                            </h4>
                          
                            <p>List of various online services provided by the ULB for citizens.</p>
                        </div>
                        <div class="circle1">
                           <img height="80px" width="100px" src="assets/images/style-images/online-service-removebg-preview.png" alt="">
                        </div>
                        
                    </div>

                </div>
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="all-explore" id="v-pills-tab-three" role="tablist" aria-orientation="vertical">
                            <div class="explore-btn active" id="pills-explore-one-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-one" role="tab" aria-controls="pills-explore-one"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <h3 class="name">Sugestions</h4>
                                </div>
                            </div>
                            <div class="explore-btn" id="pills-explore-two-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-two" role="tab" aria-controls="pills-explore-two"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <h3 class="name">Feedbacks</h3>
                                </div>
                            </div>
                            <div class="explore-btn" id="pills-explore-three-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-three" role="tab" aria-controls="pills-explore-three"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <h3 class="name">Ideas</h4>
                                </div>
                            </div>
                            <div class="explore-btn" id="pills-explore-four-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-four" role="tab" aria-controls="pills-explore-four"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <h3 class="name">Sugestions to Develope UDD</h4>
                                </div>
                            </div>
                           <!--  <div class="explore-btn" id="pills-explore-five-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-five" role="tab" aria-controls="pills-explore-four"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <h3 class="name">Sugestions to Develope UDD </h4>
                                </div>
                            </div> -->
                            <!-- <div class="col-12 text-center">
                                <div class="section-button d-inline-block">
                                    <a href="news.html">
                                        <button>
                                          <div class="svg-wrapper-1">
                                            <div class="svg-wrapper">
                                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M7 7h8.586L5.293 17.293l1.414 1.414L17 8.414V17h2V5H7v2z"/></svg>
                                            </div>
                                          </div>
                                          <span>All Services</span>
                                        </button>
                                    </a>
                                </div>
                            </div> -->
                            <!-- <div class="explore-btn" id="pills-explore-four-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-four" role="tab" aria-controls="pills-explore-four"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <h4 class="name">OBPS</h4>
                                </div>
                            </div>
                             <div class="explore-btn" id="pills-explore-four-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-explore-four" role="tab" aria-controls="pills-explore-four"
                                aria-selected="true">
                                <div class="d-flex gap-16 align-items-center">
                                    <h4 class="name">HALL BOOKING</h4>
                                </div>
                            </div> -->
                           
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="tab-content" id="v-pills-tabContent-three">
                            <div class="tab-pane fade show active" id="pills-explore-one" role="tabpanel"
                                aria-labelledby="pills-explore-one">
                                <div class="explore-conntent">
                                    <h4 class="title">Sugestions</h4>
                                    <p class="pera">
                                        Dear citizens, your input matters! Share your suggestions with the Urban Development Department to help shape a better future for our city.<br> <a href="" style="text-decoration: underline;font-size: 18px;font-weight: 700; color: rgb(47, 50, 145)">click here<i class="fas fa-long-arrow-alt-right" style="font-size: 20px; color: rgb(47, 50, 145)"></i></a></p>
                              

                                    <!-- <ul class="expect-list">
                                        <li class="">
                                            <span style="width: 100px; margin-left: auto; font-size: 13px;
                                      font-weight: 700;color: #fff;background-color: #f9710e;padding: 2px 8px 2px;border-radius: 5px">Click here</span>
                                        </li>
                                        
                                    </ul> -->
                                </div>
                                <!-- <div class="explore-banner">
                                    <img src="assets/images/gallery/about.png" alt="travello">
                                </div> -->
                                
                            </div>
                            <div class="tab-pane fade" id="pills-explore-two" role="tabpanel"
                                aria-labelledby="pills-explore-two">
                                <div class="explore-conntent">
                                    <h4 class="title">Feedbacks</h4>
                                    <p class="pera">
                                        Your feedback is essential! Let us know how we're doing and how we can improve by sharing your thoughts with the Urban Development Department.<br> <a href="" style="text-decoration: underline;font-size: 18px;font-weight: 700; color: rgb(47, 50, 145)">click here<i class="fas fa-long-arrow-alt-right" style="font-size: 20px; color: rgb(47, 50, 145)"></i></a>
                                    </p>
                                   
                                </div>
                                
                            </div>
                            <div class="tab-pane fade" id="pills-explore-three" role="tabpanel"
                                aria-labelledby="pills-explore-three">
                                <div class="explore-conntent">
                                    <h4 class="title">Ideas</h4>
                                    <p class="pera">
                                        Got ideas? We want to hear them! Share your innovative suggestions with the Urban Development Department and be part of shaping our city's future.<br> <a href="" style="text-decoration: underline;font-size: 18px;font-weight: 700; color: rgb(47, 50, 145)">click here<i class="fas fa-long-arrow-alt-right" style="font-size: 20px; color: rgb(47, 50, 145)"></i></a>
                                    </p>
                                    
                                </div>
                                
                            </div>
                            <div class="tab-pane fade" id="pills-explore-three" role="tabpanel"
                                aria-labelledby="pills-explore-three">
                                <div class="explore-conntent">
                                    <h4 class="title">Field Booking</h4>
                                    <p class="pera">
                                        Lorem ipsum dolor sit amet consectetur. Nullam amet at sed
                                        dui tellus tempor pretium tincidunt. Id amet sit viverra
                                        dolor consectetur elementum. Non at volutpat aliquam ac ac
                                        at amet. Ut semper semper sit aliquam penatibus dolor
                                        tortor nisl.<br> <a href="" style="text-decoration: underline;font-size: 18px;font-weight: 700; color: rgb(47, 50, 145)">click here<i class="fas fa-long-arrow-alt-right" style="font-size: 20px; color: rgb(47, 50, 145)"></i></a>
                                    </p>
                                    
                                </div>
                                
                            </div>
                            <div class="tab-pane fade" id="pills-explore-four" role="tabpanel"
                                aria-labelledby="pills-explore-four">
                                <div class="explore-conntent">
                                    <h4 class="title">Sugestions to Develope UDD</h4>
                                    <p class="pera">
                                        Your ideas matter! Help shape the Urban Development Department's future by sharing your suggestions for its development.<br> <a href="" style="text-decoration: underline;font-size: 18px;font-weight: 700; color: rgb(47, 50, 145)">click here<i class="fas fa-long-arrow-alt-right" style="font-size: 20px; color: rgb(47, 50, 145)"></i></a>
                                    </p>
                                    
                                </div>
                                
                            </div>
                           
                        </div>
                    </div>

                    <style>
                        @media (max-width: 991px) {
                            .offer-banner-custom .offer-content-two-custom {
                                max-width: 79%;
                                text-align: justify;
                            }
                        }
                    </style>
                    
                        <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
                            <a href="tour-list.html" class="offer-banner offer-banner-custom imgEffect4 wow fadeInRight" data-wow-delay="0.0s" style="position: relative; overflow: hidden;">
                               
                                <img src="assets/images/gallery/btc.png" alt="Background Image" class="img-fluid">
                                <div class="mask bg-gradient-grievance"></div>
                                <div class="offer-content-two offer-content-two-custom" style="width: 85%; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                    <p class="pera">If you have any concerns or complaints about your Urban Local Bodies (ULB), please click on the button to file a grievance.</p>
                                    <button class="button">
                                        <span class="button_lg">
                                            <span class="button_sl"></span>
                                            <span class="button_text">SUBMIT GRIEVANCE</span>
                                        </span>
                                    </button> 
                                </div>
                            </a>
                        </div>

                 
                </div>
            </div>
        </section>
        <!--/ End of Explore -->
        
<!-- Destination area S t a r t -->
        
        <!--/ End-of Destination -->

<style type="text/css">
    .circle {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden; /* Ensure image stays within the circle */
    background: linear-gradient(111.04deg, rgb(246, 121, 11) -0.63%, rgb(251, 83, 38) 107.47%);
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px solid white; /* Add border */
}

.circle img {
    width: 100%;
    height: auto;
    display: block;
     height :20px;
      width:15px; 
}
    .circle1 {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden; /* Ensure image stays within the circle */
   background: linear-gradient(111.04deg, rgb(210, 244, 235) -0.63%, rgb(144, 247, 189) 107.47%);
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px solid white; /* Add border */
}

.circle1 img {
    width: 100%;
    height: auto;
    display: block;
     height :35px;
      width:40px; 
}

    .about-banner {
        position: relative; /* Ensure the position context for pseudo-element */
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Add box-shadow */
        border-radius: 8px; /* Optional: Add border radius for rounded corners */
        overflow: hidden; /* Ensure overflow is hidden for inner elements */
    }

    .about-banner img {
        display: block; /* Ensure image behaves as block element */
        width: 100%; /* Ensure image fills its container */
        height: auto; /* Maintain aspect ratio */
    }

    .video-player {
        position: absolute; /* Position video player overlay */
        top: 50%; 
        left: 50%; 
        transform: translate(-50%, -50%); /* Center exactly */
        background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
        border-radius: 50%; /* Optional: Round shape for play button */
        padding: 20px; /* Adjust padding as needed */
    }

    .video-player i {
        color: #fff; 
        font-size: 48px; 
    }
    .img-fluid{
        border-radius: 5px;
    }
.aronai {
    position: relative;
    background-image: url('assets/images/icon/aronai.jpg'); /* Replace with your image path */
    background-size: cover;
    background-position: center;
    padding: 100px 0; /* Adjust padding as needed */
}

.aronai::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); 
}

.container-events {
    position: relative;
    z-index: 1;

}
.mask {
    position: absolute;
    background-size: cover;
    background-position: center center;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0.8;
}

.bg-gradient-info {
    /*background-image: linear-gradient(310deg, rgba(33, 82, 255, 0.8) 0%, rgba(33, 212, 253, 0.8) 100%); /* Adjust opacity of gradient stops */
    /*background-image: linear-gradient(310deg, rgba(125, 146, 221, 0.8) 0%, rgb(151, 232, 225) 100%);*/
   background-image: linear-gradient(310deg, rgb(117, 123, 92) 0%, rgba(33, 212, 253, 0.8) 100%);
}

</style>
   <section class="news-area section-padding2 aronai" >
       <div class="mask bg-gradient-info"></div>
            <div class="container container-events">
 
                <div class="row justify-content-center">
                  
                    <div class="col-xl-12 col-lg-12 d-flex justify-content-center mx-430" >

                        <div class="section-title text-center position-relative mb-60">
                            <!-- <span class="highlights">Explore The Word</span> -->
                            <h4 class="title">
                                Our Recent Events
                            </h4>
                          
                            <!-- <p>Recent events in the Urban Development Department of Kokrajhar have focused on enhancing infrastructure and community services to meet growing urban needs.</p> -->
                        </div>
                        
                        
                    </div>

                </div>
                <div class="row g-4 mb-60">
                    <div class="col-xl-7 col-lg-7">
                        <div class="tab-content" id="v-pills-tabContent-two">
                            <div class="tab-pane  fade show active" id="pills-news-one" role="tabpanel"
                                aria-labelledby="pills-news-one">
                                <div class="about-banner imgEffect4">
                                    <img src="assets/images/videos/bodoland.png" alt="smartBTR" class="img-fluid">
                                    <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" data-fancybox="video-gallery" class="wow bounceIn" data-wow-delay=".2s">
                                        <div class="video-player">
                                            <i class="ri-play-fill"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-news-two" role="tabpanel"
                                aria-labelledby="pills-news-two">
                                <div class="about-banner imgEffect4">
                                   <img src="assets/images/videos/btc-secretary.png" alt="travello" class="img-fluid">
                                    <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" data-fancybox="video-gallery" class="wow bounceIn" data-wow-delay=".2s">
                                        <div class="video-player">
                                            <i class="ri-play-fill"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-news-three" role="tabpanel"
                                aria-labelledby="pills-news-three">
                                <div class="about-banner imgEffect4">
                                    <img src="assets/images/videos/btc-secretary.png" alt="travello" class="img-fluid">
                                    <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" data-fancybox="video-gallery" class="wow bounceIn" data-wow-delay=".2s">
                                        <div class="video-player">
                                            <i class="ri-play-fill"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="all-contents" id="v-pills-tab-two" role="tablist" aria-orientation="vertical">
                            <div class="news-content active" id="pills-news-one-tab" data-bs-toggle="pill" data-bs-target="#pills-news-one" role="tab" aria-controls="pills-news-one" aria-selected="true">
                                <div class="d-flex align-items-center gap-10">
                                    <img src="assets/images/videos/bodoland.png" class="img-fluid" style="max-width: 125px;" alt="Location Icon">
                                    <h4 class="title">
                                        <a href="javascript:void(0)">Meeting at Gossaigaon regarding cleaning town.</a>
                                    </h4>
                                </div>
                                <div class="news-info">
                                    <div class="d-flex gap-10 align-items-center">
                                        <p class="name" style="font-weight: 700"><img src="assets/images/icon/map.png" class="img-fluid" style="max-width: 18px;" alt="Map Icon"> Gossaigaon, BTR</p>
                                    </div>
                                    <p class="time" style=""><img src="assets/images/icon/calendar.png" class="img-fluid" style="max-width: 18px;" alt="Calendar Icon"> 23-05-2024</p>
                                </div>
                            </div>

                            <div class="news-content" id="pills-news-two-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-news-two" role="tab" aria-controls="pills-news-two"
                                aria-selected="true">
                                
                                 <div class="d-flex align-items-center gap-10">
                                    <img src="assets/images/videos/btc-secretary.png" class="img-fluid" style="max-width: 125px;" alt="Location Icon">
                                    <h4 class="title">
                                        <a href="javascript:void(0)">Meeting at Gossaigaon regarding cleaning town.</a>
                                    </h4>
                                </div>
                                <div class="news-info">
                                    <div class="d-flex gap-10 align-items-center">
                                        <p class="name" style="font-weight: 700"><img src="assets/images/icon/map.png" class="img-fluid" style="max-width: 18px;" alt="Map Icon"> Gossaigaon, BTR</p>
                                    </div>
                                    <p class="time" style=""><img src="assets/images/icon/calendar.png" class="img-fluid" style="max-width: 18px;" alt="Calendar Icon"> 23-05-2024</p>
                                </div>
                            </div>
                            <div class="news-content" id="pills-news-three-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-news-three" role="tab" aria-controls="pills-news-three"
                                aria-selected="true">
                                
                                 <div class="d-flex align-items-center gap-10">
                                    <img src="assets/images/videos/kokrajhar.jpg" class="img-fluid" style="max-width: 125px;" alt="Location Icon">
                                    <h4 class="title">
                                        <a href="javascript:void(0)">Meeting at Gossaigaon regarding cleaning town.</a>
                                    </h4>
                                </div>
                                <div class="news-info">
                                    <div class="d-flex gap-10 align-items-center">
                                        <p class="name" style="font-weight: 700"><img src="assets/images/icon/map.png" class="img-fluid" style="max-width: 18px;" alt="Map Icon"> Gossaigaon, BTR</p>
                                    </div>
                                    <p class="time" style=""><img src="assets/images/icon/calendar.png" class="img-fluid" style="max-width: 18px;" alt="Calendar Icon"> 23-05-2024</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                        <div class="section-button d-inline-block">
                            <a href="news.html">
                                <button>
                                    <div class="svg-wrapper-1">
                                        <div class="svg-wrapper">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                <path d="M7 7h8.586L5.293 17.293l1.414 1.414L17 8.414V17h2V5H7v2z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <span>View all Events</span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-bg-about">
                <img src="assets/images/icon/bg-shape-2.png" alt="smartBTR">
            </div>
            </div>
        </section>
        <!-- Special area S t a r t -->
        

        <!-- Brand S t a r t -->
       
        <!--/ End of Brand -->


        <!-- <div>
            <img src="assets/images/style-images/assam-mark-top.png" height="60px" width="100%" alt="">
            <span class="mask bg-color"></span>
             
        </div> -->

<!-- <style type="text/css">
  .justify-content-center.bg {
    background-image: url('assets/images/style-images/assam-mark-top.png');
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    position: relative;
    opacity: 0.5; 
}

    .mask {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.8;
        background-color: rgba(0, 0, 0, 0.5); /* Adjust opacity here */
    }

    .bg-color {
        background-image: linear-gradient(310deg, #2152ff 0%, #21d4fd 100%);
    }
</style> -->

<section class="news-area section-padding2"style="padding-top:none; ">
            <div class="container">
                <div class="row justify-content-center bg">
                    <div class="col-xl-12 col-lg-12">
                        <div class="section-title text-center mx-605 mx-auto position-relative mb-60">
                            <!-- <span class="highlights">News & Article</span> -->
                            <h4 class="title">
                                Latest News & Articles
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-4 col-sm-6">
                        <article class="news-card-two">
                            <figure class="news-banner-two imgEffect">
                                <a href="news-details.html"><img src="assets/images/news/c1.jpg"
                                        alt="travello"></a>
                            </figure>
                            <div class="news-content">
                                <div class="heading d-flex gap-16">
                                    <div class="border-bottom">
                                        <img style="max-width: 18px;" src="assets/images/icon/map.png" alt="">
                                        <span class="heading-pera">BTC, Assam</span>
                                    </div>

                                     <div class="border-bottom">
                                        <img style="max-width: 18px;" src="assets/images/icon/calendar.png" alt="">
                                        <span class="heading-pera">Date :</span>
                                        <span class="heading-pera" style="font-weight: bold;">20-05-2024</span>
                                     </div>
                                </div>
                                <h4 class="title line-clamp-2">
                                    <a href="news-details.html">1st Bodoland International Knowledge Festival 2023, Bodoland University</a>
                                </h4>
                                <!-- <div class="news-info">
                                    <div class="d-flex gap-10 align-items-center">
                                        <div class="all-user">
                                            <div class="happy-user">
                                                <img src="assets/images/hero/user-1.jpeg" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="assets/images/hero/user-2.png" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="assets/images/hero/user-3.png" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="assets/images/hero/user-4.jpeg" alt="travello">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="time">10 min read</p>
                                </div> -->
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6">
                        <article class="news-card-two">
                            <figure class="news-banner-two imgEffect">
                                <a href="news-details.html"><img src="assets/images/news/c2.jpg"
                                        alt="smartBTR"></a>
                            </figure>
                            <div class="news-content">
                                <div class="heading d-flex gap-16">
                                    <div class="border-bottom">
                                        <img style="max-width: 18px;" src="assets/images/icon/map.png" alt="">
                                        <span class="heading-pera">Kokrajhar</span>
                                    </div>

                                     <div class="border-bottom">
                                        <img style="max-width: 18px;" src="assets/images/icon/calendar.png" alt="">
                                        <span class="heading-pera">Date :</span>
                                        <span class="heading-pera" style="font-weight: bold;">20-05-2024</span>
                                     </div>
                                </div>
                                <h4 class="title line-clamp-2">
                                    <a href="news-details.html"> Agitok Sangma Memorial Lecture cum International Seminar</a>
                                </h4>
                                <!-- <div class="news-info">
                                    <div class="d-flex gap-10 align-items-center">
                                        <div class="all-user">
                                            <div class="happy-user">
                                                <img src="assets/images/hero/user-1.jpeg" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="assets/images/hero/user-2.png" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="assets/images/hero/user-3.png" alt="travello">
                                            </div>
                                            <div class="happy-user">
                                                <img src="assets/images/hero/user-4.jpeg" alt="travello">
                                            </div>
                                        </div>
                                    </div>
                                    <p class="time">10 min read</p>
                                </div> -->
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6">
                        <article class="news-card-two">
                            <figure class="news-banner-two imgEffect">
                                <a href="news-details.html"><img src="assets/images/news/c3.jpg"
                                        alt="smartBTR"></a>
                            </figure>
                            <div class="news-content">
                                <div class="heading d-flex gap-16">
                                    <div class="border-bottom">
                                        <img style="max-width: 18px;" src="assets/images/icon/map.png" alt="">
                                        <span class="heading-pera">BTC</span>
                                    </div>

                                     <div class="border-bottom">
                                        <img style="max-width: 18px;" src="assets/images/icon/calendar.png" alt="">
                                        <span class="heading-pera">Date :</span>
                                        <span class="heading-pera" style="font-weight: bold;">20-05-2024</span>
                                     </div>
                                </div>
                                
                                <h4 class="title line-clamp-2">
                                    <a href="news-details.html">Ceremonial Distribution of order of Provincialisation of Service of Grade- IV of UP Schools and Post Graduate Teachers</a>
                                </h4>
                                
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div class="section-button d-inline-block">
                        <a href="news.html">
                            <button>
                              <div class="svg-wrapper-1">
                                <div class="svg-wrapper">
                                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M7 7h8.586L5.293 17.293l1.414 1.414L17 8.414V17h2V5H7v2z"/></svg>
                                </div>
                              </div>
                              <span>View all News</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End of News -->

        <!-- Destination area S t a r t -->
        <section class="tour-details-section section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="section-title mx-605 mb-30 d-flex gap-16">
                            <!-- <span class="highlights">about us</span> -->
                            <h4 class="title">Photo Gallery</h4>
                            <img style="max-width: 70px" src="assets/images/style-images/photo-gallery-removebg-preview.png" alt="">
                            <!-- <p class="pera">
                                Lorem ipsum dolor sit amet consectetur. Platea urna hendrerit
                                dui eget velit sollicitudin orci. Non sit lorem dolor placerat
                                faucibus. Ut tellus feugiat facilisi neque sagittis cursus
                                sagittis.
                            </p> -->
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="tour-details-area">

                <!-- Details Banner Slider -->
                <div class="tour-details-banner">
                    <div class="swiper tourSwiper-active">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="assets/images/news/c1.jpg" alt="smartBTR">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/news/c2.jpg" alt="smartBTR">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/news/c3.jpg" alt="smartBTR">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/news/c4.jpg" alt="smartBTR">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/news/c5.jpg" alt="smartBTR">
                            </div>
                            
                        </div>
                        <div class="swiper-button-next"><i class="ri-arrow-right-s-line"></i></div>
                        <div class="swiper-button-prev"><i class="ri-arrow-left-s-line"></i></div>
                    </div>
                </div>
                <!-- / Slider-->

                
            </div>
        </section>
        <!--/ End-of Destination -->
        
 <div class="brand-area">
            <div class="container">
                <div class="swiper brandSwiper-active">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/images/gallery/f1.jpeg" alt="smartBTR">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/gallery/f2.png" alt="smartBTR">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/gallery/f3.png" alt="smartBTR">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/gallery/f4.png" alt="smartBTR">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/gallery/f2.png" alt="smartBTR">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/gallery/f3.png" alt="smartBTR">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/gallery/f4.png" alt="smartBTR">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/gallery/f4.png" alt="smartBTR">
                        </div>

                        <div class="swiper-slide">
                            <img src="assets/images/gallery/f4.png" alt="smartBTR">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </main>

    <!-- Footer S t a r t -->
    <?php include("include/footer.php");?>

    <!-- Scroll Up  -->
    <!-- <div class="progressParent" id="back-top">
        <svg class="backCircle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div> -->
    <!-- Add an search-overlay element -->
    <div class="search-overlay"></div>
    <!-- jquery-->
    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap-5.3.0.min.js"></script>
    <!-- Plugin -->
    <script src="assets/js/plugin.js"></script>
    <!-- Main js-->
    <script src="assets/js/main.js"></script>
 <script>
    function visitULB() {
        var district = document.querySelector('.district-dropdown').value;
        var ulb = document.querySelector('.ulb-dropdown').value.replace(/ /g, '').toLowerCase(); // Convert to lowercase and remove spaces
        if (district && ulb) {
            var url = ulb + "mb.urbanbtc.in";
            window.location.href = "http://" + url;
        } else {
            alert("Please select both District and ULB.");
        }
    }
</script>
<script>
    // Function to truncate the title to 50 words
    function truncateTitle(titleElement) {
        var titleText = titleElement.innerText;
        var words = titleText.split(' ');
        if (words.length > 50) {
            var truncatedText = words.slice(0, 50).join(' ') + '...';
            titleElement.innerText = truncatedText;
        }
    }

    // Truncate the title
    var titleElement = document.querySelector('.title a');
    truncateTitle(titleElement);

    // Add event listener to the "View More" button
    document.getElementById('view-more-btn').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default action of following the link
        window.location.href = this.getAttribute('href'); // Redirect to the link's href attribute
    });
</script>

</body>

</html>