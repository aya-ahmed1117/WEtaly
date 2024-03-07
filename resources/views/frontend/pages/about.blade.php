@extends('frontend.layouts.master')

@section('content')
    @include('frontend.includes.page-banner', ['title' => 'About US'])
    @include('frontend.includes.home.about')
@endsection
