@extends('home')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <br />
            <h3 align="center">Users Data</h3>
            <br />
            @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
            @endif
            <div align="right">
                <a href="{{route('users.create')}}" class="btn btn-primary">Add</a>
                <br />
                <br />
            </div>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Mail</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($users as $row)
                    <tr>
                        <td>{{$row['name']}}</td>
                        <td>{{$row['surname']}}</td>
                        <td>{{$row['email']}}</td>
                        <td><a href="{{action('UserController@edit', $row['id'])}}" class="btn btn-warning">Edit</a></td>
                        <td></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>


    <script>
        $(document).ready(function(){
            $('.delete_form').on('submit', function(){
                if(confirm("Are you sure you want to delete it?"))
                {
                    return true;
                }
                else
                {
                    return false;
                }
            });
        });
    </script>
@endsection