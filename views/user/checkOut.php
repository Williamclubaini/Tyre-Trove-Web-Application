<div class="mx-auto col-md-10">
    <div class="container">
        <div class="d-flex bd-highlight mb-1">
            <div class="p-2 bd-highlight">
                <a type="submit" href="<?php echo URL;?>cart" class="btn my-blue-theme text-light hover-1"> <i
                        class="bi bi-arrow-left-circle"></i> Back</a>
            </div>
        </div>
        <main>
            <div class="py-1 mb-5 border-bottom text-start">
                <img class="d-block mx-auto mb-4" src="assets/images/logo/logo.png" alt="Tyre-trove logo" width="72"
                    height="57">
                <h2>Checkout</h2>
                <p>Below is a checkout form check amount of money you are about to spend, total items and furnish us the
                    payment method before submitting the form.</p>
            </div>

            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <p class="d-flex justify-content-between align-items-center mb-3">
                        <span class="fw-bold text-primary">Items</span>
                        <span class="badge bg-primary rounded-pill"><?php echo count($_SESSION['cart']);?></span>
                    </p>
                    <ul class="list-group mb-3">
                        <?php 
            foreach($_SESSION['cart'] as $item):?>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0"><?php echo $item['product_name'];?></h6>
                                <small class="text-muted">Quantity:<?php echo $item['quantity'];?></small>
                            </div>
                            <span class="text-muted">MK<?php echo number_format($item['price'],2);?></span>
                        </li>
                        <?php endforeach;?>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (Malawi Kwacha)</span>
                            <strong><?php echo 'MK'.number_format(array_sum($data), 2);?></strong>
                        </li>
                    </ul>

                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Billing details</h4>
                    <form method="POST">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">First name</label>
                                <input type="text" class="form-control" id="firstName"
                                    value="<?php echo USER->firstname;?>" disabled>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="lastName"
                                    value="<?php echo USER->lastname;?>" disabled>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Email
                                    <span class="text-muted">(Optional)</span>
                                </label>
                                <input type="email" class="form-control" id="email" value="<?php echo USER->email;?>"
                                    disabled>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Total Items
                                    <span class="text-muted">(Number of Items in your cart)</span>
                                </label>
                                <input type="text" class="form-control"
                                    value="<?php echo array_sum(array_column($_SESSION['cart'], 'quantity'));?>"
                                    disabled>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Total Amount
                                    <span class="text-muted">(Total Cost)</span>
                                </label>
                                <input type="text" class="form-control"
                                    value="<?php echo 'MK'.number_format(array_sum($data), 2);?>" disabled>
                            </div>
                        </div>
                        <br>

                        <h4 class="mb-3">Payments Details</h4>
                        <small class="fst-italic fw-bold">NOTE:Other payments methods are not available.</small>

                        <div class="my-3">
                            <div class="form-check">
                                <input id="credit" value="credit card" name="paymentMethod" type="radio"
                                    class="form-check-input" required>
                                <label class="form-check-label" for="credit">Credit card</label>
                            </div>
                        </div>

                        <div class="row gy-3">
                            <div class="col-md-6">
                                <label for="ccname" class="form-label">Name on card
                                    <span class="text-muted">(required)</span>
                                </label>
                                <input type="text" placeholder="Credit card name" name="ccname" class="form-control"
                                    required>
                                <small class="text-muted">Full name as displayed on card</small>
                                <div class="invalid-feedback">
                                    Name on card is required
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="cc-number" class="form-label">Credit card number</label>
                                <input type="text" class="form-control" name="cnum" placeholder="XXXX XXXX XXXX XXXX"
                                    required>
                                <div class="invalid-feedback">
                                    Credit card number is required
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cc-expiration" class="form-label">Expiration Date
                                    <span class="text-muted">(required)</span>
                                </label>
                                <input type="date" name="expdate" class="form-control" id="expdate" placeholder="MM/YY"
                                    required>
                                <div class="invalid-feedback">
                                    Expiration date required
                                </div>
                            </div>

                        </div>

                        <button type="submit" name="proceed"
                            class="w-100 mt-3 mb-3 mt-lg-5 mb-lg-5 btn my-blue-theme text-light hover-1 btn-lg"
                            type="submit">
                            <i class="bi bi-bag"></i> Purchase</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>