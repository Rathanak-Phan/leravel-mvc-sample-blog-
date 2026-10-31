@extends('layout')

@section('content')
    <div class="container pt-5">
        <div class="col-4 mx-auto d-flex align-items-center gap-3 my-3 pt-5">
            <div class="rounded-circle bg-danger overflow-hidden" style="width: 50px !important; height: 50px !important;">
                <img class="w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ3x3wGBAyHbW8eWkg_y10IydiWAeOu6HgAWuBR412EwA&s=10" alt="">
            </div>

            <input type="text" placeholder="What's on your minh, Bro?" class="form-control">

            <button class="btn btn-success">Post</button>
        </div>

        {{-- Selection --}}
        <div class="col-4 mx-auto">
            <div class="row">
                <div class="col-12 p-2 border border-gray-400 rounded-lg">
                    <div class="d-flex justify-content-end">
                        <button class="border-0 bg-none">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </button>
                    </div>
                    <img class="w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQk7KeQCs-74GCLXaSWE7T2XbOU_iF3mFkdSnQbvj0cKQ&s=10" alt="">

                    <div class="p-2">
                        <h2>Title</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad alias voluptatem exercitationem.</p>
                    </div>
                </div>

                <div class="col-12 p-2 border border-gray-400 rounded-lg">
                    <div class="d-flex justify-content-end">
                        <button class="border-0 bg-none">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </button>
                    </div>
                    <img class="w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQk7KeQCs-74GCLXaSWE7T2XbOU_iF3mFkdSnQbvj0cKQ&s=10" alt="">

                    <div class="p-2">
                        <h2>Title</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad alias voluptatem exercitationem.</p>
                    </div>
                </div>

                <div class="col-12 p-2 border border-gray-400 rounded-lg">
                    <div class="d-flex justify-content-end">
                        <button class="border-0 bg-none">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </button>
                    </div>
                    <img class="w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQk7KeQCs-74GCLXaSWE7T2XbOU_iF3mFkdSnQbvj0cKQ&s=10" alt="">

                    <div class="p-2">
                        <h2>Title</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad alias voluptatem exercitationem.</p>
                    </div>
                </div>

                <div class="col-12 p-2 border border-gray-400 rounded-lg">
                    <div class="d-flex justify-content-end">
                        <button class="border-0 bg-none">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </button>
                    </div>
                    <img class="w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQk7KeQCs-74GCLXaSWE7T2XbOU_iF3mFkdSnQbvj0cKQ&s=10" alt="">

                    <div class="p-2">
                        <h2>Title</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad alias voluptatem exercitationem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
