@extends('front.base')


@section('content')
    @include('front.partials.sections.hero')
    @include('front.partials.sections.category')
    @include('front.partials.sections.featured-deals')
    @include('front.partials.sections.our-story')
    @include('front.partials.sections.collections')
    @include('front.partials.sections.limited-offer')
@endsection
