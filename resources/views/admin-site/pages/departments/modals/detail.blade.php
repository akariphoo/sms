<div class="modal fade" id="departmentModal{{ $department->id }}" tabindex="-1" aria-labelledby="departmentModal{{ $department->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="departmentModal{{ $department->id }}">{{ $department->name }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-4">
                Department Name :
            </div>
            <div class="col-md-6">
               {{ $department->name }}
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-4">
                Description :
            </div>
            <div class="col-md-6">
               {{ $department->description }}
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-4">
                Status :
            </div>
            <div class="col-md-6">
               @if ($department->status == 'active')
                   <span class="badge bg-success">{{ $department->status }}</span>
                @else
                   <span class="badge bg-danger">{{ $department->status }}</span>
               @endif
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>