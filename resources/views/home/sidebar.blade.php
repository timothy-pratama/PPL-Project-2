<div class ="col-md-2">
	<ul class="nav nav-pills nav nav-stacked">
		<li <?php if ($jenis == 'IzinUsahaTokoModern') echo 'class = "active"';?> >
			<a href="<?php if ($jenis == 'IzinUsahaTokoModern') echo '#'; 
			else { if ($stats == "admin") echo url('/Admin/izin/IzinUsahaTokoModern'); else if ($stats == "user") echo url('/izin/IzinUsahaTokoModern');}?>">Izin Usaha Toko Modern</a>
		</li>
		<li <?php if ($jenis == 'IzinUsahaPusatPerbelanjaan') echo 'class = "active"';?> >
			<a href="<?php if ($jenis == 'IzinUsahaPusatPerbelanjaan') echo '#'; 
			else { if ($stats == "admin") echo url('/Admin/izin/IzinUsahaPusatPerbelanjaan'); else if ($stats == "user") echo url('/izin/IzinUsahaPusatPerbelanjaan');}?>">Izin Usaha Pusat Perbelanjaan</a>
		</li>
		<li <?php if ($jenis == 'IzinUsahaPasarTradisional') echo 'class = "active"';?> >
			<a href="<?php if ($jenis == 'IzinUsahaPasarTradisional') echo '#'; 
			else { if ($stats == "admin") echo url('/Admin/izin/IzinUsahaPasarTradisional'); else if ($stats == "user") echo url('/izin/IzinUsahaPasarTradisional');}?>">Izin Pengelolaan Pasar Tradisional</a>
		</li>
		<li <?php if ($jenis == 'IzinTempatPenjualanMinumanBeralkohol') echo 'class = "active"';?> >
			<a href="<?php if ($jenis == 'IzinTempatPenjualanMinumanBeralkohol') echo '#'; 
			else { if ($stats == "admin") echo url('/Admin/izin/IzinTempatPenjualanMinumanBeralkohol'); else if ($stats == "user") echo url('/izin/IzinTempatPenjualanMinumanBeralkohol');}?>">Izin Tempat Penjualan Minuman Beralkohol</a>
		</li>
		<li <?php if ($jenis == 'TandaPendaftaranWaralaba') echo 'class = "active"';?> >
			<a href="<?php if ($jenis == 'TandaPendaftaranWaralaba') echo '#'; 
			else { if ($stats == "admin") echo url('/Admin/izin/TandaPendaftaranWaralaba'); else if ($stats == "user") echo url('/izin/TandaPendaftaranWaralaba');}?>">Izin Tanda Pendaftaran Waralaba</a>
		</li>
	</ul>
</div>