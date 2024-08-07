@extends('admin.layouts.master')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            <h1 class="fs-2"> Hello {{ Auth::user()->name }} </h1>
            <h1 class="fs-3"> {{ session('success') }}</h1>
        </div>
    @endif


    <div class="list-new">
        <div class="filter-new ml-5 ">
            <form action="{{route('filter-new')}}" method="get">
                @csrf
            <div class="row-title row mt-2">

                <h1 class="">Filter New</h1>
            </div>
            <div class="row">
                <div class="col-lg-5 mt-4">
                    <input type="text" name="title"  class="form-control">
                </div>
                {{-- <div class="mt-4">
                    <label for=""> Create at</label>
                    <input name="start_date" type="date"  id="">
                 </div>
              
               
                 <div class="mt-4">
                    <label for=""> Create at</label>
                    <input name="end_date" type="date"  id="">
                 </div> --}}
               
                <div class="col-lg-2 mt-4">
                    <button class="btn btn-success">submit</button>
                </div>
            </div>
        </form>
        </div>
            
        
        <div class="col-lg-12">


            @if ($news->isEmpty())
                <div class="text-center ">
                    <h1 class=" text-danger"> There are no new</h1>
                </div>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"> Posted User </th>
                            <th scope="col">Title, Thumbnail </th>
                            <th scope="col">Content </th>
                            <th scope="col"> Releashed day </th>
                            <th scope="col"> Updated time </th>
                            <th scope="col"> ACT</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 1; $i < count($news); $i++)
                            <tr>
                                <th scope="row">User</th>
                                <td class="col-2">
                                    <div>
                                        <div>
                                            <div>
                                                <p class="" style="font-size: 20px"> {{ $news[$i]->title }}</p>
                                            </div>
                                            <div class="img-wrapper">
                                                <img width="100px" src="{{ Storage::url($news[$i]->thumbnail) }}"
                                                    alt="Thumbnail" width="100">
                                            </div>
                                        </div>

                                    </div>
                                </td>
                                <td> {{ Str::limit($news[$i]->content, 400) }}</td>
                                <td>{{ $news[$i]->created_at }}</td>
                                <td> This post hasn't been updated</td>

                                <td>

                                    <form action="{{ route('delete-new', ['id' => $news[$i]->id]) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger p-3">Delete</button>
                                    </form>
                                    <a class="btn btn-warning rounded-full mt-2 " style="padding: 14px"
                                        href="{{ route('edit-new', ['id' => $news[$i]->id]) }}">Update</a>
                                </td>

                            </tr>
                        @endfor
                    </tbody>
                </table>
            @endif
        </div>
    </div>


@endsection
