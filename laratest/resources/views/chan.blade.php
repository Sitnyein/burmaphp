<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ url('/') }}">welcom blade</a>
    <a href="{{url('/chankhine')}}">list </a>
    {{ url('chan') }}
    {{ url('welcome')}}
     <header>
        <h1>chankhine</h1>
     </header>
     <div>
        {{-- {{ }} xss attack protect  --}}
        <div>this is body tag  and writer is {{$name."  he is a".$job}}</div>
     </div>
     <footer>
        this is footer
     </footer>
</body>
</html>
