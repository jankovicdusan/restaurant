<html lang="en">
<head>
    <meta charset="UTF-8">
      <!-- Required meta tags -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservation</title>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background: linear-gradient(to top, white ,grey ) no-repeat fixed center;">



<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/restaurant/view/">Reservation</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="routes.php?page=reservation">Reserve Now<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="routes.php?page=allreservations">All reservations<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<main>
<div class="container text-center col-8">
<br>
<h1>All reservations in restaurant</h1>

<table class="table table-striped table-sm table-dark mt-5">
<tr>
 <th>Name</th>
 <th>Email</th>
 <th>Mobile</th>
 <th>Date and Time</th>
 <th>Number of persons </th>
 <th>Table</th>
</tr>

<?php
//    Kupljenje $reservations niza iz Controllera
// promenjiva $reservations je odmah dostupna zato sto se koristio include

 foreach ($reservations as $r) {?>
    <!-- mogu da pisem cist html zato sto sam prekinuo php sintaksu -->

<tr>
    <td><?php echo $r['name'] ?></td>
    <td><?php echo $r['email'] ?></td>
    <td><?php echo $r['mobile'] ?></td>
    <td><?php echo $r['date'] ?></td>
    <td><?php echo $r['numberpersons'] ?></td>
    <td><?php echo $r['labeltable'] ?></td>
  
</tr>
    <?php 
  }
  ?>

</table>
<br><br>
</div>


</main>







<footer class="fixed-bottom bg-dark">
<div class="container">
<p class="text-white text-center">Copyright 2019, Novi Sad</p>
</div>

</footer>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

