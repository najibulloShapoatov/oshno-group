@extends('admin.layouts.app')

@section('title', 'Хостинг редактирования')

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
                <h3 class="title">Хостинг редактирования</h3>

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
                                    <form action="/admin/hostings/update/{{ $data->id }}"  method="post" enctype="multipart/form-data" style="width:100%;">
                                        @csrf

                                        <div class="col-12 mb-15">
                                        <label class="adomx-checkbox">
                                        <input name="is_active" type="checkbox" {{ $data->is_active? 'checked':'' }}> <i class="icon"></i> Активность</label>
                                        </div>
                                        <div class="col-12 mb-15">
                                        <input required name="title" type="text" class="form-control" placeholder="Заголовок" value="{!! $data->title !!}">
                                        </div>
                                        <div class="col-12 mb-15">
                                        <select name="type_id" class="form-control">
                                                <option value="0">Выберити тип</option>
                                                @foreach(App\Models\HostingType::all() as $item)
                                                <option {{ ($item->id == $data->type_id)? 'selected':'' }} value="{{ $item->id }}">{{ $item->title}}</option>
                                                @endforeach
                                               
                                            </select>
                                        </div>
                                        <div class="col-12 mb-15">
                                        <input required name="disk_space" type="text" class="form-control" placeholder="Диск" value="{!! $data->disk_space !!}">
                                        </div>
                                        <div class="col-12 mb-15">
                                        <input required name="price" type="text" class="form-control" placeholder="Цена" value="{!! $data->price !!}">
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