<!DOCTYPE html>
<html lang="en">

<x-frontend.head />

<body>
    <!-- Preloader Start -->
    {{-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center me-sm-5 me-md-0">
            <img src="{{ asset('assets/images/logo.png') }}" alt="">
        </div>
    </div> --}}
    <!-- Preloader End -->

    <x-frontend.navbar />

    <section class="mb-md-5" id="journey">
        <div class="hero-about-us p-5">
            <div class="row h-100 pt-md-5 d-flex flex-column">
                <div class="col-md-8 pt-5 flex-grow-1 d-flex" style="margin-bottom: -6rem">
                    <div class="pt-5" data-aos="fade">
                        <div class="pt-5 px-md-5">
                            <h6 class="title-h6">{!! $banner->title !!}</h6>
                            <h2 class="title-h2">{!! $banner->subtitle !!}</h2>
                        </div>
                        <div class="px-md-5">
                            <a href="{!! $banner->url_button !!}" class="btn btn-outline-light">{!! $banner->text_button !!}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="aboutus" class="mb-5 mb-md-0">
        <div class="container-fluid p-3 p-md-5">
            <div class="px-md-5">
                <div class="d-none d-md-block mb-5">
                    <div class="row mb-5">
                        <div class="col-sm-12 col-md-6 my-auto" data-aos="fade-up">

                            <h2 class="text-black-35 mb-3">
                                About Us
                            </h2>
                            <p class="text-18">{!! $aboutus->title !!}</p>
                            <p class="subtitle">
                                {!! $aboutus->description !!}
                            </p>
                        </div>
                        <div class="col-sm-12 col-md-6 mb-3 mb-md-0 photos px-md-5" data-aos="fade-down">
                            <a href="{{ asset('uploads/about-us/' . $aboutus->image) }}" data-lightbox="photos">
                                <img src="{{ asset('uploads/about-us/' . $aboutus->image) }}"
                                    class="img-fluid rounded float-start zoom" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="d-block d-md-none">
                    <div class="row pt-5 mb-5">
                        <h2 class="text-black-35 text-center mb-5" data-aos="fade-up">
                            About Us
                        </h2>
                        <div class="col-sm-12 col-md-6 mb-3 mb-md-0 photos" data-aos="fade-up">
                            <a href="{{ asset('uploads/about-us/' . $aboutus->image) }}" data-lightbox="photos">
                                <img src="{{ asset('uploads/about-us/' . $aboutus->image) }}"
                                    class="img-fluid rounded float-start zoom" alt="">
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 my-auto" data-aos="fade-up">

                            <h2 class="text-black-35 mb-3">
                                {!! $aboutus->title !!}
                            </h2>
                            <p class="subtitle">
                                {!! $aboutus->description !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="px-md-5 py-5" id="feature" data-aos="fade-up">
        <div class="overflow-hidden">
            <div class="py-5">
                <h2 class="text-center text-black-35">Our Key Features</h2>
            </div>
            <div class="row pt-md-5 d-flex justify-content-center">
                <div class="col-sm-12 col-md-6 text-center mb-5 px-5">

                    <div class="py-3">
                        <img src="{{ asset('assets/images/love.svg') }}" alt="">
                    </div>
                    <h5 class="text-sm text-uppercase fw-bold text--black py-3">
                        Integrity
                    </h5>
                    <p class="text-16">
                        Integrity means telling the truth, keeping our word and treating others with fairness and
                        respect. Integrity is one of our most cherished assets. It must not be compromised.
                    </p>
                </div>
                <div class="col-sm-12 col-md-6 text-center mb-5 px-5">

                    <div class="py-3">
                        <img src="{{ asset('assets/images/quality.svg') }}" alt="">
                    </div>
                    <h5 class="text-sm text-uppercase fw-bold text--black py-3">
                        Quality
                    </h5>
                    <p class="text-16">
                        Quality is exhibited in many ways by selling and supporting products and services that
                        delight customers, establishing a work environment , delivering financial results that meet
                        investor expectations.
                    </p>
                </div>
            </div>
            <div class="row pt-md-5 d-flex justify-content-center">
                <div class="col-sm-12 col-md-6 text-center mb-5 px-5">

                    <div class="py-3">
                        <img src="{{ asset('assets/images/commitment.svg') }}" alt="">
                    </div>
                    <h5 class="text-sm text-uppercase fw-bold text--black py-3">
                        Commitment
                    </h5>
                    <p class="text-16">
                        Commitment is important where we will continue to provide the best to our customers and
                        investors all the time. Our opportunity to serve should be viewed as a privilege that is not
                        to be taken for granted.
                    </p>
                </div>
                <div class="col-sm-12 col-md-6 text-center mb-5 px-5">

                    <div class="py-3">
                        <img src="{{ asset('assets/images/innovation.svg') }}" alt="">
                    </div>
                    <h5 class="text-sm text-uppercase fw-bold text--black py-3">
                        Innovation
                    </h5>
                    <p class="text-16">
                        Innovation means inventing, designing, developing products and services that have high
                        appeal in the marketplace and strengthen customer preference for the Universal Coco
                        Indonesia project.
                    </p>
                </div>
            </div>
        </div>
    </section>



    <section id="product" style="background-color: #f6f7f6;" data-aos="fade-up">
        {{-- <div class="d-none d-md-block"> --}}
        <div class="px-md-5 overflow-hidden">
            <div class="row">
                <div class="pt-5 px-md-5">
                    <h2 class="text--black text-30 px-5 fw-bold"> Our Product</h2>
                </div>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active px-md-5">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 p-5">
                                <div class="px-md-5" data-aos="fade">
                                    <p class="text-30 text--green fw-semibold">
                                        Virgin Coconut Oil
                                    </p>
                                    <p class="text-16 text-md-xl lead" style="line-height: 160%;">
                                        Virgin coconut oil is the oil extracted from coconuts without the
                                        application of
                                        heat.
                                        It is rapidly gaining popularity throughout the world in comparison to
                                        ordinary
                                        coconut oil and for a good reason. There is, in fact, a substance called
                                        virgin
                                        coconut oil and it differs from regular coconut oil in significant ways.
                                        These differences mainly lie with the source (more specifically, the
                                        physical
                                        form of the
                                        source),
                                        the method of extraction, and its subsequent benefits.
                                    </p>
                                    <div class="px-md-2 py-5">
                                        <div class="d-none d-md-block">
                                            <div class="row">
                                                <div class="col-md-5 mb-2">
                                                    <a href="" class="btn btn-outline-black">See Details</a>
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <a href="" class="btn btn-outline-black" rel="noreferrer">
                                                        <span class="me-2">Contact Us </span>
                                                        <div class="___class_+?73___">
                                                            <img src="{{ asset('assets/images/whatsapp.svg') }}"
                                                                alt="">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-block d-md-none">
                                            <div class="row">
                                                <div class="col-12 mb-2 px-5">
                                                    <a href="" class="btn btn-outline-black">See Details</a>
                                                </div>
                                                <div class="col-12 mb-2 px-5">
                                                    <a href="" class="btn btn-outline-black">
                                                        <div class="me-1">Contact Us </div>
                                                        <div class="___class_+?81___">
                                                            <img src="{{ asset('assets/images/whatsapp.svg') }}"
                                                                alt="">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 p-5">
                                <div class="px-md-5" data-aos="fade">
                                    <div>
                                        <img src="{{ asset('assets/images/coconut1.png') }}" class="img-center"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item px-md-5">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 p-5">
                                <div class="px-md-5" data-aos="fade">
                                    <p class="text-30 text--green fw-semibold">
                                        copra
                                    </p>
                                    <p class="text-16 text-md-xl lead" style="line-height: 160%;">
                                        Copra is the dried flesh of coconuts. Every adult coconut tree
                                        bears 50-75 nuts that can be harvested, split with machetes and
                                        left to dry in the sun. The copra is then scraped out of the husk
                                        and gets to dry further on racks. Finally, it is packed in jute bags
                                        and transported to a processing facility.
                                    </p>
                                    <div class="px-md-2 py-5">
                                        <div class="d-none d-md-block">
                                            <div class="row">
                                                <div class="col-md-5 mb-2">
                                                    <a href="" class="btn btn-outline-black">See Details</a>
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <a href="" class="btn btn-outline-black" rel="noreferrer">
                                                        <span class="me-2">Contact Us </span>
                                                        <div class="___class_+?99___">
                                                            <img src="{{ asset('assets/images/whatsapp.svg') }}"
                                                                alt="">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-block d-md-none">
                                            <div class="row">
                                                <div class="col-12 mb-2 px-5">
                                                    <a href="" class="btn btn-outline-black">See Details</a>
                                                </div>
                                                <div class="col-12 mb-2 px-5">
                                                    <a href="" class="btn btn-outline-black">
                                                        <div class="me-1">Contact Us </div>
                                                        <div class="___class_+?107___">
                                                            <img src="{{ asset('assets/images/whatsapp.svg') }}"
                                                                alt="">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 p-5">
                                <div class="px-md-5" data-aos="fade">
                                    <div>
                                        <img src="{{ asset('assets/images/coconut1.png') }}" class="img-center"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item px-md-5">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 p-5">
                                <div class="px-md-5" data-aos="fade">
                                    <p class="text-30 text--green fw-semibold">
                                        Virgin Coconut Oil
                                    </p>
                                    <p class="text-16 text-md-xl lead" style="line-height: 160%;">
                                        Virgin coconut oil is the oil extracted from coconuts without the
                                        application of
                                        heat.
                                        It is rapidly gaining popularity throughout the world in comparison to
                                        ordinary
                                        coconut oil and for a good reason. There is, in fact, a substance called
                                        virgin
                                        coconut oil and it differs from regular coconut oil in significant ways.
                                        These differences mainly lie with the source (more specifically, the
                                        physical
                                        form of the
                                        source),
                                        the method of extraction, and its subsequent benefits.
                                    </p>
                                    <div class="px-md-2 py-5">
                                        <div class="d-none d-md-block">
                                            <div class="row">
                                                <div class="col-md-5 mb-2">
                                                    <a href="" class="btn btn-outline-black">See Details</a>
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <a href="" class="btn btn-outline-black" rel="noreferrer">
                                                        <span class="me-2">Contact Us </span>
                                                        <div class="___class_+?125___">
                                                            <img src="{{ asset('assets/images/whatsapp.svg') }}"
                                                                alt="">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-block d-md-none">
                                            <div class="row">
                                                <div class="col-12 mb-2 px-5">
                                                    <a href="" class="btn btn-outline-black">See Details</a>
                                                </div>
                                                <div class="col-12 mb-2 px-5">
                                                    <a href="" class="btn btn-outline-black">
                                                        <div class="me-1">Contact Us </div>
                                                        <div class="___class_+?133___">
                                                            <img src="{{ asset('assets/images/whatsapp.svg') }}"
                                                                alt="">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 p-5">
                                <div class="px-md-5" data-aos="fade">
                                    <div>
                                        <img src="{{ asset('assets/images/coconut-peat-blocks.777f5293.png') }}"
                                            class="img-center" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-md-5">
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{-- </div> --}}
        {{-- <div class="d-block d-md-none">
            <div class="px-md-5 overflow-hidden">
                <div class="row">
                    <div class="pt-5 px-md-5">
                        <h2 class="text--black text-30 px-5 fw-bold"> Our Product</h2>
                    </div>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active px-md-5">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 p-5">
                                    <div class="px-md-5" data-aos="fade">
                                        <p class="text-30 text--green fw-semibold">
                                            Virgin Coconut Oil
                                        </p>
                                        <p class="text-16 text-md-xl lead" style="line-height: 160%;">
                                            Virgin coconut oil is the oil extracted from coconuts without the
                                            application of
                                            heat.
                                            It is rapidly gaining popularity throughout the world in comparison to
                                            ordinary
                                            coconut oil and for a good reason. There is, in fact, a substance called
                                            virgin
                                            coconut oil and it differs from regular coconut oil in significant ways.
                                            These differences mainly lie with the source (more specifically, the
                                            physical
                                            form of the
                                            source),
                                            the method of extraction, and its subsequent benefits.
                                        </p>
                                        <div class="px-md-2 py-5">
                                            <div class="d-none d-md-block">
                                                <div class="row">
                                                    <div class="col-md-5 mb-2">
                                                        <a href="" class="btn btn-outline-black">See Details</a>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <a href="" class="btn btn-outline-black" rel="noreferrer">
                                                            <span class="me-2">Contact Us </span>
                                                            <div class="">
                                                                <img src="{{ asset('assets/images/whatsapp.svg') }}"
                                                                    alt="">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-block d-md-none">
                                                <div class="row">
                                                    <div class="col-12 mb-2 px-5">
                                                        <a href="" class="btn btn-outline-black">See Details</a>
                                                    </div>
                                                    <div class="col-12 mb-2 px-5">
                                                        <a href="" class="btn btn-outline-black">
                                                            <div class="me-1">Contact Us </div>
                                                            <div class="">
                                                                <img src="{{ asset('assets/images/whatsapp.svg') }}"
                                                                    alt="">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 p-5">
                                    <div class="px-md-5" data-aos="fade">
                                        <div>
                                            <img src="{{ asset('assets/images/coconut1.png') }}" class="img-center"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item px-md-5">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 p-5">
                                    <div class="px-md-5" data-aos="fade">
                                        <p class="text-30 text--green fw-semibold">
                                            copra
                                        </p>
                                        <p class="text-16 text-md-xl lead" style="line-height: 160%;">
                                            Copra is the dried flesh of coconuts. Every adult coconut tree
                                            bears 50-75 nuts that can be harvested, split with machetes and
                                            left to dry in the sun. The copra is then scraped out of the husk
                                            and gets to dry further on racks. Finally, it is packed in jute bags
                                            and transported to a processing facility.
                                        </p>
                                        <div class="px-md-2 py-5">
                                            <div class="d-none d-md-block">
                                                <div class="row">
                                                    <div class="col-md-5 mb-2">
                                                        <a href="" class="btn btn-outline-black">See Details</a>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <a href="" class="btn btn-outline-black" rel="noreferrer">
                                                            <span class="me-2">Contact Us </span>
                                                            <div class="">
                                                                <img src="{{ asset('assets/images/whatsapp.svg') }}"
                                                                    alt="">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-block d-md-none">
                                                <div class="row">
                                                    <div class="col-12 mb-2 px-5">
                                                        <a href="" class="btn btn-outline-black">See Details</a>
                                                    </div>
                                                    <div class="col-12 mb-2 px-5">
                                                        <a href="" class="btn btn-outline-black">
                                                            <div class="me-1">Contact Us </div>
                                                            <div class="">
                                                                <img src="{{ asset('assets/images/whatsapp.svg') }}"
                                                                    alt="">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 p-5">
                                    <div class="px-md-5" data-aos="fade">
                                        <div>
                                            <img src="{{ asset('assets/images/coconut1.png') }}" class="img-center"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item px-md-5">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 p-5">
                                    <div class="px-md-5" data-aos="fade">
                                        <p class="text-30 text--green fw-semibold">
                                            Virgin Coconut Oil
                                        </p>
                                        <p class="text-16 text-md-xl lead" style="line-height: 160%;">
                                            Virgin coconut oil is the oil extracted from coconuts without the
                                            application of
                                            heat.
                                            It is rapidly gaining popularity throughout the world in comparison to
                                            ordinary
                                            coconut oil and for a good reason. There is, in fact, a substance called
                                            virgin
                                            coconut oil and it differs from regular coconut oil in significant ways.
                                            These differences mainly lie with the source (more specifically, the
                                            physical
                                            form of the
                                            source),
                                            the method of extraction, and its subsequent benefits.
                                        </p>
                                        <div class="px-md-2 py-5">
                                            <div class="d-none d-md-block">
                                                <div class="row">
                                                    <div class="col-md-5 mb-2">
                                                        <a href="" class="btn btn-outline-black">See Details</a>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <a href="" class="btn btn-outline-black" rel="noreferrer">
                                                            <span class="me-2">Contact Us </span>
                                                            <div class="">
                                                                <img src="{{ asset('assets/images/whatsapp.svg') }}"
                                                                    alt="">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-block d-md-none">
                                                <div class="row">
                                                    <div class="col-12 mb-2 px-5">
                                                        <a href="" class="btn btn-outline-black">See Details</a>
                                                    </div>
                                                    <div class="col-12 mb-2 px-5">
                                                        <a href="" class="btn btn-outline-black">
                                                            <div class="me-1">Contact Us </div>
                                                            <div class="">
                                                                <img src="{{ asset('assets/images/whatsapp.svg') }}"
                                                                    alt="">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 p-5">
                                    <div class="px-md-5" data-aos="fade">
                                        <div>
                                            <img src="{{ asset('assets/images/coconut-peat-blocks.777f5293.png') }}"
                                                class="img-center" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-md-5">
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>

    <section id="team" data-aos="fade-up" class="pt-md-5">
        <div class="py-5 team4">
            <div class="container">
                <div class="row justify-content-center mb-4">
                    <div class="col-md-7 text-center mb-4">
                        <h3 class="mb-3 text-black-35 text--black fw-bold">Our Teams</h3>
                    </div>
                </div>
                <div class="row px-3">

                    <!-- column  -->
                    <div class="col-lg-4 mb-4">
                        <!-- Row -->
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{{ asset('assets/images/julio.png') }}" alt="wrapkit"
                                    class="img-team-center img-fluid rounded-circle zoom" />
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="pt-2">
                                    <h5 class="mt-4 font-weight-medium mb-3 text--green">Julio</h5>
                                    <h6 class="text-16 fw bold mb-3">Founder</h6>
                                    <p>Our faith is the substance of our future. There is no big success without big
                                        sacrifice.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="#" class="text-decoration-none d-block px-1">
                                                <img src="{{ asset('assets/images/linkedin-black.svg') }}" alt="">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-decoration-none d-block px-1">
                                                <img src="{{ asset('assets/images/instagram-black.svg') }}" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Row -->
                    </div>
                    <!-- column  -->
                    <!-- column  -->
                    <div class="col-lg-4 mb-4">
                        <!-- Row -->
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{{ asset('assets/images/hafis.png') }}" alt="wrapkit"
                                    class="img-team-center img-fluid rounded-circle zoom" />
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="pt-2">
                                    <h5 class="mt-4 font-weight-medium mb-3 text--green">Alhafis Wijaya</h5>
                                    <h6 class="text-16 fw bold mb-3">Co-Founder</h6>
                                    <p>Many of life’s failures are people who did not realize how close they were to
                                        success when they gave up.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="#" class="text-decoration-none d-block px-1">
                                                <img src="{{ asset('assets/images/linkedin-black.svg') }}" alt="">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-decoration-none d-block px-1">
                                                <img src="{{ asset('assets/images/instagram-black.svg') }}" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Row -->
                    </div>
                    <!-- column  -->
                    <!-- column  -->
                    <div class="col-lg-4 mb-4">
                        <!-- Row -->
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{{ asset('assets/images/stella.png') }}" alt="wrapkit"
                                    class="img-team-center img-fluid rounded-circle zoom" />
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="pt-2">
                                    <h5 class="mt-4 font-weight-medium mb-3 text--green">Stella Carissa</h5>
                                    <h6 class="text-16 fw bold mb-3">Business Development</h6>
                                    <p>Many of life’s failures are people who did not realize how close they were to
                                        success when they gave up</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="#" class="text-decoration-none d-block px-1">
                                                <img src="{{ asset('assets/images/linkedin-black.svg') }}" alt="">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="text-decoration-none d-block px-1">
                                                <img src="{{ asset('assets/images/instagram-black.svg') }}" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Row -->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <x-frontend.footer />

    <x-frontend.scripts />
</body>

</html>
