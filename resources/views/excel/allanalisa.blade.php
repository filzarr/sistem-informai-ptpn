<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Analisa CPO Produksi</title>
</head>

<body>

    <table style="word-wrap:break-word;">
        <thead>


            <tr>
                <th style="word-wrap:break-word;word-wrap:break-word;text-align:center; font-weight:700">Analysed</th>
                <th style="word-wrap:break-word;word-wrap:break-word;text-align:center; font-weight:700">VM(%)</th>
                <th style="word-wrap:break-word;word-wrap:break-word;text-align:center; font-weight:700">NOS(%)</th>
                <th style="word-wrap:break-word;word-wrap:break-word;text-align:center; font-weight:700">FFA(%)</th>
                <th style="word-wrap:break-word;word-wrap:break-word;text-align:center; font-weight:700">DOBI(%)</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td style="word-wrap:break-word;word-wrap:break-word;text-align:center;">
                        {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $item->waktu_analisis)->format('d-m-Y H:i:s') }} WIB
                    </td>
                    <td style="word-wrap:break-word;word-wrap:break-word;text-align:center;">{{$item->vm}}</td>
                    <td style="word-wrap:break-word;word-wrap:break-word;text-align:center;">{{$item->nos}}</td>
                    <td style="word-wrap:break-word;word-wrap:break-word;text-align:center;">{{$item->ffa}}</td>
                    <td style="word-wrap:break-word;word-wrap:break-word;text-align:center;">{{$item->dobi}}</td>
                </tr>
            @endforeach

        </tbody>
    </table> 
</body>

</html>
