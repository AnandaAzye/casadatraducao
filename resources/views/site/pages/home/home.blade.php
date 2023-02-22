@extends('site.layout.master')
@section('style', 'css/home/index.css')
@section('content')
@include('site.pages.home.slide')
@include('site.pages.home.about')
@include('site.pages.home.services')
@include('site.pages.home.reviews')
@include('site.pages.home.partners')
@include('site.pages.home.needTranslation')
@endsection

