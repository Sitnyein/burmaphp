@extends('chan')
@section("chankhine")
<h1>hello world {{ $person }}</h1>
@if (count($fruit) === 1)
    I have one record!
@elseif (count($fruit) > 1)
    I have multiple records!
@else
    I don't have any records!
@endif

@foreach ($fruit as $f )
<p>this fruit is {{$f}}</p>
@endforeach
@endsection
@push("jschan")
<script>
    document.getElementById("demo").innerHTML = "Hello World! this is javascript";
 </script>
@endpush
