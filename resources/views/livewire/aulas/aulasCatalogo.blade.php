<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container-md">
        <div class="row justify-content-center">
            <div class="col">
                <table class="table table-dark " style="position:relative;">
                    <thead class="thead">
                        <tr>
                            <td>#</td>
                            <th>Código</th>
                            <th>Edificio </th>
                            <th>Observación</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($aulas as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->codigo_aul }}</td>
                            <td>{{ $row->edificio_aul }}</td>
                            <td>{{ $row->observacion_aul }}</td>

                            @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>