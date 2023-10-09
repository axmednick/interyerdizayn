@extends('layouts.app')
@section('content')
    <section class="headings" style="background: url({{$project->getFirstMediaUrl('main')}})">
        <div class="text-heading">
            <div class="container">
                <h1 class="text-center">{{$project->title}}</h1>
            </div>
        </div>
    </section>
    <div class="road">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="{{route('index')}}">{{__('content.home')}}</a><span>»</span><span>{{$project->title}}</span>
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION SERVICE DETAILS -->
    <section class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 service-info">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="service-text">
                                <h3 class="mt-4">{{$project->title}}</h3>

                                {!! $project->content !!}
                            </div>
                            <div class="row">
                                @foreach($project->getMedia('Image') as $image)
                                    <div class="col-md-6 pdb-2 mt-5">
                                        <img src="{{$image->getUrl()}}" alt="">
                                    </div>
                                @endforeach

                            </div>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>
    <!-- END SECTION SERVICE DETAILS -->
@endsection
