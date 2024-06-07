@extends('app')

@section('content')
    <x-dashboard-card />
    <div class="flex justify-between mb-4">
        <x-chart-dashboard />
        <x-table />
    </div>
@endsection
