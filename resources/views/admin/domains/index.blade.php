@extends('admin.layouts.app')

@section('title', 'Домены')

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
                <h3 class="title">Домены</h3>

            </div>
        </div><!-- Page Heading End -->

    </div><!-- Page Headings End -->

    <div class="row">
        <div class="col-12 mb-30">
            <a href="/admin/domains/create" class="button button-my float-right"><span><i class="ti-plus"></i>Добавить</span></a>
        </div>

        <!--Default Data Table Start-->
        <div class="col-12 mb-30">
            <div class="box">
                <div class="box-body">

                    <table class="table table-bordered  data-table data-table-default">
                        <thead>
                            <tr>
                                <th>Доменное имя</th>
                                <th>Регистрация нового домена</th>
                                <th>Продление домена</th>
                                <th>Перенос</th>
                                <th>Активность</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                                                                   
                                    <td><strong>{!! mb_substr($item->title, 0, 50) !!}</strong></td>
                                    <td>{!! $item->registration_price !!}</td>
                                    <td>{!! $item->renewal_price !!}</td>
                                    <td>{!! $item->transfer_price !!}</td>
                                    
                                    <td width="70">
                                        @if($item->is_active)
                                        <span class="badge badge-success">да</span>
                                        @else
                                        <span class="badge badge-danger">нет</span>
                                        @endif
                                    </td>
                                    <td width="70" class="text-center act"  style="vertical-align: middle">
                                        <a href="/admin/domains/edit/{{$item->id}}">
                                        <span  class="ti-pencil edit-item mr-10"></span>
                                        </a>
                                        <a href="/admin/domains/destroy/{{$item->id}}">
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