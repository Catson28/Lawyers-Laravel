<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- csrf token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Your Website Title</title>
    <!-- styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div>
            <form action="{{ url('/addAjaxType') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">nome completo</label>
                        <input type="text" class="form-control" name="fname" id="inputCity">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputState">BI</label>
                        <input type="text" class="form-control" name="bi" id="inputCity">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputCity">Cargo</label>
                        <input type="text" class="form-control" name="position" id="inputCity">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputZip">N Cedula</label>
                        <input type="text" class="form-control" name="identification" id="inputZip">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputCity">NIF</label>
                        <input type="text" class="form-control" name="nif" id="inputCity">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputState">Telefone</label>
                        <input type="text" class="form-control" name="telephone" id="inputCity">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputState">Genero</label>
                        <select id="inputState"  name="gender" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Data nasci</label>
                        <input type="date" class="form-control" name="birday" id="inputZip">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Incrito</button>
            </form>

        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>