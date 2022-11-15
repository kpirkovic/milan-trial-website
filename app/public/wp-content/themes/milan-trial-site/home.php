<?php
/**
 * Template Name: Home Index
 * Description: The template for displaying the Blog Home Index Page
 *
 */
//Hero Screen Cusomizer Variables
$hero_img = esc_url(get_theme_mod('hero_image' ));
$hero_img_id = attachment_url_to_postid($hero_img);
$hero_img_alt = get_post_meta( $hero_img_id, '_wp_attachment_image_alt', true );
$hero_heading = get_theme_mod('hero_heading', 'Get the most Fun Weather App');
$hero_paragraph = get_theme_mod('hero_paragraph', 'Simple, nice and user-friendly application of the weather. Only useful information.');
//Screenshot Section 01 Variables 
$screenshot_01_img = esc_url(get_theme_mod('screenshot_01' ));
$screenshot_01_id = attachment_url_to_postid($screenshot_01_img);
$screenshot_01_img_alt = get_post_meta( $screenshot_01_id, '_wp_attachment_image_alt', true );
$screenshot_01_heading = get_theme_mod('screenshot_01_heading');
$screenshot_01_paragraph = get_theme_mod('screenshot_01_paragraph');
//Screenshot Section 01 Variables 
$screenshot_02_img = esc_url(get_theme_mod('screenshot_02' ));
$screenshot_02_id = attachment_url_to_postid($screenshot_02_img);
$screenshot_02_img_alt = get_post_meta( $screenshot_02_id, '_wp_attachment_image_alt', true );
$screenshot_02_heading = get_theme_mod('screenshot_02_heading');
$screenshot_02_paragraph = get_theme_mod('screenshot_02_paragraph');


get_header(); 
$heroBackground = get_template_directory_uri() . '/assets/images/waves-background.png'; ?>

