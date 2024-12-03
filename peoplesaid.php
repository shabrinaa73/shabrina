<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shabrina Diary's</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity=
    "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            background-color:#FFD9DA;
        }
        h2{
            font-size: 20px;
        }
        .card-horizontal {
            display:block;
            width:50%;
            margin:0 auto;
            justify-content: center;  
        }
    </style>
</head>
<body>
        
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Shabrina Diary's</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutme.php">About Me</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kritiksaran.php">Critics & Suggestions</a>
        <li class="nav-item">
        <a class="nav-link" href="peoplesaid.php">What People Said?</a>
      </li>
      </li>
    </ul>
  </div>
</nav>
<br>
<br>
<h2 class="text-center">What People Said?
</h2>
<br>
    <div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title text-center">Critics & Suggestions</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-md text-center">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Instagram</th>
                            <th>Critics</th>
                            <th>Suggestions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';
                        $select = mysqli_query($conn, "SELECT * FROM people ");
                        if (mysqli_num_rows($select) > 0) {
                            while ($hasil = mysqli_fetch_array($select)) {
                                echo "<tr>";
                                echo "<td>" . $hasil['nama'] . "</td>";
                                echo "<td>" . $hasil['instagram'] . "</td>";
                                echo "<td>" . $hasil['kritik'] . "</td>";
                                echo "<td>" . $hasil['saran'] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr class='text-center'><td colspan='6'>Data kosong</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</body>
</html>