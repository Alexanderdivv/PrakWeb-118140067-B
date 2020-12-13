<!DOCTYPE html>
<html>
<head>
	<title>
		CRUD AJAX
	</title>
	<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
</head>
<body>
<button id="btn_tambah">Tambah data</button><br><br>
<div id="tampil_data">
	<?php include "tampil.php" ?>
</div>

<div id="crud">
</div>
<hr width="500" align="left">
<script type="text/javascript">
	$('#btn_tambah').click(function(){
		$("#crud").load("tambah.php");
	});	

	$("#crud").on("click","#submit_tambah",function(){
		var nim = $("#nim").val();
		var nama = $("#nama").val();
		var prodi = $("#prodi").val();
		var angkatan = $("#angkatan").val();
		$.ajax({
			url	: "proses.php?action=simpan",
			type	: 'post',
			data : 'nim='+nim+'&nama='+nama+'&prodi='+prodi+'&angkatan='+angkatan,
			success : function(data){
				$('#tampil_data').load("tampil.php");
			}
		});
	});

	$("#tampil_data").on("click", ".btn_edit", function(){
		var NIM = $(this).attr("value");
		$.ajax({
			url : "edit.php",
			type : 'get',
			data : {NIM:NIM},
			success : function(data){
				$('#crud').html(data);
			}
		});
		
	});

	$("#crud").on("click","#submit_edit",function(){
		var nim = $("#nim").val();
		var nama = $("#nama").val();
		var prodi = $("#prodi").val();
		var angkatan = $("#angkatan").val();
		$.ajax({
			url	: "proses.php?action=edit",
			type	: 'post',
			data : 'nim='+nim+'&nama='+nama+'&prodi='+prodi+'&angkatan='+angkatan,
			success : function(data){
				$('#tampil_data').load("tampil.php");
			}
		});
	});

  	$("#tampil_data").on("click", ".btn_hapus", function(){
  		var NIM = $(this).attr("value");
		$.ajax({
			url : "proses.php?action=delete",
			type : 'post',
			data : 'NIM='+NIM,
			success : function(data){
				$('#tampil_data').load("tampil.php");
			}
		});
		
	});
	</script>

</body>
</html>