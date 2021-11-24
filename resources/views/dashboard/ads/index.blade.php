@extends('layouts.admin')
@section('title')
    الإعلانات
@stop
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active"> الإعلانات
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">جميع الإعلانات </h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                @include('dashboard.includes.alerts.success')
                                @include('dashboard.includes.alerts.errors')

                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <a href="{{route('admin.ads.create')}}"
                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">إضافة اعلان</a>
                                            </div>
                                        </div>
                                        <table
                                        class="table display nowrap table-striped table-bordered scroll-horizontal"  style="text-align: center">
                                            <thead class="">
                                            <tr>
                                                <th>العنوان  </th>
                                                <th> المحتوي  </th>
{{--                                                <th>العنوان بالأنجليزية </th>--}}
{{--                                                <th> المحتوي بالأنجليزية </th>--}}
                                                <th>صورة الإعلان </th>
                                                <th>الحالة </th>
                                                <th>اسم المعلن عنه </th>
                                                <th>حالة المعلن عنه </th>
                                                <th>الإجراءات</th>
                                            </tr>
                                            </thead>
                                            <tbody >

                                            @isset($ads)
                                                @foreach($ads as $ad)

                                                    <tr>
                                                        <td>{{$ad -> title_ar}}</td>
                                                        <td><div  style=" overflow: hidden; height: 130px; width: 100px">{{$ad -> content_ar}}</div></td>
{{--                                                        <td>{{$ad -> title_en}}</td>--}}
{{--                                                        <td><div  style=" overflow: hidden; height: 130px; width: 100px">{{$ad -> content_en}}</div></td>--}}
                                                        <td><img style="width: 150px; height: 100px;" src="{{$ad -> photo}}"></td>
                                                        <td>{{$ad -> getActive()}}</td>
                                                        @if($ad->product_id == null && $ad -> offer_id == null)
                                                            <td>------</td>
                                                        @elseif($ad->product_id == null)
                                                            <td>{{ $ad -> offer['title']}}</td>
                                                        @else
                                                            <td>{{ $ad -> product['title']}}</td>
                                                        @endif

                                                        @if($ad->product_id == null && $ad -> offer_id == null)
                                                            <td>------</td>
                                                        @elseif($ad->product_id == null)
                                                            <td>{{ $ad -> offer->getActive()}}</td>
                                                        @else
                                                            <td>{{ $ad -> product->getActive()}}</td>
                                                        @endif

                                                        <td>

                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a href="{{route('admin.ads.edit',$ad -> id)}}"
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>


                                                                <a href="{{route('admin.ads.delete',$ad -> id)}}"
                                                                   class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>

                                                                <a href="{{route('admin.ads.change.status',$ad -> id)}}"
                                                                   class="btn btn-outline-warning btn-min-width box-shadow-3 mr-1 mb-1">
                                                                    {{$ad->is_active == 1 ? 'إالغاء تفعيل' : 'تفعيل'}}
                                                                </a>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset


                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    @stop
