@extends('admin.layouts.master')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h1 class="fs-1">ADD Category</h1>
            </div>

           
            <div class="card-body card-block">
                <form action="{{ url('/store-category') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" name="name" id="text-input" placeholder="Text"
                                class="form-control">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Description</label>
                        </div>
                        <div class="col-12 col-md-9">
                             <textarea name="description" class="form-control" ></textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                   
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
