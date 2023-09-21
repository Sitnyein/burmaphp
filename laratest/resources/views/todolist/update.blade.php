@extends('todolist.master')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-6 offset-3 ">
            <div class="my-3">
                <a href="" class="text-decoration-none text-black">
                    <i class="fa-solid fa-arrow-left"></i>back</a>
            </div>
            {{-- <h3>{{ $mage[0]['title'] }}</h3>
            <p class="text-muted shadow-sm p-3">{{ $mage[0]['description'] }}</p> --}}
            <form action="{{route('update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="postId" value={{ $edit['id'] }} >

                <label for="">Title</label>
                <input type="text" name="postTitle"
                    class="form-control my-3 "
                    value=" {{$edit['title']}} ">



                <label for="">Description</label>
                <textarea name="PostD" cols="30" rows="10" class="form-control "> {{ $edit['description'] }}
                </textarea>


                <div>
                    @if ($edit['image'] == null)
                        <img src="{{ asset('girl.jpg') }} " class="img-thumbnail mt-4 shadow-sm">
                     @else
                     <h1>this is image</h1>
                     @endif
                </div>

                <input type="file" name="postimage"
                    class="form-control mb-3 ">


                <label for="">Price</label> <input type="number" name="postFee" class=" form-control my-1 "
                    value="{{ old('postFee', $edit['fee']) }}">

                <label for="">Address</label> <input type="text" name="postAddress"
                    class=" form-control  my-1  " value="{{ old('postAddress', $edit['address']) }}">

                <label for="">Rating</label> <input type="text" name="postrate" class=" form-control my-1  "
                    value="{{ old('postrate', $edit['rating']) }}">


                <input type="submit" value="update" class="btn bg-dark float-end text-white my-3">
            </form>
        </div>
    </div>

</div>

@endsection