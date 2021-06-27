@extends('web.layouts.layout')

@section('title', 'ГлавнВызов мастераая')

@section('styles')
@endsection

@section('content')
<content>
    <div id="master-call" class="container py-5 mb-5">
                <h1 class="mb-4 h1">Вызов мастера</h1>
                <div class="image-wrapper" style="background-image: url('/public/assets/images/master-call.png')">
                    <img src="" class="img-fluid" alt="">
                </div>
                <div class="text-wrapper mt-4">
                {!!html_entity_decode(App\Models\Enums\PropertyKeys::getValue(App\Models\Enums\PropertyKeys::$CALL_MASTER_TEXT))!!}
                </div>
    </div>
</content>
@endsection


@section('scripts')
@endsection