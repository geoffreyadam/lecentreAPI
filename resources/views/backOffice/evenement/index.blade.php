<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BackOffice</title>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="links">
                    <a href="{{ url('/backOffice/evenements') }}"">Docs</a>

                </div>
                <form method="POST" action="/backOffice/add/evenements">
                    @csrf
                    <input type="text" name="titre" placeholder="titre"/>
                    <input type="text" name="description" placeholder="description"/>
                    <input type="text" name="date" placeholder="date"/>
                    <input type="text" name="lieu" placeholder="lieu"/>
                    <input type="text" name="type" placeholder="type"/>
                    <input type="text" name="fini" placeholder="fini"/>
                    <input type="submit" value="Ajouter un evenement"/>
                </form>
                @foreach ($evenements as $evenement)
                    <h1>got 1</h1>
                @endforeach
            </div>
        </div>
    </body>
</html>
