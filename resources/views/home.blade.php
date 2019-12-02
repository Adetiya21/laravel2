@include('inc.header')

    <div class="container">
        <h1>Books List</h1>
        @if (session('info'))
            <div class="col-md-6 alert alert-success">
                {{session('info')}}
            </div>    
        @endif
        <div class="col-md-12 table-responsive">
            <table class="table table-hover">
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
                    @php
                        $no=1;
                    @endphp
                    @foreach ($articles->all() as $article)
                        
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->description }}</td>
                        <td>
                            <a href='{{ url("/detail/{$article->id}")}}' class="btn btn-primary">View</a>
                            <a href='{{ url("/edit/{$article->id}")}}' class="btn btn-warning">Edit</a>
                            <a href='{{ url("/delete/{$article->id}")}}' class="btn btn-danger">Delete</a>
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

@include('inc.footer')