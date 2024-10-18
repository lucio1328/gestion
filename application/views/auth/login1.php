<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Bootstrap 5 Login Page</title>

 </head>

<body>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Se connecter</h1>
							<?php echo form_open('Auth/login_form'); ?>	
							<div class="mb-3">
								<label class="mb-2 text-muted" for="email">Email</label>
								<input id="email" type="email" class="form-control" name="email" value="" required autofocus>								
							</div>

							<div class="mb-3">
							
								<label class="mb-2 text-muted" for="password">Mot de Passe</label>
								<input id="password" type="password" class="form-control" name="password" required>
								
							</div>

							<div class="d-flex align-items-center">
							
								<button type="submit" class="btn btn-primary ms-auto">
									se connecter
								</button>
							</div>
							<?php echo form_close(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php if ($this->session->flashdata('suc')) {?>
    toastr.success("<?php echo $this->session->flashdata('suc'); ?>");
<?php } else if ($this->session->flashdata('wrong')) { ?>
    toastr.error("<?php echo $this->session->flashdata('wrong'); ?>");
<?php } elseif ($this->session->flashdata('warning')) { ?>
    toast.warning("<?php echo $this->session->flashdata('warning'); ?>");
<?php } elseif ($this->session->flashdata('info')) { ?>
    toastr.info("<?php echo $this->session->flashdata('info'); ?>");
<?php }?>
<?php
    $this->session->unset_userdata('suc');?>
<?php
    $this->session->unset_userdata('wrong');?>
</body>
</html>