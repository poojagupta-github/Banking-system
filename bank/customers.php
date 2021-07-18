<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">

    <title>Bank</title>
</head>

<body>
    <?php  
      include 'dbconnect.php';
      include 'header.php';
     ?>

    <div class="flex-column--space-between">
        <div class="container">
            <h1 class="text-center my-5">Our Customers</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Account no</th>
                        <th scope="col">Account Holder</th>
                        <th scope="col">Balance</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>


                    <?php            
                $sql= "SELECT * FROM customers";
                $result = mysqli_query($conn,$sql);
                while($row=mysqli_fetch_assoc($result)){
                    $sno=$row['sno'];
                   
                    echo '<tr>
                            <th scope="row">'.$row['acc_no'].'</th>

                            <td>'.$row['name'].'</td>

                            <td>'.$row['balance'].'</td>

                            <td class="text-center" style="cursor:pointer"> <a href="/bank/user.php?id='.$sno.'" style="text-decoration:none;color:black;">
                            <i class="fa fa-eye" style="font-size:24px"></a></i>
                            </td>
                           
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









    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

  
</body>

</html>