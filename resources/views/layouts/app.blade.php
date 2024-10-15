@extends('layouts.base')


@if ($title)
@section('title')
    {{$title}}
@endsection
@endif

@section('body')
    <x-nav.index :majors="$majors" />
    @yield('content')
    
    @isset($slot)
        {{ $slot }}
    @endisset
    <x-footer.index/>
@endsection
