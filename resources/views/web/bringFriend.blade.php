@extends('web.layouts.layout')

@section('title', 'Приведи друга')

@section('styles')
@endsection

@section('content')
<content>
    <div id="bring-friend" class="container py-5 mb-5 ">
        <h1 class="mb-4 h1 text-center">Приведи друга</h1>
        <div id="my-static-form">
                    <form id="brf" action="/create-order" method="post" class="row justify-content-center" >
                        @csrf
                        <div class=" col-lg-6 mt-4">
                            <div class="bring-friend-form">
                                <h3>Ваши данные</h3>
                                <div class="mt-4">
                                    <label for="your-name">ФИО *</label>
                                    <input type="text" name="name" id="your-name" class="form-control" required>
                                </div>
                                <div class="mt-4">
                                    <label for="your-phone">Телефон *</label>
                                    <input type="text" name="phone" id="your-phone" class="form-control" required>
                                </div>
                                <div class="mt-4">
                                    <label for="your-number-dog">Номер договора *</label>
                                    <input type="text" name="number-dog" id="your-number-dog" class="form-control" required>
                                </div>
                                
                            </div>
                        </div>
                        <div class=" col-lg-6 mt-4">
                            <div class="bring-friend-form">
                                <h3>Данные вашего друга</h3>
                                <div class="mt-4">
                                    <label for="friend-name">ФИО *</label>
                                    <input type="text" name="name" id="friend-name" class="form-control" required>
                                </div>
                                <div class="mt-4">
                                    <label for="friend-phone">Телефон *</label>
                                    <input type="text" name="phone" id="friend-phone" class="form-control" required>
                                </div>
                                <div class="mt-4">
                                    <label for="friend-address">Адрес *</label>
                                    <input type="text" name="address" id="friend-address" class="form-control" required>
                                </div>
                                <div class="d-flex justify-content-center mt-5">
                                    <button onclick="formSubmit(event, 'brf','form-control','bring-friend');" type="submit" class="btn btn-slide ">Отправить</button>
                                </div>
                                
                            </div>
                        </div>
                    </form>
        </div>
        <div class="text-wrapper mt-5">
        {!!html_entity_decode(App\Models\Enums\PropertyKeys::getValue(App\Models\Enums\PropertyKeys::$BRING_FRIEND))!!}        
    </div>
    </div>
</content>
@endsection


@section('scripts')
@endsection