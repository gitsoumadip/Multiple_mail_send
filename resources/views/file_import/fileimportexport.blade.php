<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="{{ route('import') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <input type="file" name="importfile" id="importfile">
                <br><br>
                <input type="submit" value="submit" name="submit">
            </div>
        </form>
        <br><br>
        <div>
            <a href="{{route('export')}}">Export File</a>
        </div>
    </div>
</body>

</html>