<main>
    <!-- Hero Section -->
    <section id="hero-section" style="background-image: url('<?php echo $heroBackground ?>');" id="hero-section" class="position-relative overflow-hidden">
        <div class='container py-5 py-sm-0 d-flex align-items-center justify-content-center'>
            <div class="row align-items-center w-100 min-vh-100 flex-column-reverse flex-sm-row">
                <div class="col-lg-6 px-0">
                    <div class="my-5 text-center text-lg-start">
                        <h1 class="display-3 text-white mb-5 fw-normal"><?php echo $hero_heading; ?></h1>
                        <p class="lead text-white fw-normal mb-5 col-lg-8"><?php echo $hero_paragraph; ?></p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-lg-start">
                            <a href='#' role="button" type="button" class="btn btn-accent text-white rounded-1 btn-lg px-4 me-sm-2 py-3 lh-1">Download</a>
                            <a href='#' role="button" type="button" class="btn btn-secondary rounded-1 btn-lg px-4 py-3 lh-1">Features</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center">
                    <img class="hero-img" src="<?php echo $hero_img; ?>" alt="<?php $hero_img_alt ?>">
                </div>
                <a id="scroll-down-btn" class="position-absolute" href="#features-section" type="button" role="button">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/arrow-scroll-down.png' ); ?>" alt="Scroll Down Icon">
                </a>
            </div>
        </div>
    </section>
    <!-- Features Section -->
    <section id="features-section" class="pt-5 pb-2">
        <div class="container my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h2 class="text-uppercase fw-normal display-6 text-primary">Perfect Features</h2>
                        <p class="lead fw-normal text-muted mb-5">Only Necessary</p>
                    </div>
                </div>
            </div>
            <div class="row gx-5 mt-5">
                <!-- Item 01 -->
                <div class="col-lg-4 mb-5">
                    <div class="d-flex gap-4">
                        <div class="mt-2">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/diamond-icon.png' ); ?>" alt="Icon of a Diamond">
                        </div>
                        <div class="h-100">
                            <h3 class="mb-2 fw-normal">Usability</h3>
                            <p class='text-muted'>Sometimes the simplest things are the hardest to find. So we created a new line for everyday life.</p>
                        </div>
                    </div>
                </div>
                <!-- Item 02 -->
                <div class="col-lg-4 mb-5">
                    <div class="d-flex gap-4">
                        <div class="mt-2">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/layers-icon.png' ); ?>" alt="Icon of Layers">
                        </div>
                        <div class="h-100">
                            <h3 class="mb-2 fw-normal">Prallax Effect</h3>
                            <p class='text-muted'>Sometimes the simplest things are the hardest to find. So we created a new line for everyday life.</p>
                        </div>
                    </div>
                </div>
                <!-- Item 03 -->
                <div class="col-lg-4 mb-5">
                    <div class="d-flex gap-4">
                        <div class="mt-2">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/color-icon.png' ); ?>" alt="Icon of Color Pallete">
                        </div>
                        <div class="h-100">
                            <h3 class="mb-2 fw-normal">Unlimited Colors</h3>
                            <p class='text-muted'>Sometimes the simplest things are the hardest to find. So we created a new line for everyday life.</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Widgets Section -->
    <section id="widgets-section">
        <div class="container mt-5 vh-100">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h2 class="text-uppercase fw-normal display-6 text-primary fw-normal">Simple Widgets</h2>
                        <p class="lead fw-normal text-muted mb-5">Drag & Drop</p>
                    </div>
                </div>
            </div>
            <div class="row h-75">
                <div id="carouselExampleControls" class="carousel slide h-100" data-bs-ride="carousel">
                    <div class="carousel-inner h-100 w-100">
                        <!-- Slider Item 01 -->
                        <div class="carousel-item active w-100 h-100">
                            <img class='h-100 w-100' src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mobile-app-slider-img-01.png' ); ?>" alt="Picture of Mobile App Preview">
                        </div>
                        <!-- Slider Item 02 -->
                        <div class="carousel-item w-100 h-100">
                            <img class='h-100 w-100' src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mobile-app-slider-img-01.png' ); ?>" alt="Picture of Mobile App Preview">
                        </div>
                    </div>
                    <div id="carousel-btns-wrapper">
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/arrow-left.png' ); ?>" alt="Left Arrow Icon">
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/arrow-right.png' ); ?>" alt="Right Arrow Icon">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Screenshots Section 01 -->
    <section id="cloudy-section">
        <div class='container h-100 py-5 mt-5 mt-md-0 overflow-hidden'>
            <div class="row gx-5 align-items-center justify-content-center flex-row-reverse">
                <div class="col-lg-6">
                    <div class="my-5 text-center text-lg-start">
                        <img class="mb-4" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/clouds-icon.png' ); ?>" alt="Icon of Clouds">
                        <h2 class="text-uppercase fw-normal display-6 text-primary mb-4 fw-normal"><?php echo $screenshot_01_heading; ?></h2>
                        <p class="fw-normal mb-4 fs-4 col-lg-10"><?php echo $screenshot_01_paragraph; ?></p>
                        <div class="d-flex justify-content-center justify-content-lg-start">
                            <div class="ms-4 ms-lg-0 rounded-circle fw-bold d-flex align-items-center justify-content-center informational-circle position-relative bg-white">
                                <span class="opacity-25">95%</span>
                            </div>
                            <div class="rounded-circle fw-bold d-flex align-items-center justify-content-center informational-circle position-relative bg-white">
                                <span class="opacity-25">15&#8451;</span>
                            </div>
                            <div class="rounded-circle fw-bold d-flex align-items-center justify-content-center informational-circle position-relative bg-white">
                                <span class="opacity-25">Cloudy</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative mx-auto phone-wrapper">
                        <div class="rounded-circle fs-5 text-white d-flex align-items-center justify-content-center informational-circle position-absolute bg-primary">
                            15&#8451;
                        </div>
                        <div class="rounded-circle fs-5 text-white d-flex align-items-center justify-content-center informational-circle position-absolute bg-secondary">
                            Cloudy
                        </div>
                        <img class="img-fluid my-5" src="<?php echo $screenshot_01_img; ?>" alt="<?php echo $screenshot_01_img_alt; ?>">
                        <span class='display-1 fw-bold vertical-text position-absolute'>Cloudy</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Screenshots Section 02 -->
    <section id="sunny-section">
        <div class='container h-100 py-5 overflow-hidden'>
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-6 ">
                    <div class="my-5 text-center text-lg-start ps-xl-5 ms-xl-5">
                        <img class="mb-4" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/clouds-icon.png' ); ?>" alt="Icon of Clouds">
                        <h2 class="text-uppercase fw-normal display-6 text-primary mb-4 fw-normal"><?php echo $screenshot_02_heading; ?></h2>
                        <p class="fw-normal mb-4 fs-4 col-lg-10"><?php echo $screenshot_02_paragraph; ?></p>
                        <div class="d-flex justify-content-center justify-content-lg-start">
                            <div class="ms-4 ms-lg-0 rounded-circle fw-bold d-flex align-items-center justify-content-center informational-circle position-relative bg-white">
                                <span class="opacity-25">95%</span>
                            </div>
                            <div class="rounded-circle fw-bold d-flex align-items-center justify-content-center informational-circle position-relative bg-white">
                                <span class="opacity-25">35&#8451;</span>
                            </div>
                            <div class="rounded-circle fw-bold d-flex align-items-center justify-content-center informational-circle position-relative bg-white">
                                <span class="opacity-25">Sunny</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative mx-auto phone-wrapper">
                        <div class="rounded-circle fs-5 text-white d-flex align-items-center justify-content-center informational-circle position-absolute bg-primary">
                            35&#8451;
                        </div>
                        <div class="rounded-circle fs-5 text-white d-flex align-items-center justify-content-center informational-circle position-absolute bg-secondary">
                            Sunny
                        </div>
                        <img class="img-fluid my-5" src="<?php echo $screenshot_02_img; ?>" alt="<?php echo $screenshot_02_img_alt; ?>">
                        <span class='display-1 fw-bold vertical-text position-absolute'>Sunny</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Screenshots Section 03 -->
    <section id="rainy-section">
        <div class='container h-100 py-5 overflow-hidden'>
            <div class="row gx-5 align-items-center justify-content-center flex-row-reverse">
                <div class="col-lg-6">
                    <div class="my-5 text-center text-lg-start">
                        <img class="mb-4" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/clouds-icon.png' ); ?>" alt="Icon of Clouds">
                        <h2 class="text-uppercase fw-normal display-6 text-primary mb-4 fw-normal">When the Rain</h2>
                        <p class="fw-normal mb-4 fs-4 col-lg-10">Variable information on the air humidity, the feeling of the weather, and the ability to share this with your friends. 
                        </p>
                        <div class="d-flex justify-content-center justify-content-lg-start">
                            <div class="ms-4 ms-lg-0 rounded-circle fw-bold d-flex align-items-center justify-content-center informational-circle position-relative bg-white">
                                <span class="opacity-25">95%</span>
                            </div>
                            <div class="rounded-circle fw-bold d-flex align-items-center justify-content-center informational-circle position-relative bg-white">
                                <span class="opacity-25">9&#8451;</span>
                            </div>
                            <div class="rounded-circle fw-bold d-flex align-items-center justify-content-center informational-circle position-relative bg-white">
                                <span class="opacity-25">Rainy</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative mx-auto phone-wrapper">
                        <div class="rounded-circle fs-5 text-white d-flex align-items-center justify-content-center informational-circle position-absolute bg-primary">
                            9&#8451;
                        </div>
                        <div class="rounded-circle fs-5 text-white d-flex align-items-center justify-content-center informational-circle position-absolute bg-secondary">
                            Rainy
                        </div>
                        <img class="img-fluid rounded-3 my-5" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/phone-04.png' ); ?>" alt="Picture of Phone with Weather App Open">
                        <span class='display-1 fw-bold vertical-text position-absolute'>Rainy</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Section -->
    <section id='testimoinals-section' class="py-5">
        <div class="container my-5 mt-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h2 class="text-uppercase fw-normal display-6 text-primary fw-normal">What people are saying</h2>
                        <p class="lead fw-normal text-muted mb-5">Reviews</p>
                    </div>
                </div>
            </div>
            <div class="row gx-0 gx-md-5">
            <!-- Renders Testimonials -->
            <?php 
            $testimonials = array(  
                'post_type' => 'testimonials',
                'post_status' => 'publish',
                'posts_per_page' => 8, 
            );
        
            $loop = new WP_Query( $testimonials ); 
                
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="col-lg-6 ps-0 mb-5 position-relative">
                    <div class="h-100 pt-5 pb-4">
                        <h4 class="fw-normal fs-4 pb-2"><?php echo get_field( "testimonial_review" ); ?></h4>
                        <span class="fs-5"><?php echo get_field( "testimonial_author" ); ?></span>
                    </div>
                    <img class="position-absolute top-0 start-0" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/quote-icon.png' ); ?>" alt="Quotes Icon">
                    <img class="position-absolute bottom-0 end-0 me-0 me-md-5 flip-z-180" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/quote-icon.png' ); ?>" alt="Quotes Icon">
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
            </div>
    </section>
    <!-- CTA Section -->
    <section id="cta-section" class='vh-50'>
        <div class='container d-flex align-items-center h-100 pt-5 overflow-hidden'>
            <div class="row gx-5 h-100">
                <div class="col-lg-5 h-100">
                    <div class="my-5 text-center text-lg-start h-100">
                        <h2 class="display-6 text-white mb-4 text-uppercase fw-normal">How download the app?</h2>
                        <p class="lead fw-normal text-white mb-4 col-lg-11">Just download the app from the store Simple, nice and user-friendly application of the weather. Only relevant and useful information.</p>
                        <div class="d-grid gap-3 d-flex justify-content-center justify-content-lg-start pb-4">
                            <a href="" target="_blank" role="button">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/appstore-badge.png' ); ?>" alt="Icon of Ios App Store">
                            </a>
                            <a href="" target="_blank" role="button">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/googleplay-badge.png' ); ?>" alt="Icon of Google Play Store">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-0 h-100 position-relative">
                    <img class="h-100 w-100" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/phones-together.png' ); ?>" alt="Photo of All Phone Together">
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
