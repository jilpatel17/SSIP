<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location: ../login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/smartsociety.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">  
    <title>Admin-Dashboard</title>
</head>
<body>
    <?php
        include "utilities/sidenavbar.php";
    ?>

<div class="mt-5 pt-3 main">
    <div class="container-fluid">
      <div class="row">
        
        <div class="col-md-3 col-12">
          <div class="card text-white bg-info mb-3" style="max-width: 100%;">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">
                  <i class="fa fa-list fa-4x"></i>
                </div>
                <div class="col">
                  <h3 class="display-5">10</h3>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <h5><a class="nav-link text-light text-center" href="">View details</a></h5>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-12">
          <div class="card text-white bg-warning mb-3" style="max-width: 100%;">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">
                  <i class="fa fa-list fa-4x"></i>
                </div>
                <div class="col">
                  <h3 class="display-5">100</h3>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <h5><a class="nav-link text-light text-center" href="">View details</a></h5>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-12">
          <div class="card text-white bg-primary mb-3" style="max-width: 100%;">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">
                  <i class="fa fa-list fa-4x"></i>
                </div>
                <div class="col">
                  <h3 class="display-5">100</h3>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <h5><a class="nav-link text-light text-center" href="">View details</a></h5>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-12">
          <div class="card text-white bg-success mb-3" style="max-width: 100%;">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">
                  <i class="fa fa-list fa-4x"></i>
                </div>
                <div class="col">
                  <h3 class="display-5">100</h3>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <h5><a class="nav-link text-light text-center" href="">View details</a></h5>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>


    <!-- script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="js/fetchnotification.js"></script>
  <script>
    $(document).ready(function() {
      
      loadNotification();
      profile_photo();
      $('#active').addClass('active');
      $(document).on("click",".remove-notification",function(){
                var id = $(this).attr('id');
                $.ajax({
                    url:'./actions/delete-notification.php',
                    method:'POST',
                    data:{id:id},
                    success:function(data){
                        console.log(data);
                    }
                });
            });
    });
  </script>
    
</body>
</html>