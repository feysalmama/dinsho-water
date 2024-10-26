@extends('layout.app')
@section('title', 'Home')
@section('hero')
 @include('layout.hero')
@endsection



@section('welcome')
 @include('includes.welcome')
@endsection

@section('about')
 @include('includes.about')
@endsection

@section('quality')
 @include('includes.quality')
@endsection

@section('facts')
 @include('includes.fact-counter')
@endsection

{{-- @section('services')
 @include('includes.services')
@endsection --}}


@section('products')
 @include('includes.products')
@endsection


{{-- @section('blogs')
 @include('includes.blogs')
@endsection --}}

@section('teams')
 @include('includes.teams')
@endsection


@section('testimonials')
 @include('includes.testimonials')
@endsection

@section('contact')
 @include('includes.contact')
@endsection