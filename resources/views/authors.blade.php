<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author nih</title>
</head>
<body>
    <h1>Hello World</h1>
    <p>Selamat Datang di halaman author!</p>

    @foreach ($authors as $author)
        <ul>
            <li>{{ $author['name'] }}</li>
            <li>{{ $author['bio'] }}</li>
            <li>{{ $author['motto'] }}</li>
        </ul>
    @endforeach
    
</body>
</html>