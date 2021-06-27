@extends('web.layouts.layout')

@section('title', 'Корпоративным клиентам')

@section('styles')
@endsection

@section('content')

<content>
    <div id="crp-clients" class="container py-5 mb-5">
        <h1 class="mb-5">Корпоративным клиентам</h1>
        <div class="row form-wrapper">
            <div class="col-lg-6 col-12 p-5">
                <div class="text-wrapper mb-5">
                    <p><b>Подключение для юридических лиц</b></p>
                    <p>Свяжитесь с нами, если Вы являетесь представителем организации и хотите подключить услуги Oshno Group.</p>
                    <p>Вы можете позвонить нам по короткому номеру 2000 или отправить нижеприведённую заявку.</p>
                </div>
                <form  id="brf" action="/create-order" method="post">
                    @csrf
                    <div>
                        <label for="name-inf">ФИО *</label>
                        <input type="text" class="form-control" name="name" id="name-inf">
                    </div>
                    <div class="mt-4">
                        <label for="phone-inf">Телефон *</label>
                        <input type="text" class="form-control" name="phone" id="phone-inf">
                    </div>
                    <div class="mt-4">
                        <label for="servic">Услуга *</label>
                        <select name="servic" id="servic" class="form-control select">
                            <option value="1">Интернет</option>
                            <option value="2">IPTV</option>
                            <option value="3">Домен</option>
                        </select>
                    </div>
                    <div class="mt-4">
                        <label for="coment-inf">Комментарий *</label>
                        <textarea name="coment" id="coment-inf" cols="30" rows="5" class="form-control textarea"></textarea>
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <button  onclick="formSubmit(event, 'brf','form-control','corporative');" type="submit" class="btn btn-slide">Отправить</button>    
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-12 pr-0 d-lg-block d-none">
                <div class="imagewrapper h-100 w-100">
                    <img src="/public/assets/images/modal/modal-2.png" class="img-fluid h-100" alt="">
                </div>
            </div>
        </div>
    </div>
</content>


@endsection


@section('scripts')
@endsection