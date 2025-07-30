<div class="modal fade" id="{{ $formId }}" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="formModal" method="POST" action='{{ route("$route") }}''>
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalLabel">New {{ $title }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @foreach ($inputs as $input)
                        <div class="mb-3">
                            <label for="{{ $input['name'] }}" class="form-label">{{ $input['label'] }}:</label>
                            <input type="{{ $input['type'] }}" class="form-control" id="{{ $input['id'] }}" name="{{ $input['name'] }}" aria-describedby="help">
                        </div>
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>



