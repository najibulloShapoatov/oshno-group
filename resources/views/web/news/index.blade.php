@extends('web.layouts.layout')

@section('title', 'Новости')

@section('styles')
@endsection

@section('content')
<content>
    <div id="news" class="container py-5 mb-5 ">
                <h1 class="mb-4 h1">Новости</h1>
                <div class="row news-page">
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
                {{ $news->render("pagination::default") }}
    </div>
</content>


@endsection


@section('scripts')
@endsection