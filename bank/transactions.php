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

    <?php
    if(isset($_GET['alert']) && $_GET['alert']!='false'){
        $showAlert=$_GET['alert'];
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>SUCCESS!</strong> '.$showAlert.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    ?>

    <div class="flex-column--space-between">
        <div class="container" style="margin-bottom:70px">
            <h1 class="text-center my-5">Transaction History</h1>
            <table class="table table-striped text-center ">
                <thead>
                    <tr>
                        <th>S.NO</th>
                        <th>Sender</th>
                        <th>Receiver</th>
                        <th>Amount</th>
                        <th>Date&Time</th>
                    </tr>
                </thead>
                <tbody>

                    <?php            
                $sql= "SELECT * FROM `transaction`";
                $result = mysqli_query($conn,$sql);
                while($row=mysqli_fetch_assoc($result)){
                    $sno=$row['sno'];
                    echo'<tr> 
                        <th scope="row">'.$row['sno'].'</th>
                        <td>'.$row['sender'].'</td>
                        <td>'.$row['receiver'].'</td>
                        <td>'.$row['balance'].'</td>
                        <td>'.$row['dt'].'</td>
                        </tr>';
                            
                }
            ?>
                </tbody>
            </table>
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