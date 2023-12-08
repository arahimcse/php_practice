<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 10</title>
</head>
<body>
    <h1>Welcome to the laravel View pag</h1>
    
    {{-- <h1>Location= {{$name}}</h1> --}}
    {{-- <h1>country= {{$country}}</h1> --}}
    {{-- <h1>population= {{$population}}</h1> --}}
    {{-- <h1>Time= {{$timezone}}</h1> --}}

    <h1>location= {{$location['name'] }}</h1>
    <h1>location= {{$location['country'] }}</h1>
    <h1>location= {{$location['population'] }}</h1>
    <h1>location= {{$location['timezone'] }}</h1>
    <h1>location= {{$seasons['0'] }}</h1>
    <h1>location= {{$seasons['1'] }}</h1>
</body>
</html>
