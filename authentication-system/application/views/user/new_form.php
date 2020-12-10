<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
	<?php if ($this->session->flashdata('success')): ?>
	<div role="alert">
		<?php echo $this->session->flashdata('success'); ?>
	</div>
	<?php endif; ?>
	<div>
		<a href="<?php echo site_url('artikel') ?>"> Back</a>
	</div>
		<form action="<?php base_url('artikel/add') ?>" method="post" enctype="multipart/form-data" >
			<div>
				<label for="kode_artikel">Kode Artikel*</label>
				<input <?php echo form_error('kode_artikel') ? 'is-invalid':'' ?>"
				type="text" name="kode_artikel"/>
				<div>
					<?php echo form_error('kode_artikel') ?>
				</div>
			</div>				
		
			<div>
				<label for="isi">Isi</label>
				<textarea <?php echo form_error('isi') ? 'is-invalid':'' ?>" name="isi" ></textarea>
				<div>
					<?php echo form_error('isi') ?>
				</div>
			</div>
			<div>
				<label for="username">Owner Username</label>
				<input type="text" name="username" />
				<div>
					<?php echo form_error('username') ?>
				</div>
			</div>
			<input type="submit" name="btn" value="Save" />
		</form>
		<div>
			* required fields
		</div>
</body>
</html>