@include('inc.header')

    <div class="container">
        <h1>Detail data "{{$articles->title}}"</h1>
        <table class="table table-hover">
            <tbody>
                <tr><td>ID</td>
                    <td>{{$articles->id}}</td></tr>
                <tr><td>Title</td>
                    <td>{{$articles->title}}</td></tr>
                <tr><td>Description</td>
                    <td>{{$articles->description}}</td></tr>
            </tbody>
        </table>
        <a href="{{ url('/')}}" class="btn btn-primary">Back</a>
    </div>
    <br>

@include('inc.footer')