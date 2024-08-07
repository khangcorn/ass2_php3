@extends('admin.layouts.master')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            <h1 class="fs-2"> Hello {{ Auth::user()->name }} </h1>
            <h1 class="fs-3"> {{ session('success') }}</h1>
        </div>
    @endif


    <div class="list-user">
        <div class="filter-new ml-5">
            <form action="{{ route('filter-user') }}" method="get">
                @csrf
                <div class="row-title row mt-2">
                    <h1 class="">Filter Users</h1>
                </div>
                <div class="row">
                    <div class="col-lg-5 mt-4">
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="mt-4">
                        <label for="start_date">Created at (Start Date)</label>
                        <input name="start_date" type="date" id="start_date">
                    </div>
                    <div class="mt-4">
                        <label for="end_date">Created at (End Date)</label>
                        <input name="end_date" type="date" id="end_date">
                    </div>
                    <div class="col-lg-2 mt-4">
                        <button class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-12">


            {{-- @if (!$userFilter)
                <div class="text-center ">
                    <h1 class=" text-danger"> There are no user</h1>
                </div>
            @else --}}
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"> id </th>
                            <th scope="col"> Name, Avata </th>
                            <th scope="col"> Email </th>

                            <th scope="col"> Type </th>

                            <th scope="col"> Releashed day </th>
                            <th scope="col"> ACT</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 1; $i < count($users); $i++)
                            <tr>
                                <th scope="row">{{ $users[$i]->id }}</th>
                                <td class="col-2">
                                    <div>
                                        <div>
                                            <div>
                                                <p class="" style="font-size: 20px"> {{ $users[$i]->name }}</p>
                                            </div>
                                            <div class="img-wrapper">
                                                @if ($users[$i]->image == null)
                                                    <div> <span class=""> User don't have mage</span></div>
                                                @else
                                                    <img width="100px" src="{{ Storage::url($users[$i]->image) }}"
                                                        alt="image" width="100">
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                </td>
                                <td>{{ $users[$i]->email }}</td>
                                <td>
                                    @php
                                  
                           
                                        $userRole = $roles->firstWhere('id', $users[$i]->role_id);
                                       
                                    @endphp
                                    
                                    @if ($userRole)
                                       <p> {{ $userRole->roles }}</p>
                                    @else
                                        No Role Assigned
                                    @endif
                                </td>

                                <td>{{ $users[$i]->created_at }}</td>

                                <td>

                                    <form action="{{ route('delete-user', ['id' => $users[$i]->id]) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger p-3">Delete</button>
                                    </form>
                                    <a class="btn btn-warning rounded-full mt-2 " style="padding: 14px"
                                        href="{{ route('update-user', ['id' => $users[$i]->id]) }}">Update</a>
                                </td>

                            </tr>
                        @endfor
                    </tbody>
                </table>
            {{-- @endif --}}
        </div>
    </div>


@endsection
