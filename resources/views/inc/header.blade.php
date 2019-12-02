<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link href="{{ url('css/fonts/fontawesome.css') }}" rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ url('css/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/bootstrap/css/bootstrap.min.css') }}">

    <link href="{{ url('css/style.default.css') }}" rel="stylesheet" id="theme-stylesheet">


    <script type="text/javascript" src="{{ url('js/jquery-2.1.4.min.js') }}"></script>
</head>
<body style="background: #fafafa">
    <div id="top">
        <div class="container">
            <div class="row">
                <div class="col-xs-4 contact">
                    <p class="hidden-sm hidden-xs">Contact <a href="tel:+6289669432192">+6289669432192</a> or <a href="mailto:adetiyaputra45@gmail.com">adetiyaputra45@gmail.com</a></p>
                    <p class="hidden-md hidden-lg"><a href="tel:+6289669432192" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="mailto:adetiyaputra45@gmail.com" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                    </p>
                </div>
                <div class="col-xs-8">
                    <div class="login" style="float: right;">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">
        <div class="navbar navbar-default yamm" role="navigation" id="navbar">
            <div class="container">
                <div class="navbar-header">
                    <h4><a class="navbar-brand home" href="{{ url('/')}}">AdeCreative21 Page
                        {{--  <img src="#" alt="logo" class="hidden-xs hidden-sm" style="margin-top: -7px; width:245px">
                        <img src="#" alt="logo" class="visible-xs visible-sm" style="margin-top: -9px; width:230px"><span class="sr-only"></span>  --}}
                    </a></h4>
                    <div class="navbar-buttons">
                        <button type="button" class="navbar-toggle btn-template-main-nav" data-toggle="collapse" data-target="#navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-align-justify"></i>
                        </button>
                    </div>
                </div>

                <div class="navbar-collapse collapse" id="navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="home">
                            <a href="{{ url('/')}}"><i class="glyphicon glyphicon-home"></i> Home </a>
                        </li>
                        <li class="create">
                            <a href="{{ url('/create')}}"> Create </a>
                        </li>
                        <li class="about">
                            <a href="#"> About </a>
                        </li>
                    </ul>
                      
                </div>
            </div>
        </div>
    </div>