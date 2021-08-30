<section id="contact">
    <div class="footer-black py-5">
        <div class="container">
            <div class="row text-center mb-4" data-aos="fade-up">
                <h2 class="text-30 fw-bold">{!! $config['footer']['title'] !!}</h2>
                <h5 class="text-20">{!! $config['footer']['subtitle'] !!}</h5>
            </div>
            <div class="col-md-5" data-aos="fade-up">
                <div class="col-sm-12 col-md-3 mb-3">
                    <img src="{{ asset('uploads/footer/'. $config['footer']['logo']) }}" class="img-fluid my-auto h-auto w-100"
                        alt="">
                </div>
                <div class="row">
                    <h3 class="text-30 fw-bold">{!! $config['footer']['company_name'] !!}</h3>
                    <p class="text-20">
                        {!! $config['footer']['description'] !!}
                    </p>
                </div>
                <div class="col-md-12">
                    <a href="{!! $config['setting']['facebook'] !!}"><img src="{{ asset('assets/images/facebook.svg') }}" class="px-2" alt=""></a>
                    <a href="{!! $config['setting']['instagram'] !!}"><img src="{{ asset('assets/images/instagram.svg') }}" class="px-2" alt=""></a>
                    <a href="{!! $config['setting']['linkedin'] !!}"><img src="{{ asset('assets/images/linkedin.svg') }}" class="px-2" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <div class="d-none d-md-block">
        <div class="copyright-style col-md-12">
            <h3 class="text-16 fw bold text-white">{!! $config['footer']['text_copyright'] !!}</h3>
        </div>
    </div>
    <div class="d-block d-md-none">
        <div class="copyright-style col-md-12">
            <h3 class="text-16 text-center fw bold text-white">{!! $config['footer']['text_copyright'] !!}</h3>
        </div>
    </div>
</section>
