@extends('frontend.layouts.master')

@section('content')

<!-- START HERO SECTION -->
{{-- @include('frontend.includes.home.hero') --}}
<!-- END HERO SECTION -->

<!-- START ABOUT SECTION -->
@include('frontend.includes.home.about')
<!-- START ABOUT SECTION -->

<!-- START SERVICES SECTION -->
@include('frontend.includes.home.services')
<!-- START SERVICES SECTION -->

<!-- START JOIN US SECTION -->
{{-- @include('frontend.includes.home.join_us') --}}
<!-- START JOIN US SECTION -->



<!-- START PARTNERS SECTION -->
{{-- @include('frontend.includes.home.partners') --}}
<!-- START PARTNERS SECTION -->

<!-- START PRICES SECTION -->
<div class="-mt-[12rem]">
    {{-- @include('frontend.includes.home.plans', ['hide_specs' => true]) --}}
</div>
<!-- END PRICES SECTION -->

<!-- START TESTIMONIALS SECTION -->
@include('frontend.includes.home.testimonials')
<!-- END TESTIMONIALS SECTION -->

<!-- START ABOUT SECTION -->
@include('frontend.includes.home.faq')
<!-- START ABOUT SECTION -->

@endsection

@push('js')

@endpush

@push('css')
    
@endpush
