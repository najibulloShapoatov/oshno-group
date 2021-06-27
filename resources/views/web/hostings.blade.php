@extends('web.layouts.layout')

@section('title', 'Хостинг')

@section('styles')
@endsection

@section('content')

<content>
    <div id="hosting" class="container py-5 mb-5 ">
                <h1 class="mb-4 h1 text-center">Хостинг</h1>
                <ul class="nav nav-tabs justify-content-center border-bottom-0" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="hosting-ru-tab" data-toggle="tab" href="#hosting-ru" role="tab" aria-controls="hosting-ru" aria-selected="true">Хостинг RU</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="hosting-tj-tab" data-toggle="tab" href="#hosting-tj" role="tab" aria-controls="hosting-tj" aria-selected="false">Хоcтинг TJ </a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="hosting-ru" role="tabpanel" aria-labelledby="hosting-ru-tab">
                        <div class="row" id="oshno-card">
                            <div class="col-lg-4 col-sm-6 col-12 oshno-card-item mt-4">
                                <div>
                                    <h3>Наз. тарифа</h3>
                                    <div>
                                        <svg width="82" height="88" viewBox="0 0 82 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M41 34.625C61.7107 34.625 78.5 27.6294 78.5 19C78.5 10.3706 61.7107 3.375 41 3.375C20.2893 3.375 3.5 10.3706 3.5 19C3.5 27.6294 20.2893 34.625 41 34.625Z" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M78.5 35.7969C78.5 44.4258 61.7031 51.4219 41 51.4219C20.2969 51.4219 3.5 44.4258 3.5 35.7969" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M78.5 52.5938C78.5 61.2227 61.7031 68.2188 41 68.2188C20.2969 68.2188 3.5 61.2227 3.5 52.5938" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M3.5 18.8516V69.1484C3.5 77.6953 20.2969 84.625 41 84.625C61.7031 84.625 78.5 77.6953 78.5 69.1484V18.8516" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                        </svg>

                                    </div>
                                    <p class="my-4">20 Мб</p>
                                    <h2 class="mb-0">3 сом/мес</h2>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12 oshno-card-item mt-4">
                                <div>
                                    <h3>Наз. тарифа</h3>
                                    <div>
                                        <svg width="82" height="88" viewBox="0 0 82 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M41 34.625C61.7107 34.625 78.5 27.6294 78.5 19C78.5 10.3706 61.7107 3.375 41 3.375C20.2893 3.375 3.5 10.3706 3.5 19C3.5 27.6294 20.2893 34.625 41 34.625Z" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M78.5 35.7969C78.5 44.4258 61.7031 51.4219 41 51.4219C20.2969 51.4219 3.5 44.4258 3.5 35.7969" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M78.5 52.5938C78.5 61.2227 61.7031 68.2188 41 68.2188C20.2969 68.2188 3.5 61.2227 3.5 52.5938" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M3.5 18.8516V69.1484C3.5 77.6953 20.2969 84.625 41 84.625C61.7031 84.625 78.5 77.6953 78.5 69.1484V18.8516" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                        </svg>

                                    </div>
                                    <p class="my-4">50 Мб</p>
                                    <h2 class="mb-0">13 сом/мес</h2>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12 oshno-card-item mt-4">
                                <div>
                                    <h3>Наз. тарифа</h3>
                                    <div>
                                        <svg width="82" height="88" viewBox="0 0 82 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M41 34.625C61.7107 34.625 78.5 27.6294 78.5 19C78.5 10.3706 61.7107 3.375 41 3.375C20.2893 3.375 3.5 10.3706 3.5 19C3.5 27.6294 20.2893 34.625 41 34.625Z" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M78.5 35.7969C78.5 44.4258 61.7031 51.4219 41 51.4219C20.2969 51.4219 3.5 44.4258 3.5 35.7969" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M78.5 52.5938C78.5 61.2227 61.7031 68.2188 41 68.2188C20.2969 68.2188 3.5 61.2227 3.5 52.5938" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M3.5 18.8516V69.1484C3.5 77.6953 20.2969 84.625 41 84.625C61.7031 84.625 78.5 77.6953 78.5 69.1484V18.8516" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                        </svg>

                                    </div>
                                    <p class="my-4">100 Мб</p>
                                    <h2 class="mb-0">20 сом/мес</h2>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12 oshno-card-item mt-4">
                                <div>
                                    <h3>Наз. тарифа</h3>
                                    <div>
                                        <svg width="82" height="88" viewBox="0 0 82 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M41 34.625C61.7107 34.625 78.5 27.6294 78.5 19C78.5 10.3706 61.7107 3.375 41 3.375C20.2893 3.375 3.5 10.3706 3.5 19C3.5 27.6294 20.2893 34.625 41 34.625Z" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M78.5 35.7969C78.5 44.4258 61.7031 51.4219 41 51.4219C20.2969 51.4219 3.5 44.4258 3.5 35.7969" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M78.5 52.5938C78.5 61.2227 61.7031 68.2188 41 68.2188C20.2969 68.2188 3.5 61.2227 3.5 52.5938" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M3.5 18.8516V69.1484C3.5 77.6953 20.2969 84.625 41 84.625C61.7031 84.625 78.5 77.6953 78.5 69.1484V18.8516" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                        </svg>

                                    </div>
                                    <p class="my-4">20 Мб</p>
                                    <h2 class="mb-0">3 сом/мес</h2>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12 oshno-card-item mt-4">
                                <div>
                                    <h3>Наз. тарифа</h3>
                                    <div>
                                        <svg width="82" height="88" viewBox="0 0 82 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M41 34.625C61.7107 34.625 78.5 27.6294 78.5 19C78.5 10.3706 61.7107 3.375 41 3.375C20.2893 3.375 3.5 10.3706 3.5 19C3.5 27.6294 20.2893 34.625 41 34.625Z" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M78.5 35.7969C78.5 44.4258 61.7031 51.4219 41 51.4219C20.2969 51.4219 3.5 44.4258 3.5 35.7969" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M78.5 52.5938C78.5 61.2227 61.7031 68.2188 41 68.2188C20.2969 68.2188 3.5 61.2227 3.5 52.5938" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M3.5 18.8516V69.1484C3.5 77.6953 20.2969 84.625 41 84.625C61.7031 84.625 78.5 77.6953 78.5 69.1484V18.8516" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                        </svg>

                                    </div>
                                    <p class="my-4">50 Мб</p>
                                    <h2 class="mb-0">13 сом/мес</h2>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12 oshno-card-item mt-4">
                                <div>
                                    <h3>Наз. тарифа</h3>
                                    <div>
                                        <svg width="82" height="88" viewBox="0 0 82 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M41 34.625C61.7107 34.625 78.5 27.6294 78.5 19C78.5 10.3706 61.7107 3.375 41 3.375C20.2893 3.375 3.5 10.3706 3.5 19C3.5 27.6294 20.2893 34.625 41 34.625Z" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M78.5 35.7969C78.5 44.4258 61.7031 51.4219 41 51.4219C20.2969 51.4219 3.5 44.4258 3.5 35.7969" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M78.5 52.5938C78.5 61.2227 61.7031 68.2188 41 68.2188C20.2969 68.2188 3.5 61.2227 3.5 52.5938" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M3.5 18.8516V69.1484C3.5 77.6953 20.2969 84.625 41 84.625C61.7031 84.625 78.5 77.6953 78.5 69.1484V18.8516" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                        </svg>

                                    </div>
                                    <p class="my-4">100 Мб</p>
                                    <h2 class="mb-0">20 сом/мес</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="hosting-tj" role="tabpanel" aria-labelledby="hosting-tj-tab">
                        <div class="row" id="oshno-card">
                            <div class="col-lg-4 col-sm-6 col-12 oshno-card-item mt-4">
                                <div>
                                    <h3>Наз. тарифа</h3>
                                    <div>
                                        <svg width="82" height="88" viewBox="0 0 82 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M41 34.625C61.7107 34.625 78.5 27.6294 78.5 19C78.5 10.3706 61.7107 3.375 41 3.375C20.2893 3.375 3.5 10.3706 3.5 19C3.5 27.6294 20.2893 34.625 41 34.625Z" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M78.5 35.7969C78.5 44.4258 61.7031 51.4219 41 51.4219C20.2969 51.4219 3.5 44.4258 3.5 35.7969" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M78.5 52.5938C78.5 61.2227 61.7031 68.2188 41 68.2188C20.2969 68.2188 3.5 61.2227 3.5 52.5938" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M3.5 18.8516V69.1484C3.5 77.6953 20.2969 84.625 41 84.625C61.7031 84.625 78.5 77.6953 78.5 69.1484V18.8516" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                        </svg>

                                    </div>
                                    <p class="my-4">20 Мб</p>
                                    <h2 class="mb-0">3 сом/мес</h2>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12 oshno-card-item mt-4">
                                <div>
                                    <h3>Наз. тарифа</h3>
                                    <div>
                                        <svg width="82" height="88" viewBox="0 0 82 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M41 34.625C61.7107 34.625 78.5 27.6294 78.5 19C78.5 10.3706 61.7107 3.375 41 3.375C20.2893 3.375 3.5 10.3706 3.5 19C3.5 27.6294 20.2893 34.625 41 34.625Z" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M78.5 35.7969C78.5 44.4258 61.7031 51.4219 41 51.4219C20.2969 51.4219 3.5 44.4258 3.5 35.7969" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M78.5 52.5938C78.5 61.2227 61.7031 68.2188 41 68.2188C20.2969 68.2188 3.5 61.2227 3.5 52.5938" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M3.5 18.8516V69.1484C3.5 77.6953 20.2969 84.625 41 84.625C61.7031 84.625 78.5 77.6953 78.5 69.1484V18.8516" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                        </svg>

                                    </div>
                                    <p class="my-4">50 Мб</p>
                                    <h2 class="mb-0">13 сом/мес</h2>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12 oshno-card-item mt-4">
                                <div>
                                    <h3>Наз. тарифа</h3>
                                    <div>
                                        <svg width="82" height="88" viewBox="0 0 82 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M41 34.625C61.7107 34.625 78.5 27.6294 78.5 19C78.5 10.3706 61.7107 3.375 41 3.375C20.2893 3.375 3.5 10.3706 3.5 19C3.5 27.6294 20.2893 34.625 41 34.625Z" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M78.5 35.7969C78.5 44.4258 61.7031 51.4219 41 51.4219C20.2969 51.4219 3.5 44.4258 3.5 35.7969" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M78.5 52.5938C78.5 61.2227 61.7031 68.2188 41 68.2188C20.2969 68.2188 3.5 61.2227 3.5 52.5938" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M3.5 18.8516V69.1484C3.5 77.6953 20.2969 84.625 41 84.625C61.7031 84.625 78.5 77.6953 78.5 69.1484V18.8516" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                        </svg>

                                    </div>
                                    <p class="my-4">100 Мб</p>
                                    <h2 class="mb-0">20 сом/мес</h2>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12 oshno-card-item mt-4">
                                <div>
                                    <h3>Наз. тарифа</h3>
                                    <div>
                                        <svg width="82" height="88" viewBox="0 0 82 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M41 34.625C61.7107 34.625 78.5 27.6294 78.5 19C78.5 10.3706 61.7107 3.375 41 3.375C20.2893 3.375 3.5 10.3706 3.5 19C3.5 27.6294 20.2893 34.625 41 34.625Z" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M78.5 35.7969C78.5 44.4258 61.7031 51.4219 41 51.4219C20.2969 51.4219 3.5 44.4258 3.5 35.7969" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M78.5 52.5938C78.5 61.2227 61.7031 68.2188 41 68.2188C20.2969 68.2188 3.5 61.2227 3.5 52.5938" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M3.5 18.8516V69.1484C3.5 77.6953 20.2969 84.625 41 84.625C61.7031 84.625 78.5 77.6953 78.5 69.1484V18.8516" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                        </svg>

                                    </div>
                                    <p class="my-4">20 Мб</p>
                                    <h2 class="mb-0">3 сом/мес</h2>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12 oshno-card-item mt-4">
                                <div>
                                    <h3>Наз. тарифа</h3>
                                    <div>
                                        <svg width="82" height="88" viewBox="0 0 82 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M41 34.625C61.7107 34.625 78.5 27.6294 78.5 19C78.5 10.3706 61.7107 3.375 41 3.375C20.2893 3.375 3.5 10.3706 3.5 19C3.5 27.6294 20.2893 34.625 41 34.625Z" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M78.5 35.7969C78.5 44.4258 61.7031 51.4219 41 51.4219C20.2969 51.4219 3.5 44.4258 3.5 35.7969" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M78.5 52.5938C78.5 61.2227 61.7031 68.2188 41 68.2188C20.2969 68.2188 3.5 61.2227 3.5 52.5938" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M3.5 18.8516V69.1484C3.5 77.6953 20.2969 84.625 41 84.625C61.7031 84.625 78.5 77.6953 78.5 69.1484V18.8516" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                        </svg>

                                    </div>
                                    <p class="my-4">50 Мб</p>
                                    <h2 class="mb-0">13 сом/мес</h2>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-12 oshno-card-item mt-4">
                                <div>
                                    <h3>Наз. тарифа</h3>
                                    <div>
                                        <svg width="82" height="88" viewBox="0 0 82 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M41 34.625C61.7107 34.625 78.5 27.6294 78.5 19C78.5 10.3706 61.7107 3.375 41 3.375C20.2893 3.375 3.5 10.3706 3.5 19C3.5 27.6294 20.2893 34.625 41 34.625Z" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M78.5 35.7969C78.5 44.4258 61.7031 51.4219 41 51.4219C20.2969 51.4219 3.5 44.4258 3.5 35.7969" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M78.5 52.5938C78.5 61.2227 61.7031 68.2188 41 68.2188C20.2969 68.2188 3.5 61.2227 3.5 52.5938" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                            <path d="M3.5 18.8516V69.1484C3.5 77.6953 20.2969 84.625 41 84.625C61.7031 84.625 78.5 77.6953 78.5 69.1484V18.8516" stroke="#0099FF" stroke-width="6.25" stroke-miterlimit="10" stroke-linecap="round"/>
                                        </svg>

                                    </div>
                                    <p class="my-4">100 Мб</p>
                                    <h2 class="mb-0">20 сом/мес</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</content>

@endsection


@section('scripts')
@endsection