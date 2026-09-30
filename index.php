<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/style1.css">



    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <!-- Bootstrap CSS -->



    <!-- Navbar Section -->
    <header class="bhavi_navbar_section">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid bhavi_nav_container">

                <!-- Logo -->
                <a class="navbar-brand bhavi_logo" href="#">
                    <!-- <span class="logo_white">BHAVI</span><span class="logo_purple">CREATIONS</span> -->
                    <img src="./assets/img/logo.webp" alt="logo" style="width: 200px; height: auto;">
                </a>

                <!-- Mobile Toggle -->
                <button
                    class="navbar-toggler shadow-none border-0"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#bhaviNavbar"
                    aria-controls="bhaviNavbar"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menu -->
                <div class="collapse navbar-collapse" id="bhaviNavbar">
                    <ul class="navbar-nav ms-auto align-items-lg-center bhavi_nav_links">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#work">Work</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#packages">Packages</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#reviews">Reviews</a>
                        </li>
                    </ul>

                    <!-- CTA -->
                    <a href="#contact" class="bhavi_talk_btn">
                        Let's Talk
                    </a>
                </div>

            </div>
        </nav>
    </header>
    <!-- index new section   -->

    <section class="index_first_section" id="home">

        <!-- Background Decorations -->
        <div class="index_first_bg_orb index_first_bg_orb_one"></div>
        <div class="index_first_bg_orb index_first_bg_orb_two"></div>

        <div class="index_first_curve index_first_curve_one"></div>
        <div class="index_first_curve index_first_curve_two"></div>

        <div class="container-fluid index_first_container">

            <div class="row align-items-center index_first_row">

                <!-- =====================================
                 LEFT CONTENT
            ====================================== -->
                <div class="col-lg-7 col-md-6 index_first_content">

                    <!-- Badge -->
                    <div class="index_first_badge">

                        <span class="index_first_badge_dot"></span>

                        Creative Branding &amp; Digital Agency

                    </div>


                    <!-- Heading -->
                    <h1 class="index_first_heading">

                        We build brands that

                        <span>
                            people remember.
                        </span>

                    </h1>


                    <!-- Description -->
                    <p class="index_first_description">

                        We combine brand strategy, custom design, engaging content, and

                        <br class="d-none d-xl-block">

                        modern web solutions to elevate your business into a premium market leader.

                    </p>


                    <!-- Buttons -->
                    <div class="index_first_buttons">

                        <a href="#contact" class="index_first_primary_btn">

                            <span>Start a Project</span>

                            <span class="index_first_btn_arrow">
                                →
                            </span>

                        </a>


                        <a href="#work" class="index_first_secondary_btn">

                            <span class="index_first_play_icon">
                                ▶
                            </span>

                            <span>
                                View Our Work
                            </span>

                        </a>

                    </div>


                    <!-- =====================================
                     STATS
                ====================================== -->
                    <div class="index_first_stats">


                        <!-- Project -->
                        <div class="index_first_stat_item">

                            <div class="index_first_stat_icon">

                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg">

                                    <path
                                        d="M3 7.5C3 6.67 3.67 6 4.5 6H9L11 8H19.5C20.33 8 21 8.67 21 9.5V18C21 18.83 20.33 19.5 19.5 19.5H4.5C3.67 19.5 3 18.83 3 18V7.5Z"
                                        stroke="currentColor"
                                        stroke-width="1.7"
                                        stroke-linejoin="round" />

                                </svg>

                            </div>

                            <div class="index_first_stat_text">

                                <h3>140+</h3>

                                <p>Projects</p>

                            </div>

                        </div>


                        <span class="index_first_stat_divider"></span>


                        <!-- Clients -->
                        <div class="index_first_stat_item">

                            <div class="index_first_stat_icon">

                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg">

                                    <path
                                        d="M20.84 4.61C20.33 4.1 19.72 3.69 19.05 3.41C18.38 3.13 17.66 2.99 16.94 2.99C16.22 2.99 15.5 3.13 14.83 3.41C14.16 3.69 13.55 4.1 13.04 4.61L12 5.65L10.96 4.61C9.93 3.58 8.53 3 7.07 3C5.61 3 4.21 3.58 3.18 4.61C2.15 5.64 1.57 7.04 1.57 8.5C1.57 9.96 2.15 11.36 3.18 12.39L4.22 13.43L12 21.21L19.78 13.43L20.82 12.39C21.33 11.88 21.74 11.27 22.02 10.6C22.3 9.93 22.44 9.21 22.44 8.49C22.44 7.77 22.3 7.05 22.02 6.38C21.74 5.71 21.35 5.12 20.84 4.61Z"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round" />

                                </svg>

                            </div>

                            <div class="index_first_stat_text">

                                <h3>500+</h3>

                                <p>Happy Clients</p>

                            </div>

                        </div>


                        <span class="index_first_stat_divider"></span>


                        <!-- Visitors -->
                        <div class="index_first_stat_item">

                            <div class="index_first_stat_icon">

                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg">

                                    <circle
                                        cx="9"
                                        cy="8"
                                        r="3"
                                        stroke="currentColor"
                                        stroke-width="1.6" />

                                    <path
                                        d="M3.5 18C3.5 15.5 5.5 13.5 8 13.5H10C12.5 13.5 14.5 15.5 14.5 18"
                                        stroke="currentColor"
                                        stroke-width="1.6"
                                        stroke-linecap="round" />

                                    <circle
                                        cx="17"
                                        cy="9"
                                        r="2.3"
                                        stroke="currentColor"
                                        stroke-width="1.5" />

                                    <path
                                        d="M15.7 14C18.5 13.8 20.5 15.5 20.5 18"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round" />

                                </svg>

                            </div>

                            <div class="index_first_stat_text">

                                <h3>1000+</h3>

                                <p>Visitors</p>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- =====================================
                 RIGHT CREATIVE PANEL
            ====================================== -->
                <div class="col-lg-5 col-md-6">

                    <div class="index_first_visual_wrap">


                        <!-- Logo Card -->
                        <div class="index_first_brand_card">

                            <div class="index_first_brand_glow"></div>

                            <img
                                src="./assets/img/logo.webp"
                                alt="Bhavi Creations"
                                class="img-fluid logo_index">

                        </div>


                        <!-- =====================================
                         SERVICE CARDS
                    ====================================== -->
                        <div class="row g-3 index_first_service_grid">


                            <!-- Brand Identity -->
                            <div class="col-6">

                                <div class="index_first_service_card">

                                    <div class="index_first_service_icon">

                                        <svg
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg">

                                            <path
                                                d="M12 3L15 7L12 11L9 7L12 3Z"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linejoin="round" />

                                            <path
                                                d="M7 8H17L16 20H8L7 8Z"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linejoin="round" />

                                            <path
                                                d="M12 11V16"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linecap="round" />

                                        </svg>

                                    </div>


                                    <div class="index_first_service_text">

                                        <h6>
                                            Brand Identity
                                        </h6>

                                        <p>
                                            Logos &amp;<br>
                                            Guidelines
                                        </p>

                                    </div>


                                    <!-- <div class="index_first_service_arrow">
                                        →
                                    </div> -->

                                </div>

                            </div>


                            <!-- Social Media -->
                            <div class="col-6">

                                <div class="index_first_service_card">

                                    <div class="index_first_service_icon index_first_icon_pink">

                                        <svg
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg">

                                            <path
                                                d="M4 10V14H7L13 18V6L7 10H4Z"
                                                stroke="currentColor"
                                                stroke-width="1.6"
                                                stroke-linejoin="round" />

                                            <path
                                                d="M16 9C17.3 10.1 17.3 13.9 16 15"
                                                stroke="currentColor"
                                                stroke-width="1.6"
                                                stroke-linecap="round" />

                                            <path
                                                d="M18.5 6.5C21 9.5 21 14.5 18.5 17.5"
                                                stroke="currentColor"
                                                stroke-width="1.6"
                                                stroke-linecap="round" />

                                        </svg>

                                    </div>


                                    <div class="index_first_service_text">

                                        <h6>
                                            Social Media
                                        </h6>

                                        <p>
                                            Posts &amp; Growth
                                        </p>

                                    </div>


                                    <!-- <div class="index_first_service_arrow">
                                        →
                                    </div> -->

                                </div>

                            </div>


                            <!-- Website UI -->
                            <div class="col-6">

                                <div class="index_first_service_card">

                                    <div class="index_first_service_icon index_first_icon_blue">

                                        <svg
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg">

                                            <rect
                                                x="3"
                                                y="4"
                                                width="18"
                                                height="12"
                                                rx="2"
                                                stroke="currentColor"
                                                stroke-width="1.6" />

                                            <path
                                                d="M9 20H15"
                                                stroke="currentColor"
                                                stroke-width="1.6"
                                                stroke-linecap="round" />

                                            <path
                                                d="M12 16V20"
                                                stroke="currentColor"
                                                stroke-width="1.6" />

                                        </svg>

                                    </div>


                                    <div class="index_first_service_text">

                                        <h6>
                                            Website UI
                                        </h6>

                                        <p>
                                            Fast &amp; Responsive
                                        </p>

                                    </div>


                                    <!-- <div class="index_first_service_arrow">
                                        →
                                    </div> -->

                                </div>

                            </div>


                            <!-- Video -->
                            <div class="col-6">

                                <div class="index_first_service_card">

                                    <div class="index_first_service_icon index_first_icon_pink">

                                        <svg
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg">

                                            <circle
                                                cx="12"
                                                cy="12"
                                                r="9"
                                                stroke="currentColor"
                                                stroke-width="1.5" />

                                            <path
                                                d="M10 8.5L16 12L10 15.5V8.5Z"
                                                stroke="currentColor"
                                                stroke-width="1.5"
                                                stroke-linejoin="round" />

                                        </svg>

                                    </div>


                                    <div class="index_first_service_text">

                                        <h6>
                                            Video &amp; Reels
                                        </h6>

                                        <p>
                                            Motion &amp; Promos
                                        </p>

                                    </div>


                                    <!-- <div class="index_first_service_arrow">
                                        →
                                    </div> -->

                                </div>

                            </div>


                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>








    <!-- index first section  -->

    <!-- <section class="index_first_section" id="home">
        <div class="container-fluid index_first_container">

            <div class="row align-items-center">

             
                <div class="col-lg-7 col-md-6  index_first_content">

                    <div class="index_first_badge">
                        Creative Branding &amp; Digital Agency
                    </div>

                    <h1 class="index_first_heading">
                        We build brands that
                        <span>people remember.</span>
                    </h1>

                    <p class="index_first_description">
                        We combine brand strategy, custom design, engaging content, and
                        <br class="d-none d-xl-block">
                        modern web solutions to elevate your business into a premium market leader.
                    </p>

                  
                    <div class="index_first_buttons">

                        <a href="#contact" class="index_first_primary_btn">
                            Start a Project
                        </a>

                        <a href="#work" class="index_first_secondary_btn">
                            View Our Work
                        </a>

                    </div>

                    
                    <div class="index_first_stats">

                        <div class="index_first_stat_item">
                            <h3>140+</h3>
                            <p>Projects </p>
                        </div>

                        <div class="index_first_stat_item">
                            <h3>500+</h3>
                            <p>Happy Clients</p>
                        </div>

                        <div class="index_first_stat_item">
                            <h3>1000+</h3>
                            <p>Visitors</p>
                        </div>

                    </div>

                </div>


                <div class="col-lg-5 col-md-6 ">

                    <div class="index_first_visual_wrap">

                      >
                        <div class="index_first_brand_card">
                            <img src="./assets/img/logo.webp" alt="logoo" style="height: auto ; width: auto; margin-top: -30px;" class="img-fluid logo_index">

                           

                        </div>


                       
                        <div class="row g-2 index_first_service_grid">

                            <div class="col-6">
                                <div class="index_first_service_card">

                                    <h6>Brand Identity</h6>

                                   
                                    <p class="text-white">Logos & Guidelines</p>
                                </div>
                            </div>


                            <div class="col-6">
                                <div class="index_first_service_card">

                                    <h6>Social Media </h6>
                                    <p class="text-white">Posts & Growth</p>

                                    

                                </div>
                            </div>


                            <div class="col-6">
                                <div class="index_first_service_card">

                                    <h6>Website UI</h6>

                                    <p class="text-white">Fast & Responsive</p>


                                </div>
                            </div>


                            <div class="col-6">
                                <div class="index_first_service_card">

                                    <h6>Video &amp; Reels</h6>
                                    <p class="text-white">Motion & Promos</p>

                                  

                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section> -->


    <!-- index second section -->

    <section class="index_second_section" id="services">
        <div class="container-fluid index_second_container">

            <!-- Heading Row -->
            <div class="row align-items-start index_second_top_row">

                <div class="col-lg-6">
                    <h2 class="index_second_heading">
                        Everything your brand needs.
                    </h2>
                </div>

                <div class="col-lg-6">
                    <p class="index_second_intro">
                        One creative partner for strategy, design, content and digital
                        execution - consistent across every touchpoint.
                    </p>
                </div>

            </div>


            <!-- Services Grid -->
            <div class="row g-3 index_second_grid">

                <!-- Card 1 -->
                <div class="col-xl-3 col-lg-3 col-6">
                    <div class="index_second_card">

                        <div class="index_second_icon">
                            B
                        </div>

                        <h3>Branding &amp; Identity</h3>

                        <p>
                            Logo systems, color palettes, typography
                            and brand direction.
                        </p>

                    </div>
                </div>


                <!-- Card 2 -->
                <div class="col-xl-3 col-lg-3 col-6">
                    <div class="index_second_card">

                        <div class="index_second_icon">
                            S
                        </div>

                        <h3>Social Media</h3>

                        <p>
                            Monthly creatives, reels, campaigns and
                            content calendars.
                        </p>

                    </div>
                </div>


                <!-- Card 3 -->
                <div class="col-xl-3 col-lg-3 col-6">
                    <div class="index_second_card">

                        <div class="index_second_icon">
                            V
                        </div>

                        <h3>Video &amp; Reels</h3>

                        <p>
                            Short-form edits, motion graphics and
                            visual storytelling.
                        </p>

                    </div>
                </div>


                <!-- Card 4 -->
                <div class="col-xl-3 col-lg-3 col-6">
                    <div class="index_second_card">

                        <div class="index_second_icon">
                            W
                        </div>

                        <h3>Web Design</h3>

                        <p>
                            Responsive websites, UI/UX and landing
                            pages.
                        </p>

                    </div>
                </div>


                <!-- Card 5 -->
                <div class="col-xl-3 col-lg-3 col-6">
                    <div class="index_second_card">

                        <div class="index_second_icon">
                            A
                        </div>

                        <h3>Ad Creatives</h3>

                        <p>
                            High-impact campaign visuals for Meta
                            and Instagram.
                        </p>

                    </div>
                </div>


                <!-- Card 6 -->
                <div class="col-xl-3 col-lg-3 col-6">
                    <div class="index_second_card">

                        <div class="index_second_icon">
                            P
                        </div>

                        <h3>Product Creatives</h3>

                        <p>
                            Product images, catalog visuals and
                            launch creatives.
                        </p>

                    </div>
                </div>


                <!-- Card 7 -->
                <div class="col-xl-3 col-lg-3 col-6">
                    <div class="index_second_card">

                        <div class="index_second_icon index_second_icon_wide">
                            SEO
                        </div>

                        <h3>SEO &amp; Growth</h3>

                        <p>
                            Local SEO, content support and
                            performance tracking.
                        </p>

                    </div>
                </div>


                <!-- Card 8 -->
                <div class="col-xl-3 col-lg-3 col-6">
                    <div class="index_second_card">

                        <div class="index_second_icon index_second_icon_wide">
                            360
                        </div>

                        <h3>Complete Support</h3>

                        <p>
                            End-to-end monthly creative partnership
                            for growing brands.
                        </p>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- index third section   -->
    <section class="index_third_section">

        <div class="container-fluid index_third_container">

            <div class="index_third_title_wrap">
                <span class="index_third_title">
                    TRUSTED BY GROWING BRANDS
                </span>
            </div>

            <div class="index_third_slider_wrapper">


                <button class="index_third_slider_btn index_third_prev"
                    type="button"
                    aria-label="Previous clients">

                    <i class="fa-solid fa-arrow-left"></i>

                </button>



                <div class="index_third_slider_view">

                    <div class="index_third_slider_track">


                        <div class="index_third_slide">
                            <div class="index_third_client_box">
                                <img
                                    src="./assets/img/krishna.png"
                                    alt="Apple Dental"
                                    class="img-fluid">
                            </div>
                        </div>



                        <div class="index_third_slide">
                            <div class="index_third_client_box">
                                <img
                                    src="./assets/img/srinivasa.png"
                                    alt="Krishna Dental"
                                    class="img-fluid">
                            </div>
                        </div>



                        <div class="index_third_slide">
                            <div class="index_third_client_box">
                                <img
                                    src="./assets/img/appledental.png"
                                    alt="Vision"
                                    class="img-fluid">
                            </div>
                        </div>



                        <div class="index_third_slide">
                            <div class="index_third_client_box">
                                <img
                                    src="./assets/img/askoncologist.png"
                                    alt="Apple Dental"
                                    class="img-fluid">
                            </div>
                        </div>







                        <div class="index_third_slide">
                            <div class="index_third_client_box">
                                <img
                                    src="./assets/img/cnc.png"
                                    alt="Vision"
                                    class="img-fluid">
                            </div>
                        </div>




                        <div class="index_third_slide">
                            <div class="index_third_client_box">
                                <img
                                    src="./assets/img/neurostar.png"
                                    alt="Client"
                                    class="img-fluid">
                            </div>
                        </div>


                        <div class="index_third_slide">
                            <div class="index_third_client_box">
                                <img
                                    src="./assets/img/rajamundry.png"
                                    alt="Client"
                                    class="img-fluid">
                            </div>
                        </div>









                        <div class="index_third_slide">
                            <div class="index_third_client_box">
                                <img
                                    src="./assets/img/mega-modular.png"
                                    alt="Client"
                                    class="img-fluid">
                            </div>
                        </div>




                        <div class="index_third_slide">
                            <div class="index_third_client_box">
                                <img
                                    src="./assets/img/bharat-security.png"
                                    alt="Client"
                                    class="img-fluid">
                            </div>
                        </div>




                        <div class="index_third_slide">
                            <div class="index_third_client_box">
                                <img
                                    src="./assets/img/srihari.png"
                                    alt="Client"
                                    class="img-fluid">
                            </div>
                        </div>




                        <div class="index_third_slide">
                            <div class="index_third_client_box">
                                <img
                                    src="./assets/img/sreenika.png"
                                    alt="Client"
                                    class="img-fluid">
                            </div>
                        </div>



                        <div class="index_third_slide">
                            <div class="index_third_client_box">
                                <img
                                    src="./assets/img/anish.png"
                                    alt="Client"
                                    class="img-fluid">
                            </div>
                        </div>


                        <div class="index_third_slide">
                            <div class="index_third_client_box">
                                <img
                                    src="./assets/img/ialign.png"
                                    alt="Client"
                                    class="img-fluid">
                            </div>
                        </div>


                        <div class="index_third_slide">
                            <div class="index_third_client_box">
                                <img
                                    src="./assets/img/gullapudi.png"
                                    alt="Client"
                                    class="img-fluid">
                            </div>
                        </div>


                        <div class="index_third_slide">
                            <div class="index_third_client_box">
                                <img
                                    src="./assets/img/nayana.png"
                                    alt="Client"
                                    class="img-fluid">
                            </div>
                        </div>

                        <div class="index_third_slide">
                            <div class="index_third_client_box">
                                <img
                                    src="./assets/img/nivis.png"
                                    alt="Client"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="index_third_slide">
                            <div class="index_third_client_box">
                                <img
                                    src="./assets/img/preacher.png"
                                    alt="Client"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="index_third_slide">
                            <div class="index_third_client_box">
                                <img
                                    src="./assets/img/vnv.png"
                                    alt="Client"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="index_third_slide">
                            <div class="index_third_client_box">
                                <img
                                    src="./assets/img/quality.png"
                                    alt="Client"
                                    class="img-fluid">
                            </div>
                        </div>

                        <div class="index_third_slide">
                            <div class="index_third_client_box">
                                <img
                                    src="./assets/img/usha.png"
                                    alt="Client"
                                    class="img-fluid">
                            </div>
                        </div>



                        <div class="index_third_slide">
                            <div class="index_third_client_box">
                                <img
                                    src="./assets/img/ivy.png"
                                    alt="Client"
                                    class="img-fluid">
                            </div>
                        </div>





                    </div>

                </div>



                <button class="index_third_slider_btn index_third_next"
                    type="button"
                    aria-label="Next clients">

                    <i class="fa-solid fa-arrow-right"></i>

                </button>

            </div>

        </div>

    </section>


    <!-- index fourth section   -->
    <section class="index_fourth_section" id="work">
        <div class="container-fluid index_fourth_container">

            <!-- Top Heading -->
            <div class="row index_fourth_top align-items-start">
                <div class="col-lg-7">
                    <h2 class="index_fourth_heading">
                        Creative work that feels different.
                    </h2>
                </div>

                <div class="col-lg-5">
                    <p class="index_fourth_intro">
                        A selected portfolio section for your strongest branding,
                        social, website and campaign work.
                    </p>
                </div>
            </div>


            <!-- Portfolio Layout -->
            <div class="row g-3 index_fourth_grid">

                <!-- Large Left Card -->
                <div class="col-lg-5">
                    <div class="index_fourth_large_card ">

                        <div class="index_fourth_small_label">
                            BRAND EXPERIENCE
                        </div>

                        <h3>
                            Identity systems built
                            <br>
                            to stay consistent.
                        </h3>

                        <!-- Visual Shape -->
                        <div class="index_fourth_identity_visual">

                            <div class="index_fourth_identity_inner"></div>

                        </div>

                    </div>
                </div>


                <!-- Right Cards -->
                <div class="col-lg-7">

                    <div class="row g-3">

                        <!-- Social Media -->
                        <div class="col-md-6">
                            <div class="index_fourth_card index_fourth_social_card">

                                <div class="index_fourth_card_label">
                                    <h3> SOCIAL MEDIA </h3>
                                </div>

                                <h5>
                                    Social media is the vital digital lifeline of modern connectivity, seamlessly bridging human expression with global reach, endless opportunity, and driving meaningful online interactions. </h5>

                            </div>
                        </div>


                        <!-- Websites -->
                        <div class="col-md-6">
                            <div class="index_fourth_card index_fourth_web_card">

                                <div class="index_fourth_card_label">
                                    <h3>WEBSITES</h3>
                                </div>

                                <h5>
                                    "A website is your digital flagship—a dynamic, 24/7 storefront that shapes brand perception, drives credibility, and converts visitors into lasting relationships."
                                </h5>

                            </div>
                        </div>


                        <!-- Video -->
                        <div class="col-md-6">
                            <div class="index_fourth_card index_fourth_video_card">

                                <div class="index_fourth_card_label">
                                    <h3>Grpahic Deginer</h3>
                                </div>

                                <h5>
                                    Graphic design is the art of visual story-telling, translating complex ideas into striking brand identities and immersive digital experiences that capture attention and drive impact.
                                </h5>

                            </div>
                        </div>


                        <!-- Product -->
                        <div class="col-md-6">
                            <div class="index_fourth_card index_fourth_product_card">

                                <div class="index_fourth_card_label">
                                    <h3>Video editing </h3>
                                </div>

                                <h5>
                                    Video editing is the art of cinematic narrative, blending raw footage with seamless pacing, motion graphics, and sound to turn simple ideas into high-impact visual stories.
                                </h5>

                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <!-- index fifth section  but class name vachi sixth section  -->
    <!-- <section class="index_sixth_section" id="packages">
        <div class="container-fluid index_sixth_container">

         
            <div class="row align-items-start index_sixth_top">

                <div class="col-lg-6">
                    <div class="index_sixth_eyebrow">
                        <i class="fa-solid fa-cube" aria-hidden="true"></i>
                        <span>Our Packages</span>
                    </div>
                    <h2 class="index_sixth_heading">
                        Choose a package<br>
                        <span>that fits.</span>
                    </h2>
                </div>

                <div class="col-lg-6">
                    <p class="index_sixth_intro">
                        Packages can be customized by content volume, video needs,
                        ad support and website requirements.
                    </p>
                </div>

            </div>


            
            <div class="row justify-content-center index_sixth_package_row">

                
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="index_sixth_plan_card">

                        <div class="index_sixth_card_top">
                            <div class="index_sixth_badge index_sixth_badge_light">
                                <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                                STARTER
                            </div>
                            <div class="index_sixth_card_icon index_sixth_icon_starter">
                                <i class="fa-solid fa-rocket" aria-hidden="true"></i>
                            </div>
                        </div>

                        <h3 class="index_sixth_plan_title">
                            Brand Starter
                        </h3>

                        <h4 class="index_sixth_price">
                            <strong>Rs XX,XXX</strong>
                            <span>/ month</span>
                        </h4>

                        <ul class="index_sixth_features">

                            <li>
                                <span><i class="fa-solid fa-check" aria-hidden="true"></i></span>
                                8-12 social creatives
                            </li>

                            <li>
                                <span><i class="fa-solid fa-check" aria-hidden="true"></i></span>
                                2 short reels
                            </li>

                            <li>
                                <span><i class="fa-solid fa-check" aria-hidden="true"></i></span>
                                Basic monthly plan
                            </li>

                            <li>
                                <span><i class="fa-solid fa-check" aria-hidden="true"></i></span>
                                Standard support
                            </li>

                        </ul>

                        <a href="#contact" class="index_sixth_plan_btn">
                            Choose Plan
                            <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                        </a>

                    </div>
                </div>


                <div class="col-12 col-md-6 col-xl-3">
                    <div class="index_sixth_plan_card index_sixth_featured_card">

                        <div class="index_sixth_featured_glow"></div>

                        <div class="index_sixth_card_top">
                            <div class="index_sixth_badge index_sixth_badge_featured">
                                <i class="fa-solid fa-crown" aria-hidden="true"></i>
                                MOST POPULAR
                            </div>
                            <div class="index_sixth_card_icon index_sixth_icon_growth">
                                <i class="fa-solid fa-chart-column" aria-hidden="true"></i>
                            </div>
                        </div>

                        <h3 class="index_sixth_plan_title">
                            Growth Partner
                        </h3>

                        <h4 class="index_sixth_price">
                            <strong>Rs XX,XXX</strong>
                            <span>/ month</span>
                        </h4>

                        <ul class="index_sixth_features">

                            <li>
                                <span><i class="fa-solid fa-check" aria-hidden="true"></i></span>
                                Complete social creatives
                            </li>

                            <li>
                                <span><i class="fa-solid fa-check" aria-hidden="true"></i></span>
                                Reels + stories
                            </li>

                            <li>
                                <span><i class="fa-solid fa-check" aria-hidden="true"></i></span>
                                Monthly content strategy
                            </li>

                            <li>
                                <span><i class="fa-solid fa-check" aria-hidden="true"></i></span>
                                Ad creative support
                            </li>

                            <li>
                                <span><i class="fa-solid fa-check" aria-hidden="true"></i></span>
                                Priority revisions
                            </li>

                        </ul>

                        <a href="#contact" class="index_sixth_plan_btn index_sixth_featured_btn">
                            Choose Plan
                            <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                        </a>

                    </div>
                </div>


               
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="index_sixth_plan_card">

                        <div class="index_sixth_card_top">
                            <div class="index_sixth_badge index_sixth_badge_light">
                                <i class="fa-solid fa-gem" aria-hidden="true"></i>
                                PREMIUM
                            </div>
                            <div class="index_sixth_card_icon index_sixth_icon_premium">
                                <i class="fa-regular fa-lightbulb" aria-hidden="true"></i>
                            </div>
                        </div>

                        <h3 class="index_sixth_plan_title">
                            360 Creative
                        </h3>

                        <h4 class="index_sixth_price">
                            <strong>Custom</strong>
                            <span>/ scope based</span>
                        </h4>

                        <ul class="index_sixth_features">

                            <li>
                                <span><i class="fa-solid fa-check" aria-hidden="true"></i></span>
                                Full branding support
                            </li>

                            <li>
                                <span><i class="fa-solid fa-check" aria-hidden="true"></i></span>
                                Social + video + ads
                            </li>

                            <li>
                                <span><i class="fa-solid fa-check" aria-hidden="true"></i></span>
                                Website / landing page support
                            </li>

                            <li>
                                <span><i class="fa-solid fa-check" aria-hidden="true"></i></span>
                                Dedicated creative direction
                            </li>

                        </ul>

                        <a href="#contact" class="index_sixth_plan_btn">
                            Talk to Us
                            <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                        </a>

                    </div>
                </div>
              
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="index_sixth_plan_card">

                        <div class="index_sixth_card_top">
                            <div class="index_sixth_badge index_sixth_badge_deluxe">
                                <i class="fa-solid fa-star" aria-hidden="true"></i>
                                DELUXE
                            </div>
                            <div class="index_sixth_card_icon index_sixth_icon_deluxe">
                                <i class="fa-solid fa-star" aria-hidden="true"></i>
                            </div>
                        </div>

                        <h3 class="index_sixth_plan_title">
                            Brand Starter
                        </h3>

                        <h4 class="index_sixth_price">
                            <strong>Rs XX,XXX</strong>
                            <span>/ month</span>
                        </h4>

                        <ul class="index_sixth_features">

                            <li>
                                <span><i class="fa-solid fa-check" aria-hidden="true"></i></span>
                                8-12 social creatives
                            </li>

                            <li>
                                <span><i class="fa-solid fa-check" aria-hidden="true"></i></span>
                                2 short reels
                            </li>

                            <li>
                                <span><i class="fa-solid fa-check" aria-hidden="true"></i></span>
                                Basic monthly plan
                            </li>

                            <li>
                                <span><i class="fa-solid fa-check" aria-hidden="true"></i></span>
                                Standard support
                            </li>

                        </ul>

                        <a href="#contact" class="index_sixth_plan_btn">
                            Choose Plan
                            <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                        </a>

                    </div>
                </div>

            </div>

        </div>
    </section> -->

