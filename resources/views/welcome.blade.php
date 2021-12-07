@extends('layouts.freelancer')

@section('content')
    @include('webpage.header')
    @livewire('webpage.portfolio')
    @include('webpage.about')
    @include('webpage.contact', ['datas' => App\Socialmedia::get()->take(3)])
    @include('webpage.footer')
@endsection