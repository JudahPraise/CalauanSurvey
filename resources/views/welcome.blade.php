<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

        {{-- Script --}}
        <script src="{{ asset('js/app.js') }}"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <style>
            html, body {
                background-color: #fff;
                color: black;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

        <div class="container-fluid d-flex justify-content-center align-items-center w-100 m-0 p-0" style="overflow: hidden">
            <div class="row d-flex align-items-center just glass">
                <div class="col-12 d-flex justify-content-start align-items-center flex-column">
                    <div class="row d-flex justify-content-center align-items-center flex-column w-75">
            
                        <div class="row w-100 d-flex align-items-center">
                            <div class="col-4 px-1">
                                <img class="logo" src="{{ asset('images/Calauan_Laguna.png') }}" alt="Calauan_Laguna_Logo" height="100" width="100">
                            </div>
                            <div class="col-8" style="border-left: 2px solid #636b6f">
                                <h3 class="font-weight-bold">Calauan, Laguna</h3>
                                <h4>Survey</h4>
                            </div>
                        </div>
                        
                        <form class="mt-3 w-100 d-flex flex-column" method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="form-group">
                              
                              <div class="row icon-input">
                                <input id="email" type="email" class="form-control text-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
                                <i class="fas fa-envelope"></i>
                              </div>
                               @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
                            <div class="form-group">
                                <div class="row icon-input">
                                    <input id="password" type="password" class="form-control text-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                    <i class="fas fa-lock"></i>
                                </div>
    
                               @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <div class="row">
                                    <button type="submit" class="btn btn-primary w-100" style="border-radius: 1rem; padding: .8rem">Log in</button>
                                </div>
                            </div>
    
                        </form>


                    </div>
                    
                </div>
            </div> 
    
            <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade w-100" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img src="{{ asset('images/1.jpg') }}" class="d-block w-100" alt="..." style="height: 100vh; width: 100%; overflow: hidden;">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/2.jpg') }}" class="d-block w-100" alt="..." style="height: 100vh; width: 100%;  overflow: hidden;">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/3.jpg') }}" class="d-block w-100" alt="..." style="height: 100vh; width: 100%;  overflow: hidden;">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('images/4.jpg') }}" class="d-block w-100" alt="..." style="height: 100vh; width: 100%;  overflow: hidden;">
                  </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <script>
            $('.carousel').carousel({
                interval: 8000
            })
        </script>

    </body>
</html>
