<div class="modal fade" id="couponModal" tabindex="-1" aria-labelledby="couponModal" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('createCoupon') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New Coupon</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="inputProductName" class="form-label">Coupon name:</label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="productHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Porcetage:</label>
                        <input type="text" class="form-control" id="porcetage" name="porcetage" aria-describedby="productHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Quantity:</label>
                        <input type="text" class="form-control" id="quantity" name="quantity" aria-describedby="productHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Valid date:</label>
                        <input type="text" class="form-control" id="valid" name="valid" aria-describedby="productHelp">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>



