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
		<a href="<?php echo site_url('artikel') ?>"><i class="fas fa-arrow-left"></i>Back</a>
	</div>
	<div>
		<form action="<?php base_url(" artikel/edit") ?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="kode_artikel" value="<?php echo $artikel->kode_artikel?>"/>
			<div>
				<label for="isi">Isi</label>
				<textarea name="isi"><?php echo $artikel->Isi?></textarea>
				<div>
					<?php echo form_error('isi') ?>
				</div>
			</div>
			<input type="hidden" name="username" value="<?php echo $artikel->username?>"/>
			<input type="submit" name="btn" value="Save" />
		</form>
	</div>
</body>
</html>
