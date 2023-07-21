@extends('admin-site.app')

@section('content')
    <a href="{{ route('course.create') }}" class="btn btn-primary float-right btn-icon-text">Create Course <i class="icon-circle-plus"></i></a>
    <table class="table mt-5">
        <thead class="table-active">
            <tr>
                <th>No</th>
                <td>Name</td>
                <td>Description</td>
                <td>Department</td>
                <td>Status</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
           @foreach ($courses as $key => $course)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ $course->description }}</td>
                <td>{{ $course->department->name }}</td>
                <td>
                   @if ($course->status == 'active')
                        <span class="badge bg-success">{{ $course->status }}</span>
                    @else
                        <span class="badge bg-danger">{{ $course->status }}</span>
                   @endif
                </td>
                <td>
                    <a href="" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#courseModal{{ $course->id }}"><i class="icon-eye"></i></a>
                    <a href="{{ route('course.create', $course) }}" class="btn btn-sm btn-warning"><i class="icon-shuffle"></i></a>
                    <a href="{{ route('course.delete', $course) }}" class="btn btn-sm btn-danger delete-data"><i class="icon-trash"></i></a>
                </td>
                {{-- Modal --}}
                @include('admin-site.pages.courses.modals.detail')
            </tr>
           @endforeach
        </tbody>
    </table>
@endsection