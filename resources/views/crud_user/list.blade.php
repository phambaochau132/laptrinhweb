@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
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
                                <th>{{ $user->id }}</th>
                                <th>{{ $user->name }}</th>
                                <th>{{ $user->email }}</th>

                                <th>
                                    <button class="btn btn-dark btn-read" href="{{ route('user.readUser', ['id' => $user->id]) }}">View</button> 
                                    <button class="btn btn-dark btn-update" href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit</button> 
                                    <button class="btn btn-dark btn-delete" href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</button>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection