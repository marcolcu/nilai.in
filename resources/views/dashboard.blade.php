@extends('app')

@section('content')
    <x-dashboard-card />
    <div class="flex justify-between flex-col md:flex-row gap-2 mb-4">
        <x-chart-dashboard />
        <x-table />
    </div>
@endsection

@section('js')
    @yield('js-table')
@endsection