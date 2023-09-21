<nav>
<ul id="navigation">
<li><a href="{{ route('home') }}">{{ __('messages.nav_home') }}</a></li>
<li><a href="{{ route('browse.course') }}">{{ __('messages.nav_course') }}</a></li>

<li><a href="{{ route('browse.university') }}">{{ __('messages.nav_university') }}</a></li>



<li><a href="{{ route('about') }}">{{ __('messages.nav_about') }}</a></li>


<!-- <li><a href="#">Blog</a>
<ul class="submenu">
<li><a href="blog.html">Blog</a></li>
<li><a href="blog_details.html">Blog Details</a></li>
<li><a href="elements.html">Element</a></li>
</ul>
</li> -->

<li><a href="{{ route('contact') }}">{{ __('messages.nav_contact') }}</a></li>

<!-- <li class="cart">
<a href="#"><span class="flaticon-shopping-cart"></span></a>
</li> -->

<li><a href="#">{{ __('messages.nav_lang') }}</a>
<ul class="submenu">
<li><a href="{{ route('Langen') }}">English</a></li>
<li><a href="{{ route('Langar') }}">Arabic</a></li>
</ul>
</li>

<li>
<a href="login.html" class="btn header-btn2">{{ __('messages.title_sing') }}</a>
</li>
</ul>
</nav>