@extends('admin.layouts.master')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h1 class="fs-1">ADD user</h1>
            </div>

           
            <div class="card-body card-block">
                <form action="{{ route('update-store', [$user->id]) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                   @method('PUT')
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Name</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" name="name"  value="{{ old('name', $user->name) }}"  id="text-input" placeholder="Text"
                                class="form-control">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class="form-control-label">Email</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="email" name="email" id="text-input"  value="{{ old('email', $user->email) }}"  placeholder="Text"
                                class="form-control">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                 
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input"  class="form-control-label">Password</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" name="password" id="text-input" value="{{ old('password', $user->password) }}"  placeholder="Text"
                                class="form-control">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span> 
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class="form-control-label">Role</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="role_id" id="select" class="form-control">
                                <option value="null" >  Please Select </option>
                              
                                @if ($roles->isNotEmpty())
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" 
                                        {{ $user->role_id == $role->id ? 'selected' : '' }}>
                                        {{ $role->roles }}
                                    </option>
                                @endforeach
                            @endif
                            
                            </select>
                            @error('role_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="col col-md-3">
                            <label for="inputGroupFile02" class="form-control-label">Image</label>
                        </div>
                        <input name="image" type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        @error('image')
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
