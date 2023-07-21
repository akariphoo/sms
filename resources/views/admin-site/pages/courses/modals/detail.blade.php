<div class="modal fade" id="courseModal{{ $course->id }}" tabindex="-1" aria-labelledby="courseModal{{ $course->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="courseModal{{ $course->id }}">{{ $course->name }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-4">
                Course Name :
            </div>
            <div class="col-md-6">
               {{ $course->name }}
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-4">
                Description :
            </div>
            <div class="col-md-6">
               {{ $course->description }}
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-4">
                Department Name :
            </div>
            <div class="col-md-6">
               {{ $course->department->name }}
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-4">
                Status :
            </div>
            <div class="col-md-6">
               @if ($course->status == 'active')
                   <span class="badge bg-success">{{ $course->status }}</span>
                @else
                   <span class="badge bg-danger">{{ $course->status }}</span>
               @endif
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>