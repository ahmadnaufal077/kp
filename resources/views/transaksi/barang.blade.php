@extends('layout.main')

@section('content')
<div class="container">
	<div class = "row">	
		<div class = "col-lg-12">
			<h3 class = "text-primary">Master sparepart Dengan Object Oriented Programming</h3>
			<hr style = "border-top:1px dotted #000;"/>
	
			<div class = "row">	
				<div class = "col-lg-6">
					<form method ="POST" action = "{{ route('barang.tambah') }}">
						@csrf
						<div class="form-group">
							<label>Nama Barang</label>
							<input type ="text" id="nominal" name = "nm_barang" class="form-control @error('nm_barang') is-invalid @enderror" autofocus>
						</div>
						<div class="form-group">
							<label>Harga Jual</label>
							<input type ="number" name = "harga_jual" class="form-control @error('harga_jual') is-invalid @enderror" required min='10000'>
						</div>
						<div class="form-group">
							<label>Diskon</label>
							<input type ="number" name = "diskon" class="form-control @error('diskon') is-invalid @enderror" required min='0'>
						</div>
						<div class="form-group">
							<label>Stok</label>
							<input type ="number" name = "stok" class="form-control @error('stock') is-invalid @enderror" required min='1'>
						</div>
	
						<div class = "form-group">
							<button type="submit" class = "btn btn-success">
								<span class = "glyphicon glyphicon-floppy-disk"></span> 
								Simpan
							</button>
						</div>
					</form>
				</div>
			</div>
			<br>
	
			<table class="table table-hover table-bordered" style="margin-top: 10px">
				<tr class="info">
					<th>CODE</th>
					<th>Nama Barang</th>
					<th>Harga Jual</th>
					<th>diskon</th>
					<th>stok</th>
					<th>Aksi</th>
				</tr>
				<tbody>
	
					@foreach ($data as $item)
						<tr>
							<td>{{ $item->kd_barang }}</td>
							<td>{{ $item->nm_barang }}</td>
							<td>{{ $item->harga_jual }}</td>
							<td>{{ $item->diskon }}</td>
							<td>{{ $item->stok }}</td>
	
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
</div>
@endsection

