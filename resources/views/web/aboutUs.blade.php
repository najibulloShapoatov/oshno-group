@extends('web.layouts.layout')

@section('title', 'Кто мы')

@section('styles')
@endsection

@section('content')
<content>
    <div id="aboute-us" class="container py-5 mb-5">
                <h1 class="mb-4 h1">Кто мы</h1>
                <div class="image-wrapper" style="background-image: url('/public/assets/images/aboute-us.png')">
                    <img src="" class="img-fluid" alt="">
                </div>
                <div class="text-wrapper mt-4">
                {!!html_entity_decode(App\Models\Enums\PropertyKeys::getValue(App\Models\Enums\PropertyKeys::$WHO_US))!!}
            </div>
    </div>
</content>
@endsection


@section('scripts')
@endsection