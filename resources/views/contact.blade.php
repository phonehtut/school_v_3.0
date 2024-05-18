@extends('nav.header')

@section('title')
    New Way | Contact
@endsection

@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <!-- Breadcrumb section -->
    <div class="site-breadcrumb">
        <div class="container">
            <a href="{{ route('/') }}"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
            <span>Contact</span>
        </div>
    </div>
    <!-- Breadcrumb section end -->


    <!-- Courses section -->
    <section class="contact-page spad pt-0">
        <div class="container">
            <div class="map-section">
                <div class="contact-info-warp">
                    <div class="contact-info">
                        <h4>Address</h4>
                        <p>4Myanmr , Yangon , Thaketa Township</p>
                    </div>
                    <div class="contact-info">
                        <h4>Phone</h4>
                        <p>09403056829</p>
                    </div>
                    <div class="contact-info">
                        <h4>Email</h4>
                        <p>support@technologylearn.info</p>
                    </div>
                    <div class="contact-info">
                        <h4>Working time</h4>
                        <p>Monday - Friday: 09 AM - 10 PM</p>
                    </div>
                </div>
                <!-- Google map -->
                <div class="map" id="map-canvas"></div>
            </div>
            <div class="contact-form spad pb-0">
                <div class="section-title text-center">
                    <h3>GET IN TOUCH</h3>
                    <p>Contact us for best deals and offer</p>
                </div>
                <form action="{{ url('contact') }}" method="POST" class="comment-form --contact">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4">
                            <input type="text" name="name" placeholder="Your Name">
                        </div>
                        <div class="col-lg-4">
                            <input type="email" name="email" placeholder="Your Email">
                        </div>
                        <div class="col-lg-4">
                            <input type="text" name="subject" placeholder="Subject">
                        </div>
                        <div class="col-lg-12">
                            <textarea name="message" placeholder="Message"></textarea>
                            <div class="text-center">
                                <button type="submit" class="site-btn">SUBMIT</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Courses section end-->


    <!-- Newsletter section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-7">
                    <div class="section-title mb-md-0">
                        <h3>NEWSLETTER</h3>
                        <p>Subscribe and get the latest news and useful tips, advice and best offer.</p>
                    </div>
                </div>
                <div class="col-md-7 col-lg-5">
                    <form class="newsletter">
                        <input type="text" placeholder="Enter your email">
                        <button class="site-btn">SUBSCRIBE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter section end -->
@endsection
