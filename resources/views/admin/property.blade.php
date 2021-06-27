@extends('admin.layouts.app')

@section('title', 'Панел управления')

@section('styles')
@endsection

@section('content')

 <!-- Content Body Start -->
 <div class="content-body">

    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h3 class="title">Заголовок сайта</h3>
            </div>
            <div class="box-body">
                <form action="/admin/property" method="post"  enctype="multipart/form-data">
                 @csrf
                    <div class="row  mb-2">
                        <input type="text" 
                        name="value"
                        class="form-control" 
                        placeholder="..." 
                        value="{{ App\Models\Enums\PropertyKeys::getValue(App\Models\Enums\PropertyKeys::$TITLE) }}"> 
                    </div>
                    <input type="hidden" name="key" value="{{App\Models\Enums\PropertyKeys::$TITLE}}">
                    <div class="row">
                        <button type="submit" class="button button-outline button-primary"><span>Сохранить</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h3 class="title">Второй Заголовок</h3>
            </div>
            <div class="box-body">
                <form action="/admin/property" method="post"  enctype="multipart/form-data">
                 @csrf
                    <div class="row  mb-2">
                        <input type="text" 
                        name="value"
                        class="form-control" 
                        placeholder="..." 
                        value="{{ App\Models\Enums\PropertyKeys::getValue(App\Models\Enums\PropertyKeys::$TITLE_SECOND) }}"> 
                    </div>
                    <input type="hidden" name="key" value="{{App\Models\Enums\PropertyKeys::$TITLE_SECOND}}">
                    <div class="row">
                        <button type="submit" class="button button-outline button-primary"><span>Сохранить</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h3 class="title">Адрес</h3>
            </div>
            <div class="box-body">
                <form action="/admin/property" method="post"  enctype="multipart/form-data">
                 @csrf
                    <div class="row  mb-2">
                        <input type="text" 
                        name="value"
                        class="form-control" 
                        placeholder="..." 
                        value="{{ App\Models\Enums\PropertyKeys::getValue(App\Models\Enums\PropertyKeys::$ADDRESS) }}"> 
                    </div>
                    <input type="hidden" name="key" value="{{App\Models\Enums\PropertyKeys::$ADDRESS}}">
                    <div class="row">
                        <button type="submit" class="button button-outline button-primary"><span>Сохранить</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h3 class="title">Лицензия</h3>
            </div>
            <div class="box-body">
                <form action="/admin/property" method="post"  enctype="multipart/form-data">
                 @csrf
                    <div class="row  mb-2">
                        <input type="text" 
                        name="value"
                        class="form-control" 
                        placeholder="..." 
                        value="{{ App\Models\Enums\PropertyKeys::getValue(App\Models\Enums\PropertyKeys::$LICENCE) }}"> 
                    </div>
                    <input type="hidden" name="key" value="{{App\Models\Enums\PropertyKeys::$LICENCE}}">
                    <div class="row">
                        <button type="submit" class="button button-outline button-primary"><span>Сохранить</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h3 class="title">Звонок мастеру текст</h3>
            </div>
            <div class="box-body">
                <form action="/admin/property" method="post"  enctype="multipart/form-data">
                 @csrf
                    <div class="row  mb-2">                    
                        <textarea name="value" class="form-control summernote" placeholder="...">{!!html_entity_decode(App\Models\Enums\PropertyKeys::getValue(App\Models\Enums\PropertyKeys::$CALL_MASTER_TEXT))!!}</textarea>
                    </div>
                    <input type="hidden" name="key" value="{{App\Models\Enums\PropertyKeys::$CALL_MASTER_TEXT}}">
                    <input type="hidden" name="type" value="s">
                    <div class="row">
                        <button type="submit" class="button button-outline button-primary"><span>Сохранить</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h3 class="title">Кто мы текст</h3>
            </div>
            <div class="box-body">
                <form action="/admin/property" method="post"  enctype="multipart/form-data">
                 @csrf
                    <div class="row  mb-2">                    
                        <textarea name="value" class="form-control summernote" placeholder="...">{!!html_entity_decode(App\Models\Enums\PropertyKeys::getValue(App\Models\Enums\PropertyKeys::$WHO_US))!!}</textarea>
                    </div>
                    <input type="hidden" name="key" value="{{App\Models\Enums\PropertyKeys::$WHO_US}}">
                    <input type="hidden" name="type" value="s">
                    <div class="row">
                        <button type="submit" class="button button-outline button-primary"><span>Сохранить</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h3 class="title">Контакты текст</h3>
            </div>
            <div class="box-body">
                <form action="/admin/property" method="post"  enctype="multipart/form-data">
                 @csrf
                    <div class="row  mb-2">                    
                        <textarea name="value" class="form-control summernote" placeholder="...">{!!html_entity_decode(App\Models\Enums\PropertyKeys::getValue(App\Models\Enums\PropertyKeys::$CONTACTS_TEXT))!!}</textarea>
                    </div>
                    <input type="hidden" name="key" value="{{App\Models\Enums\PropertyKeys::$CONTACTS_TEXT}}">
                    <input type="hidden" name="type" value="s">
                    <div class="row">
                        <button type="submit" class="button button-outline button-primary"><span>Сохранить</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h3 class="title">Приведи друга текст</h3>
            </div>
            <div class="box-body">
                <form action="/admin/property" method="post"  enctype="multipart/form-data">
                 @csrf
                    <div class="row  mb-2">                    
                        <textarea name="value" class="form-control summernote" placeholder="...">{!!html_entity_decode(App\Models\Enums\PropertyKeys::getValue(App\Models\Enums\PropertyKeys::$BRING_FRIEND))!!}</textarea>
                    </div>
                    <input type="hidden" name="key" value="{{App\Models\Enums\PropertyKeys::$BRING_FRIEND}}">
                    <input type="hidden" name="type" value="s">
                    <div class="row">
                        <button type="submit" class="button button-outline button-primary"><span>Сохранить</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h3 class="title">Телефон</h3>
            </div>
            <div class="box-body">
                <form action="/admin/property" method="post"  enctype="multipart/form-data">
                 @csrf
                    <div class="row  mb-2">
                        <input type="text" 
                        name="value"
                        class="form-control" 
                        placeholder="..." 
                        value="{{ App\Models\Enums\PropertyKeys::getValue(App\Models\Enums\PropertyKeys::$PHONE) }}"> 
                    </div>
                    <input type="hidden" name="key" value="{{App\Models\Enums\PropertyKeys::$PHONE}}">
                    <div class="row">
                        <button type="submit" class="button button-outline button-primary"><span>Сохранить</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h3 class="title">Телефон 1</h3>
            </div>
            <div class="box-body">
                <form action="/admin/property" method="post"  enctype="multipart/form-data">
                 @csrf
                    <div class="row  mb-2">
                        <input type="text" 
                        name="value"
                        class="form-control" 
                        placeholder="..." 
                        value="{{ App\Models\Enums\PropertyKeys::getValue(App\Models\Enums\PropertyKeys::$PHONE_TWO) }}"> 
                    </div>
                    <input type="hidden" name="key" value="{{App\Models\Enums\PropertyKeys::$PHONE_TWO}}">
                    <div class="row">
                        <button type="submit" class="button button-outline button-primary"><span>Сохранить</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h3 class="title">Телефон 2</h3>
            </div>
            <div class="box-body">
                <form action="/admin/property" method="post"  enctype="multipart/form-data">
                 @csrf
                    <div class="row  mb-2">
                        <input type="text" 
                        name="value"
                        class="form-control" 
                        placeholder="..." 
                        value="{{ App\Models\Enums\PropertyKeys::getValue(App\Models\Enums\PropertyKeys::$PHONE_THREE) }}"> 
                    </div>
                    <input type="hidden" name="key" value="{{App\Models\Enums\PropertyKeys::$PHONE_THREE}}">
                    <div class="row">
                        <button type="submit" class="button button-outline button-primary"><span>Сохранить</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div><!-- Content Body End -->

@endsection

@section('scripts')
<script src="/public/admin/assets/js/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="/public/admin/assets/js/plugins/summernote/summernote.active.js"></script>
@endsection