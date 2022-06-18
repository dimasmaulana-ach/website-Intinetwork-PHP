<?php
session_start();
if (!isset($_SESSION["log_user"])){
    echo "<script>alert('Belum Login');location.href='index.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin | Interlink Network Indonesia</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>

<?php
include "koneksi.php";
?>
    <div class="header-about">
        <nav id="navbar">
            <img src="../image/logo.png" class="logo">
            <ul id="menu">
                <li class="listUnSolid"><a href="karyawan.php">Home</a></li>
                <li class="solid"><a href="brochure.php">Brochure</a></li>
                <li class="listUnSolid"><a href="Service.php">Contact</a></li>
                <li class="listUnSolid"><a href="logout.php">Log Out</a></li>
                <li class="listUnSolid"><a href="logout.php"><?php echo $_SESSION['name']?></a></li>
            </ul>
        </nav>
    </div>
    <div class="jumbotron-about">
        <h1>Brochure</h1> 
    </div>


    <!-- <div class="container"> -->
    <div style="margin: 200px 8%;" class="card">
        <div class="card-header">
            <h1>DATA PETUGAS</h1>
            <form method="POST" action="brochure.php" class="d-flex">
                <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include "koneksi.php";
                if (isset($_POST['cari'])) {
                    $cari = $_POST['cari'];
                    $query_brochure = mysqli_query($koneksi, "SELECT * from brochure where id = '$cari' or name like '%$cari%' or phone like '%$cari%'");
                }
                else{
                    $query_brochure = mysqli_query($koneksi, "SELECT * from brochure");
                }
                while($data_brochure = mysqli_fetch_array($query_brochure)){
            ?>
                <tr>
                    <td><?=$data_brochure['id']?></td>
                    <td><?=$data_brochure['name']?></td>
                    <td><?=$data_brochure['email']?></td>
                    <td><?=$data_brochure['phone']?></td>
                    <td><?=$data_brochure['deskripsi']?></td>
                    <td>
                        <a href="admin_hapus.php?id_petugas=<?=$data_db_admin['id_petugas']?>" class="btn btn-danger"
                        onclick="return confirm('Apakah anda yakin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
        <a href="admin_tambah.php" type="button" class="btn btn-primary">Print</a>
        </div>
    </div>
    <!-- </div> -->
    

    <script>
        var navbar = document.getElementById("navbar");
        var menu = document.getElementById("menu");

        window.onscroll = function(){
            if(window.pageYOffset >= menu.offsetTop){
                navbar.classList.add("sticky");
            }
            else{
                navbar.classList.remove("sticky");
            }
        }
    </script>
</body>
</html>