<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->

<!DOCTYPE html>
<html lang="pt-BR">




<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LikeCars ADM | Entrar</title>

    {{-- <link rel="stylesheet" href="{{ asset('css/style/login.css') }}"> --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>


<body class="container  is-max-desktop">
    <div class="box">
        <p class="is-size-4">Bem vindo ao LikeCars ADM!</p>
        <div class="content box is-shadowless">
            <h2>Faça o login</h2>
        </div>

        <div class="box is-shadowless">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                @error('email')
                    <div class="invalid-feedback"><span role="alert">Credenciais não autorizadas</span></div>

                @enderror

                <div class="input-user">
                    <div class="field">
                        <label class="label" for='email'">Email</label>

                        <div class=" control has-icons-left ">
                            <input id=" email" placeholder="E-mail" type="email"
                            class="input @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <span class="icon is-small is-left">
                                <i class="fa fa-envelope"></i>
                            </span>
                    </div>
                </div>

                <div class="input-password">


                    <div class="field">
                        <p class="control has-icons-left">
                            <input id="password" placeholder="Senha" type="password"
                            class="input @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">
        
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                          <span class="icon is-small is-left">
                            <i class="fa fa-lock"></i>
                          </span>
                        </p>
                      </div>
                </div>
        
                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="box is-shadowless">
                            <input class="checkbox" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
        
                            <label class="checkbox" for="remember">
                                {{ __('Lembrar credenciais') }}
                            </label>
                        </div>
                    </div>
                </div>
        
                <div class="form-group row mb-0">
                    <div class="submit">
                        <div class="field">
                            <p class="control">
                                <button type="submit" class="button is-success">
                                    {{ __('Entrar') }}
                                </button>
                                    </p>
                          </div>
        
                        <!-- @if (Route::has('password.request')) <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a> @endif-->
                    </div>
                </div>
                </form>
            </div>
        
            </div>
        

        </div>



</body>



</html>
