  <!-- amount transfer -->
  <?php
    $showAlert=false;

    include 'dbconnect.php';
        $from = $_GET['id'];
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            
            $to = $_POST['to'];
            $amount = $_POST['amount'];

            $sql = "SELECT * FROM `customers` WHERE `sno`= $from";
            $result1 = mysqli_query($conn,$sql);
            $row1 = mysqli_fetch_assoc($result1); 
            

            $sql = "SELECT * FROM `customers` WHERE `sno`= $to";
            $result2= mysqli_query($conn,$sql);
            $row2 = mysqli_fetch_assoc($result2);



            // constraint to check input of negative value by user
            if (($amount)<0)
            {
                echo '<script type="text/javascript">';
                echo ' alert("Enter a valid amount")';  // showing an alert box.
                echo '</script>';
            }


        
            // constraint to check insufficient balance.
            else if($amount > $row1['balance']) 
            {
                
                echo '<script type="text/javascript">';
                echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
                echo '</script>';
            }
            


            // constraint to check zero values
            else if($amount == 0){

                echo "<script type='text/javascript'>";
                echo "alert('Enter a valid amount')";
                echo "</script>";
            }


            else {
                
                // deducting amount from sender's account
                $newbalance = $row1['balance'] - $amount;
                $sql = "UPDATE `customers` SET `balance`= $newbalance WHERE `sno`= $from";
                mysqli_query($conn,$sql);
            

                // adding amount to reciever's account
                $newbalance = $row2['balance'] + $amount;
                $sql = "UPDATE `customers` SET `balance`=$newbalance WHERE `sno`= $to";
                mysqli_query($conn,$sql);
                
                $sender = $row1['name'];
                $receiver = $row2['name'];
                $sql = "INSERT INTO `transaction`(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $result=mysqli_query($conn,$sql);

                if($result){
                    $showAlert = "Transaction Successful";
                    
                    header("location:transactions.php?alert=$showAlert");
                }

                $newbalance= 0;
                $amount =0;
                }
            
        }
?>


  <!doctype html>
  <html lang="en">

  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <link rel="stylesheet" href="style.css">

      <title>Bank</title>
  </head>

  <body>
      <?php  
      include 'dbconnect.php';
      include 'header.php';
    ?>




      <!-- For displaying a particular user starts here -->
      <div class="flex-column--space-between">
          <div class="container">
              <h2 class="text-center py-4" style="color:black">Easy Money Transfer</h2>
              <?php
               
                $sno=$_GET['id'];
                $sql = "SELECT * FROM  customers where `sno`='$sno'";
                $result = mysqli_query($conn,$sql);
                $rows = mysqli_fetch_assoc($result);
               
            ?>

              <form method="post">

                  <table class="table table-striped">
                      <tr>
                          <th scope="col">Account No.</th>
                          <th scope="col">Account Holder</th>
                          <th scope="col">E-mail</th>
                          <th scope="col">Account Balance(in Rs.)</th>
                      </tr>
                      <?php
                    echo '<tr>
                            <th scope="row"> '.$rows['acc_no'].'</td>
                            <td>'. $rows['name'] .'</td>
                            <td>'. $rows['email'].'</td>
                            <td>'. $rows['balance'] .'</td>
                        </tr>';
                ?>
                  </table>

                  <!-- For displaying a particular user ends here -->



                  <div class="mt-5">
                      <label for="Transfer_to" class="form-label">Transfer To</label>
                      <select name="to" class="form-select" aria-label="Default select example">
                          <option selected>Choose Account</option>


                          <?php
                    $sid=$_GET['id'];
                    $sql = "SELECT * FROM customers where `sno`!=$sid ";
                    $result=mysqli_query($conn,$sql);
                    
                    while($row = mysqli_fetch_assoc($result)) {
                    echo '<option  value="'. $row['sno'].'">'.$row['name'].'</option>';
                    }    
                ?>
                      </select>
                  </div>

                  <div class="mt-3">
                      <label for="amount" class="form-label">Amount</label>
                      <input type="text" class="form-control " id="amount" name="amount" placeholder="Enter amount">

                      <button type="submit" class="btn btn-success px-5 my-3">Transfer</button>
                  </div>
              </form>
          </div>

          <?php  
             include 'footer.php';
             ?>

      </div>

















      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
      </script>
      <script src="index.js"></script>

  </body>

  </html>