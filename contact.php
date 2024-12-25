<?php
$page = "Contact us";
include "./components/header.php";
include "./components/navbar-alt.php";
?>

<main>

    <section class="position-relative py-xl-9" style="background:url(assets/images/contact.jpg) no-repeat; background-size:cover; background-position:center;">
        <div class="bg-overlay bg-dark opacity-2"></div>
        
        <div class="container position-relative z-index-2">
            <h1 class="display-6 text-white">Contact us</h1>
        </div>
    </section>

    <section class="position-relative overflow-hidden pb-0">
        <div class="container">
            <div class="row g-lg-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h5>How can we help you?</h5>
                    <p class="lead mb-4">Get in touch with us to see how we can help you.</p>
                    <form class="row form-border-bottom g-4">
                        
                        <div class="col-md-6">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="What's Your good name?">
                                <span class="focus-border"></span>
                                <span class="position-absolute top-50 end-0 translate-middle-y"><i class="bi bi-emoji-smile"></i></span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="position-relative">
                                <input type="email" class="form-control" placeholder="Enter your email address" required="">
                                <span class="focus-border"></span>
                                <span class="position-absolute top-50 end-0 translate-middle-y"><i class="bi bi-envelope"></i></span>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="How can we help you?">
                                <span class="focus-border"></span>
                                <span class="position-absolute top-50 end-0 translate-middle-y"><i class="bi bi-journals"></i></span>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="position-relative">
                                <textarea class="form-control" id="floatingTextarea2" style="height: 100px" placeholder="Describe about your project"></textarea>
                                <span class="focus-border"></span>
                                <span class="position-absolute top-0 end-0"><i class="bi bi-chat-square-dots"></i></span>
                            </div>
                        </div>

                        <div class="col-12 mt-4">
                            <button class="btn btn-primary mb-0">Send a message</button>
                        </div>
                    </form>
                </div>

                <div class="col-lg-6 col-xxl-5 ms-auto">
                    <div class="card card-body bg-secondary bg-opacity-50 rounded-4 p-4 p-sm-5 mb-4">
                        <h5 class="mb-4">Get in touch</h5>

                        <div class="d-sm-flex gap-3 mb-4">
                            <div class="icon-lg bg-body shadow-primary heading-color rounded-circle flex-shrink-0"><i class="bi bi-telephone"></i></div>
                            <div class="mt-3 mt-sm-0">
                                <p class="mb-1">Call us.</p>
                                <ul class="list-inline d-flex flex-wrap gap-sm-3 mb-0">
                                    <li class="list-inline-item"> <a href="#" class="fw-semibold heading-color text-primary-hover">+234 813-730-6404</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="d-sm-flex gap-3 mb-4">
                            <div class="icon-lg bg-body shadow-primary heading-color rounded-circle flex-shrink-0"><i class="bi bi-envelope"></i></div>
                            <div class="mt-3 mt-sm-0">
                                <p class="mb-1">Email us.</p>
                                <a href="mailto:hello@quickfix.ng" class="fw-semibold heading-color text-primary-hover mb-0">hello@quickfix.ng</a>
                            </div>
                        </div>

                        <div class="d-sm-flex gap-3">
                            <div class="icon-lg bg-body shadow-primary heading-color rounded-circle flex-shrink-0"><i class="bi bi-pin-map-fill"></i></div>
                            <div class="mt-3 mt-sm-0">
                                <p class="mb-1">Are you ready for coffee?</p>
                                <p class="fw-semibold heading-color mb-0">21 Bisola Durosinmi Etti Dr, Lekki Phase I, Lekki 106104, Lagos.</p>
                            </div>
                        </div>
                    </div>

                    <ul class="list-inline d-sm-flex align-items-center justify-content-center mb-0">
                        <li class="list-inline-item heading-color fw-semibold me-sm-3">Connect with:</li>
                        <li class="list-inline-item"> <a class="btn btn-xs btn-icon bg-facebook" href="https://www.facebook.com/quickfix_hq" target="_blank"><i class="bi bi-facebook lh-base"></i></a> </li>
                        <li class="list-inline-item"> <a class="btn btn-xs btn-icon bg-instagram" href="https://www.instagram.com/quickfix_hq" target="_blank"><i class="bi bi-instagram lh-base"></i></a> </li>
                        <li class="list-inline-item"> <a class="btn btn-xs btn-icon bg-twitter-x" href="https://www.x.com/quickfix_hq" target="_blank"><i class="bi bi-twitter-x lh-base"></i></a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-0">
        <iframe class="w-100 h-200px h-lg-400px grayscale d-block" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.6631058980547!2d3.4612911!3d6.437296700000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf5aaea972555%3A0xad77123e648e5e2!2s21%20Bisola%20Durosinmi%20Etti%20Dr%2C%20Lekki%20Phase%20I%2C%20Lekki%20106104%2C%20Lagos!5e0!3m2!1sen!2sng!4v1735077570750!5m2!1sen!2sng"`````````` style="margin-bottom: -5px;" aria-hidden="false" tabindex="0"></iframe>	
    </section>

</main>


<?php include "./components/footer.php"; ?>