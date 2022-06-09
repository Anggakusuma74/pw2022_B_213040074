<?php 

function koneksi() {
    $conn = mysqli_connect('localhost', 'root', '', 'tubespw2022') or die('KONEKSI GAGAL!');

    return $conn;
}

function query($query) {
    $conn = koneksi();
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data) {
    $conn = koneksi();

    // jalankan fungsi upload gambar
    // jika user tidak memilih gambar
    if($_FILES["gambar"]["error"] === 4) {
        $gambar = 'no photo.png'; 
    } else {
        // jalankan fungsi upload gambar
        $gambar = upload();
        // cek jika upload gagal
        if(!$gambar) {
            return false;
        }
    }

    $judul = htmlspecialchars($data['judul']);
    $genre = htmlspecialchars($data['genre']);
    $durasi = htmlspecialchars($data['durasi']);
    $sutradara = htmlspecialchars($data['sutradara']);
    $penulis = htmlspecialchars($data['penulis']);
    $pemeran = htmlspecialchars($data['pemeran']);
    $sinopsis = htmlspecialchars($data['sinopsis']);
    // $gambar = htmlspecialchars($data['gambar']);


    $query = "INSERT INTO koleksi_film VALUES (null, '$judul', '$genre', '$durasi', '$sutradara', '$penulis', '$pemeran', '$sinopsis', '$gambar')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    $conn = koneksi();
    
    // query kumpulan_film berdasarkan id
    $kf = query("SELECT * FROM koleksi_film WHERE id = $id")[0];

    // hapus file gambar, kecuali gambar default
    if($kf["gambar"] !== 'no photo.png') {
        unlink('img/' . $kf["gambar"]);
    }

    mysqli_query($conn, "DELETE FROM koleksi_film WHERE id = $id") or die (mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


function ubah($data) {

    $conn = koneksi();

    $id = $data["id"];
    $judul = htmlspecialchars($data['judul']);
    $genre = htmlspecialchars($data['genre']);
    $durasi = htmlspecialchars($data['durasi']);
    $sutradara = htmlspecialchars($data['sutradara']);
    $penulis = htmlspecialchars($data['penulis']);
    $pemeran = htmlspecialchars($data['pemeran']);
    $sinopsis = htmlspecialchars($data['sinopsis']);
    $gambar = htmlspecialchars($data['gambar']);

    $query = "UPDATE koleksi_film SET 
        judul = '$judul', 
        genre = '$genre', 
        durasi = '$durasi',
        sutradara = '$sutradara',
        penulis = '$penulis', 
        pemeran = '$pemeran', 
        sinopsis = '$sinopsis', 
        gambar = '$gambar' 
        WHERE id = $id "; 

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


function hapus_profile($id) {
    $conn = koneksi();
    
    mysqli_query($conn, "DELETE FROM d_profile WHERE id_profile = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubah_profile($data) {
    $conn = koneksi();

    $id = $data["id"];
    $nama = htmlspecialchars($data['nama']);
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);
    $email = htmlspecialchars($data['email']);
    $alamat = htmlspecialchars($data['alamat']);

    $query = "UPDATE d_profile SET 
        nama = '$nama', 
        username = '$username', 
        password = '$password',
        email = '$email',
        alamat = '$alamat' 
        WHERE id_profile = $id "; 

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}


function upload() 
{
    // siapkan data gambar
    $filename = $_FILES["gambar"]["name"];
    $filetmpname = $_FILES["gambar"]["tmp_name"];
    $filesize = $_FILES["gambar"]["size"];
    $filetype = pathinfo($filename, PATHINFO_EXTENSION); 
    $allowedtype = ["jpg", "jpeg", "png"];

    // cek apakah file yang diupload bukan gambar
    if(!in_array($filetype, $allowedtype)) {
        echo "<script>
                alert('yang anda upload bukan gambar!');
            </script>";
        return false;
    }

    // cek apakah gambar terlalu besar
    if($filesize > 1000000) {
        echo "<script>
                 alert('ukuran gambar terlalu besar!');
            </script>";
        return false;
    }

    // lolos pengecekan, siap untuk upload
    $newfilename = uniqid() . $filename;
    move_uploaded_file($filetmpname, 'img/' . $newfilename);

    return $newfilename;

}



function login($data) {
    $conn = koneksi();

        if( isset($_POST["login"]) ) {
    
            $username = htmlspecialchars($_POST["username"]);
            $password = htmlspecialchars($_POST["password"]);
        
            $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
        
            // cek username
            if( mysqli_num_rows($result) === 1 ) {
        
                // cek password
                $row = mysqli_fetch_assoc($result);
                if( password_verify($password, $row["password"]) ) {
                    // set session
                    $_SESSION["login"] = true;
        
                    header("Location: index.php");
                    exit;
                }
                return [
                    'error' => true,
                    'pesan' => 'Pengguna / Kata Sandi Salah!'
                ];
            }
        
        }
}






function registrasi($data) {
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password1 = mysqli_real_escape_string($conn, $data['password1']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    // jika username / password kosong
    if(empty($username) || empty($password1) || empty($password2)) {
        echo "<script>
               alert('Pengguna / Kata Sandi tidak boleh kosong!');
               document.location.href='registrasi.php';
             </script>";
    return false;
    }

    // jika username sudah ada
    if (query("SELECT * FROM user WHERE username = '$username'")) {
        echo "<script>
                alert('Pengguna sudah terdaftar!');
                document.location.href='registrasi.php';
             </script>";
    return false;
    }

    // jika konfirmasi password tidak sesuai
    if ($password1 !== $password2) {
        echo "<script>
                alert('konfirmasi kata sandi tidak sesuai!');
                document.location.href='registrasi.php';
             </script>";
    return false;
    }

    // jika password < 5 digit
    if (strlen($password1) < 5) {
        echo "<script>
                alert('kata sandi terlalu pendek!');
                document.location.href='registrasi.php';
             </script>";
    return false;
    }

    // jika username < 5 digit
    if (strlen($username) < 5) {
        echo "<script>
                alert('pengguna terlalu pendek!');
                document.location.href='registrasi.php';
             </script>";
    return false;
    }
    // jika username & password nya sudah sesuai
    // enkripsi password
    $password_baru = password_hash($password1, PASSWORD_DEFAULT);
    // insert ke tabel user
    $query = "INSERT INTO user
                VALUES
             (null, '$username', '$password_baru')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}
