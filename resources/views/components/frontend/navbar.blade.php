<div class="header">
    <nav
        class="navbar navbar-expand-lg navbar-light fixed-top px-md-5">
        <div class="container-fluid main_menu ps-3 px-md-5">
            <a class="navbar-brand" href="index.html">
                    <img id="brand-logo" src="{{ asset('uploads/setting/'. $config['setting']['logo']) }}"
                    style="height: 50px; width: auto; transition: all 0.25s ease;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item me-4">
                        <a class="nav-link"
                            aria-current="page" href="#aboutus">{!! $config['menuOne'][0]['menu_name'] !!}</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link"
                            href="#journey">{!! $config['menuTwo'][0]['menu_name'] !!}</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link"
                            href="#feature">{!! $config['menuThree'][0]['menu_name'] !!}</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link"
                            href="#product">{!! $config['menuFour'][0]['menu_name'] !!}</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link"
                            href="#team">{!! $config['menuFive'][0]['menu_name'] !!}</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link"
                            href="#contact">{!! $config['menuSix'][0]['menu_name'] !!}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
