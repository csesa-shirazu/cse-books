
<!-- logo and login part -->
<!-- logo and login part END -->

<!-- Navigation -->
<nav class="row navbar navbar-inverse cs-nav-border" data-spy="affix" data-offset-top="150">
    <div class="container">
        <div class="navbar-header">
            <a href="#" class="hidden-lg hidden-md hidden-sm"><img src="{{ asset('assets/images/logo.png') }}"></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav cs-rightNav">
                <li><a href="/" id="home-icon"><span class="fa fa-home"></span></a></li>
            </ul>
            <ul class="nav navbar-nav cs-rightNav2"> <!-- Color Should Change to WHITE FFF -->
                <li><a href="/">اضافه کردن کتاب جدید</a></li>
                @if(Auth::check())
                <li><a href="/admin">پنل مدیریت</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<!-- Navigation End -->



<!-- Header -->


<!-- Header End-->
