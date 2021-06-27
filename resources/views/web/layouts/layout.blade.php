<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | OshnoGroup</title>
    <!-- css -->
    <link rel="stylesheet" href="/public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/assets/css/animate.css">
    <link rel="stylesheet" href="/public/assets/css/slick.css">
    <link rel="stylesheet" href="/public/assets/css/slick-theme.css">
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <link rel="stylesheet" href="/public/assets/css/media.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    @yield('styles')
</head>

<body>

<div class="modal fade" id="modalSite" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content border-0">
                <div class="modal-body py-0">
                    <div class="row">
                        <div class="col-md-6 col-12 pl-0 d-md-block d-none">
                            <div class="modal-image-wrapper w-100 h-100">
                                <img src="/public/assets/images/modal/modal-1.png" class="img-fluid h-100" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 col-12 py-3">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 6L6 18" stroke="black" stroke-opacity="1" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M6 6L18 18" stroke="black" stroke-opacity="1" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </button>
                            <div class="mt-4">
                                <h3>Заявка на подключение</h3>
                                <p>Оставьте свои контактные данные<br> и мы свяжемся с Вами в ближайшее время</p>
                            </div>
                            <form id="formprod" action="/create-order" method="post" class="mt-5">
                                @csrf
                                <div>
                                    <label for="name">Имя *</label>
                                    <input type="text" class="form-control" id="name" role="name" name="name" required="">
                                </div>
                                <div class="my-4">
                                    <label for="phone">Телефон *</label>
                                    <input type="text" class="form-control" id="phone" role="phone" name="phone" required="">
                                </div>
                                <button  onclick="formSubmit(event, 'formprod','form-control','product');" type="submit" class="btn btn-slide mt-4">Отправить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="wrapper">
        <header class="bg-white pb-2">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <a class="navbar-brand" href="/">
                        <img src="/public/assets/images/logo.png" class="img-fluid" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <div id="nav-icon1">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto w-100 ml-4 mt-2 justify-content-between align-items-lg-center align-items-start">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-bottm" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Интернет + ТВ
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/internet">Интернет</a>
                                    <a class="dropdown-item" href="/iptv">IP-телеведение</a>
                                    <a class="dropdown-item" href="/devices">Устройства</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/coorporative-clients">Корпоративным клиентам</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-bottm" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Услуги
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/register-domains">Регистрация домена</a>
                                    <a class="dropdown-item" href="/ip-address">IP-адрес</a>
                                    <a class="dropdown-item" href="/hosting">Хостинг</a>
                                    <a class="dropdown-item" href="/domains">Домен</a>
                                    <a class="dropdown-item" href="/master-call">Вызов мастера</a>
                                    <a class="dropdown-item" href="/bring-friend">Приведи друга</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-bottm" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    О компании
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/about-us">Кто мы</a>
                                    <a class="dropdown-item" href="/vacancies">Вакансии</a>
                                    <a class="dropdown-item" href="/partners">Партнёры</a>
                                    <a class="dropdown-item" href="/contacts">Контакты</a>
                                    <a class="dropdown-item" href="/news">Новости</a>
                                </div>
                            </li>
                            <div class="ml-4">
                                <a href="#footer" class="btn oshno-btn">Подключить</a>
                            </div>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        @yield('content')
       
        <footer id="footer" class="pb-5 pt-4">
            <div class="container pt-5 ">
                <h1>Оставьте заявку на подключение</h1>
                <form id="formz" action="/create-order" method="post">
                    @csrf
                    <div class="row my-5 justify-content-center">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                            <label class="sub-title d-none">Имя</label>
                            <input name="name" type="text" placeholder="Имя" class="form-control _rOnly">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-sm-0 mt-4">
                        <label class="sub-title d-none">Телефон</label>
                            <input name="phone" type="text" placeholder="Телефон" class="form-control _rOnly">                            
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12 mt-md-0 mt-4">
                            <div class="d-flex justify-content-md-start justify-content-center">
                                <button onclick="formSubmit(event, 'formz','_rOnly','connect');" type="submit" class="btn">Отправить</button>
                            </div>
                        </div>
                    </div>
                </form>
                <hr style="background: #0099FF; height: 2px">
                <div class="mt-5">
                    <p style="float: left;"> {{ App\Models\Enums\PropertyKeys::getValue(App\Models\Enums\PropertyKeys::$TITLE) }}<br> {{ App\Models\Enums\PropertyKeys::getValue(App\Models\Enums\PropertyKeys::$TITLE_SECOND) }} </p>
                    <p class="text-right" style="float: right;">{{ App\Models\Enums\PropertyKeys::getValue(App\Models\Enums\PropertyKeys::$ADDRESS) }}<br> {{ App\Models\Enums\PropertyKeys::getValue(App\Models\Enums\PropertyKeys::$LICENCE) }}</p>
                    <div style="clear: both;"></div>
                </div>
            </div>
        </footer>
    </div>
    <script src="/public/assets/js/jquary.js"></script>
    <script src="/public/assets/js/popper.min.js"></script>
    <script src="/public/assets/js/bootstrap.min.js"></script>
    <script src="/public/assets/js/slick.js"></script>
    <script src="/public/assets/js/app.js"></script>
    <script>

    function formSubmit(e, formID, inputclass, type){

 

        e.preventDefault();
         var form = document.getElementById(formID);
        
        $(this).remove();

        document.querySelectorAll("."+inputclass).forEach(el=>{
            el.setAttribute('readonly', true);
            el.setAttribute('value', el.value);
            //console.log(el.value);
        });





        
        var input = document.createElement("input")
        input.setAttribute('name','form');
        input.setAttribute('type','hidden');

        var inputT = document.createElement("input")
        inputT.setAttribute('name','type');
        inputT.setAttribute('type','hidden');
        inputT.value=type;

        if(document.querySelector('.select')){
            var selected = document.querySelector('.select')?.value;
            document.querySelectorAll('option').forEach(el =>{
                if(el.getAttribute('value')==selected)
                    el.setAttribute('selected', true);
            });
        }
        if(document.querySelector('.textarea'))
            document.querySelector('.textarea').innerHTML= document.querySelector('.textarea')?.value;

        e.target.remove();

        input.value='<form>'+form.innerHTML+'</form>';
    
        form.appendChild(inputT);
        form.appendChild(input);

        form.submit();


       
    }


    function byProduct(e) {
        var id = e.target.getAttribute('data-id');
        var type = e.target.getAttribute('data-type');

        $('#formprod').append('<input name="id" type="hidden" value="'+id+'">');
        $('#formprod').append('<input name="type" type="hidden" value="'+type+'">');
    }
    </script>

    @yield('scripts')
</body>

</html>