<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Paises</title>
</head>

<body>
    <h1>Paises de la region</h1>
    <table class="table table-striped table-dark" >
        <thead>
            <tr>
                <th> Pais </th>
                <th> Capital </th>
                <th> Moneda </th>
                <th> Poblacion </th>
            </tr>
        </thead>
        <tbody>
            @foreach($paises as $pais => $infopais)
                <tr>
                    <td>
                        {{$pais}}
                    </td>
                    <td>
                        {{$infopais["capital"]}}
                    </td>
                    <td>
                        {{$infopais["moneda"]}}
                    </td>
                    <td>
                        {{$infopais["poblacion"]}}
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot></tfoot>
    </table>
</body>

</html>