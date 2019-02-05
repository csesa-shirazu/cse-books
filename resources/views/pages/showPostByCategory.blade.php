
@extends('master')
@section('title', $pageName)





<!-- Content -->
@section('content')
<div class="container">
    <div class="cs-content">
        <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs cs-lg-rightads">
            <div class="panel panel-default cs-right-menu">
                <a href="/"><button type="button" class="btn btn-default">همه کتاب ها</button></a>
                <a href="{{ route('ekhtesasi') }}"><button type="button" class="btn btn-default">کتاب های دروس اختصاصی</button></a>
                <a href="{{ route('umumi') }}"><button type="button" class="btn btn-default">کتاب های دروس عمومی</button></a>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="fa fa-ticket-alt"></span><span>همه کتاب ها</span>
                    <div class="dropup hidden-lg">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">موضوع کتاب
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li class="cs-border"><a href="/">همه</a></li>
                            <li class="cs-border"><a href="{{ route('ekhtesasi') }}">اختصاصی</a></li>
                            <li class="cs-border"><a href="{{ route('umumi') }}">عمومی</a></li>
                        </ul>
                    </div>
                    <ul class="visible-lg">
                        <li class="cs-border"><a href="/">همه</a></li>
                        <li class="cs-border"><a href="{{ route('ekhtesasi') }}">اختصاصی</a></li>
                        <li class="cs-border"><a href="{{ route('umumi') }}">عمومی</a></li>
                    </ul>
                </div>
                <div class="panel panel-body cs-panel-events">
                    <!-- Events -->
                    @foreach($books as $book)
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="thumbnail">
                                    <div class="hovereffect">
                                        <img class="img-responsive" src="{{ asset('assets/images/aeen.jpg') }}" style="width: 100%;">
                                        <div class="overlay"  style="color : blue">
                                            <h2 style="color: #FFF" class="well well-sm">{{ $book->name }}</h2>
                                            @if ($book->availability == 1)
                                                <h2 style="background-color: green" class="well well-sm">وضعیت : موجود</h2>
                                                <a href="#"><h2 style="background-color: #1b4b72" class="well well-sm">رزروش کن</h2></a>
                                            @else
                                                <h2 style="background-color: yellow; color:black" class="well well-sm">وضعیت : رزرو</h2>
                                                
                                            @endif
                            
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <p>Lorem ipsum...</p>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                </div>
                <div class="text-center">
                    {{ $books->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
        <!-- Content End -->


