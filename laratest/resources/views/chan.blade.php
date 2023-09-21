<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
     .cover{
        object-fit: cover;
        object-position: center;
        position:absolute;
        z-index: -1;
        width:100%; height:100%;
    }
</style>
<body>
    @if(session('job'))
    <h1>session has name</h1>
    @else
    <h1>there is no session</h1>
    @endif
    {{-- <h1>{{$compactpost}}</h1> --}}
 <div>
    <img src="{{ asset('girl.jpg') }}" alt="" class="cover">
    @yield('header')
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
        {{-- <div>this is body tag  and writer is {{$name."  he is a".$job}}</div> --}}
        <div>this is body tag</div>
     </div>

     <footer>
        this is footer @yield('chankhine')
     </footer>
     <form action="{{url('postmethod')}}" method="post">
        {{-- @csrf --}} {{csrf_field()}}
        <input type="text" name="name" required>
        <input type="email" name="email" required>
        <button type="submit">click</button>
    </form>
     <p id="demo"></p>
     @stack("jschan")
 </div>
</body>
</html>
