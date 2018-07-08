@extends('store.layout.base')

@section('navbar')
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="icon-bar" href="#"><img src="{{ asset('images/store/logo/logo_dniprograf.png') }}"
                                              alt="Дніпрограф" height="50" width="160"></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                @foreach($items as $item)
                <li>
                    <a href="/{{ $item->link }}">{{ $item->name }}</a>
                </li>
                @endforeach
            </ul>
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Введіть слово">
                </div>
                <button type="submit" class="btn btn-default">Пошук...</button>
            </form>
        </div>
    </div><!-- /.container-fluid -->
</nav>
@endsection