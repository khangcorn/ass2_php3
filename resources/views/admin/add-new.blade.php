@extends('admin.layouts.master')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h1 class="fs-1">ADD NEWS</h1>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mt-3">
                        <!-- The Modal -->
                        <!-- The Modal -->
                        <div id="myModal" class="modal" style="display: none; padding: 20px;">
                            <span class="close" style="float: right; cursor: pointer;">&times;</span>
                            <!-- Modal content -->
                            <div class="modal-content" style="background-color:cyan; padding: 30px">
                                <h2>Add New Category</h2>
                                <form id="categoryForm" action="{{ route('crud.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-control-label" for="categoryName">Category Name:</label>
                                        <input type="text" name="name" id="categoryName" class="name  form-control">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <div id="nameError" class="text-danger"></div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label class="form-control-label" for="categoryDescription">Category
                                            Description:</label>
                                        <textarea name="description" id="categoryDescription" class="description form-control"></textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                        <div id="descriptionError" class="text-danger"></div>
                                    </div>
                                    <div class="text-center mt-4">
                                        <button type="submit" class="add_category btn btn-success">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body card-block">
                <form action="{{ url('/store-new') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Title</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" name="news[title]" id="text-input" placeholder="Text"
                                class="form-control">
                            @error('news.title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class="form-control-label">Content</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="news[content]" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                            @error('news.content')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class="form-control-label">Categories</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="news[categories_id]" id="select" class="form-control">
                                @if ($categories->isNotEmpty())
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                @else
                                    <option disabled>No categories available</option>
                                @endif
                            </select>
                            @error('news.categories_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <a id="myBtn" class="btn btn-primary text-white mt-3">Create A New Category</a>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="col col-md-3">
                            <label for="inputGroupFile02" class="form-control-label">Image</label>
                        </div>
                        <input name="news[thumbnail]" type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        @error('news.thumbnail')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary p-3">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection
