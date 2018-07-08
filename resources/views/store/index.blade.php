@extends('store.layout.layout')

@section('content')
    <div id="templatemo_main">

        <div class="col one_third fp_services">
            <h2>Welcome!</h2>
            <img src="{{ asset('images/templatemo_image_04.jpg') }}" alt="Image 04 " class="image_fl"/>
            <p>Carousel is free css template provided by templatemo.com for your personal or commercial websites.
                Quisque nec suscipit ipsum. Fusce vitae accumsan massa.</p>
            <ul class="templatemo_list">
                <li class="flow">Integer placerat dolor vel</li>
                <li class="flow nomr">Condimentum vulputate</li>
                <li class="flow">Itristique non suscipit id</li>
                <li class="flow nomr"> Donec eget lacus vitae leo</li>
            </ul>
        </div>
        <div class="col one_third fp_services">
            <h2>Recent News</h2>
            <div class="rp_pp">
                <img src="{{ asset('images/templatemo_image_01.jpg') }}" alt="Image 01"/>
                <a href="#">Integer venenatis pharetra magna vitae condimentum  ultrices.</a>
                <p>Feb 27, 2048 - 140 comments</p>
                <div class="cleaner"></div>
            </div>
            <div class="rp_pp">
                <img src="{{ asset('images/templatemo_image_02.jpg') }}" alt="Image 02"/>
                <a href="#">Nulla facilisi. Vestibulum vel odio ac mi feugiat condimentum.</a>
                <p>Feb 21, 2048 - 154 comments</p>
                <div class="cleaner"></div>
            </div>
            <div class="rp_pp">
                <img src="{{ asset('images/templatemo_image_03.jpg') }}" alt="Image 03"/>
                <a href="#">Fusce dolor neque, placerat ac erat venenatis eu, venenatis ac leo.</a>
                <p>Feb 15, 2048 - 179 comments</p>
                <div class="cleaner"></div>
            </div>
        </div>

        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
@endsection