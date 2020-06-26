<!-- Stored in resources/views/layouts/index.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <style>
            .back_office{
                display: flex;
                width: 100%;
            }
            .nav{
                width: 15%;
                height: 100%;
                padding: 0;
                border-right: 1px solid grey; 
                height: 100vh;
                position: fixed;
            }
            .display_content{
                position: absolute;
                right: 0;
                width: 85%;
            }
            .back_office_title{
                width: 100%;
                border-bottom: 1px solid grey;
            }
            .back_office_title h2{
                padding: 20px;
            }
            .back_office_content{
                padding: 25px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="back_office">
                @section('sidebar')
                <div class="nav flex-column nav-pills bg-light">
                    <a class="nav-link" href="/backOffice">Accueil</a>
                    <a class="nav-link" href="/backOffice/evenements">Evenements</a>
                    <a class="nav-link" href="/backOffice/infos">Infos</a>
                    <a class="nav-link" href="/backOffice/tarifs">Tarifs</a>
                    <a class="nav-link" href="/backOffice/reservations">Réservations</a>
                    <a class="nav-link" href="/backOffice/contacts">Contacts</a>
                    <a class="nav-link" href="/backOffice/newsletter">Newsletters</a>
                </div>
                <div class="display_content">
                    <section class="back_office_title bg-light">
                        <h2>@yield('title')</h2>
                    </section>
                    <section class="back_office_content">
                        @yield('content')
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>
