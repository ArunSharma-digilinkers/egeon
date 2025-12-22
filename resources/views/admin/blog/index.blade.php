@extends('layouts.admin')

@section('content')


<div class="admin-blog-wrapper section-entry">
    <div class="container">
        <h1>Blog Section</h1>

        <a href="{{ route('blog.create') }}" class="btn btn-primary mb-3">Create a Blog Post</a>

        <div class="row">
            @forelse ($blogs as $blog)
            <div class="col-md-4 mt-4">
                <div class="card h-100 shadow-sm border-0 blog-admin-card">

                    {{-- Blog Image --}}
                    @if($blog->featured_image &&
                    \Illuminate\Support\Facades\Storage::disk('public')->exists('blog/'.$blog->featured_image))
                    <img src="{{ asset('storage/blog/'.$blog->featured_image) }}" class="card-img-top blog-img"
                        alt="{{ $blog->post_title }}">
                    @else
                    <img src="{{ asset('images/default.jpg') }}" class="card-img-top blog-img" alt="Default Image">
                    @endif

                    {{-- Card Body --}}
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold mb-2">
                            {{ $blog->post_title }}
                        </h5>

                        <p class="card-text text-muted mb-3">
                            {!! \Illuminate\Support\Str::words(strip_tags($blog->blog_post), 20, '...') !!}
                        </p>

                        <div class="mt-auto d-flex justify-content-between">
                            <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-sm btn-outline-warning">
                                ✏️ Edit
                            </a>

                            <form action="{{ route('blog.destroy', $blog->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this post?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                    🗑 Delete
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="alert alert-info text-center">
                    No blog posts found.
                </div>
            </div>
            @endforelse

        </div>
    </div>
</div>


@endsection