@extends('web.layouts.layout')

@section('title', 'Домены')

@section('styles')
@endsection

@section('content')

<content>
    <div id="domens" class="container py-5 mb-5 ">
                <h1 class="mb-4 h1 text-center">Домены</h1>
                <h6>* Цены указаны в нац. валюте — сомони.</h6>
                <div class="mt-5" style="overflow-x: auto;">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Доменное имя</th>
                                <th scope="col">Регистрация нового домена</th>
                                <th scope="col">Продление домена</th>
                                <th scope="col">Перенос</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <td scope="row">{!! $item->title !!}</td>
                                <td>{{ $item->registration_price }}</td>
                                <td>{{ $item->renewal_price }}</td>
                                <td>{{ $item->transfer_price }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
    </div>
</content>

@endsection


@section('scripts')
@endsection