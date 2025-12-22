@extends('layouts.admin')

@section('content')


<div class="admin-blog-wrapper section-entry">
    <div class="container">
        <h1>Edit Blog Post</h1>
        <form action="{{ route('blog.update', $blog->id) }}" class="post-form" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Post Title</label>
                        <input type='text' class="form-control" name="post_title" value="{{ $blog->post_title }}"/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                          <img src="{{ asset('storage/blog/' . $blog->featured_image) }}" class="card-img-top" alt="Uploaded Image" style="width:200px">
                        <label class="form-label">Featured Image</label>
                        <input type='file' class="form-control" name="featured_image" value="{{ $blog->featured_image }}"/>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Blog Post</label>
                        <textarea class="form-control" name="blog_post" id="editor" rows="6">
                            {{ $blog->blog_post }}
                        </textarea>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type='text' class="form-control" name="title" value="{{ $blog->title }}"/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type='text' class="form-control" name="description" value="{{ $blog->description }}"/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        <label class="form-label">Tags</label>
                        <input type='text' class="form-control" name="tags" value="{{ $blog->tags }}"/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <input type='text' class="form-control" name="category" value="{{ $blog->category }}"/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        <label class="form-label">Author</label>
                        <input type='text' class="form-control" name="author" value="{{ $blog->author }}"/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        <label class="form-label">Slug</label>
                        <input type='text' class="form-control" name="slug" value="{{ $blog->slug }}"/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        <br>
                        <div class="save-button-wrap">
                            <button class="btn c-btn">Edit Blog Post</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection