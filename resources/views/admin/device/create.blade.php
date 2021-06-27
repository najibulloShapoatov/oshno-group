@extends('admin.layouts.app')

@section('title', 'Устройства')

@section('styles')
@endsection

@section('content')

<!-- Content Body Start -->
<div class="content-body">

<!-- Page Headings Start -->
<div class="row justify-content-between align-items-center mb-10">

    <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3 class="title">Устройства создания</h3>

            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">
    <!--Form controls Start-->
    <div class="col-12 mb-30">
                    <div class="box">
                        
                        <div class="box-body">
                            <div class="row mbn-20">

                                <!--Form Field-->
                                <div class="col-12 mb-20">

                                    <div class="row mbn-15">
                                        <form action="/admin/product-device/store" method="post" enctype="multipart/form-data" style="width:100%;">
                                        @csrf
                                        <div class="col-12 mb-15">
                                            <label class="adomx-checkbox">
                                            <input name="is_active" class="ch" id="is_active" type="checkbox" checked> <i class="icon"></i> Активность</label>
                                        </div>
                                        <div class="col-12 mb-15">
                                            <label class="adomx-checkbox">
                                            <input name="is_connect_free" class="ch" id="is_active" type="checkbox" checked> <i class="icon"></i> Подключения бесплатно</label>
                                        </div>

                                        <div class="col-12 mb-15">
                                        <input required name="title" type="text" class="form-control" placeholder="Заголовок">
                                        </div>
                                        <div class=" col-12 mb-20">
                                            <h6 class="mb-15">Фото</h6>
                                            <input name="image" class="dropify" type="file" data-default-file="">
                                        </div>
                                        <div class="col-12 mb-15">
                                        <input required name="price" type="text" class="form-control" placeholder="Цена">
                                        </div>
                                        <div class="col-12 mb-15">
                                        <input required name="speed" type="text" class="form-control" placeholder="Скорость">
                                        </div>
                                        <div class="col-12 mb-15">
                                        <input required name="traffic" type="text" class="form-control" placeholder="Трафик">
                                        </div>
                                        
                                         <div class="col-12 mb-15">
                                         <button type="submit" class="button button-outline button-primary mb-10 ml-10 mr-0">Сохранить</button>
                                        </div>
                                        </form>
                                    </div>

                                </div>

                            </div>
                        </div>
                       
                    </div>
                </div>
                <!--Form controls End-->

    </div>
</div>
@endsection

@section('scripts')

<script src="/public/admin/assets/js/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="/public/admin/assets/js/plugins/summernote/summernote.active.js"></script>

    <script src="/public/admin/assets/js/plugins/dropify/dropify.min.js"></script>
    <script src="/public/admin/assets/js/plugins/dropify/dropify.active.js"></script>

    <script>
    $(document).on('change', '.ch', function(){  
        $(this).prop('checked', function (i, value) {
            $(this).val(value);
        });
    });
    </script>
@endsection