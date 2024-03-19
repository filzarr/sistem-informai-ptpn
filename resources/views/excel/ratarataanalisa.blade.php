<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rata Rata Analisa</title>
</head>

<body>

    <table style="word-wrap:break-word;">
        <thead>


            <tr>
                <th style="word-wrap:break-word;word-wrap:break-word;text-align:start; font-weight:700;text-align:center;">Analysed</th>
                <th style="word-wrap:break-word;word-wrap:break-word;text-align:start; font-weight:700;text-align:center;">VM(%)</th>
                <th style="word-wrap:break-word;word-wrap:break-word;text-align:start; font-weight:700;text-align:center;">FFA(%)</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td style="word-wrap:break-word;word-wrap:break-word;text-align:center;">
                        {{ \Carbon\Carbon::createFromFormat('Y-m-d', $item->hari_analisa)->format('d-m-Y') }}&nbsp;{{$item->jam_analisa}}:00:00 WIB
                    </td>
                    <td style="word-wrap:break-word;word-wrap:break-word;text-align:center;">
                        {{$item->rata_vm}} 
                     </td>
                    <td style="word-wrap:break-word;word-wrap:break-word;text-align:center;"> 
                        {{$item->rata_ffa}}
                     </td>
                </tr>
            @endforeach

        </tbody>
    </table> 
</body>

</html>
