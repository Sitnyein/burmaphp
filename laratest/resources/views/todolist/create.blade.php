@extends('todolist.master')

@section('content')
    {{-- <img src="{{asset('spider.jpg')}}" class="cover"> --}}

    <div class="container">
        <div class="row mt-2">
            <div class="col-4 ">
                <div class="p-2">
                    @if (session('insertSuccess'))
                        <div class="alert-message">
                            <div class="alert alert-Success alert-dismissible fade show" role="alert">
                                <strong>{{ session('insertSuccess') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    @endif

                    @if (session('updateSuccess'))
                        <div class="alert-message">
                            <div class="alert alert-Warning alert-dismissible fade show" role="alert">
                                <strong>{{ session('updateSuccess') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    @endif

                    <form action="{{ route('create') }}" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="text-group mb-3">
                            <label for="">Post Title</label>
                            <input type="text" name="postTitle"
                                class=" form-control @error('postTitle') is-invalid @enderror"
                                placeholder="Enter post Title...">
                            @error('postTitle')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="text-group mb-3">
                            <label for="">Post Description</label>
                            <textarea name="PostD" class="form-control @error('PostD') is-invalid @enderror" cols="30" rows="10"
                                placeholder="Enter post...."></textarea>
                            @error('PostD')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="text-group mb-3">
                            <label for="">Image</label>
                            <input type="file" name="postimage"
                                class="form-control @error('postimage') is-invalid @enderror" value="">
                            @error('postimage')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="text-group mb-3">
                            <label for="">Fee</label>
                            <input type="text" name="postFee"
                                class=" form-control @error('postFee') is-invalid @enderror"
                                placeholder="Enter post Fee...">
                            @error('postFee')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="text-group
                                mb-3">

                            <label for="">Address</label>
                            <input type="text" name="postAddress"
                                class=" form-control  @error('postAddress') is-invalid @enderror"
                                placeholder="Enter post Address...">
                            @error('postAddress')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="text-group
                                mb-3">
                            <label for="">Rating</label>
                            <input type="number" min="0" max="11"name="postrate"
                                class=" form-control  @error('postrate') is-invalid @enderror">

                            @error('postrate')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <input type="submit" value="create" class="btn btn-danger">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-7 ">
                <h4 class="mb-2">
                    <div class="row">
                        <div class="col-4">Total | 5 </div>
                        <div class="col-6 offset-2">
                            <form action="" method="get">
                                <div class="row">
                                    <input type="text" name="searchKey" class="form-control col"
                                        placeholder="Enter search key" value="">
                                    <button class="btn btn-outline-danger col-2 mx-1 " type="submit"> <i
                                            class="fa-brands fa-searchengin"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </h4>
                <div class="data-container">
                    {{-- @if (count($post) != 0) --}}
                    @foreach ($post as $item)
                    <div class="post p-3  mb-3 shadow-sm">
                        <div class="row">
                            <h5 class="col-6 "> {{$item['title']}}</h5>
                            <h5 class="col-5 offset-1 ">{{ $item->created_at->format('d-F-y') }}</h5>
                        </div>
                        {{-- <p class="text-muted">{{ substr($item['description'], 0, 100) }}</p> // pure php --}}
                        <p>{{ Str::words($item['description'], 20, '...') }}</p>
                        <span>
                            <small> <i class="fa-solid fa-hand-holding-dollar "></i> {{$item['fee']}}
                                Usd</span>
                        |</small>
                        <span>
                            <i class="fa-solid fa-location-dot"></i> {{$item['address']}}
                        </span>
                        <span>
                            <small> <i class="fa-solid fa-star text-success"> </i> </small>
                        </span>
                        <div class="text-end d-flex">
                            <a href="{{route('delete',$item['id'])}}" class=" my-3 mx-3">
                                <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash">forDelete</i></button>
                            </a>



                            {{-- //delete method    <form action="{{ route('delete', $item['id']) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger"><i
                                            class="fa-solid fa-trash">forDelete</i></button>
                                </form> --}}
                            <a href="{{route('read',$item['id'])}}" class="my-3">
                                <button class="btn btn-sm btn-primary"><i
                                        class="fa-solid fa-file-invoice">MoreDetails</i></button>
                            </a>

                        </div>
                    </div>
                    @endforeach
                    {{-- @else
                        <h1 class="text-danger text-center mt-3">There is no data</h1>
                    @endif --}}

                    {{--
                    @for ($i = 0; $i < count($post); $i++)
                        <div class="post p-3 shadow-sm mb-4">
                            <h5>{{ $post[$i]['title'] }}</h5>
                            <p class="text-muted">{{ $post[$i]['description'] }}</p>
                            <div class="text-end">
                                <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                                <button class="btn btn-sm btn-primary"><i class="fa-solid fa-file-invoice"></i></button>
                            </div>
                        </div>
                    @endfor --}}
                </div>
                {{-- {{ $post->appends(request()->query())->links() }} --}}
            </div>
        </div>
    </div>
@endsection
