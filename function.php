<?php 

    //inisialisasi koneksi mysqli
    $conn = mysqli_connect("localhost","root","","food_and_health");

    //baca dan masukkan query yang dipanggil
    function queryResep($x){
    global $conn;  
    $result = $conn->query($x);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
    return $rows;
    }

    //cari keyword resep
    function cari($x){
        $query = "SELECT * FROM resep WHERE 
                    judul LIKE '%$x%' OR
                    deskripsi LIKE '%$x%' OR
                    tag1 LIKE '%$x%' OR
                    tag2 LIKE '%$x%' OR
                    tag3 LIKE '%$x%' OR
                    tag4 LIKE '%$x%'
                ";
        return queryResep($query);
    }
    // cari kitchen tips
    function cari_kt($x){
        $query = "SELECT * FROM kitchen_tips WHERE judul LIKE '%$x%'";
        return queryResep($query);

    }

    //kirim status bookmark
    function bookmark_check($username, $blog_name){
    global $conn;
    $query = "SELECT * FROM bookmark WHERE username = '$username' AND blog_name = '$blog_name'";
    $result = $conn->query($query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    if(!isset($rows[0]["status"])){
        return "OFF";
    }
    else
    $bookmark_status = $rows[0]["status"];
    return $bookmark_status;
    error_reporting(0);
    }

    //login function
    function login(){
        global $conn;
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = $conn->query("SELECT * FROM user WHERE username = '$username'");
        if(mysqli_num_rows($result)===1)
        {
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"]))
            {
                $_SESSION["username"] = $username;
                header("Location:index.php");
            }
        }
    }

    //register function
    function register(){
        global $conn;
        $username = strtolower(stripslashes($_POST["username"]));
        $password = $conn->real_escape_string($_POST["password"]);


        $ambil_data_user = queryResep("SELECT username FROM user");
        $ambil_data_email = queryResep("SELECT email FROM user");

        foreach($ambil_data_user as $a){
            if ($a["username"]==$username){
                echo "<script>if(!alert('Username sudah terdaftar'))
                {window.location.href='login.php';}</script>";
                return false;
            }
        }
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            echo "<script>if(!alert('Email tidak valid'))
            {window.location.href='login.php';}</script>";
            return "halo0";
          }
        else{
            $email = $_POST["email"]; 
        }
        foreach($ambil_data_email as $b){
            if ($b["email"]==$email){
                echo "<script>if(!alert('Email sudah terdaftar'))
                {window.location.href='login.php';}</script>";
                return false;
            }
        }
        
        $password = password_hash($password,PASSWORD_DEFAULT);
        $insert = "INSERT INTO user (username, password, email) VALUES ('$username', '$password', '$email')";
        $conn->query($insert);
        $_SESSION["username"] = $username;
        header("Location:index.php");
        
    }

    //mengirimkan resep
    function kirim_resep(){
        global $conn;
        $username = $_POST["username"];
        $nama_resep = $_POST["nama_resep"];
        $komposisi = $_POST["komposisi"];
        $cara_buat = $_POST["cara_buat"];
        $deskripsi_resep = $_POST["deskripsi_resep"];
        $status_resep = $_POST["status_resep"];
        $gambar = gambar_validasi();

        if (!$gambar){
            return false;
        }

        $insert = "INSERT INTO submit_resep (username, nama_resep, deskripsi_resep, komposisi, cara_buat, gambar, status_resep) VALUES ('$username', '$nama_resep', '$deskripsi_resep', '$komposisi', '$cara_buat', '$gambar','$status_resep')";
        $conn->query($insert);
        return true;


    }

    //memvalidasi gambar
    function gambar_validasi(){
        $namafile = $_FILES["gambar"]["name"];
        $error = $_FILES["gambar"]["error"];
        $tmpName = $_FILES["gambar"]["tmp_name"];

        if ($error === 4){
            echo "<script>alert('Tidak ada gambar dipilih');</script>";
            return false;

        }
        $allowedextension = ['jpg', 'jpeg', 'png', 'jfif'];
        $extension = pathinfo($namafile,PATHINFO_EXTENSION);
        if (!in_array($extension, $allowedextension)){
            echo "<script>alert('Format file tidak mendukung');</script>";
            return false;
        }

        move_uploaded_file($tmpName, 'upload/submit-resep/'.$namafile);
        return $namafile;
    }

    //ubah foto profil
    function ubah_foto_profil(){
        global $conn;
        $username = $_SESSION["username"];


        $namafile = $_FILES["profile_pic"]["name"];
        $error = $_FILES["profile_pic"]["error"];
        $tmpName = $_FILES["profile_pic"]["tmp_name"];

        if ($error === 4){
            echo "<script>alert('Tidak ada gambar dipilih');</script>";
            return false;

        }
        $allowedextension = ['jpg', 'jpeg', 'png', 'jfif'];
        $extension = strtolower(pathinfo($namafile,PATHINFO_EXTENSION));
        if (!in_array($extension, $allowedextension)){ 
            return "<script>alert('Format file tidak mendukung');</script>";
        }
        $user_data = queryResep("SELECT * FROM user WHERE username = '$username'");
        $namafile = $user_data[0]["username"].".".pathinfo($namafile, PATHINFO_EXTENSION);
        $update = "UPDATE user SET gambar = '$namafile' WHERE username = '$username'";
        $conn->query($update);
        move_uploaded_file($tmpName, 'upload/foto-profil/'.$namafile);
        return "<script>alert('Foto Profil Ditambahkan');</script>";
    }

    function apply_foto_profil(){
        error_reporting(0);
        global $conn;
        $username = $_SESSION["username"];
        $result = $conn->query("SELECT * FROM user WHERE username = '$username'");
        $rows = [];
        while ($row = $result -> fetch_assoc()){
            $rows[] = $row;
        }

        if (isset($rows[0]["gambar"])) {
            $namafile = $rows[0]["gambar"];
            return $namafile;
        }
        else{
            return false;
        }

    }

    function apply_foto_profil_komentar($x){
        error_reporting(0);
        global $conn;
        $username = $x;
        $result = $conn->query("SELECT * FROM user WHERE username = '$username'");
        $rows = [];
        while ($row = $result -> fetch_assoc()){
            $rows[] = $row;
        }

        if (isset($rows[0]["gambar"])) {
            $namafile = $rows[0]["gambar"];
            return $namafile;
        }
        else{
            return false;
        }

    }

    function hapus_foto_profil(){
        global $conn;
        $username = $_SESSION["username"];
        $pilih_user = queryResep("SELECT * FROM user WHERE username = '$username'");
        if ($pilih_user[0]["gambar"]==""){
            return "<script>alert('Tidak ada foto profil dihapus');</script>";
        }else{
        unlink("upload/foto-profil/".$pilih_user[0]['gambar']);
        }

        $hapus = "UPDATE user SET gambar='' WHERE username = '$username'";
        if($conn->query($hapus) === TRUE){
            return "<script>alert('Berhasil Hapus Foto Profil');</script>";
        }
        else{
            return "<script>alert('Gagal Hapus Foto Profil');</script>";
        }



    }



    function ubah_password(){
        global $conn;
        $username = $_POST["username_for_password"];
        $pass_l = $_POST["password_lama"];
        $pass_b = $_POST["password_baru"];

        $result = $conn->query("SELECT * FROM user WHERE username = '$username'");
        if(mysqli_num_rows($result)===1)
        {
        $row = mysqli_fetch_assoc($result);
        if(password_verify($pass_l, $row["password"]))
            {
                $password = password_hash($pass_b,PASSWORD_DEFAULT);
                $update_password = "UPDATE user SET password = '$password' WHERE username = '$username'";
                $conn->query($update_password);
                echo "<script>alert('Berhasil Diupdate')</script>";
                // header("Location:profile.php");
            }
        if(!password_verify($pass_l, $row["password"])){
            echo "<script>alert('Password lama tidak cocok')</script>";
        }
    }
}

    function ubah_data_pengguna(){
        global $conn;
        $previous_username = $_SESSION["username"];
        $username = $_POST["username"];
        $nohp = $_POST["nohp"];
        $hash_password = $_POST["hash_password"];

        $ambil_data_user = queryResep("SELECT username FROM user WHERE username <>'$username'");
        $ambil_data_nohp = queryResep("SELECT nohp FROM user");
        foreach($ambil_data_user as $a){
            if ($a["username"]==$username){
                echo "<script>if(!alert('Username sudah terdaftar'))
                {window.location.href='login.php';}</script>";
                return false;
            }
        }
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            echo "<script>if(!alert('Email tidak valid'))
            {window.location.href='login.php';}</script>";
            return "halo0";
          }
        else{
            $email = $_POST["email"]; 
        }
        $ambil_data_email = queryResep("SELECT email FROM user WHERE email<>'$email'");
        foreach($ambil_data_email as $b){
            if ($b["email"]==$email){
                echo "<script>if(!alert('Email sudah terdaftar'))
                {window.location.href='login.php';}</script>";
                return false;
            }
        }
        foreach($ambil_data_nohp as $c){
            if ($c["nohp"]==$nohp){
                echo "<script>if(!alert('Nomor HP sudah terdaftar'))
                {window.location.href='login.php';}</script>";
                return false;
            }
        }

        $update_data = "UPDATE user SET username = '$username', email = '$email', nohp = '$nohp' WHERE password = '$hash_password'";
        $conn->query($update_data);
        $update_username_bookmark = "UPDATE bookmark SET username = '$username' WHERE username = '$previous_username'";
        $conn->query($update_username_bookmark);
        $update_username_comment = "UPDATE tbl_comment SET comment_sender_name = '$username' WHERE comment_sender_name = '$previous_username'";
        $conn->query($update_username_comment);
        $update_username_submit_resep = "UPDATE submit_resep SET username = '$username' WHERE username = '$previous_username'";
        $conn->query($update_username_submit_resep);

        $_SESSION["username"] = $username;
        echo "<script>if(!alert('Berhasil Diupdate'))
        {window.location.href='profile.php';}</script>";
       
    }

?>