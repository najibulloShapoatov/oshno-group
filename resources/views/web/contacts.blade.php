@extends('web.layouts.layout')

@section('title', 'Контакты')

@section('styles')
@endsection

@section('content')
<content>
    <div id="contacts" class="container py-5 mb-5">
                <h1 class="mb-4 h1">Контакты</h1>
                <div class="text-wrapper my-4">
                {!!html_entity_decode(App\Models\Enums\PropertyKeys::getValue(App\Models\Enums\PropertyKeys::$CONTACTS_TEXT))!!}
                </div>
                <h1 class="h1 mt-5">Телефон</h1>
                <div class="text-wrapper mt-4">
                    <a href="">{{ App\Models\Enums\PropertyKeys::getValue(App\Models\Enums\PropertyKeys::$PHONE) }}</a><br>
                    <a href="">{{ App\Models\Enums\PropertyKeys::getValue(App\Models\Enums\PropertyKeys::$PHONE_TWO) }}</a>
                </div>
                <div class="map-wrapper">
                    <div class="w-100 h-100">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3119.3891493500773!2d68.78766784870295!3d38.570885528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38b5d15cdbf6238b%3A0x1e0c40ee2ad509f6!2z0L_RgNC-0YHQv9C10LrRgiDQoNGD0LTQsNC60LgsINCU0YPRiNCw0L3QsdC1LCDQotCw0LTQttC40LrQuNGB0YLQsNC9!5e0!3m2!1sru!2s!4v1612589642733!5m2!1sru!2s" width="800" height="600" frameborder="0" class="w-100 h-100" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
    </div>
</content>
@endsection


@section('scripts')
@endsection