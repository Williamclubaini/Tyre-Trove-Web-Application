<!-- ! Main -->
<?php 
  if(!empty($data)){?>
<div class="pt-3 pb-2 border-bottom">
    <h4 class="fw-normal"><i class="bi bi-people"></i> Customers</h4>
    <span class="fst-italic">All customers registered to the system.</span>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="users-table table-wrapper">
            <table class="table table-stripped table-hover">
                <thead class="lg-scooter text-light">
                    <tr>
                        <th>Customer name</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Location</th>
                        <th>Registered Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
            foreach($data as $user):?>
                    <tr>
                        <td>
                            <?php echo $user->firstname.' '.$user->lastname;?>
                        </td>
                        <td>
                            <?php echo $user->contact;?>
                        </td>
                        <td>
                            <?php echo $user->email;?>
                        </td>
                        <td>
                            <?php echo $user->location;?>
                        </td>
                        <td>
                            <?php echo $user->registerDate;?>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<?php 
} else{?>
<div class="text-center bg-body border rounded w-75 mx-auto p-5" style="margin-top:20%;">
    <?php echo("No users found."); ?>
</div>
<?php }?>