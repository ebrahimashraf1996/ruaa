@extends('layouts.site')
@section('title')
    اتصل بنا
@endsection

@section('content')

    <!--start of contact us body-->
    <section class="contact-body">
        <div class="container">
            <div class="row wow">
                <div class="col-md-6 col-xs-12 wow fadeIn">
                    <div class="contact-form">
                        <form class="wow fadeIn" action="{{route('site.contacts.post')}}" method="POST"
                              data-wow-offset="100">
                            @csrf
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <input type="text" name="name" placeholder="{{__('messages.name')}}"
                                           class="form-control"
                                           value="{{old('name')}}">

                                </div>
                                <div class="form-group col-xs-12">
                                    <input type="email" name="email" placeholder="{{__('messages.email')}}"
                                           class="form-control" value="{{old('email')}}">
                                </div>
                                <div class="form-group col-xs-12">
                                    <input type="text" name="address" placeholder="رقم الجوال"
                                           class="form-control"
                                           value="{{old('subject')}}">
                                </div>
                                <div class="form-group col-xs-12">
                                    <textarea class="form-control" name="message"
                                              placeholder="{{__('messages.message')}}"
                                              rows="6"></textarea>
                                </div>
                                <div class="form-group col-xs-4">
                                    <input type="submit" value="{{__('messages.send')}}" name="submit"
                                           class="btn btn-primary form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 wow fadeIn text-center contact-keep" style="margin-top: -30px">
                    <div class="col-md-12">
                        <div class="contact-data">
                            <h1>{{__('messages.contactUs')}}</h1>
                            {{--                            line heart Here--}}
                            <div class="line2" style="width: 250px; margin-top: 5px">
                            </div>
                        </div>
                        @foreach(\App\Models\FooterSectionContact::active()->selection()->get() as $contact)
                            <p style="font-size: 16px;"><b>{{$contact->title}} : </b>{{$contact->span}}</p>
                        @endforeach
                    </div>

                </div>
                <div class="col-md-12 col-xs-12 wow fadeIn">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.469980307278!2d46.62740351470854!3d24.813596353245895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2ee47d2c790073%3A0xf8f0802b58cdc5d5!2sAlManea!5e0!3m2!1sen!2seg!4v1637714823533!5m2!1sen!2seg"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>

    </section>


    <!--end of contact us body-->

@endsection
