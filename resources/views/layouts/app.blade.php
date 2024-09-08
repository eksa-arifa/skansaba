@extends('layouts.base')

@section('body')
    <x-nav.index />
    @yield('content')
    
    @isset($slot)
        {{ $slot }}
    @endisset
    <x-footer.index/>
@endsection
