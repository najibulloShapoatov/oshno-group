@extends('web.layouts.layout')

@section('title', 'Главная')

@section('styles')
<link rel="stylesheet" href="/public/assets/css/jQuery-plugin-progressbar.css">
@endsection

@php
 $internet = App\Models\Product::where(['is_active'=>true, 'type'=>App\Models\Enums\ProductType::$INTERNET])->get();
 $iptvs = App\Models\Product::where(['is_active'=>true, 'type'=>App\Models\Enums\ProductType::$IPPHONE])->get();
 $devices = App\Models\Product::where(['is_active'=>true, 'type'=>App\Models\Enums\ProductType::$DEVICE])->get();
@endphp

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
            <div id="home-page" class="pb-5">
                <div class="container">
                    <h1>Лучшие предложения</h1>
                    <ul class="nav nav-tabs border-bottom-0" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="inet-tab" data-toggle="tab" href="#inet" role="tab" aria-controls="inet" aria-selected="true">Интернет</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="iptv-tab" data-toggle="tab" href="#iptv" role="tab" aria-controls="iptv" aria-selected="false">IP-телевединие </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="device-tab" data-toggle="tab" href="#device" role="tab" aria-controls="device" aria-selected="false">Устройства</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="inet" role="tabpanel" aria-labelledby="inet-tab">
                            <div class="row" id="oshno-card">
                            @foreach($internet as $item)
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
                                        <button data-type="{{ App\Models\Enums\ProductType::$INTERNET }}" data-id="{{ $item->id }}" class="btn oshno-btn-card mt-3" data-toggle="modal" data-target="#modalSite">Подключить</button>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="iptv" role="tabpanel" aria-labelledby="iptv-tab">
                        	<div class="row" id="oshno-card">

                            @foreach($iptvs as $item)
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
                                        <button data-type="{{ App\Models\Enums\ProductType::$IPPHONE }}" data-id="{{ $item->id }}" class="btn oshno-btn-card mt-3" data-toggle="modal" data-target="#modalSite">Подключить</button>
                                    </div>
                                </div>
                            @endforeach

                            </div>
                        </div>
                        <div class="tab-pane fade" id="device" role="tabpanel" aria-labelledby="device-tab">
                        <div id="services" class="container py-5 mb-5">
                <div class="row" id="oshno-card">
                    @foreach($devices as $item)
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
                            <button data-type="{{ App\Models\Enums\ProductType::$DEVICE }}" data-id="{{ $item->id }}" class="btn oshno-btn-card mt-3" data-toggle="modal" data-target="#modalSite">150 сомони</button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
                        </div>
                    </div>
                </div>
                <div class="home-page-jpon" style="background-image: url('/public/assets/images/jpon-bg.png'); ">
                	<div class="container">
                		<div class="row d-flex align-items-center">
                			<div class="col-md-7 col-12">
                				<div>
                					<h1>Технология GPON</h1>
                					<p class="mt-5">Вся абонентская сеть компании “Ошно Групп” построена по технологии GPON, что позволяет клиентам нашей компании ощутить преимущества.</p>
                				</div>
                			</div>
                			<div class="col-md-5 col-12">
                				<div>
                					<p>Скорость<br><small>GPON - скорость до 1000 Мбит/с.</small></p>
                					<p>Надежность<br><small>Технология не подвержена климатическим влияниям.</small></p>
                					<p>Стабильность<br><small>Cеть независима от перебоев в сети электропередачи.</small></p>
                				</div>
                			</div>
                		</div>
                	</div>
                </div>
                <div class="container news-page mt-5">
                	<h1>Новости Ошно Групп</h1>
                	<div class="row">
                        @foreach($news as $item)
                            <div class="col-lg-4 col-sm-6 col-12 mt-4">
                                <div class="news-item">
                                    <div>
                                        @if($item->image)
                                        <img src="/public/uploads/{{ $item->image }}" class="img-fluid" alt="">
                                        @else
                                        <img src="/public/assets/images/news/news-2.png" class="img-fluid" alt="">
                                        @endif
                                    </div>
                                    <small class="my-2">{{ date('d-m-Y', strtotime($item->created_at)) }}</small>
                                    <p>{!! $item->title !!}</p>
                                    <a href="/news/{{$item->id}}" class="mt-3">Подробнее</a>
                                </div>
                            </div>
                        @endforeach
                	</div>
                	
                </div>
            </div>
        </content>


            <div class="modal fade" id="modalSite" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content border-0">
                        <div class="modal-body py-0">
                            <div class="row">
                                <div class="col-md-6 col-12 pl-0 d-md-block d-none">
                                    <div class="modal-image-wrapper w-100 h-100">
                                        <img src="/public/assets/images/modal/modal-1.png" class="img-fluid h-100" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 py-3">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18 6L6 18" stroke="black" stroke-opacity="1" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M6 6L18 18" stroke="black" stroke-opacity="1" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div class="mt-4">
                                        <h3>Заявка на подключение</h3>
                                        <p>Оставьте свои контактные данные<br> и мы свяжемся с Вами в ближайшее время</p>
                                    </div>
                                    <form action="" method="" class="mt-5">
                                        <div>
                                            <label for="name">Имя *</label>
                                            <input type="text" class="form-control" id="name" role="name" name="name" required="">
                                        </div>
                                        <div class="my-4">
                                            <label for="phone">Телефон *</label>
                                            <input type="text" class="form-control" id="phone" role="phone" name="phone" required="">
                                        </div>
                                        <button type="submit" class="btn btn-slide mt-4">Отправить</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 

@endsection


@section('scripts')

<script src="/public/assets/js/jQuery-plugin-progressbar.js"></script>
<script>
$(".progress-bar-my").loading();
</script>
@endsection