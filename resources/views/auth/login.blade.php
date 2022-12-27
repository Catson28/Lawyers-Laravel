<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('canwn/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('canwn/css/style_login.css') }}" rel="stylesheet">
</head>
<body>
    <div class="content_login">
        <form method="POST" action="{{ route('login') }}"> 
            @csrf
            <a href="{{url('/')}}"><img src="{{ ('img/logo_main.png') }}" alt="" class="login_logo"></a>
            
            <h1 class="h_1_login">{{ __('Login') }}</h1>
            <input type="text" class="inpt_login" placeholder="email" id="{{ __('Email Address') }}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            <input placeholder="{{ __('Password') }}"  id="password" type="password" class="inpt_login form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            <button  type="submit" class="btn btn_login">{{ __('Login') }}</button>
        </form>
    </div>
    
</body>
</html>