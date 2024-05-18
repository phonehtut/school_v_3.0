@extends('nav.header')

@section('title')
    New Way | Courses
@endsection

@section('content')
    <!-- Breadcrumb section -->
    <div class="site-breadcrumb">
        <div class="container">
            <a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
            <span>Blog</span>
        </div>
    </div>
    <!-- Breadcrumb section end -->


    <!-- Courses section -->
    <section class="full-courses-section spad pt-0">
        <div class="container">
            <div class="row">
                <!-- course item -->
                <div class="col-lg-4 col-md-6 course-item">
                    <div class="course-thumb">
                        <img src="/assets/img/course/1.jpg" alt="">
                        <div class="course-cat">
                            <span>Computer Basic</span>
                        </div>
                    </div>
                    <div class="course-info">
                        <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div>
                        <h4>Computer Basic<br>for Biggner</h4>
                        <h4 class="cource-price">10000 MMK</h4>
                        <a href="{{ route('student.index') }}" class="btn button-alppy mt-3">
                            Alppy Now
                        </a>
                    </div>
                </div>
            </div>
            {{-- <div class="text-center">
                <ul class="site-pageination">
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div> --}}
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
