@extends('layouts.app')
@section('content')
    <section class="headings">
        <div class="text-heading">
            <div class="container">
                <h1 class="text-center">CONTACT US</h1>
            </div>
        </div>
    </section>
    <div class="road">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="{{route('index')}}">Home</a><span>»</span><span>CONTACT US</span>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION CONTACT -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title ml-3">
                <h3>{{__('content.have_a_questions')}}</h3>
                <h2>{{__('content.contact_us')}}</h2>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="container mt-5">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d637.6493707090045!2d49.8801260552801!3d40.40056848140355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307da6487fbf0d%3A0x92d16e97457a96cd!2sAksent%20design%20group!5e0!3m2!1saz!2saz!4v1695305913654!5m2!1saz!2saz" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>
                <div class="col-md-4 info-touch">

                    <div class="my-info">
                        <div class="in1">
                            <div class="address">
                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> {{$setting->address}}</p>
                            </div>
                            <div class="email">
                                <p><i class="fa fa-envelope" aria-hidden="true"></i> {{$setting->email}}</p>
                            </div>
                        </div>
                        <div class="in1">
                            <div class="phone">
                                <p><i class="fa fa-phone" aria-hidden="true"></i> {{$setting->mobile_number}}</p>
                            </div>
                            <div class="whatssap">
                                <p><i class="fa fa-whatsapp" aria-hidden="true"></i><a href="{{$setting->whatsapp}}">Whatsapp</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- END SECTION CONTACT -->

    <!-- START SECTION GOOGLE MAP -->



@endsection
