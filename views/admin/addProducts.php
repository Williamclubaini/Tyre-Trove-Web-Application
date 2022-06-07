<main class="main users chart-page" id="skip-target">
    <div class="container">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h5 class="fw-normal"><i class="bi bi-plus-circle"></i> Add New Product</h5>
        </div>
        <div class="row pt-1">
            <div class="col-12 col-lg-9 pt-lg-5 mx-auto">
                <form class="border p-3 p-lg-5 rounded" method="POST">
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Select image location</label>
                        <input name="image" class="form-control form-control-sm" type="file" required>
                        <small class="fw-bold text-danger">NOTE:images are found in
                            C:\xampp\htdocs\tyre-trove\assets\images\products</small>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Product name</label>
                        <input type="text" name="pname" class="form-control" placeholder="Product name" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Price</label>
                        <input type="text" name="price" class="form-control" placeholder="0.00" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Quantity</label>
                        <input type="text" name="quantity" class="form-control" placeholder="1" required>
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" name="add" class="btn btn-sm w-50 btn-primary mb-3">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>