<div class="col-md-6 mx-auto">

    <div class="py-5 text-center text-uppercase fs-1">
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="15" aria-valuemin="0"
                aria-valuemax="100">Payment 100%</div>
            <div class="progress-bar bg-info" role="progressbar" style="width: 40%" aria-valuenow="20" aria-valuemin="0"
                aria-valuemax="100">Shipping 70%</div>
        </div>
    </div>


    <form method="POST" class="row g-3">
        <h5 class="mt-4">Order(buyer) Details</h5>
        <div class="col-12">
            <label class="form-label">Full name</label>
            <input type="text" class="form-control" value="<?php echo $data[0]->firstname;?>" disabled>
        </div>
        <div class="col-12">
            <label class="form-label">Contact</label>
            <input type="text" class="form-control" value="<?php echo $data[0]->lastname;?>" disabled>
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Email
            </label>
            <input type="text" class="form-control" id="inputAddress" value="<?php echo $data[0]->email;?>" disabled>
        </div>

        <h5 class="mt-5">Shipping Address</h5>

        <div class="col-md-6">
            <label for="inputState" class="form-label">City
                <span class="text-muted">(Required)</span>
            </label>
            <select name="city" id="inputState" class="form-select">
                <option value="Lilongwe">Lilongwe</option>
                <option value="Blantyre">Blantyre</option>
            </select>
        </div>

        <div class="col-md-6">
            <label for="inputCity" class="form-label">State / Province / Region / Area
                <span class="text-muted">(Required)</span>
            </label>
            <input type="text" name="state" class="form-control" id="inputCity"
                placeholder="State / Province / Region / Area" required>
        </div>

        <div class="col-md-12">
            <label for="inputZip" class="form-label">Postal Code
                <span class="text-muted">(Required)</span>
            </label>
            <input type="text" name="postal_code" class="form-control" id="inputZip" placeholder="Postal Code" required>
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck" required>
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" name="confirm" class="btn w-100 hover-1 text-light my-blue-theme">Submit</button>
        </div>
    </form>
</div>