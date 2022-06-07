<?php 
  if(!empty($data['bookings']))
    {?>
<div class="container">
    <div class="pt-3 pb-2 border-bottom">
        <h4 class="fw-normal"><i class="bi bi-book"></i> Appointments</h4>
        <span class="fst-italic">All booked Appointments.</span>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="users-table table-wrapper">
            <table class="table table-stripped table-hover" style="cursor:pointer;">
                <thead class="lg-scooter text-light">
                    <tr>
                        <th>Customer name</th>
                        <th>Vehicle Type</th>
                        <th>Service Type</th>
                        <th>Visiting Day</th>
                        <th>Problem State</th>
                        <th>Appointment Status</th>
                        <th>Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                      foreach($data['bookings'] as $book):?>
                    <tr>
                        <td>
                            <?php echo $book->firstname.' '.$book->lastname;?>
                        </td>
                        <td>
                            <?php echo $book->vehicle;?>
                        </td>
                        <td>
                            <?php echo $book->servicing;?>
                        </td>
                        <td>
                            <?php echo $book->visit_day;?>
                        </td>
                        <td>
                            <?php echo $book->problem;?>
                        </td>
                        <td>
                            <div class="badge py-2 bg-primary text-center text-light">
                                <?php echo $book->status;?>
                            </div>
                        </td>
                        <td><?php echo date('n/j/Y', strtotime($book->date));?></td>
                        <td>
                            <a class="badge py-2 text-decoration-none bg-danger"
                                href="<?php echo URL;?>adminAppointments&id=<?php echo $book->id;?>&action=Approved">
                                Approve
                            </a>
                            <a class="badge py-2 text-decoration-none bg-success"
                                href="<?php echo URL;?>adminAppointments&id=<?php echo $book->id;?>&action=Disapproved">
                                Disapprove
                            </a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>

    </div>
</div>
</div>
<?php } else {?>
<div class="text-center bg-body border rounded w-75 mx-auto p-5" style="margin-top:20%;">
    <?php echo("There are no appointments made Today."); ?>
</div>
<?php }
            ?>
</main>