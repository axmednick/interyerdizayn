@extends('layouts.app')
@section('content')
    <section class="headings">
        <div class="text-heading">
            <div class="container">
                <h1 class="text-center">About Us</h1>
            </div>
        </div>
    </section>
    <div class="road">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="index.html">Home</a><span>»</span><span>About Us</span>
                </div>
            </div>
        </div>
    </div>

    <section class="recently portfolio bg-white-3">
        <div class="container-fluid recently-slider">
            <div class="section-title text-center">
                <h3>Son işlərimiz</h3>
                <h2>Works</h2>
            </div>

            <div class="row">
                @foreach($projects as $project)
                    <div class="col-md-4 mt-5">
                        <a href="{{route('projectDetail',$project->id)}}" class="recent-16" data-aos="fade-up">
                            <div class="recent-img16 img-center"
                                 style="background-image: url({{$project->getFirstMediaUrl('main')}});"></div>
                            <div class="recent-content"></div>
                            <div class="recent-details">
                                <div class="recent-title">{{$project->title}}</div>

                            </div>
                            <div class="view-proper">Daha ətraflı</div>
                        </a>
                    </div>

                @endforeach
            </div>
        </div>
    </section>

@endsection
