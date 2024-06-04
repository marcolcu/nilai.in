@extends('app')

@section('content')
    <div id="skeleton-loader" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
        <div class="animate-pulse">
            <div class="h-6 bg-gray-300 rounded w-3/4 mb-4"></div>
            <div class="h-4 bg-gray-300 rounded mb-2"></div>
            <div class="h-4 bg-gray-300 rounded w-5/6"></div>
        </div>
    </div>

    <a id="main-content" href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 hidden">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Noteworthy technology acquisitions 2021</h5>
        <p class="font-normal text-gray-700">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
    </a>

    <script>
        $(document).ready(function() {
            setTimeout(() => {
                $('#skeleton-loader').hide();
                $('#main-content').show();
            }, 100);
        });
    </script>
@endsection
