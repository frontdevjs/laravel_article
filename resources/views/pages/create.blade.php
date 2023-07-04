@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="title mt-5">Create your article</h1>
        <div class="form-group mt-5" >
            <form action="{{ route('article.add') }}" method="post">
                @csrf
                <div>
                    <label for="author" class="mt-2">Author name</label>
                    <input
                        type="text"
                        class="form-control"
                        style="width: 600px;"
                        placeholder="Enter author name"
                        name="author"
                        id="author"

                    >
                </div>

                <div>
                    <label for="article" class="mt-2">Article name</label>
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Enter article name"
                        name="article"
                        id="article"
                        style="width: 600px;"
                    >
                </div>

                <div>
                    <label for="content" class="mt-2">Enter article</label>
                    <textarea
                        class="form-control"
                        id="content"
                        name="content"
                        style="height: 300px;"
                        rows="3"
                        placeholder="Describe here..."
                    ></textarea>
                </div>

                <div>
                    <label for="image" class="mt-2">Choose image</label>
                    <input
                        type="file"
                        class="form-control"
                        placeholder="Enter article name"
                        name="image"
                        id="image"
                        style="width: 600px;"
                    >
                </div>
                <div class="form-group-buttons mt-5">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
    </div>


@endsection
