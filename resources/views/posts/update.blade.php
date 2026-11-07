@extends('layout')

@section('content')
    <div class="pt-5">
        <form action="{{ route('update', $post->id) }}" method="POST" enctype="multipart/form-data" class="pt-5 col-4 mx-auto">
            @csrf
            @method('PUT')

            <h2 class="text-center my-5">Update post</h2>

            <div class="my-3">
                <label for="" class="form-label">Title</label>
                <input type="text" value="{{ $post->title }}" name="title" class="form-control">
            </div>

            <div class="my-3">
                <label for="" class="form-label">Description</label>
                <input type="text" value="{{ $post->description }}" name="description" class="form-control">
            </div>

            <div class="my-3">
                <label for="update_image" class="form-label">Upload image
                    <img class="w-100" src="{{ asset('storage/' . $post->image) }}" alt="">
                </label>
                <input type="file" name="image" id="update_image" hidden class="form-control">
            </div>

            <div class="my-3">
                <label for="status" class="form-label">Status</label>

                <select name="status" id="status" class="form-select">
                    <option value="published"
                        {{ $post->status == 'published' ? 'selected' : '' }}>
                        Published
                    </option>

                    <option value="draft"
                        {{ $post->status == 'draft' ? 'selected' : '' }}>
                        Draft
                    </option>
                </select>
            </div>

            <div class="modal-footer d-flex gap-3">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>

@endsection
