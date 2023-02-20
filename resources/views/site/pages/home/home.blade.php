@extends('site.layout.master')

@section('style', 'css/home/index.css')

@section('content')

@include('site.pages.home.slide')

@include('site.pages.home.about')

@endsection

