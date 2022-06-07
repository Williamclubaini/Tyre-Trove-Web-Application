<!-- ! Main -->
<div>
    <?php 
          if(!empty($data))
          {?>
    <div class="pt-3 pb-2 mb-3 border-bottom">
        <h2 class="main-title">Appointments</h2>
        <small><b>Customer Name</b>: <?php echo $data[0]->firstname.' '.$data[0]->lastname ?></small><br>
        <small><b>Today's date</b>: <?php echo date('l, F d, Y'); ?></small>
        <br><small><b>Report</b>: <?php echo("Appointment records"); ?></small><br>
        <small class="fst-italic"><span class="fw-bold">NOTE</span>:Check all appointments you have if they are
            approved, disapproved or on pending
            here.<br></small>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div>
                <table class="table table-stripped table-hover" style="cursor:pointer;">
                    <thead class="lg-scooter text-light">
                        <tr class="text-center">
                            <th>Customer name</th>
                            <th>Vehicle Type</th>
                            <th>Service</th>
                            <th>Visiting Day</th>
                            <th>Problem State</th>
                            <th>Appointment Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                  foreach($data as $display)
                  {?>
                        <tr class="fw-lighter text-light text-center">
                            <td class="text-dark">
                                <?php echo $display->firstname.' '.$display->lastname;?>
                            </td>
                            <td class="lg-red">
                                <?php echo $display->vehicle;?>
                            </td>
                            <td class="bg-success">
                                <?php echo $display->servicing;?>
                            </td>
                            <td class="bg-warning">
                                <?php echo $display->visit_day;?>
                            </td>
                            <td class="lg-red">
                                <?php echo $display->problem;?>
                            </td>
                            <td class="bg-success">
                                <?php echo $display->status;?>
                            </td>
                            <td class="lg-blue"><?php echo date('n/j/Y', strtotime($display->visit_day));?></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php } else {?>
    <div class="text-center bg-body border rounded w-75 mx-auto p-5" style="margin-top:20%;">
        <?php echo("No booking records found."); ?>
    </div>
    <?php }
        ?>
</div>