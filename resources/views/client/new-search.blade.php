@extends('client.layout.master')
@section('content')
<div class="container mt-5">
    <div class="new-wrapper p-5">
        @if ($newSearch->isEmpty())
            <div class="text-center">
                <h1 class="font-bold text-4xl text-red-500">No Result</h1>
            </div>
        @else
            @foreach ($newSearch as $ns)
                <h1 class="font-bold text-3xl">
                    <a href="{{'detail-new/'. $ns->id}}" class="font-bold text-3xl">{{ $ns->title }}</a>
                </h1>
                <div class="new-content">
                    <div class="pt-5">
                        <p class="line-clamp-3 font-base">
                            <a href="{{'detail-new/'. $ns->id}}" class="font-base pt-5">{{ $ns->content }}</a>
                        </p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <div class="mt-4">
        {{ $newSearch->links() }}
    </div>
</div>
@endsection
