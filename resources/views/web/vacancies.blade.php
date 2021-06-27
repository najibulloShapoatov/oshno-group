@extends('web.layouts.layout')

@section('title', 'Вакансии')

@section('styles')
@endsection

@section('content')
<content>
    <div id="vacancies" class="container py-5 mb-5">
                <h1 class="mb-4 h1">Вакансии</h1>
                @foreach($data as $item)
                <div class="vacancies-item mb-3">
                    <h4>{{ $item->title }}</h4>
                    <p>{{ $item->short_description }}</p>
                    <a href="/vacancies/{{$item->id}}">Подробнее</a>
                </div>
                @endforeach

                {{ $data->render("pagination::default") }}
                
    </div>
</content>
@endsection


@section('scripts')
@endsection