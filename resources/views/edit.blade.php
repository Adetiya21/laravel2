@include('inc.header')

    <div class="container">
        <div class="col-md-6">    
            <h1>Edit Books</h1>
            <form action="{{ url('/update',array($articles->id)) }}" method="POST">
                {{csrf_field()}}
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{$error}}
                    </div>
                @endforeach
                <div class="form-group">
                    <label>Title</label>
                    <input type="hidden" name="id" value="{{$articles->id}}">
                    <input type='text' name='title' class='form-control' value="{{$articles->title}}">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="10">{{$articles->description}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>

@include('inc.footer')