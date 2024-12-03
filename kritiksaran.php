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
            font-size: 15px;
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
      </li>
      <li class="nav-item">
        <a class="nav-link" href="peoplesaid.php">What People Said?</a>
      </li>
    </ul>
  </div>
</nav>
<br>
<br>
<h2 class="text-center">After you read all my diary <br>Please give me your critics and Suggestion about my diary <br>Thank You !
</h2>
<br>
<div class="col-sm-15">
    <div class="card-horizontal">
    <div class="card text-left">
    <div class="card-header">
        Critics & Suggestions
    </div>
    <div class="card-body">
    <form action="kritiksaran-aksi.php" method="POST">
    <div class="form-group">
        <label for="exampleFormControlInput1">Nama</label>
        <input type="text" class="form-control" name="nama" require placeholder="Masukkan Nama Anda">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Instagram </label>
        <input type="text" class="form-control" name="instagram" required 
        placeholder="Masukkan Username Instagram Anda">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Kritik </label>
        <input type="text" class="form-control" name="kritik" required 
        placeholder="Masukkan Kritik Anda">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Saran</label>
        <input type="text" class="form-control" name="saran" required 
      placeholder="Masukkan Saran Anda">
    </div>
      <button type="submit" class="btn btn-danger" name="submit" values="submit">Send</button>
      <br>

</form>
    </div>
    </div>
</table>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</body>
</html>