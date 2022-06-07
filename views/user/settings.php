<div class="pt-3 pb-2 border-bottom">
    <h2 class="main-title"><i class="bi bi-gear"></i> Settings</h2>
    <small class="text-dark">
        You can change your profile settings.
    </small>
</div>

<div class="col-12 col-lg-10">
    <br><br>
    <form method="POST" class="row g-3 needs-validation" novalidate>
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label text-uppercase">First name</label>
            <input type="text" name="firstname" class="form-control" style="border: 1px solid dodgerblue!important;"
                id="validationCustom01" value="<?php echo $data[0]->firstname;?>" required>
        </div>
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label text-uppercase">Last name</label>
            <input type="text" name="lastname" class="form-control" style="border: 1px solid dodgerblue!important;"
                id="validationCustom02" value="<?php echo $data[0]->lastname;?>" required>
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">CONTACT</label>
            <input type="text" name="contact" value="<?php echo $data[0]->contact;?>" class="form-control"
                style="border: 1px solid dodgerblue!important;" id="validationCustom03" required>
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">EMAIL ADDRESS</label>
            <input type="email" class="form-control" value="<?php echo $data[0]->email;?>"
                style="border: 1px solid dodgerblue!important;" disabled>
            <small class="text-danger">Email cannot be updated.</small>
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">LOCATION</label>
            <input type="text" name="location" value="<?php echo $data[0]->location;?>" class="form-control"
                style="border: 1px solid dodgerblue!important;" id="validationCustom03" required>
        </div>

        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Confirm to changes you have made
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
            </div>
        </div>
        <div class="col-12">
            <button name="update" class="btn w-50 btn-primary" type="submit">
                Confirm</button>
        </div>
    </form>
</div>