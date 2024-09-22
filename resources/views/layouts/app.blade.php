@extends('layouts.base')

@section('body')
    <x-nav.index :majors="$majors" />
    @yield('content')
    
    @isset($slot)
        {{ $slot }}
    @endisset
    <x-footer.index/>
@endsection
