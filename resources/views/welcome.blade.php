<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Task Manager</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css"/>

        <!-- Styles -->
        <style>
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
                color: white;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            hr.divider {
                height: 0.2rem;
                max-width: 3.25rem;
                margin: 1.5rem auto;
                background-color: #f4623a;
                opacity: 1;
            }
            header.masthead {
                padding-top: 10rem;
                padding-bottom: calc(10rem - 4.5rem);
                background: linear-gradient(to bottom, rgba(92, 77, 66, 0.8) 0%, rgba(92, 77, 66, 0.8) 100%), url("img/bg-masthead.jpg");
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: scroll;
                background-size: cover;
                height: 100vh;
                margin: 0;
                }
                header.masthead h1, header.masthead .h1 {
                font-size: 2.25rem;
                }
                @media (min-width: 992px) {
                header.masthead {
                    height: 100vh;
                    min-height: 40rem;
                    padding-top: 4.5rem;
                    padding-bottom: 0;
                }
                header.masthead p {
                    font-size: 1.5rem;
                }
                header.masthead h1, header.masthead .h1 {
                    font-size: 3rem;
                }
                }
                @media (min-width: 1200px) {
                header.masthead h1, header.masthead .h1 {
                    font-size: 3.5rem;
                }
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="btn btn-primary px-3" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="btn" href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a class="btn btn-primary" href="{{ route('register') }}">Sign up for free</a>
                            <a class="btn btn-dark px-3" href="https://github.com/OmarKhalil10" role="button"><i class="fab fa-github"></i></a>
                        @endif
                    @endauth
                </div>
            @endif
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Task Manager</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white mb-4">maintain your day-to-day tasks or list everything that you have to do, with the most important tasks at the top of the list, and the least important tasks at the bottom. It is helpful in planning your daily schedules!</p>
                        <a class="btn btn-success btn-xl p-2" href="/home">Find Out More</a>
                    </div>
                </div>
            </div>
        </header>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://kit.fontawesome.com/61ca687656.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
