@extends('admin.layouts.master')

@section('content')
    <div class="col-lg-12">

        @if (session('success'))
        <div class="alert alert-success">
            <h1 class="fs-2"> Hello {{Auth::user()->name}} </h1>
            <h1 class="fs-3"> {{session('success')}}</h1>
             </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h1 class="fs-1">Update News</h1>
            </div>
            <div class="card-body card-block">
                @if ($news)
                    <form action="{{ url('update/' . $news->id) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        @method('PUT')
                     

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class="form-control-label">Title</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="title" value="{{ old('title', $news->title) }}" id="text-input" placeholder="Text" class="form-control">

                                <small class="form-text text-muted">This is a help text</small>
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="textarea-input" class="form-control-label">Content</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <textarea name="content" id="textarea-input" rows="9" placeholder="Content..." class="form-control">{{ old('content', $news->content) }}</textarea>
                                @error('content')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="select" class="form-control-label">Categories</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select name="categories_id" id="select" class="form-control">
                                    <option value="0">Please select</option>
                                    <!-- Replace with dynamic categories if available -->
                                    <option value="1" {{ $news->categories_id == 1 ? 'selected' : '' }}>Option #1</option>
                                    <option value="2" {{ $news->categories_id == 2 ? 'selected' : '' }}>Option #2</option>
                                    <option value="3" {{ $news->categories_id == 3 ? 'selected' : '' }}>Option #3</option>
                                </select>
                                @error('categories_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="col col-md-3">
                                <label for="inputGroupFile02" class="form-control-label">Thumbnail </label>
                            </div>
                             <div class="">
                                @if ($news->thumbnail && Storage::exists($news->thumbnail))
                                    
                              
                                  <img src="{{Storage::url($news->thumbnail)}}" alt="thumbnail" width="100" srcset="">
                                  @else
                                  <span class="fs-3"> THERE ISN'T ANY THUMBNAIL SELECTED </span>
                                  @endif
                             </div>
                            
                            <input name="thumbnail" type="file" class="form-control" id="inputGroupFile02">


                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                            @error('thumbnail')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary p-3">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                        </div>
                    </form>
                @else
                    <p>No news item found.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
