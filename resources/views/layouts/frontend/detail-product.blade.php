<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{!! $config['setting']['title_website'] !!}</title>
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/styles/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/styles/responsive.css') }}">
        {{-- <link rel="stylesheet" href="{{ asset('assets/styles/ekko-lightbox.css') }}"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
        <link rel="icon" href="{{ asset('uploads/setting/' . $config['setting']['favicon']) }}" type="image/png">
        <!-- Add the slick-theme.css if you want default styling -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
        <!-- Add the slick-theme.css if you want default styling -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <style>
            #lightboxOverlay {
                position: fixed !important;
                top: 0;
                left: 0;
                height: 100% !important;
                width: 100% !important;
            }

            #lightbox {
                position: fixed !important;
                top: 50% !important;
                transform: translateY(-50%);
            }

            .navbar-light .navbar-nav .nav-link {
                color: #1150a1;
            }
        </style>
    </head>

<body>

    <x-frontend.navbar />

    <section class="pt-3 pt-md-5">
        <div class="container py-5">
            <div class="px-md-5 mb-md-5 mx-3 mx-md-5">
                <h2 class="title-detail text-center pt-5 mb-md-5" data-aos="fade-down">
                    {!! $product->title !!}
                </h2>
            </div>
            <div class="row px-md-5 py-3" data-aos="fade-down">
                <img src="{{ asset('uploads/products/' . $product->image) }}" class="img-fluid px-3 px-md-5 zoom" alt="">
            </div>
            <div class="px-md-5">
                <p class="text-detail-blog px-3 px-md-5 py-2" data-aos="fade-up">
                    {!! $product->description !!}
                </p>
            </div>
            <div class="py-5 px-md-5 d-none d-md-block">
                <div class="text-detail-blog px-md-5" data-aos="fade-down">
                    Share this :
                    <a href="https://api.whatsapp.com/send?text=https://masarinexim.com/{{ $product->slug }}" data-action="share/whatsapp/share" target="_blank" class="btn btn-social-media-green ms-2 me-2"
                        style="border-radius: 50%;">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://masarinexim.com/{{ $product->slug }}" target="_blank" class="btn btn-social-media-primary me-2"
                        style="border-radius: 50%;">
                        <i class="fab fa-facebook"></i>
                    </a>
                </div>
            </div>
            <div class="py-3 px-3 d-block d-md-none">
                <div class="text-detail-blog" data-aos="fade-down">
                    Share this :
                    <a href="https://api.whatsapp.com/send?text=https://masarinexim.com/{{ $product->slug }}" data-action="share/whatsapp/share" target="_blank" class="btn btn-social-media-green ms-2 me-2"
                        style="border-radius: 50%;">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://masarinexim.com/{{ $product->slug }}" target="_blank" class="btn btn-social-media-primary me-2"
                        style="border-radius: 50%;">
                        <i class="fab fa-facebook"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <x-frontend.footer />

    <x-frontend.scripts />
</body>

</html>
