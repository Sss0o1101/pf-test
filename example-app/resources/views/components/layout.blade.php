{{-- <h1>Hello World!!!</h1> --}}

{{-- {{ $slot }} --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ url('style.css') }}">
</head>
<body>

    <div class="container">

        {{ $slot }}

    </div>

</body>
</html>

