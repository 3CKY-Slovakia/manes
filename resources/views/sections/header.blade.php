<!-- =========================
 START WELCOME SECTION
============================== -->
{{--<div class="full-page-search">--}}
    {{--<form action="#">--}}
        {{--<input type="text" name="googlesearch" placeholder="Type Words Then Press Enter To Search">--}}
        {{--<input type="submit" id="searchsubmit" value="Search">--}}
    {{--</form>--}}
    {{--<div class="sr-overlay"></div>--}}
{{--</div>--}}
<header class="v-11-header-area p-title-header-area navbar-fixed-top">
    <div class="container custom-header">
        <div class="row">
            <div id="menuzord" class="menuzord p-title-menuzord">
                <a href="#" class="menuzord-brand">
                    <img src="{{ asset('images/MANES-logo.png') }}" height="45" alt="" id="blue-logo">
                    <img src="{{ asset('images/MANES-logo-white.png') }}" height="45" alt="" id="white-logo">
                    <span>Správa inkasných pohľadávok <br>pre právnické a fyzické osoby</span>
                </a>
                <div class="header-contact">
                    <ul>
                        <li><span>Tel :</span> +421 948 773 307</li>
                        <li><span>Email :</span> info@manes.sk</li>
                        <li><a href="#contact_us">Konzultácie</a></li>
                    </ul>
                </div>
                {{--<div class="header-search">--}}
                    {{--<ul>--}}
                        {{--<li class="filter-search"><i class="fa fa-search"></i></li>--}}
                        {{--<li class="add-to-cart"><a href="#"><i class="fa fa-shopping-cart"></i></a></li>--}}
                        {{--<li><a href="#">0</a></li>--}}
                    {{--</ul>--}}
                    {{--<div class="add-to-cart-content">--}}
                        {{--<div class="recent-post shop-right-thumb add-cart-thumb">--}}
                            {{--<h3><a href="#">Criminal Law</a></h3>--}}
                            {{--<p> 1 x $ 65.00</p>--}}
                            {{--<img src="images/shop-right-thumb.png" alt="">--}}
                            {{--<span><a href="#"><img src="images/shop-cart-cross.png" alt=""></a></span>--}}
                        {{--</div>--}}
                        {{--<div class="recent-post shop-right-thumb add-cart-thumb">--}}
                            {{--<h3><a href="#">Detention and Arrest</a></h3>--}}
                            {{--<p>1 x $ 65.00</p>--}}
                            {{--<img src="images/shop-right-thumb.png" alt="">--}}
                            {{--<span><a href="#"><img src="images/shop-cart-cross.png" alt=""></a></span>--}}
                        {{--</div>--}}
                        {{--<p>Subtotal:<span>$145.00</span></p>--}}
                        {{--<button type="button" class="btn btn-dm">View Cart</button>--}}
                        {{--<button type="button" class="btn btn-dm">Checkout</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <ul class="menuzord-menu transparent-menuzord-menu transparent-menuzord-menu-3 menuzord-menu-bg">
                    <li class="active"><a href="{{ url('/') }}">DOMOV</a></li>
                    <li><a href="{{ url('/') }}#o_nas">O NÁS</a></li>
                    <li><a href="#">SLUŽBY</a>
                        <ul class="dropdown">
                            <li><a href="{{ url('sluzby/pravnicke-osoby') }}">Pre právnické osoby</a></li>
                            <li><a href="{{ url('sluzby/fyzicke-osoby') }}">Pre fyzické osoby</a></li>
                            <li><a href="{{ url('sluzby/doplnkove-sluzby') }}">Doplnkové služby</a></li>
                            <li><a href="contact1.html">Vymáhací proces</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/') }}">E-INKASO</a></li>
                    <li><a href="{{ url('eticky-kodex') }}">ETICKÝ KÓDEX</a>
                    <li><a href="{{ url('referencie') }}">REFERENCIE</a>
                    <li style="padding-right: 0"><a href="{{ url('kontakt') }}" style="padding-right: 0">KONTAKT</a></li>

                    {{--<li><a href="contact1.html">CONTACT</a>--}}
                        {{--<ul class="dropdown">--}}
                            {{--<li><a href="contact1.html">Contact 1</a></li>--}}
                            {{--<li><a href="contact2.html">Contact 2</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                </ul>
            </div>
        </div>
    </div>
</header>