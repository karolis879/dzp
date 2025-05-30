@extends('layouts.app')

@section('content')
    @include('sections/hero')
    @include('sections.about_us')
    @include('sections/our_services')
    @include('sections/our_partners')
    @include('sections/why_choose_us')
    @include('sections/red_cross')
    @include('sections/certifications')
    @include('sections.news')
    @include('sections/neptunas')
{{--    @include('sections.projects')--}}
    @include('sections/mission')
    @include('sections/contact_us')
    @include('sections/customer_say')
@endsection
