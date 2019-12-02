@extends('ajax.layouts.app')

@section('title')
    Laravel 2 CRUD Ajax 
@endsection

@section('content')
    
    <div class="container">
        <h1>Books List</h1>
        @if (session('info'))
            <div class="col-md-6 alert alert-success">
                {{session('info')}}
            </div>    
        @endif
        <div>
            <a href="#" class="create-modal btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Input</a>
        </div>
        <br>
        <div class="col-md-12 table-responsive">
            <table class="table table-hover" id="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{--  @if(count(@articles) > 0)  --}}
                    {{ csrf_field() }}
                    @php
                        $no=1;
                    @endphp
                    @foreach ($articles as $article)
                        
                    <tr class="post{{$article->id}}">
                        <td>{{ $no++ }}</td>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->description }}</td>
                        <td>
                            <a href='#' class="show-modal btn btn-default" data-id="{{ $article->id }}" data-title="{{ $article->title }}" data-description="{{ $article->description }}">
                                <i class="fa fa-eye"></i></a>
                            <a href='#' class="edit-modal btn btn-warning" data-id="{{ $article->id }}" data-title="{{ $article->title }}" data-description="{{ $article->description }}">
                                <i class="glyphicon glyphicon-pencil"></i></a>
                            <a href='#' class="delete-modal btn btn-danger" data-id="{{ $article->id }}" data-title="{{ $article->title }}" data-description="{{ $article->description }}">
                                <i class="glyphicon glyphicon-trash"></i></a>
                        </td>
                    </tr>
                        @endforeach
                    {{--  @endif  --}}
                </tbody>
            </table>
        </div>
        {{$articles->links()}}
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.home').addClass('active');
        });
    </script>

{{--  modal form create  --}}
    <div id="create" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group row add">
                            <label class="control-label col-sm-2" for="title">Title:</label>
                            <div class="col-md-10">
                                <input type="text" name="title" id="title" class="form-control" required>
                                <p class="error text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="description">Description:</label>
                            <div class="col-md-10">
                                <input type="text" name="description" id="description" class="form-control" required>
                                <p class="error text-center alert alert-danger hidden"></p>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit" id="add" data-dismiss="modal">
                        <span class="glyphicon glyphicon-send"></span> Save</button>
                    <button class="btn btn-default" type="button" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remove"></span> Close</button>
                </div>
            </div>
        </div>
    </div>

{{--  modal form show  --}}
    <div id="show" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-md-12" for="title">Title:</label>
                        <label class="col-md-12 titl"></label>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12" for="description">Description:</label>
                        <label class="col-md-12 des"></label>
                    </div>
                </div>
                <br><br><br><br>
                <div class="modal-footer">
                    <button class="btn btn-default" type="button" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remove"></span> Close</button>
                </div>
            </div>
        </div>
    </div>

{{--  modal form edit  --}}
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="modal">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="id">ID:</label>
                            <div class="col-md-10">
                                <input type="text" name="id" id="fid" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="title">Title:</label>
                            <div class="col-md-10">
                                <input type="name" name="title" id="t" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="description">Description:</label>
                            <div class="col-md-10">
                                <textarea type="name" name="description" id="d" class="form-control"></textarea>
                            </div>
                        </div>
                    </form>
                    {{--  form delete  --}}
                    <div class="deleteContent">
                        Are You Sure wan to delete <span class="title"></span>?
                        <span class="hidden id"></span>
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn actionBtn" data-dismiss="modal">
                        <span id="footer_action_button" class="glyphicon "></span>
                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        <span class="glyphicon glyphicon"></span>Close
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection