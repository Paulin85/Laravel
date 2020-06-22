@extends('home')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <br />
            <h3 align="center">Index utilisateurs</h3>
            <br />
            @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
            @endif
            <div align="right">
                <a href="{{route('users.create')}}" class="btn btn-success">Ajouter</a>
                <br />
                <br />
            </div>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Api_Token</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                @foreach($users as $row)
                    <tr>
                        <td>{{$row['name']}}</td>
                        <td>{{$row['surname']}}</td>
                        <td>{{$row['email']}}</td>
                        <td>{{$row['api_token']}}</td>

                        <td><a href="{{action('UserController@edit', $row['id'])}}" class="btn btn-warning">Edit</a></td>
                        <td>
                            <form method="post" class="delete_form" action="{{action('UserController@destroy', $row['id'])}}">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE" />
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
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