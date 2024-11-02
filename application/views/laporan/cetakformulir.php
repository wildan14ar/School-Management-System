<style type="text/css">
	html {
		font-size: 10px;
		-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
	}

	body {
		font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
		font-size: 12px;
		line-height: 1.42857143;
		color: #000;
		background-color: #fff;
	}

	table {
		border-spacing: 0;
		border-collapse: collapse
	}

	td,
	th {
		padding: 0;
	}

	.text-left {
		text-align: left;
	}

	.text-right {
		text-align: right;
	}

	.text-center {
		text-align: center;
	}

	.text-justify {
		text-align: justify;
	}

	.text-nowrap {
		white-space: nowrap;
	}

	.text-lowercase {
		text-transform: lowercase;
	}

	.text-uppercase {
		text-transform: uppercase;
	}

	.text-capitalize {
		text-transform: capitalize;
	}

	.pull-right {
		float: right !important;
	}

	.pull-left {
		float: left !important;
	}

	.kiri {
		padding-left: 4px;
	}

	.kanan {
		padding-right: 4px;
	}

	.btop {
		border-top: 1px solid black;
	}

	.bbottom {
		border-bottom: 1px solid black;
	}

	.bleft {
		border-left: 1px solid black;
	}

	.bright {
		border-right: 1px solid black;
	}

	.ball {
		border: 1px solid black;
	}
</style>
<p class="text-center">
	<span style="font-weight: bold; font-size: 17px">FORMULIR PENERIMAAN PESERTA SANTRI BARU</span>
	<br>
	<span style="font-weight: bold; font-size: 22px">"<?= $web['nama'] ?>"</span>
	<br>
	<span style="font-size: 15px;">Alamat : <?= $web['alamat'] ?></span>
	<br>
	<span style="font-size: 15px;">No Telp : <?= $web['telp'] ?> E-mail : <?= $web['email'] ?></span>
	<br>
	<span style="font-size: 17px">Tahun <?= date("Y"); ?>/<?= date("Y") + 1; ?></span>
	<br>
	<hr>
	<br>
</p>
<p><b>Biodata siswa</b></p>
<table width="100%" style="font-size: 14px;" cellspacing="2">
	<tr>
		<td align="" width="5%">1. </td>
		<td width="20%">Nomer Daftar</td>
		<td width="3%">:</td>
		<td width="50%"><?= $ppdb['no_daftar'] ?></td>
	</tr>
	<tr>
		<td align="">3. </td>
		<td>Nama</td>
		<td>:</td>
		<td><?= strtoupper($ppdb['nama']); ?></td>
	</tr>
	<tr>
		<td align="">4. </td>
		<td>NIK</td>
		<td>:</td>
		<td><?= $ppdb['nik'] ?></td>
	</tr>
	<tr>
		<td align="">5. </td>
		<td>NISN</td>
		<td>:</td>
		<td><?= $ppdb['nis'] ?></td>
	</tr>
	<tr>
		<td align="">6. </td>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><?= $ppdb['jk'] ?></td>
	</tr>
	<tr>
		<td align="">7. </td>
		<td>Tempat Lahir</td>
		<td>:</td>
		<td><?= $ppdb['kab'] ?></td>
	</tr>
	<tr>
		<td align="">8. </td>
		<td>Tanggal Lahir</td>
		<td>:</td>
		<td><?= mediumdate_indo(date($ppdb['ttl'])) ?></td>
	</tr>
	<tr>
		<td align="">9. </td>
		<td>Alamat</td>
		<td>:</td>
		<td><?= $ppdb['alamat'] ?></td>
	</tr>
	<tr>
		<td align="">10. </td>
		<td>Asal Sekolah</td>
		<td>:</td>
		<td><?= $ppdb['sekolah_asal'] ?></td>
	</tr>
	<tr>
		<td align="">11. </td>
		<td>Email</td>
		<td>:</td>
		<td><?= $ppdb['email'] ?></td>
	</tr>
	<tr>
		<td align="">12. </td>
		<td>No HP</td>
		<td>:</td>
		<td><?= $ppdb['no_hp'] ?></td>
	</tr>
	<tr>
		<td align="">13. </td>
		<td>Nama Ayah</td>
		<td>:</td>
		<td><?= $ppdb['nama_ayah'] ?></td>
	</tr>
	<tr>
		<td align="">14. </td>
		<td>Nama Ibu</td>
		<td>:</td>
		<td><?= $ppdb['nama_ibu'] ?></td>
	</tr>
	<tr>
		<td align="">15. </td>
		<td>Status</td>
		<td>:</td>
		<td>KONFIRMASI</td>
	</tr>
</table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<table width="100%" style="font-size: 14px;">
	<tr>
		<td width="50%" align="center">Panitia PPDB <?= $web['nama']; ?><br><br><br><br><br>( ................................... )</td>
		<td width="50%" align="center">siswa Yang Mendaftar <br><br><br><br><br>( ................................... )</td>
	</tr>
</table>