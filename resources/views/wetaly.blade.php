@extends('frontend.layouts.master')

@section('content')

<!-- START HERO SECTION -->
{{-- @include('frontend.partials.home.hero') --}}
<!-- END HERO SECTION -->

<!-- START ABOUT SECTION -->
@include('frontend.partials.home.about')
<!-- START ABOUT SECTION -->

<!-- START SERVICES SECTION -->
@include('frontend.partials.home.services')
<!-- START SERVICES SECTION -->

<!-- START JOIN US SECTION -->
{{-- @include('frontend.partials.home.join_us') --}}
<!-- START JOIN US SECTION -->



<!-- START PARTNERS SECTION -->
@include('frontend.partials.home.partners')
<!-- START PARTNERS SECTION -->

<!-- START PRICES SECTION -->
<div class="-mt-[12rem]">
    @include('frontend.partials.home.plans', ['hide_specs' => true])
</div>
<!-- END PRICES SECTION -->

<!-- START TESTIMONIALS SECTION -->
@include('frontend.partials.home.testimonials')
<!-- END TESTIMONIALS SECTION -->

<!-- START ABOUT SECTION -->
@include('frontend.partials.home.faq')
<!-- START ABOUT SECTION -->

@endsection

@push('js')
    <script src="{{ asset('assets/frontend/plugins/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/plugins/@glidejs/glide/dist/glide.min.js') }}"></script>
    <script>
        new Glide('.glide').mount({
            direction: 'rtl',
        })
    </script>
@endpush

@push('css')
    <!-- Required Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/plugins/@glidejs/glide/dist/css/glide.core.min.css') }}">
    <!-- Optional Theme Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/plugins/@glidejs/glide/dist/css/glide.theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/plugins/swiper/swiper-bundle.min.css') }}">
@endpush
