@extends('todolist.master')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-6 offset-3 ">
                <div class="my-2">
                    <a href="{{ route('custom') }}" class="text-decoration-none text-black"> <i
                            class="fa-solid fa-arrow-left"></i>back</a>
                </div>
                <h3>{{ $mage['title'] }}</h3>
                <div class="d-flex">
                    <div class="btn btn-sm bg-dark text-white me-2 my-3">
                        <i class="fa-solid fa-hand-holding-dollar text-warning"></i> {{ $mage['fee'] }}
                    </div>
                    <div class="btn btn-sm bg-dark text-white me-2 my-3">
                        <i class="fa-solid fa-location-dot text-danger "></i> {{ $mage['address'] }}
                    </div>
                    <div class="btn btn-sm bg-dark text-white me-2 my-3">
                        <span> <i class="fa-solid fa-star text-success"> </i> </span>
                        {{ $mage['rating'] }}
                    </div>
                    <div class="btn btn-sm bg-dark text-white me-2 my-3">
                        <span> <i class="fa-regular fa-clock text-warning"> </i> </span>
                        {{-- {{ $mage['created_at']->format('h:m:s:A') }} --}}
                    </div>
                    <div class="btn btn-sm bg-dark text-white me-2 my-3">
                        <span> <i class="fa-regular fa-calendar text-primary"></i> </span>
                        {{ $mage->created_at->format('d-F-y') }}
                    </div>

                </div>
                @if ($mage['image'] == null)
                    <img src="{{ asset('batman.jpg') }} " class="img-thumbnail my-4 shadow-sm">
                @else
                    <img src="{{ asset('storage/' . $mage['image']) }} " class="img-thumbnail my-4 shadow-sm">
                @endif

                <p class="text-muted  p-2">{{ $mage['description'] }}</p>

            </div>
        </div>
        <div class="row my-2">
            <div class="col-3 offset-8 ">
                <a href="{{route('updatepage',$mage['id'])}}">
                    <button class="btn bg-dark text-white">Edit</button>
                </a>
            </div>
        </div>
    </div>

@endsection
