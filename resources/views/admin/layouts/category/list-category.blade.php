@extends('admin.layouts.master')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            <h1 class="fs-2"> Hello {{ Auth::user()->name }} </h1>
            <h1 class="fs-3"> {{ session('success') }}</h1>
        </div>
    @endif


    <div class="list-category">
        <div class="filter-category ml-5 ">
            <form action="{{ route('filter-category') }}" method="get">
                @csrf
                <div class="row-title row mt-2">

                    <h1 class="">Filter Category</h1>
                </div>
                <div class="row">
                    <div class="col-lg-5 mt-4">
                        <input type="text" name="title" class="form-control">
                    </div>
                    {{-- <div class="mt-4">
                        <label for=""> Create at</label>
                        <input name="start_date" type="date" id="">
                    </div>


                    <div class="mt-4">
                        <label for=""> Create at</label>
                        <input name="end_date" type="date" id="">
                    </div> --}}

                    <div class="col-lg-2 mt-4">
                        <button class="btn btn-success">submit</button>
                    </div>
                </div>
            </form>
        </div>


        <div class="col-lg-12">


            @if ($categories->isEmpty())
                <div class="text-center ">
                    <h1 class=" text-danger"> There are no category</h1>
                </div>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"> id </th>
                            <th scope="col"> Name </th>
                            <th scope="col"> Description </th>
                      

                            <th scope="col"> Releashed day </th>
                            <th scope="col"> ACT</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 1; $i < count($categories); $i++)
                            <tr>
                                <th scope="row">{{ $categories[$i]->id }}</th>
                                <td class="col-2">
                                    <div>
                                        <div>
                                            <div>
                                                <p class="" style="font-size: 20px"> {{ $categories[$i]->name }}</p>
                                            </div>
                                          
                                        </div>

                                    </div>
                                </td>
                               
                                <td>{{ $categories[$i]->description }}</td>
                               

                                <td>{{ $categories[$i]->created_at }}</td>

                                <td>

                                    <form action="{{ route('delete-category', ['id' => $categories[$i]->id]) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger p-3">Delete</button>
                                    </form>
                                    <a class="btn btn-warning rounded-full mt-2 " style="padding: 14px"
                                        href="{{ route('update-category', ['id' => $categories[$i]->id]) }}">Update</a>
                                </td>

                            </tr>
                        @endfor
                    </tbody>
                </table>
            @endif
        </div>
    </div>


@endsection