<!-- new section  -->
<section class="index_package_section">

    <!-- Decorative Background Elements -->
    <div class="index_package_section_glow index_package_section_glow_left"></div>
    <div class="index_package_section_glow index_package_section_glow_right"></div>

    <div class="index_package_section_curve index_package_section_curve_one"></div>
    <div class="index_package_section_curve index_package_section_curve_two"></div>
    <div class="index_package_section_curve index_package_section_curve_three"></div>

    <!-- tiny decorative stars -->
    <span class="index_package_section_star index_package_section_star_1"></span>
    <span class="index_package_section_star index_package_section_star_2"></span>
    <span class="index_package_section_star index_package_section_star_3"></span>
    <span class="index_package_section_star index_package_section_star_4"></span>


    <div class="container-fluid index_package_section_container">

        <!-- ==========================
             TOP CONTENT
        =========================== -->
        <div class="row align-items-center index_package_section_top">

            <div class="col-lg-7">

                <div class="index_package_section_badge">

                    <span class="index_package_section_badge_icon">
                        <i class="fa-solid fa-cube"></i>
                    </span>

                    <span>
                        Our Packages
                    </span>

                </div>


                <h2 class="index_package_section_heading">

                    Choose a package

                    <span>
                        that fits.
                    </span>

                </h2>

            </div>


            <div class="col-lg-5">

                <p class="index_package_section_intro">

                    Packages can be customized by content volume,
                    <br class="d-none d-xl-block">

                    video needs, ad support and website requirements.

                </p>

            </div>

        </div>


        <!-- ==========================
             PACKAGE CARDS
        =========================== -->
        <div class="row g-4 index_package_section_cards">


            <!-- ==========================
                 STARTER
            =========================== -->
            <div class="col-xl-3 col-lg-6 col-md-6">

                <div class="index_package_section_card">

                    <!-- Card top -->
                    <div class="index_package_section_card_top">

                        <span class="index_package_section_plan_badge">

                            <i class="fa-solid fa-paper-plane"></i>

                            STARTER

                        </span>


                        <div class="index_package_section_card_icon">

                            <i class="fa-solid fa-rocket"></i>

                        </div>

                    </div>


                    <!-- Plan Title -->
                    <h3 class="index_package_section_plan_title">
                        Brand Starter
                    </h3>


                    <!-- Price -->
                    <div class="index_package_section_price">

                        <strong>
                            Rs XX,XXX
                        </strong>

                        <span>
                            / month
                        </span>

                    </div>


                    <!-- Divider -->
                    <div class="index_package_section_divider"></div>


                    <!-- Features -->
                    <div class="index_package_section_features">

                        <div class="index_package_section_feature">

                            <span class="index_package_section_check">
                                <i class="fa-solid fa-check"></i>
                            </span>

                            <span>
                                8-12 social creatives
                            </span>

                        </div>


                        <div class="index_package_section_feature">

                            <span class="index_package_section_check">
                                <i class="fa-solid fa-check"></i>
                            </span>

                            <span>
                                2 short reels
                            </span>

                        </div>


                        <div class="index_package_section_feature">

                            <span class="index_package_section_check">
                                <i class="fa-solid fa-check"></i>
                            </span>

                            <span>
                                Basic monthly plan
                            </span>

                        </div>


                        <div class="index_package_section_feature">

                            <span class="index_package_section_check">
                                <i class="fa-solid fa-check"></i>
                            </span>

                            <span>
                                Standard support
                            </span>

                        </div>

                    </div>


                    <!-- Button -->
                    <a href="#contact" class="index_package_section_btn">

                        <span>
                            Choose Plan
                        </span>

                        <i class="fa-solid fa-arrow-right"></i>

                    </a>

                </div>

            </div>



            <!-- ==========================
                 MOST POPULAR
            =========================== -->
            <div class="col-xl-3 col-lg-6 col-md-6">

                <div class="index_package_section_card index_package_section_card_popular">

                    <!-- Top Glow -->
                    <div class="index_package_section_popular_glow"></div>


                    <!-- Card top -->
                    <div class="index_package_section_card_top">

                        <span class="index_package_section_plan_badge index_package_section_popular_badge">

                            <i class="fa-solid fa-crown"></i>

                            MOST POPULAR

                        </span>


                        <div class="index_package_section_card_icon index_package_section_growth_icon">

                            <i class="fa-solid fa-chart-column"></i>

                        </div>

                    </div>


                    <!-- Plan Title -->
                    <h3 class="index_package_section_plan_title">
                        Growth Partner
                    </h3>


                    <!-- Price -->
                    <div class="index_package_section_price">

                        <strong>
                            Rs XX,XXX
                        </strong>

                        <span>
                            / month
                        </span>

                    </div>


                    <!-- Divider -->
                    <div class="index_package_section_divider"></div>


                    <!-- Features -->
                    <div class="index_package_section_features">

                        <div class="index_package_section_feature">

                            <span class="index_package_section_check index_package_section_check_blue">

                                <i class="fa-solid fa-check"></i>

                            </span>

                            <span>
                                Complete social creatives
                            </span>

                        </div>


                        <div class="index_package_section_feature">

                            <span class="index_package_section_check index_package_section_check_blue">

                                <i class="fa-solid fa-check"></i>

                            </span>

                            <span>
                                Reels + stories
                            </span>

                        </div>


                        <div class="index_package_section_feature">

                            <span class="index_package_section_check index_package_section_check_blue">

                                <i class="fa-solid fa-check"></i>

                            </span>

                            <span>
                                Monthly content strategy
                            </span>

                        </div>


                        <div class="index_package_section_feature">

                            <span class="index_package_section_check index_package_section_check_blue">

                                <i class="fa-solid fa-check"></i>

                            </span>

                            <span>
                                Ad creative support
                            </span>

                        </div>


                        <div class="index_package_section_feature">

                            <span class="index_package_section_check index_package_section_check_blue">

                                <i class="fa-solid fa-check"></i>

                            </span>

                            <span>
                                Priority revisions
                            </span>

                        </div>

                    </div>


                    <!-- Popular Button -->
                    <a href="#contact"
                       class="index_package_section_btn index_package_section_btn_popular">

                        <span>
                            Choose Plan
                        </span>

                        <i class="fa-solid fa-arrow-right"></i>

                    </a>

                </div>

            </div>



            <!-- ==========================
                 PREMIUM
            =========================== -->
            <div class="col-xl-3 col-lg-6 col-md-6">

                <div class="index_package_section_card">

                    <!-- Card top -->
                    <div class="index_package_section_card_top">

                        <span class="index_package_section_plan_badge">

                            <i class="fa-solid fa-gem"></i>

                            PREMIUM

                        </span>


                        <div class="index_package_section_card_icon index_package_section_premium_icon">

                            <i class="fa-regular fa-lightbulb"></i>

                        </div>

                    </div>


                    <!-- Plan Title -->
                    <h3 class="index_package_section_plan_title">
                        360 Creative
                    </h3>


                    <!-- Price -->
                    <div class="index_package_section_price">

                        <strong>
                            Custom
                        </strong>

                        <span>
                            / scope based
                        </span>

                    </div>


                    <!-- Divider -->
                    <div class="index_package_section_divider"></div>


                    <!-- Features -->
                    <div class="index_package_section_features">

                        <div class="index_package_section_feature">

                            <span class="index_package_section_check index_package_section_check_blue">

                                <i class="fa-solid fa-check"></i>

                            </span>

                            <span>
                                Full branding support
                            </span>

                        </div>


                        <div class="index_package_section_feature">

                            <span class="index_package_section_check index_package_section_check_blue">

                                <i class="fa-solid fa-check"></i>

                            </span>

                            <span>
                                Social + video + ads
                            </span>

                        </div>


                        <div class="index_package_section_feature">

                            <span class="index_package_section_check index_package_section_check_blue">

                                <i class="fa-solid fa-check"></i>

                            </span>

                            <span>
                                Website / landing page support
                            </span>

                        </div>


                        <div class="index_package_section_feature">

                            <span class="index_package_section_check index_package_section_check_blue">

                                <i class="fa-solid fa-check"></i>

                            </span>

                            <span>
                                Dedicated creative direction
                            </span>

                        </div>

                    </div>


                    <!-- Button -->
                    <a href="#contact" class="index_package_section_btn">

                        <span>
                            Talk to Us
                        </span>

                        <i class="fa-solid fa-arrow-right"></i>

                    </a>

                </div>

            </div>



            <!-- ==========================
                 DELUXE
            =========================== -->
            <div class="col-xl-3 col-lg-6 col-md-6">

                <div class="index_package_section_card">

                    <!-- Card top -->
                    <div class="index_package_section_card_top">

                        <span class="index_package_section_plan_badge">

                            <i class="fa-solid fa-star"></i>

                            Deluxe

                        </span>


                        <div class="index_package_section_card_icon index_package_section_deluxe_icon">

                            <i class="fa-solid fa-star"></i>

                        </div>

                    </div>


                    <!-- Plan Title -->
                    <h3 class="index_package_section_plan_title">
                        Brand Starter
                    </h3>


                    <!-- Price -->
                    <div class="index_package_section_price">

                        <strong>
                            Rs XX,XXX
                        </strong>

                        <span>
                            / month
                        </span>

                    </div>


                    <!-- Divider -->
                    <div class="index_package_section_divider"></div>


                    <!-- Features -->
                    <div class="index_package_section_features">

                        <div class="index_package_section_feature">

                            <span class="index_package_section_check">

                                <i class="fa-solid fa-check"></i>

                            </span>

                            <span>
                                8-12 social creatives
                            </span>

                        </div>


                        <div class="index_package_section_feature">

                            <span class="index_package_section_check">

                                <i class="fa-solid fa-check"></i>

                            </span>

                            <span>
                                2 short reels
                            </span>

                        </div>


                        <div class="index_package_section_feature">

                            <span class="index_package_section_check">

                                <i class="fa-solid fa-check"></i>

                            </span>

                            <span>
                                Basic monthly plan
                            </span>

                        </div>


                        <div class="index_package_section_feature">

                            <span class="index_package_section_check">

                                <i class="fa-solid fa-check"></i>

                            </span>

                            <span>
                                Standard support
                            </span>

                        </div>

                    </div>


                    <!-- Button -->
                    <a href="#contact" class="index_package_section_btn">

                        <span>
                            Choose Plan
                        </span>

                        <i class="fa-solid fa-arrow-right"></i>

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

    <!-- index seventh section  -->
    <section class="index_seventh_section" id="reviews">
        <div class="container-fluid index_seventh_container">

            <!-- Top -->
            <div class="row align-items-start index_seventh_top">

                <div class="col-lg-6">
                    <h2 class="index_seventh_heading">
                        What clients say.
                    </h2>
                </div>

                <div class="col-lg-6">
                    <p class="index_seventh_intro">
                        Replace these samples with your real client reviews.
                    </p>
                </div>

            </div>


            <!-- Reviews -->
            <!-- <div class="row g-3 index_seventh_reviews_row">

                
                <div class="col-lg-4 col-md-6">
                    <div class="index_seventh_review_card">

                        <div class="index_seventh_stars">
                            ★★★★★
                        </div>

                        <p class="index_seventh_review_text">
                            The team understood our brand quickly and
                            gave us a more premium presence across social
                            media.
                        </p>

                        <div class="index_seventh_client_info">
                            <h4>Client Name</h4>
                            <span>Business / Brand</span>
                        </div>

                    </div>
                </div>


              
                <div class="col-lg-4 col-md-6">
                    <div class="index_seventh_review_card">

                        <div class="index_seventh_stars">
                            ★★★★★
                        </div>

                        <p class="index_seventh_review_text">
                            From creatives to videos, everything feels more
                            structured now. Communication and delivery are
                            smooth.
                        </p>

                        <div class="index_seventh_client_info">
                            <h4>Client Name</h4>
                            <span>Business / Brand</span>
                        </div>

                    </div>
                </div>


                
                <div class="col-lg-4 col-md-6">
                    <div class="index_seventh_review_card">

                        <div class="index_seventh_stars">
                            ★★★★★
                        </div>

                        <p class="index_seventh_review_text">
                            Our website and campaign visuals finally look
                            like one brand. The overall presentation
                            improved a lot.
                        </p>

                        <div class="index_seventh_client_info">
                            <h4>Client Name</h4>
                            <span>Business / Brand</span>
                        </div>

                    </div>
                </div>

            </div> -->

            <!-- Elfsight Google Reviews | Untitled Google Reviews -->
            <script src="https://elfsightcdn.com/platform.js" async></script>
            <div class="elfsight-app-99aa2135-1cd6-4eba-9d53-b7648d036c89" data-elfsight-app-lazy></div>

        </div>
    </section>

    <!-- index eight section   -->
    <section class="index_eight_section pt-5">
        <div class="container-fluid index_eight_container">

            <div class="index_eight_cta_box">

                <div class="index_eight_content">

                    <h2 class="index_eight_heading">
                        Ready to make your brand
                        <span>impossible to ignore?</span>
                    </h2>

                    <p class="index_eight_description">
                        Let's build a stronger visual identity, sharper content and a digital presence
                        <br class="d-none d-lg-block">
                        that looks as good as your business deserves.
                    </p>

                    <a href="#contact" class="index_eight_button">
                        Book a Free Consultation
                    </a>

                </div>

            </div>

        </div>
    </section>

    <!-- Bootstrap 5 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">


    <section class="index_contact_us_section">

        <div class="container index_contact_us_section_container">

            <div class="row g-4 g-xl-5 align-items-center">

                <!-- =========================
                 LEFT SIDE
            ========================== -->
                <div class="col-12 col-lg-6">

                    <div class="index_contact_us_section_left">

                        <div class="index_contact_us_section_small_title">
                            GET IN TOUCH
                            <span></span>
                        </div>

                        <h2 class="index_contact_us_section_title">
                            Let’s Build
                            <span>Your Brand</span>
                            Together
                        </h2>

                        <p class="index_contact_us_section_description">
                            Have a project in mind? Let’s discuss how Bhavi Creations
                            can take your brand to the next level.
                        </p>


                        <!-- Contact Item -->
                        <div class="index_contact_us_section_contact_item">

                            <div class="index_contact_us_section_contact_icon">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>

                            <div>
                                <span class="index_contact_us_section_contact_label">
                                    Call Us
                                </span>

                                <a
                                    href="tel:+919642343434"
                                    class="index_contact_us_section_contact_value">
                                    +91 96423 43434
                                </a>

                                <p>
                                    Mon - Sat, 10 AM - 7 PM
                                </p>
                            </div>

                        </div>


                        <!-- Contact Item -->
                        <div class="index_contact_us_section_contact_item">

                            <div class="index_contact_us_section_contact_icon">
                                <i class="fa-regular fa-envelope"></i>
                            </div>

                            <div>
                                <span class="index_contact_us_section_contact_label">
                                    Email Us
                                </span>

                                <a href="mailto:admin@bhavicreations.com"
                                    class="index_contact_us_section_contact_value">
                                    admin@bhavicreations.com
                                </a>

                                <p>
                                    We’ll respond within 24 hours
                                </p>
                            </div>

                        </div>


                        <!-- Contact Item -->
                        <div class="index_contact_us_section_contact_item">

                            <div class="index_contact_us_section_contact_icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>

                            <div>
                                <span class="index_contact_us_section_contact_label">
                                    Visit Us
                                </span>

                                <a
                                    href="https://share.google/703S2owAI83ZdGV4O"
                                    class="index_contact_us_section_contact_value"
                                    target="_blank"
                                    rel="noopener noreferrer">
                                    Kakinada, Andhra Pradesh, India
                                </a>

                                <p>
                                    Let’s meet over a coffee
                                </p>
                            </div>

                        </div>


                        <!-- Creative Shape -->
                        <div class="index_contact_us_section_creative_note d-none d-md-block">
                            <span>Good Design</span>
                            <span>Starts With</span>
                            <span>A Conversation.</span>

                            <i class="fa-solid fa-arrow-down-long"></i>
                        </div>

                    </div>

                </div>


                <!-- =========================
                 RIGHT SIDE FORM
            ========================== -->
                <div class="col-12 col-lg-6">

                    <div class="index_contact_us_section_form_card">

                        <!-- Decoration -->
                        <div class="index_contact_us_section_form_glow"></div>

                        <div class="index_contact_us_section_form_small_title">
                            SEND US A MESSAGE
                            <span></span>
                        </div>

                        <h3 class="index_contact_us_section_form_title">
                            Request a
                            <span>Free Consultation</span>
                        </h3>

                        <p class="index_contact_us_section_form_description">
                            Fill out the form and our team will get back to you soon.
                        </p>


                        <form action="send-contact-mail.php" method="POST">

                            <div class="row g-3">

                                <div class="col-12 col-md-6">
                                    <div class="index_contact_us_section_form_group">
                                        <label>
                                            Full Name <span>*</span>
                                        </label>

                                        <input
                                            type="text"
                                            name="full_name"
                                            class="form-control"
                                            placeholder="Your name"
                                            required>
                                    </div>
                                </div>


                                <div class="col-12 col-md-6">
                                    <div class="index_contact_us_section_form_group">
                                        <label>Business Name</label>

                                        <input
                                            type="text"
                                            name="business_name"
                                            class="form-control"
                                            placeholder="Your business name">
                                    </div>
                                </div>


                                <div class="col-12 col-md-6">
                                    <div class="index_contact_us_section_form_group">
                                        <label>
                                            Email Address <span>*</span>
                                        </label>

                                        <input
                                            type="email"
                                            name="email"
                                            class="form-control"
                                            placeholder="you@example.com"
                                            required>
                                    </div>
                                </div>


                                <div class="col-12 col-md-6">
                                    <div class="index_contact_us_section_form_group">
                                        <label>
                                            Phone Number <span>*</span>
                                        </label>

                                        <input
                                            type="tel"
                                            name="phone"
                                            class="form-control"
                                            placeholder="+91 98765 43210"
                                            required>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="index_contact_us_section_form_group">

                                        <label>Project Type</label>

                                        <select
                                            name="project_type"
                                            class="form-select"
                                            required>
                                            <option value="" selected disabled>
                                                Select a service
                                            </option>

                                            <option value="Branding & Identity">
                                                Branding & Identity
                                            </option>

                                            <option value="Social Media Marketing">
                                                Social Media Marketing
                                            </option>

                                            <option value="Website Design & Development">
                                                Website Design & Development
                                            </option>

                                            <option value="Performance Marketing">
                                                Performance Marketing
                                            </option>

                                            <option value="Video Production">
                                                Video Production
                                            </option>

                                            <option value="Other">
                                                Other
                                            </option>
                                        </select>

                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="index_contact_us_section_form_group">

                                        <label>
                                            Tell us about your project <span>*</span>
                                        </label>

                                        <textarea
                                            name="message"
                                            class="form-control"
                                            rows="4"
                                            placeholder="Share your requirements, goals or any ideas..."
                                            required></textarea>

                                    </div>
                                </div>


                                <div class="col-12">

                                    <button
                                        type="submit"
                                        class="index_contact_us_section_submit_btn">
                                        <i class="fa-regular fa-paper-plane"></i>

                                        <span>Send Message</span>

                                        <i class="fa-solid fa-arrow-right"></i>
                                    </button>

                                </div>

                            </div>

                        </form>

                        <div class="index_contact_us_section_confidential">

                            <i class="fa-solid fa-lock"></i>

                            <span>
                                Your information is 100% confidential.
                            </span>

                        </div>

                    </div>

                </div>

            </div>


            <!-- =========================
             BOTTOM BENEFITS
        ========================== -->

            <div class="index_contact_us_section_benefits">

                <div class="row g-0">

                    <!-- Item -->
                    <div class="col-12 col-sm-6 col-lg-3">

                        <div class="index_contact_us_section_benefit_item">

                            <div class="index_contact_us_section_benefit_icon">
                                <i class="fa-solid fa-message"></i>
                            </div>

                            <div>
                                <h5>Quick Response</h5>
                                <p>Within 24 hours</p>
                            </div>

                        </div>

                    </div>


                    <!-- Item -->
                    <div class="col-12 col-sm-6 col-lg-3">

                        <div class="index_contact_us_section_benefit_item">

                            <div class="index_contact_us_section_benefit_icon">
                                <i class="fa-solid fa-users"></i>
                            </div>

                            <div>
                                <h5>Dedicated Team</h5>
                                <p>For every project</p>
                            </div>

                        </div>

                    </div>


                    <!-- Item -->
                    <div class="col-12 col-sm-6 col-lg-3">

                        <div class="index_contact_us_section_benefit_item">

                            <div class="index_contact_us_section_benefit_icon">
                                <i class="fa-solid fa-lightbulb"></i>
                            </div>

                            <div>
                                <h5>Customized Solutions</h5>
                                <p>As per your goals</p>
                            </div>

                        </div>

                    </div>


                    <!-- Item -->
                    <div class="col-12 col-sm-6 col-lg-3">

                        <div class="index_contact_us_section_benefit_item border-0">

                            <div class="index_contact_us_section_benefit_icon">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>

                            <div>
                                <h5>100% Confidential</h5>
                                <p>Your data is safe</p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


















    <!-- index ninth section   -->
    <section class="index_ninth_section" id="contact">
        <div class="container-fluid index_ninth_container">

            <div class="row index_ninth_top_row">

                <!-- Brand -->
                <div class="col-lg-5 col-md-6 index_ninth_brand_col">

                    <img src="./assets/img/logo.webp" alt="logo" style="width: 200px; height: auto;">

                    <p class="index_ninth_brand_text">
                        Creative branding, social media, video, web and digital support for
                        <br class="d-none d-lg-block">
                        growing brands.
                    </p>

                </div>


                <!-- Quick Links -->
                <div class="col-lg-3 col-md-6 index_ninth_links_col d-none d-lg-block">

                    <h3 class="index_ninth_footer_title">
                        Quick Links
                    </h3>

                    <div class="index_ninth_links">
                        <a href="#home">Home</a>
                        <a href="#services">Services</a>
                        <a href="#work">Portfolio</a>
                        <a href="#packages">Packages</a>
                    </div>

                </div>


                <!-- Contact -->
                <div class="col-lg-4 col-md-6 index_ninth_contact_col d-none d-md-block">

                    <h3 class="index_ninth_footer_title">
                        Contact
                    </h3>

                    <div class="index_ninth_contact_details">

                        <p>
                            Phone: +91 96423 43434
                        </p>

                        <p>
                            Email: admin@bhavicreations.com
                        </p>

                        <p>
                            <b> Address : </b>Plot no 28, RTO Office Rd, behind lazza icecream shop, Ranga Rao Nagar, Kakinada, Vakalapudi, Andhra Pradesh 533003
                        </p>

                    </div>

                </div>

            </div>


            <!-- Divider -->
            <div class="index_ninth_divider"></div>


            <!-- Bottom Footer -->
            <div class="index_ninth_bottom">

                <p class="index_ninth_copyright">
                    © 2026 Bhavi Creations Pvt. Ltd.
                </p>

                <div class="index_ninth_social_links">
                    <a href="https://www.instagram.com/bhavicreations_pvtltd/" target="_blank"><img src="./assets/img/instagram.png" alt="instagram" class="img-fluid" style="width: 30px; height: 30px;"></a>
                    <a href="https://www.facebook.com/BhavicreationsPvtLtd/" target="_blank"><img src="./assets/img/facebook.png" alt="instagram" class="img-fluid" style="width: 30px; height: 30px;"></a>
                    <a href="https://www.youtube.com/@bhavicreationspvtltd" target="_blank"><img src="./assets/img/youtube.png" alt="instagram" class="img-fluid" style="width: 30px; height: 30px;"></a>
                    <a href="https://www.linkedin.com/in/bhavi-creations-pvt-ltd-926651235" target="_blank"><img src="./assets/img/linkedin.png" alt="instagram" class="img-fluid" style="width: 30px; height: 30px;"></a>
                    <a href="https://in.pinterest.com/bhavicreations/" target="_blank"><img src="./assets/img/social.png" alt="instagram" class="img-fluid" style="width: 30px; height: 30px;"></a>
                </div>

            </div>

        </div>
    </section>




    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const sliderView = document.querySelector(".index_third_slider_view");
            const sliderTrack = document.querySelector(".index_third_slider_track");
            const prevBtn = document.querySelector(".index_third_prev");
            const nextBtn = document.querySelector(".index_third_next");

            if (!sliderView || !sliderTrack || !prevBtn || !nextBtn) {
                return;
            }

            const originalSlides = Array.from(
                sliderTrack.querySelectorAll(".index_third_slide")
            );

            if (originalSlides.length === 0) {
                return;
            }

            /* Duplicate slides */
            originalSlides.forEach(function(slide) {

                const clone = slide.cloneNode(true);

                clone.classList.add("index_third_clone");

                sliderTrack.appendChild(clone);

            });

            let currentPosition = 0;
            let autoPlay = null;

            const autoSpeed = 2200;


            function getStepSize() {

                const slide = sliderTrack.querySelector(".index_third_slide");

                if (!slide) {
                    return 0;
                }

                const slideWidth = slide.getBoundingClientRect().width;

                const trackStyle = window.getComputedStyle(sliderTrack);

                const gap =
                    parseFloat(trackStyle.columnGap) ||
                    parseFloat(trackStyle.gap) ||
                    0;

                return slideWidth + gap;
            }


            function getOriginalTrackWidth() {

                return getStepSize() * originalSlides.length;

            }


            function updateSlider(animate = true) {

                sliderTrack.style.transition = animate ?
                    "transform 0.55s cubic-bezier(0.22, 1, 0.36, 1)" :
                    "none";

                sliderTrack.style.transform =
                    `translate3d(-${currentPosition}px, 0, 0)`;

            }


            function nextSlide() {

                const step = getStepSize();
                const maxOriginalWidth = getOriginalTrackWidth();

                if (!step || !maxOriginalWidth) {
                    return;
                }

                currentPosition += step;

                updateSlider(true);


                if (currentPosition >= maxOriginalWidth) {

                    setTimeout(function() {

                        currentPosition =
                            currentPosition - maxOriginalWidth;

                        updateSlider(false);

                    }, 560);

                }

            }


            function previousSlide() {

                const step = getStepSize();
                const maxOriginalWidth = getOriginalTrackWidth();

                if (!step || !maxOriginalWidth) {
                    return;
                }


                if (currentPosition <= 0) {

                    currentPosition = maxOriginalWidth;

                    updateSlider(false);


                    requestAnimationFrame(function() {

                        requestAnimationFrame(function() {

                            currentPosition -= step;

                            updateSlider(true);

                        });

                    });

                } else {

                    currentPosition -= step;

                    updateSlider(true);

                }

            }


            function startAutoPlay() {

                stopAutoPlay();

                autoPlay = setInterval(function() {

                    nextSlide();

                }, autoSpeed);

            }


            function stopAutoPlay() {

                if (autoPlay) {

                    clearInterval(autoPlay);

                    autoPlay = null;

                }

            }


            /* Buttons */

            nextBtn.addEventListener("click", function() {

                nextSlide();

                startAutoPlay();

            });


            prevBtn.addEventListener("click", function() {

                previousSlide();

                startAutoPlay();

            });


            /* IMPORTANT:
               No hover pause.
               Cursor slider meedha unna kuda auto slide continue avuthundi.
            */


            /* Mobile swipe */

            let touchStart = 0;
            let touchEnd = 0;


            sliderView.addEventListener(
                "touchstart",
                function(event) {

                    touchStart = event.touches[0].clientX;

                }, {
                    passive: true
                }
            );


            sliderView.addEventListener(
                "touchmove",
                function(event) {

                    touchEnd = event.touches[0].clientX;

                }, {
                    passive: true
                }
            );


            sliderView.addEventListener(
                "touchend",
                function() {

                    const difference = touchStart - touchEnd;

                    if (Math.abs(difference) > 40) {

                        if (difference > 0) {

                            nextSlide();

                        } else {

                            previousSlide();

                        }

                    }

                    touchStart = 0;
                    touchEnd = 0;

                    startAutoPlay();

                }, {
                    passive: true
                }
            );


            /* Browser tab hidden appudu matrame stop */

            document.addEventListener("visibilitychange", function() {

                if (document.hidden) {

                    stopAutoPlay();

                } else {

                    startAutoPlay();

                }

            });


            /* Resize */

            let resizeTimeout;

            window.addEventListener("resize", function() {

                clearTimeout(resizeTimeout);

                resizeTimeout = setTimeout(function() {

                    currentPosition = 0;

                    updateSlider(false);

                }, 200);

            });


            /* Start */

            updateSlider(false);

            startAutoPlay();

        });
    </script>



    <a
        href="https://wa.me/919642343434"
        class="bhavi_whatsapp_button"
        aria-label="Chat with Bhavi Creations on WhatsApp"
        title="Chat on WhatsApp"
        target="_blank"
        rel="noopener noreferrer">
        <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
    </a>

    <!-- Bootstrap JS -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>