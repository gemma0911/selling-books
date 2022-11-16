<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Productly | Design Agency Landing Page UI</title>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <link href="assets/css/theme.css" rel="stylesheet" />

</head>

<body>
    <main class="main" id="top">
        @include('template.component.header')
        {{-- <section class="pt-7" id="feature">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-md-start text-center py-6">
                        <h1 class="mb-4 fs-9 fw-bold">The Design Thinking Superpowers</h1>
                        <p class="mb-6 lead text-secondary">Tools tutorials, design and innovation experts, all<br
                                class="d-none d-xl-block" />in one place! The most intuitive way to imagine<br
                                class="d-none d-xl-block" />your next user experience.</p>
                        <div class="text-center text-md-start"><a class="btn btn-warning me-3 btn-lg" href="#!"
                                role="button">Get started</a><a class="btn btn-link text-warning fw-medium"
                                href="#!" role="button" data-bs-toggle="modal" data-bs-target="#popupVideo"><span
                                    class="fas fa-play me-2"></span>Watch the video </a></div>
                    </div>
                    <div class="col-md-6 text-end"><img class="pt-7 pt-md-0 img-fluid"
                            src="assets/img/hero/hero-img.png" alt="" /></div>
                </div>
            </div>
        </section> --}}

        @include('template.component.product')

        {{-- <section class="pt-5" id="validation">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h5 class="text-secondary">Effortless Validation for</h5>
                        <h2 class="mb-2 fs-7 fw-bold">Design Professionals</h2>
                        <p class="mb-4 fw-medium text-secondary">
                            The Myspace page defines the individual,his or her
                            characteristics, traits, personal choices and the overall<br />personality of the person.
                        </p>
                        <h4 class="fs-1 fw-bold">Accessory makers</h4>
                        <p class="mb-4 fw-medium text-secondary">While most people enjoy casino gambling, sports
                            betting,<br />lottery and bingo playing for the fun</p>
                        <h4 class="fs-1 fw-bold">Alterationists</h4>
                        <p class="mb-4 fw-medium text-secondary">If you are looking for a new way to promote your
                            business<br />that won't cost you money,</p>
                        <h4 class="fs-1 fw-bold">Custom Design designers</h4>
                        <p class="mb-4 fw-medium text-secondary">If you are looking for a new way to promote your
                            business<br />that won't cost you more money,</p>
                    </div>
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/validation/validation.png"
                            alt="" /></div>
                </div>
            </div>

        </section> --}}

        {{-- <section class="pt-5" id="manager">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/manager/manager.png" alt="" />
                    </div>
                    <div class="col-lg-6">
                        <h5 class="text-secondary">Easier decision making for</h5>
                        <p class="fs-7 fw-bold mb-2">Product Managers</p>
                        <p class="mb-4 fw-medium text-secondary">
                            The Myspace page defines the individual,his or her
                            characteristics, traits, personal choices and the overall<br />personality of the person.
                        </p>
                        <div class="d-flex align-items-center mb-3"> <img class="me-sm-4 me-2"
                                src="assets/img/manager/tick.png" width="35" alt="tick" />
                            <p class="fw-medium mb-0 text-secondary">Never worry about overpaying for your<br />energy
                                again.</p>
                        </div>
                        <div class="d-flex align-items-center mb-3"> <img class="me-sm-4 me-2"
                                src="assets/img/manager/tick.png" width="35" alt="tick" />
                            <p class="fw-medium mb-0 text-secondary">We will only switch you to energy
                                companies<br />that we trust and will treat you right</p>
                        </div>
                        <div class="d-flex align-items-center mb-3"><img class="me-sm-4 me-2"
                                src="assets/img/manager/tick.png" width="35" alt="tick" />
                            <p class="fw-medium mb-0 text-secondary"> We track the markets daily and know where
                                the<br />savings are.</p>
                        </div>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section>

        <section class="pt-5" id="marketer">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h5 class="text-secondary">Optimisation for</h5>
                        <p class="mb-2 fs-8 fw-bold">Marketers</p>
                        <p class="mb-4 fw-medium text-secondary">Few would argue that, despite the advancements
                            of<br />feminism over the past three decades, women still face a<br />double standard when
                            it comes to their behavior.</p>
                        <h4 class="fw-bold fs-1">Accessory makers</h4>
                        <p class="mb-4 fw-medium text-secondary">While most people enjoy casino gambling, sports
                            betting,<br />lottery and bingo playing for the fun</p>
                        <h4 class="fw-bold fs-1">Alterationists</h4>
                        <p class="mb-4 fw-medium text-secondary">If you are looking for a new way to promote your
                            business<br />that won't cost you money,</p>
                        <h4 class="fw-bold fs-1">Custom Design designers</h4>
                        <p class="mb-4 fw-medium text-secondary">If you are looking for a new way to promote your
                            business<br />that won't cost you more money,</p>
                    </div>
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/marketer/marketer.png"
                            alt="" /></div>
                </div>
            </div><!-- end of .container-->

        </section>

        <section class="py-md-11 py-8" id="superhero">

            <div class="bg-holder z-index--1 bottom-0 d-none d-lg-block background-position-top"
                style="background-image:url(assets/img/superhero/oval.png);opacity:.5; background-position: top !important ;">
            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h1 class="fw-bold mb-4 fs-7">Need a super hero?</h1>
                        <p class="mb-5 text-info fw-medium">Do you require some help for your project: Conception
                            workshop,<br />prototyping, marketing strategy, landing page, Ux/UI?</p>
                        <button class="btn btn-warning btn-md">Contact our expert</button>
                    </div>
                </div>
            </div><!-- end of .container-->

        </section> --}}

        {{-- <section class="pt-5" id="marketing">

            <div class="container">
                <h1 class="fw-bold fs-6 mb-3">Marketing Strategies</h1>
                <p class="mb-6 text-secondary">Join 40,000+ other marketers and get proven strategies on email
                    marketing</p>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card"><img class="card-img-top" src="assets/img/marketing/marketing01.png"
                                alt="" />
                            <div class="card-body ps-0">
                                <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1"
                                        href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                                <h3 class="fw-bold">Increasing Prosperity With Positive Thinking</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card"><img class="card-img-top" src="assets/img/marketing/marketing02.png"
                                alt="" />
                            <div class="card-body ps-0">
                                <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1"
                                        href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                                <h3 class="fw-bold">Motivation Is The First Step To Success</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card"><img class="card-img-top" src="assets/img/marketing/marketing03.png"
                                alt="" />
                            <div class="card-body ps-0">
                                <p class="text-secondary">By <a class="fw-bold text-decoration-none me-1"
                                        href="#">Abdullah</a>|<span class="ms-1">03 March 2019</span></p>
                                <h3 class="fw-bold">Success Steps For Your Personal Or Business Life</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('template.component.footer')

        <section class="text-center py-0">

            <div class="container">
                <div class="container border-top py-3">
                    <div class="row justify-content-between">
                        <div class="col-12 col-md-auto mb-1 mb-md-0">
                            <p class="mb-0">&copy; 2022 Your Company Inc </p>
                        </div>
                        <div class="col-12 col-md-auto">
                            <p class="mb-0">
                                Made with<span class="fas fa-heart mx-1 text-danger"> </span>by <a
                                    class="text-decoration-none ms-1" href="https://themewagon.com/"
                                    target="_blank">ThemeWagon</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <div class="modal fade" id="popupVideo" tabindex="-1" aria-labelledby="popupVideo" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <iframe class="rounded" style="width:100%;height:500px;"
                        src="https://www.youtube.com/embed/_lhdhL4UDIo" title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <script src="vendors/@popperjs/popper.min.js"></script>
        <script src="vendors/bootstrap/bootstrap.min.js"></script>
        <script src="vendors/is/is.min.js"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <script src="vendors/fontawesome/all.min.js"></script>
        <script src="assets/js/theme.js"></script>

        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap"
            rel="stylesheet">
            <script src="{{asset('assets/js/js.js')}}"></script>
</body>

</html>
