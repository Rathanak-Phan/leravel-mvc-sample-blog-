@extends('layout')

@section('content')
    <div class="container pt-5">
        <div class="col-4 mx-auto d-flex align-items-center gap-3 my-3 pt-5">
            <div class="rounded-circle bg-danger overflow-hidden" style="width: 50px !important; height: 50px !important;">
                <img class="w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3x3wGBAyHbW8eWkg_y10IydiWAeOu6HgAWuBR412EwA&s=10" alt="">
            </div>

            <input type="text" placeholder="What's on your minh, Bro?" class="form-control">

            <button
                data-bs-toggle="modal"
                data-bs-target="#post"
                class="btn btn-success">Post</button>
        </div>

        {{-- Selection --}}
        <div class="col-4 mx-auto">
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-12 p-2 border border-gray-400 rounded-lg">
                        <div class="d-flex justify-content-end">
                            <button class="border-0 bg-none">
                                <form action="{{ route('edit', $post->id) }}">
                                    <button type="submit">
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                </form>
                            </button>
                        </div>
                        <img class="w-100" src="{{ asset('storage/' . $post->image) }}" alt="">

                        <div class="p-2">
                            <h2>{{ $post->title }}</h2>
                            <p>{{ $post->description }}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    {{-- Post modal --}}
    <div class="modal" id="post" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('post') }}" method="POST" enctype="multipart/form-data">
                    <div class="my-3">
                        <label for="" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>

                    <div class="my-3">
                        <label for="" class="form-label">Description</label>
                        <input type="text" name="description" class="form-control">
                    </div>

                    <div class="my-3">
                        <label for="" class="form-label">Title</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="my-3">
                        <label for="" class="form-label">Status</label>
                        <select name="status" id="" class="form-select">
                            <option value="" selected disabled>Select</option>
                            <option value="published">Published</option>
                            <option value="draft">Draft</option>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Post</button>
                    </div>
                </form>
            </div>

            </div>
        </div>
    </div>

@endsection
