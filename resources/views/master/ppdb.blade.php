<h1>tes</h1>
<br>

<form action="{{route('ppdb.add')}}" enctype="multipart/form-data" method="post">

	Jenis Pendaftaran
	<select name="jenis_pendaftaran">
		<option>baru</option>
		<option>pindahan</option>
	</select><br>
	Jalur Pendaftaran
	<select name="jalur_pendaftaran">
		<option>baru</option>
		<option>pindahan</option>
	</select><br>
	Pilihan 1
	<select name="pilihan">
		<option>baru</option>
		<option>pindahan</option>
	</select><br>
	pilihan 2 
	<select name="pilihan2">
		<option>baru</option>
		<option>pindahan</option>
	</select>
	Nomor Peserta UN
	<input type="text" name="nomor_un"> <br>
	Apakah pernah paud
	<select name="paud">
		<option>ya</option>
		<option>tidak</option>
	</select><br>
	Apakah pernah tk
	<select name="tk">
		<option>ya</option>
		<option>tidak</option>
	</select><br>
	hobi
	<input type="tex" name="hobi"> <br>
	Cita-Cita
	<input type="text" name="cita_cita"> <br>
	<h1>Data Pribadi</h1> <br>
	Nama Lengkap
	<input type="text" name="nama"> <br>
	Jenis Kelamin
	<select name="jenis_kel">
		<option>Laki-Laki</option>
		<option>Perempuan</option>
	</select> <br>
	NISN
	<input type="text" name="nisn"> <br>
	NIK
	<input type="text" name="nik"> <br>
	Tempat Lahir
	<input type="text" name="tempat_lhr"> <br>
	Tanggal Lahir
	<input type="date" name="tgl_lhr"> <br>
	Agama
	<select name="agama">
		<option>Islam</option>
		<option>Budha</option>
		<option>Hindu</option>
		<option>Kristen</option>
		<option>Katolik</option>
		<option>Khong Hu Chu</option>
		<option>Lainnya</option>
	</select> <br>
	Alamat
	<textarea name="alamat"></textarea>
	RT
	<input type="text" name="rt"> <br>
	RW
	<input type="text" name="rw"> <br>
	Nama Dusun
	<input type="text" name="dusun"> <br>
	Nama Desa
	<input type="text" name="desa"> <br>
	Kecamatan
	<input type="text" name="kecamatan"> <br>
	Kabupaten
	<input type="text" name="kota"> <br>
	Kode Pos
	<input type="text" name="kode_pos"> <br>
	Tempat Tinggal
	<select name="tempat_tinggal">
		<option>Asrama</option>
		<option>Bersama Orang Tua</option>
		<option>Kos</option>
		<option>Lainnya</option>
		<option>Panti Asuhan</option>
		<option>Wali</option>
	</select> <br>
	Moda Transportasi
	<select name="modal_transport">
		<option>Andong / Bendi / Sado / Dokar / Delman / Beca</option>
		<option>Jalan Kaki</option>
		<option>Jemputan Sekolah</option>
		<option>Kendaraan Pribadi</option>
		<option>Kendaraan Umum / angkot / pete-pete</option>
		<option>Kereta Api</option>
		<option>Ojek</option>
		<option>Perahu Penyebrangan / Rakit / Getek</option>
		<option>Lainnya</option>
	</select> <br>
	Nomor Hp
	<input type="text" name="nomor_hp"> <br>
	Nomor Telp
	<input type="tex" name="nomor_telp"> <br>
	Email Pribadi
	<input type="te" name="email"> <br>
	SKTM
	<input type="text" name="sktm"> <br>
	KKS
	<input type="text" name="kks"> <br>
	KPS
	<input type="text" name="kps"> <br>
	KIP
	<input type="text" name="kip"> <br>
	KIS
	<input type=text name="kis"> <br>
	Kewarganegaraan
	<select name="kewarganegaraan">
		<option>Warga Negara Indonesia</option>
		<option>Warga Negara Asing</option>
	</select> <br>

	<h1>Data Ayah Kandung</h1> <br>
	Nama Ayah Kandung
	<input type="text" name="nama_ayah"> <br>
	Tahun Lahir
	<input type="date" name="tgl_ayah"> <br>
	Pendidikan
	<select name="pendidikan_ayah">
		<option>D1</option>
		<option>D2</option>
		<option>D3</option>
		<option>D3</option>
		<option>D4/S1</option>
		<option>S2</option>
		<option>S3</option>
		<option>SD Sederajat</option>
		<option>SMP Sederajat</option>
		<option>SMA Sederajat</option>
		<option>Putus SD</option>
		<option>Tidak Sekolah</option>
	</select> <br>
	Penghasilan Bulanan
	<select name="penghasilan_ayah">
		<option>Kurang Dari 500.000</option>
		<option>500.000 - 999.000</option>
		<option>1 Juta - 1.999.999</option>
		<option>2 Juta - 4.999.999</option>
		<option>5 Juta - 20 Juta</option>
		<option>Lebih Dari 20 Juta</option>
	</select> <br>
	Kebutuhan Khusus
	<select name="kebutuhan_ayah">
		<option>Tidak</option>
		<option>Autis</option>
		<option>Bakat Istimewa</option>
		<option>Cerdas Istimewa</option>
		<option>Down Sindrome</option>
		<option>Hiper Aktif</option>
		<option>Indigo</option>
		<option>Kesulitan Belajar</option>
		<option>Narkoba</option>
		<option>Tuna Daksa Ringan</option>
		<option>Tuna Daksa Sedang</option>
		<option>Tuna Ganda</option>
		<option>Tuna Grahita Ringan</option>
		<option>Tuna Grahita Sedang</option>
		<option>Tuna Laras</option>
		<option>Tuna Netra</option>
		<option>Tuna Rungu</option>
		<option>Tuna Wicara</option>
	</select> <br>

	<h1>Data Ibu</h1>
	Nama Ibu Kandung
	<input type="text" name="nama_ibu"> <br>
	Tahun Lahir
	<input type="date" name="tgl_ibu"> <br>
	Pendidikan
	<select name="pendidikan_ibu">
		<option>D1</option>
		<option>D2</option>
		<option>D3</option>
		<option>D3</option>
		<option>D4/S1</option>
		<option>S2</option>
		<option>S3</option>
		<option>SD Sederajat</option>
		<option>SMP Sederajat</option>
		<option>SMA Sederajat</option>
		<option>Putus SD</option>
		<option>Tidak Sekolah</option>
	</select> <br>
	Penghasilan Bulanan
	<select name="penghasilan_ibu">
		<option>Kurang Dari 500.000</option>
		<option>500.000 - 999.000</option>
		<option>1 Juta - 1.999.999</option>
		<option>2 Juta - 4.999.999</option>
		<option>5 Juta - 20 Juta</option>
		<option>Lebih Dari 20 Juta</option>
	</select> <br>
	Kebutuhan Khusus
	<select name="kebutuhan_ibu">
		<option>Tidak</option>
		<option>Autis</option>
		<option>Bakat Istimewa</option>
		<option>Cerdas Istimewa</option>
		<option>Down Sindrome</option>
		<option>Hiper Aktif</option>
		<option>Indigo</option>
		<option>Kesulitan Belajar</option>
		<option>Narkoba</option>
		<option>Tuna Daksa Ringan</option>
		<option>Tuna Daksa Sedang</option>
		<option>Tuna Ganda</option>
		<option>Tuna Grahita Ringan</option>
		<option>Tuna Grahita Sedang</option>
		<option>Tuna Laras</option>
		<option>Tuna Netra</option>
		<option>Tuna Rungu</option>
		<option>Tuna Wicara</option>
	</select> <br>

	<h1>Data Wali</h1>
	Nama Wali
	<input type="text" name="nama_ayah"> <br>
	Tahun Lahir
	<input type="date" name="tgl_wali"> <br>
	Pendidikan
	<select name="pendidikan_wali">
		<option>D1</option>
		<option>D2</option>
		<option>D3</option>
		<option>D3</option>
		<option>D4/S1</option>
		<option>S2</option>
		<option>S3</option>
		<option>SD Sederajat</option>
		<option>SMP Sederajat</option>
		<option>SMA Sederajat</option>
		<option>Putus SD</option>
		<option>Tidak Sekolah</option>
	</select> <br>
	Penghasilan Bulanan
	<select name="penghasilan_wali">
		<option>Kurang Dari 500.000</option>
		<option>500.000 - 999.000</option>
		<option>1 Juta - 1.999.999</option>
		<option>2 Juta - 4.999.999</option>
		<option>5 Juta - 20 Juta</option>
		<option>Lebih Dari 20 Juta</option>
	</select> <br>
	Kebutuhan Khusus
	<select name="kebutuhan_wali">
		<option>Tidak</option>
		<option>Autis</option>
		<option>Bakat Istimewa</option>
		<option>Cerdas Istimewa</option>
		<option>Down Sindrome</option>
		<option>Hiper Aktif</option>
		<option>Indigo</option>
		<option>Kesulitan Belajar</option>
		<option>Narkoba</option>
		<option>Tuna Daksa Ringan</option>
		<option>Tuna Daksa Sedang</option>
		<option>Tuna Ganda</option>
		<option>Tuna Grahita Ringan</option>
		<option>Tuna Grahita Sedang</option>
		<option>Tuna Laras</option>
		<option>Tuna Netra</option>
		<option>Tuna Rungu</option>
		<option>Tuna Wicara</option>
	</select> <br>

<button type="submit">cok</button>

</form>