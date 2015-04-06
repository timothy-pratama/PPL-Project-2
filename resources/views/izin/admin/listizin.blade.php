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
			<td>
				<?php
					$source = $i->TanggalMasuk;
					$date = new DateTime($source);
					echo $date->format('d-m-Y');
				?>
			</td>
			<td>
				<input type="date" name="BerlakuSampai">		
			</td>
			<td>
				<div class="btn-group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						{{ $i->StatusIzin }} <span class="caret"></span>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li><a href= "{{ url('Admin/izin/'.$jenis.'/'.$i->id.'/status/Diterima') }}">Diterima</a></li>
						<li><a href= "{{ url('Admin/izin/'.$jenis.'/'.$i->id.'/status/Diproses') }}">Diproses</a></li>
						<li class="divider"></li>
						<li><a href="{{ url('Admin/izin/'.$jenis.'/'.$i->id.'/status/Disetujui') }}">Disetujui</a></li>
						<li><a href="{{ url('Admin/izin/'.$jenis.'/'.$i->id.'/status/Ditolak') }}">Ditolak</a></li>
					</ul>
				</div>
			</td>
			<td><a href ="{{url('/Admin/izin/'.$jenis.'/'.$i->id.'/Download') }}">Download </a></td>
		</tr>
		@endforeach
		</table>
	@endif
</div>