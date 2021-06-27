@extends('web.layouts.layout')

@section('title', 'Интернет')

@section('styles')
<link rel="stylesheet" href="/public/assets/css/jQuery-plugin-progressbar.css">
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
        <h1 class="mb-5">IP-телеведение</h1>
        <div class="row" id="oshno-card">
        @foreach($data as $item)
            <div class="col-lg-4 col-sm-6 col-12 oshno-card-item mt-4">
                <div>
                    <h3>{!! $item->title !!}</h3>
                    <div>
                    <div class="progress-bar-my position" data-percent="{{ ($item->speed*100)/15  }}" data-text="{{ $item->speed }}<br>Мбит/с" data-duration="1000" data-color="#F5F5F5,#0099FF"></div>
                    </div>
                    <div class="text-center mt-4">
                        <p>Скорость: {{ $item->speed }} Мбит/с</p>
                        <p>Трафик: {{ $item->traffic }}</p>
                        @if($item->is_connect_free)
                        <p><span>Подключение бесплатно!</span></p>
                        @endif
                    </div>
                    <h2 class="mt-3">{{ $item->price }}<small class="ml-2">смн/мес</small></h2>
                    <button onclick="byProduct(event);"  data-type="{{ App\Models\Enums\ProductType::$IPPHONE }}" data-id="{{ $item->id }}" class="btn oshno-btn-card mt-3" data-toggle="modal" data-target="#modalSite">Подключить</button>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</content>
@endsection

@section('scripts')

<script src="/public/assets/js/jQuery-plugin-progressbar.js"></script>
<script>
$(".progress-bar-my").loading();
</script>
@endsection