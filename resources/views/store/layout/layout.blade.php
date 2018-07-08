@extends('store.layout.base')

@section('header')
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Склад</title>
@endsection

@section('css')
    @include('store.layout.css')
@endsection

@section('carousel')
    @include('store.layout.carousel')
@endsection

@section('slider')
    @include('store.layout.carousel')
@endsection

@section('navbar')
    @include('store.layout.menu')
@endsection

@section('footer')
    @include('store.layout.footer')
@endsection

@section('js')
    @include('store.layout.js')
@endsection