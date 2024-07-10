@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h1 class="display-1">Create Article</h1>
    <form method="POST" action="/articles">
        @csrf <!-- Include this for CSRF protection in Laravel -->
        <div class="form-group mb-4">
            <label for="title">Article Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter article title" required>
        </div>
        <div class="form-group">
            <label for="body">Article Body</label>
            <textarea class="form-control" id="body" name="body" rows="5" placeholder="Enter article body" required></textarea>
        </div>
        <button type="submit" class="btn btn-secondary mt-4 w-100">Submit article anonymously</button>
    </form>
</div>
@endsection