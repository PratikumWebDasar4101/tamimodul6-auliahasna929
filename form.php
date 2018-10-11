<?php
session_start();
if(isset($_SESSION["pesan_nama"]) || isset($_SESSION["pesan_nim"]) || isset($_SESSION["pesan_email"])) {
    if(isset($_SESSION["pesan_nama"])) {
        $pesan_nama = $_SESSION["pesan_nama"];
    }else {
        $pesan_nama = "";
    }
    if(isset($_SESSION["pesan_nim"])) {
        $pesan_nim = $_SESSION["pesan_nim"];
    }else {
        $pesan_nim = "";
    }
    if(isset($_SESSION["pesan_email"])) {
        $pesan_email = $_SESSION["pesan_email"];
    }else {
        $pesan_email = "";
    }
    session_destroy();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
    <style type="text/css">
        input[type=text],input[type=password],select {
            width: 230px;
            height: 20px;
        }
    </style>
</head>
<body>
    <form action="submit.php" method="post">
        <h2 align="center">Form Registrasi</h2>
        <table align="center" cellpadding="2">
			<tr>
				<td>Username</td>
			</tr>
			<tr>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
			</tr>
			<tr>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Nama</td>
			</tr>
			<tr>
				<td>
                    <input type="text" name="nama">
                    <?php if(isset($_SESSION["pesan_nama"])) { ?>
                    <p><?php echo $pesan_nama ?></p>
                    <?php } ?>
                </td>
			</tr>
			<tr>
				<td>NIM</td>
			</tr>
			<tr>
				<td>
                    <input type="text" name="nim">
                    <?php if(isset($_SESSION["pesan_nim"])) { ?>
                    <p><?php echo $pesan_nim ?></p>
                    <?php } ?>
                </td>
			</tr>
			<tr>
				<td>Kelas</td>
			</tr>
			<tr>
				<td>
					<input type="radio" name="kelas" value="1">01
					<input type="radio" name="kelas" value="2">02
					<input type="radio" name="kelas" value="3">03
					<input type="radio" name="kelas" value="4">04
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
			</tr>
			<tr>
				<td>
					<input type="radio" name="jk" value="laki-laki">Laki-laki
					<input type="radio" name="jk" value="perempuan">Perempuan
				</td>
			</tr>
			<tr>
				<td>Hobi</td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" name="hobi[]" value="Membaca">Membaca<br>
					<input type="checkbox" name="hobi[]" value="Travelling">Travelling<br>
					<input type="checkbox" name="hobi[]" value="Menonton">Menonton<br>
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
			</tr>
			<tr>
				<td>
					<select name="fak">
						<option value="Ilmu Terapan">Ilmu Terapan</option>
						<option value="Informatika">Informatika</option>
						<option value="Teknik Elektro">Teknik Elektro</option>
						<option value="Teknik Fisika">Teknik Fisika</option>
						<option value="Administrasi Bisnis">Administrasi Bisnis</option>
						<option value="Komunikasi Bisnis">Komunikasi Bisnis</option>



					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
			</tr>
			<tr>
				<td><textarea name="alamat" id="" cols="26" rows="1"></textarea></td>
			</tr>
			<tr>
				<td align="right"><input type="submit" name="submit" value="Kirim"></td>
			</tr>
        </table>
    </form>
</body>
</html>