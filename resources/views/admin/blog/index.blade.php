@extends('layouts.app')

@section('content')


<div class="admin-blog-wrapper section-entry">
    <div class="container">
        <h1>Blog Section</h1>

        <a href="{{ route('blog.create') }}" class="btn btn-primary mb-3">Create a Blog Post</a>

        <div class="row">
            @forelse ($blogs as $blog)
                <div class="col-md-4 mt-4">
                    <div class="card h-100">
                     @if($blog->featured_image && Storage::disk('public')->exists('blog/' . $blog->featured_image))
                                 <img src="{{ asset('storage/blog/' . $blog->featured_image) }}" class="card-img-top" alt="Uploaded Image">
                        @else
                            <img src="{{ asset('images/default.jpg') }}" class="card-img-top" alt="Default Image">
                        @endif

                        <div class="card-body">
                            <h4 class="card-title">{{ $blog->post_title }}</h4>
                            <p class="card-text">{!! Str::words(strip_tags($blog->blog_post), 20, '...') !!}</p>
                        </div>

                        <div class="card-footer d-flex justify-content-between">
                            <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('blog.destroy', $blog->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 mt-4">
                    <div class="alert alert-info">No posts found.</div>
                </div>
            @endforelse
        </div>
    </div>
</div>


@endsection