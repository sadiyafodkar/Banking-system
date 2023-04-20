<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <title>My Bank</title>
</head>

<body>
  <style>
    body{
      background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url("css/bank12.jpg");
    }
     
     </style>
  <?php
  include 'navbar.php';
  ?>
  <div class="container-fluid">
    <h1><br><br>My Banking System</h1>
    <p><br> Welcome fellow members,</p>
  <p> You can transfer money from one customer account to another and can also check the transfer history of each transaction.</p>
    <div class="column activity text-center">
      <div class="col-md act">
        <br>
        <br>
        <a href="transactionhistory.php"><button><span></span> History</button></a>
        <a href="transfermoney.php"><button><span></span>View Customers</button></a>
      </div>
    </div>
  </div>
  <br>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>