<?php 
  if(!empty($data)){?>
<div class="pt-3 pb-2 border-bottom">
    <h4 class="fw-normal"><i class="bi bi-bar-chart-line"></i> Sales Report</h4>
    <span class="fst-italic">The report is automatically generated.</span>
</div>
<div class="row">
    <div class="col-lg-12">
        <table class="table table-stripped table-hover">
            <thead class="lg-scooter text-light">
                <tr>
                    <th>Customer Name</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Cost</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
          foreach($data as $display){?>
                <tr>
                    <td>
                        <?php echo $display->firstname.' '.$display->lastname;?>
                    </td>
                    <td>
                        <?php echo $display->product_name;?>
                    </td>
                    <td>
                        <?php echo 'MK'.number_format($display->price, 2);?>
                    </td>
                    <td>
                        <?php echo $display->quantity;?>
                    </td>
                    <td>
                        <?php echo 'MK'.number_format($display->cost, 2);?>
                    </td>
                    <td>
                        <?php echo date('n/j/Y', strtotime($display->date));?>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
        <div class="d-flex bd-highlight">
            <a href="controllers/sales_report/index.php" class="bd-highlight btn btn-sm btn-primary">
                sales_report.pdf
            </a>
        </div>
    </div>
</div>
</div>
<?php } else{?>
<div class="text-center bg-body border rounded w-75 mx-auto p-5" style="margin-top:20%;">
    <?php echo("Sales report is currently not available."); ?>
</div>
<?php }?>