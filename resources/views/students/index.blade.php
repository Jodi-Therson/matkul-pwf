<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Mahasiswa ter-Ganteng Di INSTIKI</title>
</head>

<body>
    <h1>List Mahasiswa ter-Ganteng Di INSTIKI</h1>

    <ul>
        @foreach ($students as $student)
        <li>{{ $student['name'] }}</li>
        @endforeach
    </ul>
    
</body>

</html>