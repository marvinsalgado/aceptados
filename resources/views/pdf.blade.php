<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <style>
        @page {
            margin: 100px 25px;
        }

        header {
            position: fixed;
            top: -60px;
            left: 0px;
            right: 0px;
            height: 60px;

            /** Extra personal styles **/
            background-color: white;
            color: white;
            text-align: center;
            line-height: 35px;
        }

        footer {
            position: fixed;
            bottom: -60px;
            left: 0px;
            right: 0px;
            height: 50px;

            /** Extra personal styles **/
            background-color: white;
            color: white;
            text-align: center;
            line-height: 35px;
        }

        .page-break {
            page-break-before: always;
        }
    </style>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PDF</title>
</head>

<body>
<header>
    <table class="table">
        <tr>
            <td><img src="{{ URL::to('/assets/img/header2.png') }}" height="60" width="740"></td>
        </tr>
    </table>
</header>

<footer>
    <table class="table">
        <tr>
            <td style="text-align: center;"><b>______________________</b></td>
            <td style="text-align: center;"><b>______________________</b></td>
        </tr>
        <tr>
            <td style="text-align: center;"><b>ENTREGADO</b></td>
            <td style="text-align: center;"><b>RECIBIDO</b></td>
        </tr>
    </table>
</footer>

<?php $i= 0;foreach ($aceptados as $values){ ?>


<main>
    <br>
    <table class="table">
        <tr>
            <td style="font-size:12px;"><b>SUBSISTEMA:</b>  {{$values[$i]['subsistema']}}</td>
            <td style="font-size:12px; text-align: right;"><b>SEPTIEMBRE 10, 2021</b></td>
        </tr>
        <tr>
            <td style="font-size:12px;"><b>CCT:</b> {{$values[$i]['cct']}}</td>
            <td></td>
        </tr>
        <tr>
            <td style="font-size:12px;"><b>ESCUELA:</b></td>
            <td></td>

        </tr>
        <tr>
            <td style="font-size:12px;">{{$values[$i]['nombre_cct']}}</td>
            <td></td>
        </tr>
    </table>
    <table class="table">
        <thead>
        <tr>
            <th style="font-size:12px;">Consec</th>
            <th style="font-size:12px;">Clave Registro</th>
            <th style="font-size:12px;">Ap. Paterno</th>
            <th style="font-size:12px;">Ap. Materno</th>
            <th style="font-size:12px;">Nombre</th>
        </tr>
        </thead>
        <tbody>
        <?php $i2 = 1; foreach($values as $item){ ?>
        <tr>
            <td style="font-size:10px;">{{$i2}}</td>
            <td style="font-size:10px;">{{$item['folio']}}</td>
            <td style="font-size:10px;">{{$item['paterno']}}</td>
            <td style="font-size:10px;">{{$item['materno']}}</td>
            <td style="font-size:10px;">{{$item['nombre']}}</td>
        </tr>
        <?php $i2++;}?>
        </tbody >
    </table>
    <div class="page-break"></div>
    <?php  $i++;} ?>
</main>
</body>
</html>

