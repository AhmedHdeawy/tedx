@extends('layouts.app')

@section('content')

@include('layouts.header')

<header id="site-header" class="site-header valign-center"> 
        <div class="intro">

            <h2>24 February, 2018 / Sheikh Zayed Hall</h2>
            
            <h1>Technology Conference</h1>
            
            <a class="btn btn-white" href="{{ route('application') }}">Register Now</a>
        
        </div>
    </header>

    <section id="about" class="section about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4">

                    <h3 class="section-title">TED</h3>
                    <p>
                        TED is a nonprofit devoted to spreading ideas, usually in the form of short, powerful talks (18 minutes or less). TED began in 1984 as a conference where Technology, Entertainment and Design converged, and today covers almost all topics — from science to business to global issues — in more than 100 languages. Meanwhile, independently run TEDx events help share ideas in communities around the world.
                    </p>
                     


                </div>

                <div class="col-sm-12 col-md-4">

                    <h3 class="section-title">TEDx</h3>
                    <p>
                        TEDx, x = independently organized event</b><br>
                        In the spirit of ideas worth spreading, TEDx is a program of local, 
                        self-organized events that bring people together to share a TED-like experience. 
                        At a TEDx event, TED Talks video and live speakers combine to spark deep discussion 
                        and connection. These local, self-organized events are branded TEDx,
                        where x = independently organized TED event. The TED Conference provides general
                        guidance for the TEDx program, but individual TEDx events are self-organized. 
                        (Subject to certain rules and regulations.) 
                    </p>
                     


                </div>

                <div class="col-sm-12 col-md-4">

                    <h3 class="section-title">TEDxAzhar University</h3>
                    <p>
                        TEDxAzharUniversity is a licensed program of self-organized events that bring people together 
                        to share a TED-like experience               
                        we aim to provide a platform for innovators, intellectuals, leaders, 
                        change makers and speakers to spread their inspiring ideas in order to transform positively our society.
                    </p>
                     


                </div>

               
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>


    <section id="schedule" class="section schedule">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Event Schedule</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="schedule-box">
                        <div class="time">
                            <time datetime="09:00">09:00 am</time> - <time datetime="22:00">10:00 am</time>
                        </div>
                        <h3>Welcome and intro</h3>
                        <p>Mustafizur Khan, SD Asia</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="schedule-box">
                        <div class="time">
                            <time datetime="10:00">10:00 am</time> - <time datetime="22:00">10:00 am</time>
                        </div>
                        <h3>Tips and share</h3>
                        <p>Mustafizur Khan, SD Asia</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="schedule-box">
                        <div class="time">
                            <time datetime="10:00">10:00 am</time> - <time datetime="22:00">10:00 am</time>
                        </div>
                        <h3>View from the top</h3>
                        <p>Mustafizur Khan, SD Asia</p>
                    </div>
                </div>
            </div>
    </section>

    <section id="partner" class="section partner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Event Partner</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <a class="partner-box partner-box-1"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-2"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-3"></a>
                </div>
                <div class="col-sm-3">
                    <a class="partner-box partner-box-4"></a>
                </div>
            </div>
 
    </section>

    <section id="photos" class="section photos">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Photos</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="grid">
                        
                        <li class="grid-item grid-item-sm-6">
                            <img alt="" class="img-responsive center-block" src="{{ asset('front/images/photos/photos-1.jpg') }}">
                        </li>

                        <li class="grid-item grid-item-sm-3">
                            <img alt="" class="img-responsive center-block" src="{{ asset('front/images/photos/photos-2.jpg') }}">
                        </li>

                        <li class="grid-item grid-item-sm-3">
                            <img alt="" class="img-responsive center-block" src="{{ asset('front/images/photos/photos-3.jpg') }}">
                        </li>
                    
                        <li class="grid-item grid-item-sm-3">
                            <img alt="" class="img-responsive center-block" src="{{ asset('front/images/photos/photos-5.jpg') }}">
                        </li>

                        <li class="grid-item grid-item-sm-3">
                            <img alt="" class="img-responsive center-block" src="{{ asset('front/images/photos/photos-6.jpg') }}">
                        </li>

                        <li class="grid-item grid-item-sm-3">
                            <img alt="" class="img-responsive center-block" src="{{ asset('front/images/photos/photos-7.jpg') }}">
                        </li>

                        <li class="grid-item grid-item-sm-3">
                            <img alt="" class="img-responsive center-block" src="{{ asset('front/images/photos/photos-8.jpg') }}">
                        </li>

                        <li class="grid-item grid-item-sm-3">
                            <img alt="" class="img-responsive center-block" src="{{ asset('front/images/photos/photos-2.jpg') }}">
                        </li>

                        <li class="grid-item grid-item-sm-3">
                            <img alt="" class="img-responsive center-block" src="{{ asset('front/images/photos/photos-3.jpg') }}">
                        </li>
                    </ul>
                </div>
            </div>            
        </div>
    </section>

@include('layouts.footer')

@endsection