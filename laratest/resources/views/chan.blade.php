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
    {{-- <a href="{{url('chan/koko/sitnyein/testing')}}">testing</a> --}}
     <a href="{{route('coco')}}">test</a>
     <a href="{{route('ser')}}">service</a>
     {{-- <a href="{{url('add/10/20')}}">add</a> --}}
     <a href="{{route('name',[5,5])}}">adds</a>
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
