<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Development method</title>
</head>
<body>
<style>
    .bg-body {
        background-color: #fff!important;
    }
    .text-secondary {
         color: #6c757d!important;
    }
    .py-5 {
         padding-top: 3rem!important;
         padding-bottom: 3rem!important;
    }
    .px-4 {
         padding-right: 1.5rem!important;
         padding-left: 1.5rem!important;
    }
    .pt-5 {
    padding-top: 3rem!important;
}
.mx-auto {
    margin-right: auto!important;
    margin-left: auto!important;
}
    .display-5 {
    font-size: calc(1.425rem + 2.1vw);
    font-weight: 300;
    line-height: 1.2;
}
    .text-center {
        text-align: center!important;
    }
	.theme-color {
		color: #2895ab!important;
	}
    .error {
        color: #bf2945!important;
    }
	.btn-outline {
		color: #2895ab!important;
		border-color: #2895ab!important;
	}
	.btn:hover {
		color: #fff!important;
		background-color: #2895ab!important;
		border-color: #2895ab!important;
	}
</style>
    <div class="bg-body error-box text-secondary py-5 px-4 text-center" style="height: 80vh;">
        <?php
        if (CONFIG['environment'] == '' && CONFIG['environment'] == NULL) {?>
        <div class="py-5 actual-error">
            <div style="padding-top:10%;">
            <div class="col-lg-6 mx-auto">
                <p class="fs-5 display-5">
                <h1 class="display-5 error">ERROR: System Environment!</h1>
                The system environment is not set. if you are seeing this error. make sure to set the environment in which your system is in. in <b>configurations/config.php</b>
                </p>
            </div>
            </div>
        </div>    
        <?php } else {?>
        <div class="py-5 actual-error">
            <div style="padding-top: 115px;">
            <h1 class="display-5 pt-5 theme-color">404 Page Not Found</h1>
            <div class="col-lg-6 mx-auto">
                <p class="fs-5 display-5 mb-4">
                Page you are trying to access does not exist or might be temporally unvailable.
                </p>
            <?php 
                if(CONFIG['environment'] === 'development') :?>
                    <small class="error">
                        <span class="fw-bold">PAGE NOT FOUND</span>
                        <b>:<?php echo $page.'.php';?></b>
                    </small>
            <?php endif;?>
            </div>
            </div>
        </div>
        <?php }?>
    </div>
</body>

</html>
<?php 
exit();
?>