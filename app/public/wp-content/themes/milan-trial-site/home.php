<?php
/**
 * Template Name: Home Index
 * Description: The template for displaying the Blog Home Index Page
 *
 */
get_header(); ?>

<main>
    <!-- Hero Section -->
    <section style='background-image: url("<?php echo esc_url( get_template_directory_uri() . '/assets/images/waves-background.png'); ?>");
' id="hero-section" class='min-vh-100'>
        <div class='container py-5 d-flex align-items-center justify-content-center h-100 my-auto'>
            <div class="row align-items-center w-100 column-reverse">
                <div class="col-lg-6 px-0">
                    <div class="my-5 text-center text-lg-start">
                        <h1 class="display-3 text-white mb-5">Get the most Fun <br> Weather App</h1>
                        <p class="lead text-white-50 mb-5 col-lg-8">Simple, nice and user-friendly application of the weather. Only useful information.</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <button role="button" type="button" class="btn btn-primary rounded-1 btn-lg px-4 me-sm-2">Features</button>
                            <button role="button" type="button" class="btn btn-secondary rounded-1 btn-lg px-4">Download</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center">
                    <img class="img-fluid my-5" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/phone-01.png' ); ?>" alt="Image of a phone with the Weather App Opened">
                </div>
            </div>
        </div>
    </section>
    <!-- Second Section -->
    <section class="pt-5 pb-2">
        <div class="container px-5 my-5">
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
    <!-- Third Section -->
    <section>
        <div class="container px-5 mt-5 vh-100">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h2 class="text-uppercase fw-normal display-6 text-primary">Simple Widgets</h2>
                        <p class="lead fw-normal text-muted mb-5">Drag & Drop</p>
                    </div>
                </div>
            </div>
            <div class="row h-75">
                <div id="carouselExampleControls" class="carousel slide h-100" data-bs-ride="carousel">
                    <div class="carousel-inner h-100">
                        <!-- Slider Item 01 -->
                        <div class="carousel-item active w-100 h-100">
                            <img class='h-100 w-100' src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mobile-app-slider-img-01.png' ); ?>" alt="Picture of Mobile App Preview">
                        </div>
                        <!-- Slider Item 02 -->
                        <div class="carousel-item w-100 h-100">
                            <img class='h-100 w-100' src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mobile-app-slider-img-01.png' ); ?>" alt="Picture of Mobile App Preview">
                        </div>
                    </div>
                    <div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Third Section -->
    <section>
        <div class='container h-100 py-5'>
            <div class="text-center">
                <h2 class="text-uppercase fw-normal display-6 text-primary">Screenshots</h2>
                <p class="lead fw-normal text-muted mb-5">The Brightest Images</p>
            </div>
            <div class="row gx-5 align-items-center justify-content-center flex-row-reverse">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <img class="mb-3" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/clouds-icon.png' ); ?>" alt="Icon of Clouds">
                        <h2 class="text-uppercase fw-normal display-6 text-primary mb-2">When the Clouds</h2>
                        <p class="fw-normal mb-5 fs-4 col-lg-10">Variable information on the air humidity, the feeling of the weather, and the ability to share this with your friends. 
                        </p>
                        <div class="d-flex">
                            <div class="rounded-circle shadow fs-5 fw-bold text-muted d-flex align-items-center justify-content-center informational-circle position-relative">
                                95%
                            </div>
                            <div class="rounded-circle shadow fs-5 fw-bold text-muted d-flex align-items-center justify-content-center informational-circle position-relative">
                                9&#8451;
                            </div>
                            <div class="rounded-circle shadow fs-6 fw-bold text-muted d-flex align-items-center justify-content-center informational-circle position-relative">
                                Rainy
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 text-center"><img class="img-fluid rounded-3 my-5" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/phone-02.png' ); ?>" alt="Phoone of Phone with Weather App Open"></div>
            </div>
        </div>
    </section>
    <section class='vh-100'>
        <div class='container py-5 d-flex align-items-center h-100'>
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder mb-2">A Bootstrap 5 template for modern businesses</h1>
                        <p class="lead fw-normal text-dark-50 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit!</p>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 text-center"><img class="img-fluid rounded-3 my-5" src="https://dummyimage.com/600x400/343a40/6c757d" alt="..."></div>
            </div>
        </div>
    </section>
    <section class='vh-100'>
        <div class='container py-5 d-flex align-items-center h-100'>
            <div class="row gx-5 align-items-center justify-content-center flex-row-reverse">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder mb-2">A Bootstrap 5 template for modern businesses</h1>
                        <p class="lead fw-normal text-dark-50 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit!</p>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 text-center"><img class="img-fluid rounded-3 my-5" src="https://dummyimage.com/600x400/343a40/6c757d" alt="..."></div>
            </div>
        </div>
    </section>
    <!-- Testimonials Section -->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="text-center">
                        <h2 class="fw-bolder">From our blog</h2>
                        <p class="lead fw-normal text-muted mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque fugit ratione dicta mollitia. Officiis ad.</p>
                    </div>
                </div>
            </div>
            <div class="row gx-5">
                <div class="col-lg-6 mb-5">
                    <div class="h-100">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex nesciunt alias reprehenderit voluptatibus, ipsum blanditiis.
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="h-100">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex nesciunt alias reprehenderit voluptatibus, ipsum blanditiis.
                    </div>
                </div>
            </div>
            <div class="row gx-5">
                <div class="col-lg-6 mb-5">
                    <div class="h-100">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex nesciunt alias reprehenderit voluptatibus, ipsum blanditiis.
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="h-100">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex nesciunt alias reprehenderit voluptatibus, ipsum blanditiis.
                    </div>
                </div>
            </div>
    </section>
    <!-- Hero Section -->
    <section id="hero-section" class='vh-100 bg-primary'>
        <div class='container py-5 d-flex align-items-center h-100'>
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder text-white mb-2">A Bootstrap 5 template for modern businesses</h1>
                        <p class="lead fw-normal text-white-50 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit!</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <a class="btn btn-primary btn-lg px-4 me-sm-2" href="#features">Get Started</a>
                            <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 text-center"><img class="img-fluid rounded-3 my-5" src="https://dummyimage.com/600x400/343a40/6c757d" alt="..."></div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
