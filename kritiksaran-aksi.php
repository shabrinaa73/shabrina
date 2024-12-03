<?php
include 'koneksi.php';

$nama= $_POST ['nama'];
$instagram = $_POST['instagram'];
$kritik = $_POST['kritik'];
$saran = $_POST['saran'];
mysqli_query($conn,"insert into people values ('$nama','$instagram','$kritik','$saran')");

    echo "
     <script>
        alert('Thank You For Your Critics & Suggestions!');
        document.location.href = 'peoplesaid.php';
     </script>
    ";
    ?>