<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head> 
<body>
    <table> 
        @foreach ($groupedData as $key => $group)
        
            <thead>
                <tr style="background-color: #B8CCE4; border: 1px solid black; font-weight:700">
                    <td style="font-weight:700" colspan="3">{{$key}}</td>
                </tr>
                <tr style="background-color: #B8CCE4; border: 1px solid black; font-weight:700">
                    <td style="background-color: #B8CCE4; border: 1px solid black; font-weight:700">Tanggal</td>
                    <td style="background-color: #B8CCE4; border: 1px solid black; font-weight:700">Panen Masuk</td>
                    <td style="background-color: #B8CCE4; border: 1px solid black; font-weight:700">TBS Diolah</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($group as $item)
                    
                <tr style="border: 1px solid black;">
                    <td style="border: 1px solid black;">{{ \Carbon\Carbon::parse($item->tanggal)->format('d/m/Y') }}</td>
                    <td style="border: 1px solid black;">{{$item->panen_masuk}}</td>
                    <td style="border: 1px solid black;">{{$item->tbs_diolah}}</td>
                </tr>
                @endforeach
                <tr style="">
                    <td style=""> </td>
                    <td style=""> </td>
                    <td style=""> </td>
                </tr>
            </tbody>
      
    @endforeach
    </table>
</body>

</html>
