<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
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
                    <h4><a class="navbar-brand home" href="{{ url('/')}}">AdeCreative21 AJAX
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
                            <a href="{{ url('/ajax/')}}"><i class="glyphicon glyphicon-home"></i> Home </a>
                        </li>
                        {{--  <li class="create">
                            <a href="{{ url('/create')}}"> Create </a>
                        </li>  --}}
                        <li class="about">
                            <a href="#"> About </a>
                        </li>
                    </ul>
                      
                </div>
            </div>
        </div>
    </div>

@yield('content')

<footer id="footer">
        <div class="container">
            <div class="col-md-4 ">
            <h3>SUPPORT</h3>
            <!-- <img src="assets/front_end/images/support/bank.png" alt="bank" style="width: 100%"> -->
            </div>
            <div class="col-md-5 operasi">
            <h3>ABOUT</h3>
            <ul class="alamat">
                <li><i class="glyphicon glyphicon-map-marker"></i><b> ADECREATIVE21</b><span>Jalan Karet Gang Karet Indah No.14 Pontianak Barat Pontianak, Kalimantan Barat, Indonesia - 78113</span></li>
                <li><i class="glyphicon glyphicon-envelope"></i><a href="mailto:adetiyaputra45@gmail.com"> adetiyaputra45@gmail.com</a></li>
                {{--  <li><i class="glyphicon glyphicon-phone-alt"></i><a href="https://api.whatsapp.com/send?phone=6282191542120&amp;">+628 2191 542 120</a></li>
                <li><i class="fa fa-facebook-square">&nbsp;</i><a href="https://www.facebook.com/profile.php?id=100013385370262" target="_blank">Master Botanicals - Zack</a></li>
                <li><i class="fa fa-instagram">&nbsp;</i><a href="https://www.instagram.com/zack_kratom/" target="_blank">Master Botanicals - Zack</a></li>  --}}
            </ul>
            </div>
            <div class="col-md-3 ">
            <h3>PROFIL</h3>
            <ul class="infoo">
                <li><i class="fa fa-arrow-right"></i><a href=""> About Us</a></li>
                <li><i class="fa fa-arrow-right"></i><a href=""> Contact Us</a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
        </div>
    </footer>

<script type="text/javascript">
    {{--  add ajax  --}}
    $(document).on('click','.create-modal', function(){
        $('#create').modal('show');
        $('.form-horizontal').show();
        $('.modal-title').text('Add Ajax');
    });

    $("#add").click(function(){
        $.ajax({
            type : 'POST',
            url : 'addPost',
            data : {
                '_token': $('input[name=_token]').val(),
                'title': $('input[name=title]').val(),
                'description': $('input[name=description]').val(),
            },
            success: function(data){
                if((data.errors)){
                    $('.error').removeClass('hidden');
                    $('.error').text(data.errors.title);
                    $('.error').text(data.errors.description);   
                } else {
                    window.location.reload('/ajax');
                    $('error').remove();
                    {{--  $('#table').append(
                        "<tr class='post"+ data.id +"'>"+
                            "<td> </td>"+
                            "<td>"+ data.title+"</td>"+
                            "<td>"+ data.description+"</td>"+
                            "<td><a class='show-modal btn btn-default' data-id='"+ data.id +"' data-title='"+data.title+"' data-description='"+data.description+"'>"+
                                    "<i class='fa fa-eye'></i></a>"+
                                "<a class='edit-modal btn btn-warning' data-id='"+data.id+"' data-title='"+data.title+"' data-description='"+data.description+"'>"+
                                    "<i class='glyphicon glyphicon-pencil'></i></a>"+
                                "<a class='delete-modal btn btn-danger' data-id='"+data.id+"' data-title='"+data.title+"' data-description='"+data.description+"'>"+
                                    "<i class='glyphicon glyphicon-trash'></i></a>"+
                            "</td></tr>"
                    );  --}}
                }
            },
        });
        $('#title').val('');
        $('#description').val('');
    });

    {{--  show ajax  --}}
    $(document).on('click','.show-modal', function(){
        $('#show').modal('show');
        $('.titl').text($(this).data('title'));
        $('.des').text($(this).data('description'));
        $('.modal-title').text('Show Ajax');
    });

    {{--  edit ajax  --}}
    $(document).on('click','.edit-modal', function(){
        $('#footer_action_button').text(" Update");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').addClass('edit'); 
        $('.modal-title').text('Ajax Edit');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        $('#fid').val($(this).data('id'));
        $('#t').val($(this).data('title'));
        $('#d').val($(this).data('description'));
        $('#myModal').modal('show');
    });

    $('.modal-footer').on('click', '.edit', function(){
        $.ajax({
            type : 'POST',
            url : 'editPost',
            data : {
                '_token': $('input[name=_token]').val(),
                'id': $('#fid').val(),
                'title': $('#t').val(),
                'description': $('#d').val()
            },
            success: function(data){
                {{--  window.location.reload('/ajax');  --}}
                $('.post' + data.id).replaceWith(" "+
                    "<tr class='post"+ data.id +"'>"+
                        "<td>"+ data.id+"</td>"+
                        "<td>"+ data.title+"</td>"+
                        "<td>"+ data.description+"</td>"+
                        "<td><a class='show-modal btn btn-default' data-id='"+ data.id +"' data-title='"+data.title+"' data-description='"+data.description+"'>"+
                                "<i class='fa fa-eye'></i></a>"+
                            "<a class='edit-modal btn btn-warning' data-id='"+data.id+"' data-title='"+data.title+"' data-description='"+data.description+"'>"+
                                "<i class='glyphicon glyphicon-pencil'></i></a>"+
                            "<a class='delete-modal btn btn-danger' data-id='"+data.id+"' data-title='"+data.title+"' data-description='"+data.description+"'>"+
                                "<i class='glyphicon glyphicon-trash'></i></a>"+
                        "</td></tr>"
                );
            }
        });
    });

    {{--  delete ajax  --}}
    $(document).on('click','.delete-modal', function(){
        $('#footer_action_button').text(" Delete");
        $('#footer_action_button').addClass('glyphicon-trash');
        $('#footer_action_button').removeClass('glyphicon-check');
        $('.actionBtn').addClass('btn-danger');
        $('.actionBtn').removeClass('btn-default');
        $('.actionBtn').addClass('delete'); 
        $('.modal-title').text('Ajax Delete');
        $('.id').text($(this).data('id'));
        $('.deleteContent').show();
        $('.form-horizontal').hide();
        $('.title').html($(this).data('title'));
        $('#myModal').modal('show');
    });

    $('.modal-footer').on('click', '.delete', function(){
        $.ajax({
            type : 'POST',
            url : 'deletePost',
            data : {
                '_token': $('input[name=_token]').val(),
                'id': $('.id').text()                
            },
            success: function(data){
                {{--  $('.post'+$('.id').text()).remove();  --}}
                {{--  window.location.reload('/ajax');  --}}
            }
        });
    });
</script>

<script src="{{ url('css/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ url('js/bootstrap.min.js') }}"></script>

</body>
</html>