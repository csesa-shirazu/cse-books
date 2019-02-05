@extends('master')
@section('title' , $book->name)

@section('content')

    <div class="container">
        <div class="col-lg-3 col-md-3">
            <div class="visible-lg panel panel-body">
                <img class="img-responsive" src="#" style="width: 100%;">
            </div>
        </div>
        <div class="col-lg-9">
            {{-- Event Information--}}
            <div class="row">
                <div class="panel panel-default cs-singleticket-info">
                    <div class="panel-heading" data-toggle="collapse" data-target="#panel-body">
                        <span id="cs-event-name">اطلاعات کتاب {{ $book->name }}</span>
                        <span class="pull-right glyphicon glyphicon-collapse-up" id="cs-event-collapse"></span>
                    </div>
                    <div class="panel panel-body" id="panel-body">
                        <div class="row">
                            <div class="col-sm-6">نام کتاب : {{ $book->name }} ({{ $book->category->name }})</div>
                            <div class="col-sm-6">نام نویسنده : </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">ویراست : </div>
                        </div>

                        <div class="row" style="margin-top: 10px">
                            <div class="col-sm-12">چه کسانی این کتاب را خوانده اند : {{ $book->all_readers }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="panel panel-default cs-singleticket-info">
                    <div class="panel-heading" data-toggle="collapse" data-target="#panel-body2">
                        <span id="cs-event-name">بخش امانت</span>
                        <span class="pull-right glyphicon glyphicon-collapse-up" id="cs-event-collapse"></span>
                    </div>
                    <div class="panel panel-body" id="panel-body2">
                        <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                    {!! Form::model($book, ['route' => ['add.update', $book->id], 'method' => 'put']) !!}

                    <div class="col-sm-12">
                        <div class="form-group">
                            {!! Form::label('current_reader', 'شماره دانشجویی') !!}
                            {!! Form::text('current_reader', ' ', ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    
                    <div class="form-group col-sm-12">
                        @if ($book->availability == 1) 
                            {!! Form::submit('امانت گرفتن', ['class' => 'btn btn-success btn-block']) !!}
                        @else
                            <p>این کتاب هم اکنون در حال استفاده توسط شخص دیگری است!</p>
                            <p>تنها دارنده کتاب میتواند با استفاده از گزینه زیر آن را به کتاب خانه برگرداند!</p>
                            {!! Form::submit('تحویل دادن', ['class' => 'btn btn-warning btn-block']) !!}
                        @endif
                        
                        @if (session('status'))
                            <div class="alert alert-info" style="margin-top: 15px">
                                {{ session('status') }}
                            </div>
                         @endif

                    </div>
                    {!! Form::close() !!}
                </div>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>



@endsection