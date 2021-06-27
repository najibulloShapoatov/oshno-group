@extends('admin.layouts.app')

@section('title', 'IP телеведения')

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
                <h3 class="title">IP телеведения</h3>

            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">
        <div class="col-12 mb-30">
            <a href="/admin/product-iptv/create" class="button button-my float-right"><span><i class="ti-plus"></i>Добавить</span></a>
        </div>

        <!--Default Data Table Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-body">

                    <table class="table table-bordered table-responsive data-table data-table-default">
                        <thead>
                            <tr>
                                <!-- <th>Картинка</th> -->
                                <th>Заголовок</th>
                                <th>Цена</th>
                                <th>Скорость</th>
                                <th>Трафик</th>
                                <th>Подключения</th>
                                <th>Активность</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                                <tr>
                                    
                                    <td><strong>{!! mb_substr($item->title, 0, 50) !!}</strong></td>
                                    <td>{!! mb_substr($item->price, 0, 50) !!}</td>
                                    <td>{!! mb_substr($item->speed, 0, 50) !!}</td>
                                    <td>{!! mb_substr($item->traffic, 0, 50) !!}</td>
                                    <td width="70">
                                        @if($item->is_connect_free)
                                        <span class="badge badge-success">бесплатно</span>
                                        @else
                                        <span class="badge badge-danger">платно</span>
                                        @endif
                                    </td>
                                    <td width="70">
                                        @if($item->is_active)
                                        <span class="badge badge-success">да</span>
                                        @else
                                        <span class="badge badge-danger">нет</span>
                                        @endif
                                    </td>
                                    <td width="70" class="text-center act"  style="vertical-align: middle">
                                        <a href="/admin/product-iptv/edit/{{$item->id}}">
                                        <span  class="ti-pencil edit-item mr-10"></span>
                                        </a>
                                        <a href="/admin/product-iptv/destroy/{{$item->id}}">
                                        <span   class="ti-trash delete-item"></span>
                                        </a>
                                        
                                    </td>
                                </tr>
                            @endforeach
                      
                        

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <!-- Plugins & Activation JS For Only This Page -->
    <script src="/public/admin/assets/js/plugins/datatables/datatables.min.js"></script>
    <script src="/public/admin/assets/js/plugins/datatables/datatables.active.js"></script>
@endsection