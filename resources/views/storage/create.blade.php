<div class="modal fade" id="storageModal" tabindex="-1" aria-labelledby="storageModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('createStorage') }}">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="storageModalLabel">New storage</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="storageName" class="form-label">Storage name:</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="storageHelp">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>



