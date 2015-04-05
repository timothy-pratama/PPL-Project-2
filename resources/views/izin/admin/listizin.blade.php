<div class ="col-md-10">
	@if ( !$izin->count() )
		Tidak ada izin usaha toko modern
	@else
	<table class ="table table-hover" style="border-style: solid; text-align:center;">
		<tr style="border-style: solid;">
			<td>ID</td>
			<td>Nama Pemohon</td>
			<td>Tanggal Masuk</td>
			<td>Berlaku Sampai</td>
			<td>Status Izin</td>
			<td>File Pengajuan Izin</td>
		</tr>
		@foreach($izin as $i)
		<tr>
			<td>{{ $i->id }}</td>
			<td>{{ $i->NamaPemohon }}</td>
			<td>{{ $i->TanggalMasuk }}</td>
			<td>{{ $i->BerlakuSampai }}</td>
			<td>
				<div class="btn-group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						{{ $i->StatusIzin }} <span class="caret"></span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li><a href= "{{ url('Admin/izin/'.$jenis.'/'.$i->id.'/Sudah Diterima') }}">Diterima</a></li>
						<li><a href= "{{ url('Admin/izin/'.$jenis.'/'.$i->id.'/Diproses') }}">Diproses</a></li>
						<li class="divider"></li>
						<li><a href="{{ url('Admin/izin/'.$jenis.'/'.$i->id.'/Disetujui') }}">Disetujui</a></li>
						<li><a href="{{ url('Admin/izin/'.$jenis.'/'.$i->id.'/Ditolak') }}">Ditolak</a></li>
					</ul>
				</div>
			</td>
			<td><a href ="#">Download </a></td>
		</tr>
		@endforeach
		</table>
	@endif
</div>