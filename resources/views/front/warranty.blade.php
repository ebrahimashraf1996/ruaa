@extends('layouts.site')
@section('title')
    عنا
@stop
@section('content')

    <!--start of Warranty-->
    <section class="about-us" style="margin-top: 15px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <h1> نبذة عنا ..</h1>
                </div>
            </div>
            @if(isset($warranties) && $warranties->count() >0)
                @foreach($warranties as $warranty)
                    <div class="row wow">
                        <div class="col-md-12 col-xs-12 wow fadeIn text-center " style="margin-top: 0">
                            <div class="about-data">
                                <h2> {{$warranty->title}}</h2>
                                <div class="line2" style="width: 200px"></div>


                                <div class="about2">
                                    {!! $warranty->content !!}
                                </div>

                            </div>
                        </div>
{{--                        <div class="col-md-5 col-xs-12 wow fadeIn warranty-photo-div">--}}
{{--                            <div class="about-img">--}}
{{--                                <img src="{{$warranty->photo}}" height="350" width="100%" class="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>

                    @if($warranties->count() > 1)
                        <div class="line">

                        </div>
                    @endif

                @endforeach
            @endif
        </div>


    </section>
    <!--end of Warranty-->

@endsection
