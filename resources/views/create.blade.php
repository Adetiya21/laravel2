@include('inc.header')

    <div class="container">
        <div class="col-md-6">    
            <h1>Input Books</h1>
            <form action="{{ url('/insert') }}" method="POST">
                {{csrf_field()}}
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{$error}}
                    </div>
                @endforeach
                <div class="form-group">
                    <label>Title</label>
                    <input type='text' name='title' class='form-control'>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.create').addClass('active');
        });
    </script>
@include('inc.footer')