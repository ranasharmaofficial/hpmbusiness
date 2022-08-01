@extends('master')

@section('title')
    About Us - Hindustan Product Marketing services
@endsection

@section('description')
    Hindustan Product Marketing services
@endsection


@section('content')
    <div id="page-header" class="content-contrast">
        <div class="page-title-container">
            <div class="background-overlay"></div>
            <div class="container centered-container">
                <div class="centered-inner-container">
                    <h1 class="page-title">About Us</h1>
                    <hr class="separator small-separator">
                    {{-- <div class="heading-caption">Hindustan Product Marketing service</div> --}}
                </div>
            </div>
        </div>
        <div class="breadcrumb-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav class="breadcrumb">
                            <a class="breadcrumb-item" href="{{ url('') }}">Home</a>
                            <span class="breadcrumb-item active">About Us</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-title">
                        <h3>About <strong class="text-color">Hindustan Product Marketing services</strong></h3>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <img class="img-radius img-border img-shadow img-margin no-margin-lg"
                        src="{{ url('front_assets/img/product_banner.jpg') }}" alt="image alt">
                </div>

                <div class="col-lg-6 col-md-12">
                    <p class="text-justify">
                        This Organization was inagurated on 30-9-2019 at Bihar.
                        We deal in Electronics, Home Product and Body Care Products. HPM Service has many years
                        experience of marketing, personality development and product finance. We believe in
                        quality and always work with quality persons.</br>Thnks for trusting Us.
                    </p>
                    <p class="text-justify">HPM Services is India's number one service provider with only one aim and goal to guarantee our
                        customers values & service. Enjoy you tomorrow in today and enjoy your life with financial freedom.
                    </p>
                    <p class="text-justify">This company has been started under the great founder of Mr. Himanshu Kumar amd management
                        leadership of Mr. Sandeep Kumar. HPM service in Bihar </p>
                    <a href="{{ url('contact-us') }}" class="btn btn-default btn-outline">Get in Touch</a>
                </div>
            </div>
        </div>
    </section>
@endsection
