@extends('web.layouts.layout')

@section('title', 'IP-адрес')

@section('styles')
@endsection

@section('content')
<content>
    <div id="ip-addres" class="container py-5 mb-5 ">
        <h1 class="mb-4 h1 text-center">IP-адрес</h1>
        <div class="row justify-content-center" id="my-static-form">
            <div class=" col-lg-7 col-md-9 col-sm-11 col-12 mt-4">    
                <form  id="brf" action="/create-order" method="post">
                    @csrf
                    <h3>Контактные данные</h3>
                    <div class="mt-4">
                        <label for="ip-name">ФИО *</label>
                        <input type="text" name="name" id="ip-name" class="form-control">
                    </div>
                    <div class="mt-4">
                        <label for="ip-phone">Телефон *</label>
                        <input type="text" name="phone" id="ip-phone" class="form-control">
                    </div>
                    <div class="mt-4">
                        <label for="ip-mail">Эл. почта *</label>
                        <input type="email" name="email" id="ip-mail" class="form-control">
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <button  onclick="formSubmit(event, 'brf','form-control','ip-address');"  type="submite" class="btn btn-slide px-5">Зарегистрировать</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</content>
@endsection


@section('scripts')
@endsection