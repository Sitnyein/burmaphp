<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<h3 class="mt-3"> <a href="./read.php"> List read</a></h3>


    
<form class="row g-3 mt-5" action="store.php" method="Post">
  <div class="col-md-3 offset-1 mt-5">
    <label for="inputname" class="form-label">Name upload</label>
    <input type="text" name="uname" class="form-control" id="inputname" required>
  </div>

  <div class="col-md-3 offset-1 mt-5">
    <label for="inputemail" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="inputemail" required>
  </div>

  <div class="col-md-3 offset-1 mt-5">
    <label for="inputhome" class="form-label">Town</label>
    <input type="text" name="town" class="form-control" id="inputhome" required>
  </div>

  <div class="col-5 offset-6">
    <button type="submit" class="btn btn-dark text-white">Create</button>
  </div>
</form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>




