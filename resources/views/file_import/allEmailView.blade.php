<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- {{ $allMail }} --}}
    <table>
        <thead>
            <th>#</th>
            <th>name</th>
            <th>email</th>
        </thead>
        <tbody>
            @forelse ($allMail as $key=> $allMails)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$allMails->name}}</td>
                    <td>{{$allMails->email}}</td>

                </tr>
            @empty
            <h1>no </h1>
            @endforelse
        </tbody>
    </table>
</body>

</html>
