@extends('web.layouts.layout')

@section('title', 'Интернет')

@section('styles')
@endsection

@section('content')

<section id="slide-site">
            @foreach($slides as $item)
                <div class="slide-site-item py-5 h-100">
                    <div class="image-wrapper" style="min-height: 400px">
                        <img src="/public/uploads/{{$item->image}}" class="" style="min-height: 400px" alt="">
                    </div>
                    <div class="container slide-textwrapper h-100">
                        <div class=" mt-5">
                            <h2>{!! $item->title !!}</h2>
                            <p class="mt-4">{!! $item->subtitle !!}</p>
                            <a href="/slide/{{ $item->id }}" class="btn btn-slide mt-4">Подробнее</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
<content>
    <div id="services" class="container py-5 mb-5">
        <h1 class="mb-5">Устройства</h1>
        <div class="row" id="oshno-card">
            
            @foreach($data as $item)
                    <div class="col-lg-4 col-sm-6 col-12 oshno-card-item mt-4">
                        <div class="h-100">
                            <div class="devices-image-wrapper mb-4">
                                @if($item->image)
                                <img src="/public/uploads/{{$item->image}}" class="img-fluid" alt="">
                                @else
                                <img src="/public/assets/images/device/device-2.png" class="img-fluid" alt="">
                                @endif
                            </div>
                            <h4>{!! $item->title !!}</h4>
                            <div class="text-center mt-3">
                                <p>Скорость: {{$item->speed}} Мбит/с</p>
                                <p>Трафик: {{ $item->traffic}}</p>
                                @if($item->is_connect_free)
                                    <p><span>Подключение бесплатно!</span></p>
                                @endif
                            </div>
                            <button 
                            onclick="byProduct(event);"  
                            data-type="{{ App\Models\Enums\ProductType::$DEVICE }}" 
                            data-id="{{ $item->id }}" 
                            class="btn oshno-btn-card mt-3" 
                            data-toggle="modal" 
                            data-target="#modalSite">{{$item->price}} сомони</button>
                        </div>
                    </div>
                    @endforeach
        </div>
    </div>
</content>
@endsection


@section('scripts')
@endsection