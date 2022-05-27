<?php
include 'config/db.php';
?>

<?php


$email = $body = '';
$emailErr = $bodyErr = '';

if(isset($_POST['submit'])){
  //Validate email
  if(empty($_POST['email'])){
    $emailErr = 'Email is required';
  } else {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  }

  if(empty($_POST['body'])){
    $bodyErr = 'Feedback is required';
  } else {
    $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_EMAIL);
  }

  if(empty($emailErr) && empty($bodyErr)){
    $sql = "INSERT INTO feedback (email, body) VALUES ('$email', '$body')";
    if(mysqli_query($conn, $sql)){
      header('Location: feedback.php');
    } else {
      echo 'ERROR: '. mysqli_error($conn);
    }
  }
}


echo $emailErr;
echo $email;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
  <title>Document</title>
</head>
<body>
  
<!--Modal Launch Button-->
<button type="button" class="btn btn-info btn-lg openmodal" data-toggle="modal" data-target="#myModal">Open
  Modal</button>

<!--Division for Modal-->
<div id="myModal" class="modal fade" role="dialog">

  <!--Modal-->
  <div class="modal-dialog">

    <!--Modal Content-->
    <div class="modal-content">

      <!-- Modal Header-->
      <div class="modal-header">
        <h3>Feedback Request</h3>

        <!--Close/Cross Button-->
        <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
      </div>

    
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

        <div class="form-group mb-3" style="padding: 20px">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="email" class="form-control  <?php echo $emailErr ? 'is-invalid' : null; ?>" id="exampleFormControlInput1" placeholder="name@example.com">
          <div class="invalid-feedback">
            <?php echo $emailErr; ?>
          </div>
        </div>
        
        
        <div class="form-group mb-3" style="padding: 20px">
          <label for="exampleFormControlTextarea1">Example textarea</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          <div class="invalid-feedback">
            <?php echo $bodyErr; ?>
          </div>
        </div>

      </form>    
      <div class="modal-footer">
        <a href="" class="btn btn-primary">Send
          <i class="fa fa-paper-plane"></i>
        </a>
        <a href="" class="btn btn-outline-primary" data-dismiss="modal">Cancel</a>
      </div>
    </div>

  </div> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</div>
</body>
</html>