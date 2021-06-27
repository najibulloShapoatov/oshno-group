<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Вход</title>

    

    <!-- Bootstrap core CSS -->
<link href="/public/admin/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

<style>
  html,body {
  height: 100%;
}
body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}

.form-signin .checkbox {
  font-weight: 400;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>


  </head>
  <body class="text-center">
    
<main class="form-signin">
<form method="POST" action="{{ route('login') }}">
    @csrf
    <img class="mb-4" src="/public/admin/images/logo.png" alt="" width="auto" height="57">
    <h1 class="h5 mb-3 fw-normal">Пожалуйста введите Email и парол </h1>

    <div class="form-floating">
      <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
      <label for="email">Email </label>
      @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    <div class="form-floating">
      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
      <label for="floatingPassword">Парол</label>
      @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>

    <div class="checkbox mb-3">
      <label>
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Запомнит меня
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Вход</button>
    <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> -->
  </form>
</main>


    
  </body>
</html>
