@extends('layouts.site')
@section('title')
    {{$instructor->title}}المدربون -
@endsection

@section('content')

@if(isset($instructor))

    <!--start of Product-->
    <section class="about-us" style="margin-bottom: 20px;">
        <div class="container wow">
            <div class="row" style="margin-top:25px">
                <div class="col-md-5 col-xs-12" style="margin-top: 30px">
                    <div class="about-img  wow fadeIn col-md-12 col-xs-12">
                        <img src="{{$instructor->photo}}" width="100%" height="300px">
                    </div>

                </div>
                <div class="col-md-7 col-xs-12  wow fadeIn">
                    <div class="about-data text-center">
                        <h2>{{$instructor->title}} </h2>
                        {{--                            line  Here--}}
                        <div class="line2" style="margin-top: 10px;">
                        </div>

                    </div>

                    <div class="about2" style="font-size: 18px">{!! $instructor->content !!}</div>

                </div>

            </div>
        </div>
    </section>
    <!--end of Product-->
    @endif

@endsection
