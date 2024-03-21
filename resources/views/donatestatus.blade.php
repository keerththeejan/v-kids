<!-- resources/views/students/donate_modal.blade.php -->

<div class="modal fade" id="donateModal{{ $student->id }}" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel{{ $student->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="donateModalLabel{{ $student->id }}">Donate for {{ $student->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Donation form goes here -->
                <!-- Include form fields for donor details -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Donate</button>
            </div>
        </div>
    </div>
</div>
