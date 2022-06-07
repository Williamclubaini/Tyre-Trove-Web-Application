  <!-- ! Main -->
<?php 
    if(!empty($data))
    {?>
<div class="pt-3 pb-2 mb-3 border-bottom">
  <h2 class="main-title">Purchase Records</h2>
  <small><b>Customer Name</b>: <?php echo $data[0]->firstname.' '.$data[0]->lastname ?></small><br>
  <small><b>Today's date</b>: <?php echo date('l, F d, Y'); ?></small>
  <br><small><b>Report</b>: <?php echo("Purchase records"); ?></small>
</div>
        <div class="row">
          <div class="col-lg-12">
            <div class="users-table table-wrapper">
              <table class="table table-stripped table-hover" style="cursor:pointer;">
                <thead class="lg-scooter text-light">
                  <tr class="fw-lighter text-light text-center">
                    <th>Customer name</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Cost</th>
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
                    <td class="lg-blue">
                    <?php echo $display->product_name;?>
                    </td>
                    <td class="lg-velvet-sun">
                    <?php echo 'MK'.number_format($display->price, 2);?>
                    </td>
                    <td class="bg-success">
                    <?php echo $display->quantity;?>
                    </td>
                    <td class="lg-red">
                    <?php echo 'MK'.number_format($display->cost, 2);?>
                    </td>
                    <td class="lg-velvet-sun">
                    <?php echo date('n/j/Y',strtotime($display->date));?>
                    </td>
                  </tr>
                  <?php }?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <?php } else {?>
          <div class="text-center bg-body border rounded w-75 mx-auto p-5" style="margin-top:20%;">
                   <?php echo("No purchasing records found."); ?>
          </div>
        <?php } ?>