@extends('master')

@section('title')
    Home - Hindustan Product Marketing service
@endsection

@section('description')
    Hindustan Product Marketing service
@endsection


@section('content')
    <div class="slideshow-container" id="hero">
        <div class="slideshow" data-flex-fullscreen="true">
            <ul class="slides">
                <li>
                    <img src="{{ url('front_assets/img/slideshow/sl1.jpg') }}" data-position-y="top" alt="Slideshow Image">
                    <div class="flex-content-overlay"></div>
                    <div class="flex-content-wrapper">
                        <div class="flex-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <p class="hero-caption no-margin flex-animate" data-animate="animate__fadeInDown">Do
                                            you need to help</p>
                                        <hr class="hero-separator flex-animate" data-animate="animate__fadeInDown"
                                            data-animate-delay="500">
                                        <h1 class="hero-heading flex-animate" data-animate="animate__fadeInDown"
                                            data-animate-delay="650">Hindustan<br>Product Marketing Services </h1>
                                        <a href="#" class="btn btn-default flex-animate"
                                            data-animate="animate__fadeInLeft" data-animate-delay="1000">Get In Touch</a>
                                        <a href="#" class="btn btn-white btn-border flex-animate"
                                            data-animate="animate__fadeInRight" data-animate-delay="1000">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="{{ url('front_assets/img/slideshow/sl2.jpg') }}" alt="Slideshow Image">
                    <div class="flex-content-overlay"></div>
                    <div class="flex-content-wrapper">
                        <div class="flex-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <p class="hero-caption no-margin flex-animate" data-animate="animate__fadeInDown">We
                                            can help to create the garden of your dreams</p>
                                        <hr class="hero-separator flex-animate" data-animate="animate__fadeInDown"
                                            data-animate-delay="500">
                                        <h1 class="hero-heading flex-animate" data-animate="animate__fadeInDown"
                                            data-animate-delay="650">Easy to Set up, Easy to Fill<br>and Easy to Grow</h1>
                                        <a href="#" class="btn btn-default flex-animate"
                                            data-animate="animate__fadeInLeft" data-animate-delay="1000">Get In Touch</a>
                                        <a href="#" class="btn btn-white btn-border flex-animate"
                                            data-animate="animate__fadeInRight" data-animate-delay="1000">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="{{ url('front_assets/img/slideshow/sl1.jpg') }}" data-position-y="top"
                        alt="Slideshow Image">
                    <div class="flex-content-overlay"></div>
                    <div class="flex-content-wrapper">
                        <div class="flex-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <p class="hero-caption no-margin flex-animate" data-animate="animate__fadeInDown">
                                            Now you don't have to bother thinking about design</p>
                                        <hr class="hero-separator flex-animate" data-animate="animate__fadeInDown"
                                            data-animate-delay="500">
                                        <h1 class="hero-heading flex-animate" data-animate="animate__fadeInDown"
                                            data-animate-delay="650">We Can Create An Environment<br>That's Beyond Your
                                            Imagination</h1>
                                        <a href="#" class="btn btn-default flex-animate"
                                            data-animate="animate__fadeInLeft" data-animate-delay="1000">Get In Touch</a>
                                        <a href="#" class="btn btn-white btn-border flex-animate"
                                            data-animate="animate__fadeInRight" data-animate-delay="1000">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    {{-- <section class="section what-we-do-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="heading-title text-center"> --}}
    {{-- <h3>What <strong class="text-color">We Do</strong></h3> --}}
    {{-- <h2>Hindustan Product Marketing Service</h2>
                        </div> --}}

    {{-- <p class="gap" data-gap-bottom="220">
                            This orientation was intugurated on 19-7-2019 at Bihar.
                            We deal in Electronics, Home Product and Body Care Products. HPM Service has many years experience of marketting and personality development or product finance. We believe in quality and always work with quality persons.Thnks for trusting Us.
                        </p> --}}

    {{-- <a href="services.html" class="btn btn-default">More Service</a> --}}
    {{-- </div>
                </div>
            </div>
        </section> --}}

    {{-- <section class="section no-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="service-item-carousel">
                            <li class="service-item" style="padding: 20px;">
                                <div class="service-overlay"></div>
                                <img class="set-image-bg" data-parent="service-item" src="{{url('front_assets/img/services/service-1.jpg')}}" alt="image">
                                <div class="service-content content-contrast">
                                    <i class="craftico-spring-grass"></i>
                                    <h4 class="service-title">
                                        <a href="lawn-garden-maintenance.html">Lawn and Garden<br>Maintenance</a>
                                    </h4>
                                    <p>It's great time, you can save your time for garden maintenance. After we finished, your garden will be a perfect place for hanging out with your family and your friends</p>
                                </div>
                            </li>
                            <li class="service-item">
                                <div class="service-overlay"></div>
                                <img class="set-image-bg" data-parent="service-item" src="{{url('front_assets/img/services/service-2.jpg')}}" alt="image">
                                <div class="service-content content-contrast">
                                    <i class="craftico-planting"></i>
                                    <h4 class="service-title">
                                        <a href="decoration-and-landscaping.html">Decoration and<br>Landscaping</a>
                                    </h4>
                                    <p>Updating your home's landscaping to create outdoor spaces for relaxing and entertaining, you can create a space for gathering with family, barbeque party with your friends</p>
                                </div>
                            </li>
                            <li class="service-item">
                                <div class="service-overlay"></div>
                                <img class="set-image-bg" data-parent="service-item" src="{{url('front_assets/img/services/service-3.jpg')}}" alt="image">
                                <div class="service-content content-contrast">
                                    <i class="craftico-wheelbarrow"></i>
                                    <h4 class="service-title">
                                        <a href="design-and-planting.html">Design and<br>Planting</a>
                                    </h4>
                                    <p>We can create a beautiful garden in any yard with our landscaping ideas, garden plans, and request specific plans. We can realize your dream garden and bring it to your garden</p>
                                </div>
                            </li>
                            <li class="service-item">
                                <div class="service-overlay"></div>
                                <img class="set-image-bg" data-parent="service-item" src="{{url('front_assets/img/services/service-4.jpg')}}" alt="image">
                                <div class="service-content content-contrast">
                                    <i class="craftico-garden-tools"></i>
                                    <h4 class="service-title">
                                        <a href="garden-clearance.html">Garden<br>Clearance</a>
                                    </h4>
                                    <p>
                                        We offer fast and reliable garden clearance, available any day of the week. From hedge trimmings, grass and flower cuttings to dry leaves, twigs and bags of garden soils, we can collect and clean your
                                        garden
                                    </p>
                                </div>
                            </li>
                            <li class="service-item">
                                <div class="service-overlay"></div>
                                <img class="set-image-bg" data-parent="service-item" src="{{url('front_assets/img/services/service-5.jpg')}}" alt="image">
                                <div class="service-content content-contrast">
                                    <i class="craftico-honeycomb"></i>
                                    <h4 class="service-title">
                                        <a href="stone-hardscaping.html">Stone<br>Hardscaping</a>
                                    </h4>
                                    <p>
                                        Your garden will look more natural with grass but the presence of hardscape serves as a counterweight. Your garden will look more beautiful, spacious, and characterized by the presence of the
                                        hardscape elements.
                                    </p>
                                </div>
                            </li>
                            <li class="service-item">
                                <div class="service-overlay"></div>
                                <img class="set-image-bg" data-parent="service-item" src="{{url('front_assets/img/services/service-6.jpg')}}" alt="image">
                                <div class="service-content content-contrast">
                                    <i class="craftico-watering-can"></i>
                                    <h4 class="service-title">
                                        <a href="watering-and-irigation.html">Watering and<br>Irigation</a>
                                    </h4>
                                    <p>
                                        We offer fast and reliable garden clearance, available any day of the week. From hedge trimmings, grass and flower cuttings to dry leaves, twigs and bags of garden soils, we can collect and clean your
                                        garden
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section> --}}

    <section class="section" id="why-choose-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-title text-center">
                        <h3><strong class="text-color">About Us</strong></h3>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="feature icon-right">
                        <i class="craftico-sustainability"></i>
                        <div class="feature-content">
                            <h5>Full Guarantees for All Works</h5>
                            <p class="gap" data-gap-bottom="10">
                                This Organization was inagurated on 30-9-2019 at Bihar.
                                We deal in Electronics, Home Product and Body Care Products. HPM Service has many years
                                experience of marketing, personality development and product finance. We believe in
                                quality and always work with quality persons.</br>Thnks for trusting Us.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 product_banner">
                    <img src="{{ url('front_assets/img/banner.png') }}" alt="" style="border-radius:10px;">
                </div>
            </div>
            <div class="row mt-3 mb-3 some-activity-display">
                <div class="col-md-12 d-flex justify-content-center some-activity">
                    <div class="book_your_product"><a href="#">Book <br> Your Product</a></div>
                    <div class="quick_book_pay"><a href="#">Quick <br> Book & Pay</a></div>
                    <div class="register_hpm_product"><a href="#">Register for <br> HPM Product</a></div>
                    <div class="join_pahal"><a href="#">Join Panal</a></div>
                    <div class="kyc"><a href="#">KYC</a></div>
                </div>
            </div>
            <div class="row mt-3 mb-3 mobile-some-activity-display">
                <div class="col-md-12 d-flex justify-content-center some-activity">
                    <div class="book_your_product"><a href="#">Book <br> Your Product</a></div>
                    <div class="quick_book_pay"><a href="#">Quick <br> Book & Pay</a></div>
                    <div class="register_hpm_product"><a href="#">Register for <br> HPM Product</a></div>
                </div>
                <div class="col-md-12 d-flex justify-content-center some-activity">
                    <div class="join_pahal"><a href="#">Join Panal</a></div>
                    <div class="kyc"><a href="#">KYC</a></div>
                </div>
            </div>
        </div>
    </section>

    <section style="background:#077810; ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="text-white m-2"><span>Your Welcome</span> <br> Hindustan Product Marketing Services</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-3 mb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <p>HPM Service is India's number one service provider with only one aim and goal to guarantee our
                        customers values & service. Enjoy you tomorrow in today and enjoy your life with financial freedom.
                    </p>
                    <p>This company has been started under the great founder of Mr. Himanshu Kumar amd management
                        leadership of Mr. Sandeep Kumar. HPM service in Bihar </p>
                </div>
                <div class="col-md-3 text-center">
                    <img style="width: 50%;" src="{{ url('front_assets/img/product_banner.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="founder_section mb-2">
        <div class="container ">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="d-flex flex-column align-items-center himanshu pt-3 pb-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ url('front_assets/img/himanshu.jpg') }}" class="card-img-top" alt="...">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Mr. Himanshu Kumar</li>
                                <li class="list-group-item">Director & Bihar Distributor</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <div class=" d-flex flex-column align-items-center sandeep pt-3 pb-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ url('front_assets/img/sandeep.jpg') }}" class="card-img-top" alt="...">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Mr. Sandeep Kumar</li>
                                <li class="list-group-item">Bihar&nbsp;Distributor&nbsp;&&nbsp;Management</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-4 company-address" >
        <div class="container text-white mb-5" style="background-color: #10093d;">
            <div class="row">
                <div class="col-md-6 company-address-details mb-3">
                    <h4 class="text-center text-white mt-2">Details</h2>
                    <p><strong>Reg No</strong> : UDYAM-ER-27-0002681</p>
                    <P><strong>GST No</strong> : IOCKVPK5830Q1Z1</P>
                    <p><i class="fa fa-envelope-o" aria-hidden="true"></i> hpmbusiness2@gmail.com</p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> +91 8294918280, 7070800408</p>
                    

                </div>
                <div class="col-md-6 company-address-address mb-3">
                    <h4 class="text-center text-white mt-2">Address</h4>
                    <p><strong>Head Office</strong> : Narain Market ,Sadar Bazar New Delhi-110006</p>
                    <p>HPM Services Bihar Office</p>
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> N.H 107 Main Road, Jankinagar, Purnea(Bihar)-854302</p>
                    <p>Mon-Friday : 9:00 to 18:00</p>
                </div>
            </div>
        </div>
    </section>


    {{-- <div class="section testimonial-container">
        <div class="overlay-background"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="testimonial-carousel content-contrast">
                        <li>
                            <div class="testimonial">
                                <blockquote>
                                    <p>
                                        They listened to my requirements and preferences for the design of my garden and
                                        were able to offer lots of ideas to meet my needs. One year later, I continue to
                                        enjoy my new garden with its
                                        vibrant colours and bespoke features
                                    </p>
                                    <cite>
                                        <strong>William Franklin</strong>
                                        <span>Manager at Adelis</span>
                                    </cite>
                                </blockquote>
                            </div>
                        </li>
                        <li>
                            <div class="testimonial">
                                <blockquote>
                                    <p>
                                        Agrina Crop Care listened to our requirements when we needed to landscape our garden
                                        following a house extension. He presented several options. with a patiently designed
                                        hybrid solution diligently
                                        executed
                                    </p>
                                    <cite>
                                        <strong>Christie Greene</strong>
                                        <span>Manager at Pro Garden</span>
                                    </cite>
                                </blockquote>
                            </div>
                        </li>
                        <li>
                            <div class="testimonial">
                                <blockquote>
                                    <p>
                                        His documentation is clear and precise and the combination of hands on experience in
                                        the National Botanical Gardens with his professional qualifications and experience
                                        make him an excellent
                                        Landscaping Consultant
                                    </p>
                                    <cite>
                                        <strong>Jenifer Laurence</strong>
                                        <span>Manager at Eco Green</span>
                                    </cite>
                                </blockquote>
                            </div>
                        </li>
                        <li>
                            <div class="testimonial">
                                <blockquote>
                                    <p>
                                        Thanks for great work! Seven and a half cubic metres perfectly poured into my
                                        garden, Very happy with the excellent customer service you offer. There's one on
                                        mine...and my friends are very
                                        impressed. Thanks
                                    </p>
                                    <cite>
                                        <strong>Diena Houglas</strong>
                                        <span>Founder at Urban Farm</span>
                                    </cite>
                                </blockquote>
                            </div>
                        </li>
                        <li>
                            <div class="testimonial">
                                <blockquote>
                                    <p>
                                        Agrina Crop Care team has designed and created a wonderful garden landscape for my
                                        new office. The workmanship and the materials used are all first class and Agrina
                                        Crop Care team are passionate about follow up
                                        garden maintenance
                                    </p>
                                    <cite>
                                        <strong>Christine Greece</strong>
                                        <span>Human Resource at Creative Space</span>
                                    </cite>
                                </blockquote>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <section class="section no-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="heading-title gap" data-gap-top="85">
                        <h3>Why We <strong class="text-color">Different with Other?</strong></h3>
                    </div>
                    <p>Over 300 projects with high level of customer satisfaction, winning multiple awards in various
                        aspects of the landscape and garden design, we always provide the best service to customers.</p>

                    <ul class="grid-md-2 grid-sm-2 no-wrap">
                        <li>
                            <div class="counter-box no-margin-lg no-margin-md">
                                <i class="craftico-humans_01"></i>
                                <div class="counter-content">
                                    <span class="count-me number" data-to="245" data-speed="2500">245</span>
                                    <h6 class="counter-title">Happy Customers</h6>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="counter-box no-margin-lg no-margin-md">
                                <i class="craftico-flower"></i>
                                <div class="counter-content">
                                    <span class="count-me number" data-to="358" data-speed="2500">358</span>
                                    <h6 class="counter-title">Project Clear</h6>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="counter-box no-margin-lg no-margin-md">
                                <i class="craftico-ecology-award"></i>
                                <div class="counter-content">
                                    <span class="count-me number" data-to="78" data-speed="2500">93</span>
                                    <h6 class="counter-title">Winning Awards</h6>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="counter-box no-margin-lg no-margin-md">
                                <i class="craftico-urban-planning"></i>
                                <div class="counter-content">
                                    <span class="count-me number" data-to="128" data-speed="2500">286</span>
                                    <h6 class="counter-title">Company Member</h6>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="estimate-form">
                        <div class="heading-title">
                            <h3>Request an <strong class="text-color">Estimate</strong></h3>
                        </div>
                        <form class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email Address">
                                </div>
                                <div class="form-group no-margin-lg">
                                    <select class="custom-select form-control">
                                        <option>Select Service</option>
                                        <option>Lawn Maintenance</option>
                                        <option>Decoration</option>
                                        <option>Landscaping</option>
                                        <option>Planting</option>
                                        <option>Design</option>
                                        <option>Garden Clearence</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Home Address">
                                </div>
                                <div class="form-group no-margin">
                                    <textarea rows="4" class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <hr class="separator">
                                <div class="form-group no-margin">
                                    <button type="submit" class="btn btn-default btn-block">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="section gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-title text-center">
                            <h3>Our Happy <strong class="text-color">Clients</strong></h3>
                        </div>
                        <ul class="grid-lg-5 grid-md-2 grid-sm-1 client-carousel">
                            <li><img src="{{url('front_assets/img/client-logo/logo-1.png')}}" alt="client logo 1"></li>
                            <li><img src="{{url('front_assets/img/client-logo/logo-2.png')}}" alt="client logo 2"></li>
                            <li><img src="{{url('front_assets/img/client-logo/logo-3.png')}}" alt="client logo 3"></li>
                            <li><img src="{{url('front_assets/img/client-logo/logo-4.png')}}" alt="client logo 4"></li>
                            <li><img src="{{url('front_assets/img/client-logo/logo-5.png')}}" alt="client logo 5"></li>
                            <li><img src="{{url('front_assets/img/client-logo/logo-6.png')}}" alt="client logo 6"></li>
                            <li><img src="{{url('front_assets/img/client-logo/logo-7.png')}}" alt="client logo 7"></li>
                            <li><img src="{{url('front_assets/img/client-logo/logo-8.png')}}" alt="client logo 8"></li>
                            <li><img src="{{url('front_assets/img/client-logo/logo-9.png')}}" alt="client logo 9"></li>
                            <li><img src="{{url('front_assets/img/client-logo/logo-10.png')}}" alt="client logo 10"></li>
                            <li><img src="{{url('front_assets/img/client-logo/logo-11.png')}}" alt="client logo 11"></li>
                            <li><img src="{{url('front_assets/img/client-logo/logo-12.png')}}" alt="client logo 12"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section> --}}

    {{-- <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="heading-title">
                        <h3>Frequently <strong class="text-color">Ask &amp; Questions</strong></h3>
                    </div>

                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        How much does Lawn Mowing cost?
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">Lawn Mowing costs start at $20 for a small lawn, and vary depending
                                    on size. If you give me a call I can organise to come out to your home for an obligation
                                    free quote.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        How often should I have my grass cut?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">For a healthy vigorous lawn we recommend you cut your lawn weekly in
                                    the growing months, September through to April for buffalo being 40mm - 60mm.</div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Do I need to supply any tools?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">There is no need. We are fully equipped with all the appropriate
                                    tools to getting the job done.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="heading-title">
                        <h3>Our <strong class="text-color">Office</strong></h3>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="map-wrapper no-margin-lg">
                                <div id="map"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <p>Agrina Crop Care is Garden Company, provides all you need about Garden and Landscape Design.
                            </p>
                            <h5 class="text-color">Office Address :</h5>
                            <div class="contact-info">
                                <p>
                                    2158 Madison Avenue <br>
                                    Montgomery, AL(Alabama) 36107
                                </p>
                            </div>

                            <h5 class="text-color">Office Hours</h5>
                            <div class="contact-info no-margin">
                                <p>
                                    Monday to Friday : 7:00 - 18:00 <br>
                                    Saturday : 9:00 - 15:00
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="section cta-bottom-container content-contrast">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-center">
                    <h2>Ready to <strong>Get Started?</strong></h2>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a href="#" class="btn btn-default btn-block">Get Free Quote</a>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
