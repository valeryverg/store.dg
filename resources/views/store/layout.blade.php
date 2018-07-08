@extends('store.base')

@section('header')
        <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Склад</title>
    @endsection

    @section('css')
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        <link href="css/bootstrap.min.css" rel="stylesheet">
        {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>--}}
        <link href="{{ asset('css/templatemo_style.css') }}" rel="stylesheet" type="text/css"/>
    @endsection

    @section('js')
        {{--<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>--}}
        <script type="text/javascript" src="{{ asset('js/jquery-1-4-2.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/showhide.js') }}"></script>
        <script type="text/JavaScript" src="{{ asset('js/jquery.mousewheel.js') }}"></script>
    @endsection

    @section('carousel')
    <!-- Load the CloudCarousel JavaScript file -->
        <script type="text/JavaScript" src="{{ asset('js/cloud-carousel.1.0.5.js') }}"></script>

        <script type="text/javascript">
            $(document).ready(function () {

                // This initialises carousels on the container elements specified, in this case, carousel1.
                $("#carousel1").CloudCarousel(
                    {
                        reflHeight: 40,
                        reflGap: 2,
                        titleBox: $('#da-vinci-title'),
                        altBox: $('#da-vinci-alt'),
                        buttonLeft: $('#slider-left-but'),
                        buttonRight: $('#slider-right-but'),
                        yRadius: 30,
                        xPos: 480,
                        yPos: 32,
                        speed: 0.15,
                        autoRotate: "yes",
                        autoRotateDelay: 1500
                    }
                );
            });

        </script>
    @endsection

    @section('headbody')

</head>

<body id="home">

@endsection

@section('slider')
    <div id="templatemo_slider">
        <!-- This is the container for the carousel. -->
        <div id="carousel1" style="width:960px; height:280px;background:none;overflow:scroll; margin-top: 20px">
            <!-- All images with class of "cloudcarousel" will be turned into carousel items -->
            <!-- You can place links around these images -->
            <a href="#" rel="lightbox"><img class="cloudcarousel" src="{{ asset('images/slider/01.jpg') }}"
                                            alt="CSS Templates 1" title="Website Templates 1"/></a>
            <a href="#" rel="lightbox"><img class="cloudcarousel" src="{{ asset('images/slider/02.jpg') }}"
                                            alt="CSS Templates 2" title="Website Templates 2"/></a>
            <a href="#" rel="lightbox"><img class="cloudcarousel" src="{{ asset('images/slider/03.jpg') }}"
                                            alt="CSS Templates 3" title="Website Templates 3"/></a>
            <a href="#" rel="lightbox"><img class="cloudcarousel" src="{{ asset('images/slider/04.jpg') }}"
                                            alt="CSS Templates 4" title="Website Templates 4"/></a>
            <a href="#" rel="lightbox"><img class="cloudcarousel" src="{{ asset('images/slider/05.jpg') }}"
                                            alt="Flash Templates 1" title="Flash Templates 1"/></a>
            <a href="#" rel="lightbox"><img class="cloudcarousel" src="{{ asset('images/slider/06.jpg') }}"
                                            alt="Flash Templates 2" title="Flash Templates 2"/></a>
            <a href="#" rel="lightbox"><img class="cloudcarousel" src="{{ asset('images/slider/07.jpg') }}"
                                            alt="Flash Templates 3" title="Flash Templates 3"/></a>
            <a href="#" rel="lightbox"><img class="cloudcarousel" src="{{ asset('images/slider/08.jpg') }}"
                                            alt="Flash Templates 4" title="Flash Templates 4"/></a>
        </div>

        <!-- Define left and right buttons. -->
        <center>
            <input id="slider-left-but" type="button" value=""/>
            <input id="slider-right-but" type="button" value=""/>
        </center>
    </div>
@endsection

@section('bottom')
    <div id="templatemo_bottom_wrapper">
        <div id="templatemo_bottom">
            <div class="col one_third">
                <h4><span></span>Blogroll</h4>
                <div class="bottom_box">
                    <ul class="footer_list">
                        <li><a href="#">Learn HTML CSS</a></li>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Flash Gallery</a></li>
                        <li><a href="#">Website Templates</a></li>
                        <li><a href="#">Free Graphics</a></li>
                    </ul>
                </div>
            </div>
            <div class="col one_third">
                <h4><span></span>Updates</h4>
                <div class="bottom_box">
                    <ul class="twitter_post">
                        <li>Curabitur nec dui venenatis sem consectetur facilisis. Donec velit nisi, lacinia sed et. <a
                                    href="#">http://bit.ly/13IwZO</a></li>
                        <li>Proin dignissim, diam nec <a href="#">@TemplateMo</a> enim lorem tempus orci, ac imperdiet
                            ante purus in justo.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col one_third no_margin_right">
                <h4><span></span>About Us</h4>
                <div class="bottom_box">
                    <p><em>Duis sem nisl, dignissim ac feugiat in, mattis sit amet est. Duis leo leo, suscipit cursus
                            vehicula sit amet. Sed varius pellentesque massa vel rutrum.</em></p><br/>
                    <div class="footer_social_button">
                        <a href="#"><img src="{{ asset('images/facebook.png') }}" title="facebook" alt="facebook"/></a>
                        <a href="#"><img src="{{ asset('images/flickr.png') }}" title="flickr" alt="flickr"/></a>
                        <a href="#"><img src="{{ asset('images/twitter.png') }}" title="twitter" alt="twitter"/></a>
                        <a href="#"><img src="{{ asset('images/youtube.png') }}" title="youtube" alt="youtube"/></a>
                        <a href="#"><img src="{{ asset('images/feed.png') }}" title="rss" alt="rss"/></a>
                    </div>
                </div>
            </div>

            <div class="cleaner"></div>
        </div> <!-- END of tempatemo_bottom -->
    </div> <!-- END of tempatemo_bottom_wrapper -->
@endsection

@section('footer')
    <div id="templatemo_footer_wrapper">
        <div id="templatemo_footer">
            Copyright © 2018 Дніпрограф<br/>
            м. Дніпро пр. О.Поля, 82г
        </div> <!-- END of templatemo_footer_wrapper -->
    </div> <!-- END of templatemo_footer -->

</body>
</html>
@endsection