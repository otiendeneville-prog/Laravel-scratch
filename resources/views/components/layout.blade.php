@props([
    'title' => 'laracast'
])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>

<body>

    <nav>
        <a href="/">Home</a>
        <a href="/about">About Us</a>
        <a href="/services">Services</a>
        <a href="/contact">Contact Us</a>
    </nav>
    <main>

        <style>
            max-width-400{
                max-width: 400px;
                margin: auto;

            }
            .card{
                background: #e3e3e3;
                padding:20px 20px;
            }
        </style>
        {{ $slot }}
    </main>
</body>

</html>
