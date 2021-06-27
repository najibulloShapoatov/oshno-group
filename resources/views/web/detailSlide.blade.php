@extends('web.layouts.layout')

@section('title', $data->title)

@section('styles')
@endsection

@section('content')

<content>

    <div id="news-detyled" class="container py-5 mb-5">
        <h1 class="mb-4 h1">{!! $data->title !!}</h1>
        <small class="mb-4">{{ date('d-m-Y', strtotime($data->created_at)) }}</small>
        <div class="image-wrapper" style="background-image: url('/public/uploads/{{ $data->image }}')">
            <img src="" class="img-fluid" alt="">
        </div>
        <div class="text-wrapper mt-4">
        {!!html_entity_decode($data->description)!!}
        </div>
    </div>
</content>



@endsection


@section('scripts')
@endsection