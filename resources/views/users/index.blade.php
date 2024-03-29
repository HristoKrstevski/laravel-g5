@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="table table-striped">
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>

                </tr>

                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td><a href="/users/{{$user->id}}">{{ $user ->id }}</td>
                        <td> {{$user ->name}}</td>
                        <td> {{$user->email}}</td>
                        <td><a href="{{route('users.edit', $user->id)}}" class="btn btn-warning">Edit</a> </td>
                    </tr>
                @endforeach

                </tbody>
            </table>


        </div>

    </div>
@endsection


@section('scripts')
    <script>

    </script>
@endsection
