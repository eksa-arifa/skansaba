@extends('layouts.base')

@section('body')

<x-admin.sidebar.index>
    @yield('content')

    @isset($slot)
        {{$slot}}
    @endisset
</x-admin.sidebar.index>



@endsection
