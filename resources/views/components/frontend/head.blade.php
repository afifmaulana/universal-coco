<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="{!! $config['setting']['keywords'] !!}">
    <meta name="description" content="{!! $config['setting']['description'] !!}">
    <meta name="author" content="www.alfara-dev.com">
    <title>{!! $config['setting']['title_website'] !!}</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/simple-line-icons.css') }}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/lightbox.min.css') }}" />
    <link href="{{ asset('assets/styles/aos.css') }}" rel="stylesheet">

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

    </style>
</head>
