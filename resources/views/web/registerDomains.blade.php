@extends('web.layouts.layout')

@section('title', 'Регистрация домена')

@section('styles')
@endsection

@section('content')

<content>
    <div id="domens-registratin" class="container py-5 mb-5 ">
        <h1 class="mb-4 h1 text-center">Регистрация домена</h1>
        <div class="row justify-content-center" id="my-static-form">
            <div class=" col-lg-7 col-md-9 col-sm-11 col-12 mt-4">
                <form  id="brf" action="/create-order" method="post" >
                    @csrf
                    <h3>Зарегистрируйте домен</h3>
                    <div class="mt-4">
                        <label for="reg-dom-name">ФИО *</label>
                        <input type="text" name="name" id="reg-dom-name" class="form-control">
                    </div>
                    <div class="mt-4">
                        <label for="reg-dom-phone">Телефон *</label>
                        <input type="text" name="phone" id="reg-dom-phone" class="form-control">
                    </div>
                    <div class="mt-4">
                        <label for="reg-dom-mail">Эл. почта *</label>
                        <input type="email" name="email" id="reg-dom-mail" class="form-control">
                    </div>
                    <div class="mt-4">
                        <label for="reg-dom-name-dom">Название домена *</label>
                        <input type="text" name="domen-name" id="reg-dom-name-dom" class="form-control">
                    </div>
                    <div class="mt-4">
                        <label for="reg-dom-description-site">Описание сайта *</label>
                        <textarea name="description-site" id="reg-dom-description-site" cols="30" rows="4" class="form-control textarea"></textarea>
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <button  onclick="formSubmit(event, 'brf','form-control','domain-register');"   type="submit" class="btn btn-slide px-5">Зарегистрировать</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</content>

@endsection


@section('scripts')
@endsection