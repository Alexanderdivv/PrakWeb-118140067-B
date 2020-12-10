<!DOCTYPE html>
<html>
<head>
	<title>
		User PABW
	</title>
</head>
<body>
<table border="0" cellpadding="10" cellspacing="1" width="100%">
	<tr>
		<td align="center">User Dashboard</td>
	</tr>
	<tr>
		<td>
			Selamat datang <?= $this->session->userdata('username');?>
			Klik disini untuk <a href="<?=base_url('user/logout');?>" tite="logout"> Logout.
		</td>
	</tr>
</table>
<div>
	<a href="<?php echo site_url('artikel/add') ?>"><i class="fas fa-plus"></i> Add New</a>
</div>
<table border="1" width="60%" cellspacing="0">
		<thead>
		<tr>
			<th>Kode artikel</th>
			<th>Isi Artikel</th>
			<th>Username Owner</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($artikel as $value): ?>
		<tr align="center">
			<td width="150"><?php echo $value->kode_artikel ?></td>
			<td><?php echo $value->Isi ?></td>
			<td><?php echo $value->username ?></td>
			<td width="250">
				<a href="<?php echo site_url('artikel/edit/'.$value->kode_artikel) ?>">Edit</a> | 
				<a href="<?php echo site_url('artikel/delete/'.$value->kode_artikel) ?>">Hapus</a>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>
</body>
</html>