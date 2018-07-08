@section('social')
    <div class="text-center">
        <a href="#"><img src="{{ asset(env('THEME').'/images/facebook.png') }}" title="facebook"
                         alt="facebook"/></a>
        <a href="#"><img src="{{ asset(env('THEME').'/images/twitter.png') }}" title="twitter"
                         alt="twitter"/></a>
        <a href="#"><img src="{{ asset(env('THEME').'/images/youtube.png') }}" title="youtube"
                         alt="youtube"/></a>
        <a href="#"><img src="{{ asset(env('THEME').'/images/feed.png') }}" title="rss" alt="rss"/></a>
    </div>
@endsection