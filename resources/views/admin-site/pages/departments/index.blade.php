@extends('admin-site.app')

@section('content')
    <a href="{{ route('department.create') }}" class="btn btn-primary float-right btn-icon-text">Create Department <i class="icon-circle-plus"></i></a>
    <table class="table mt-5">
        <thead class="table-active">
            <tr>
                <th>No</th>
                <td>Name</td>
                <td>Description</td>
                <td>Status</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
           @foreach ($departments as $key => $department)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $department->name }}</td>
                <td>{{ $department->description }}</td>
                <td>
                   @if ($department->status == 'active')
                        <span class="badge bg-success">{{ $department->status }}</span>
                    @else
                        <span class="badge bg-danger">{{ $department->status }}</span>
                   @endif
                </td>
                <td>
                    <a href="{{ route('department.create', $department) }}" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#departmentModal{{ $department->id }}"><i class="icon-eye"></i></a>
                    <a href="{{ route('department.create', $department) }}" class="btn btn-sm btn-warning"><i class="icon-shuffle"></i></a>
                    <a href="{{ route('department.delete', $department) }}" class="btn btn-sm btn-danger delete-data"><i class="icon-trash"></i></a>
                    
                    <!-- Modal -->
                     @include('admin-site.pages.departments.modals.detail')
                </td>
            </tr>
           @endforeach
        </tbody>
    </table>

@endsection