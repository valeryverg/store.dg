@extends(env('THEME').'.layout.base')

@section('css')
    @include(env('THEME').'.layout.css')
@endsection

@section('carousel')
    @include(env('THEME').'.layout.carousel')
@endsection

@section('slider')
    @include(env('THEME').'.layout.carousel')
@endsection

@section('navbar')
    @include(env('THEME').'.layout.menu')
@endsection

@section('social')
    @include(( env('THEME').'.layout.social' ))
@endsection

@section('footer')
    @include(env('THEME').'.layout.footer')
@endsection

@section('js')
    @include(env('THEME').'.layout.js')
@endsection