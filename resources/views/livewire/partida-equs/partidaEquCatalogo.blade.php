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
                            <th>Equ1</th>
                            <th>Equ2</th>
                            <th>Ganador </th>
                            <th>Fecha </th>
                            <th>Observacion </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($partidaEqus as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $row->equipo1->nombre_equ }}</td>
                            <td>{{ $row->equipo2->nombre_equ }}</td>
                            <td>{{ $row->equipo3->nombre_equ }}</td>
                            <td>{{ $row->fecha_par_equ }}</td>
                            <td>{{ $row->observacion_par_equ }}</td>

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