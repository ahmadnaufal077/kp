<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
      body{
        background-color:  #f0f5f5;
        /*background: transparent;*/
      }
      form, table{
      	background-color: white;
      	padding:20px;
      	border-radius: 5px;

      }
    </style>

</body>
</html>


<div class = "row">	
	<div class = "col-lg-12">
		<h3 class = "text-primary">Master jasa Dengan Object Oriented Programming</h3>
		<hr style = "border-top:1px dotted #000;"/>

		<div class = "row">	
			<!-- <div class = "col-lg-3"></div> -->
			<div class = "col-lg-6">
				<form method ="POST"action = "panggil/jasa/tambah.php">

					<div class="form-group">
						<label>Kode jasa</label>
						<input type ="text" id="nominal" name = "kode" value="<?php echo date('dhis'); ?>" class="form-control" readonly>
					</div>
					<div class="form-group">
						<label>Nama jasa</label>
						<input type ="text" id="nominal" name = "nama" class="form-control" autofocus required>
					</div>
					<div class="form-group">
						<label>Harga Jual</label>
						<input type ="number" name = "hargaJual" class="form-control" required min="5000">
					</div>
					<div class="form-group">
						<label>Diskon</label>
						<input type ="number" name = "diskon" class="form-control" required min="0">
					</div>
					<div class = "form-group">
						<button name = "save" class = "btn btn-success">
							<span class = "glyphicon glyphicon-floppy-disk"></span> 
							Simpan
						</button>
					</div>
				</form>
			</div><!-- .col-lg-6 -->
			<div class = "col-lg-3"></div>
		</div><!-- .row -->
		<br>

		<table class="table table-hover table-bordered" style="margin-top: 10px">
			<tr class="info">
				<th>No</th>
				<th>Nama jasa</th>
				<th>Harga Jual</th>
				<th>diskon</th>
				<th>Aksi</th>
			</tr>
			<tbody>

				@foreach ($data as $item)
					<tr>
						<td>{{ $item->kd_jasa }}</td>
						<td>{{ $item->nm_jasa }}</td>
						<td>{{ $item->harga }}</td>
						<td>{{ $item->diskon }}</td>

						<td style="text-align: center;">
							<a href="" class="btn btn-primary btn-sm">
								<span class = "glyphicon glyphicon-edit"></span> Edit
							</a> 
							<a onclick="return confirm('Apakah yakin data akan di hapus?')" href="" class="btn btn-danger btn-sm">
								<span class = "glyphicon glyphicon-trash"></span> Hapus
							</a>
						</td>
					</tr>
				@endforeach

			</tbody>
		</table>
	</div>
</div>

