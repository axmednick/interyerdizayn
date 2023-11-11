@extends('layouts.app')

@section('content')
    <section class="headings">
        <div class="text-heading">
            <div class="container">
                <h1 class="text-center">{{ __('content.about') }}</h1>
            </div>
        </div>
    </section>
    <div class="road">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="{{ route('index') }}">{{ __('content.home') }}</a><span> » </span><span>{{ __('content.about_us') }}</span>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION ABOUT -->
    <section class="who-we-are">
        <div class="container">
            <div class="row">
                <div class="col-md-6 who">
                    <img src="images/bg/about-us.jpg" alt="{{ __('content.about_us') }}">
                </div>
                <div class="col-md-6 who-1">
                    <div>
                        <h2 class="text-left mb-4"><span>{{ __('content.aksent_interior') }}</span></h2>
                    </div>
                    <div class="pftext">
                        <p>
                            "{{ __('content.aksent_interior_description') }}"
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION ABOUT -->
@endsection
