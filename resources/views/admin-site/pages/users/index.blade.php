@extends('admin-site.app')

@section('content')
    <a href="{{ route('user.create') }}" class="btn btn-primary float-right btn-icon-text">Create User <i class="icon-circle-plus"></i></a>
    <table class="table mt-5">
        <thead class="table-active">
            <tr>
                <th>No</th>
                <td>Name</td>
                <td>Email</td>
                <td>Role</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
           @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ optional($user->role)->name }}</td>
                <td>
                    <a href="{{ route('user.create', $user) }}" class="btn btn-sm btn-warning"><i class="icon-shuffle"></i></a>
                    <a href="{{ route('user.delete', $user) }}" class="btn btn-sm btn-danger delete-data"><i class="icon-trash"></i></a>
                </td>
            </tr>
           @endforeach
        </tbody>
    </table>
@endsection