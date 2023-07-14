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
                        <span class="text-success">{{ $department->status }}</span>
                    @else
                        <span class="text-danger">{{ $department->status }}</span>
                   @endif
                </td>
                <td>
                    <a href="{{ route('department.create', $department) }}" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal"><i class="icon-eye"></i></a>
                    <a href="{{ route('department.create', $department) }}" class="btn btn-sm btn-warning"><i class="icon-shuffle"></i></a>
                    <a href="{{ route('department.delete', $department) }}" class="btn btn-sm btn-danger delete-data"><i class="icon-trash"></i></a>
                </td>
            </tr>
           @endforeach

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
        </tbody>
    </table>
@endsection