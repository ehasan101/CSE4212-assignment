<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style-reg-log.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="aaa.css" rel="stylesheet" id="bootstrap-css">
    
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        form{
            background: whitesmoke;
            padding: 30px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 10px;
        }

    </style>

    <title>C.Operation</title>

    
  </head>

  
  <body>
    <table class="table table-striped table-dark table-hover">
                    <!-- <thead> -->
                    <!-- <tr> -->
                    <th scope='col'> <h3> Assalamulaikum Admin! </h3> </th>
                    <th scope='col'><a href='loginPHP.html'> <h3> [ GOTO USER VERSION ] </h3> </a></th>
                        <th scope='col'><a href='bhome.php'> <h3> [ BLOG ] </h3> </a></th>
                        <th scope='col'><a href='#'> <h3> [ PROFILE ] </h3></th>
                        <th scope='col'><a href='logout.php'> <h3> [ LOGOUT ] </h3></th>

                    <!-- </tr> -->
                    <!-- </thead> -->
    </table>



  <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12" >
              <form action="insert.php" method="post" enctype="multipart/form-data">

              
              <div class="mb-3">
                      <div class="text-center">
                        <img src="pic/CP.png" width="60%" alt="admin-key" border="0">
                        <h2 class="text-center">Admin Control Pannel</h2> <hr>
                        <p><b> Restricted Area!!!</b></p>
                      </div>

                      <div class="mb-3">
                  TITLE :
                  <input type="text" class="form-control" name="name">
                  
                </div>

                <div class="mb-3">
                  BODY :
                  <input type="text" class="form-control" name="price">
                </div>

                <div class="mb-3">
                  POST IMAGE :
                  <input type="file" class="form-control" name="image">
                </div>
                
                <button type="submit" class="btn btn-lg btn-primary btn-block btnlr col-12">Added to Page</button>
              </form>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



    <br>
  <div class="container">
              <table class="table table-striped table-dark table-hover">
                
                <thead>
                  <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>Title</th>
                    <th scope='col'>Body</th>
                    <th scope='col'>PImage</th>
                    <th scope='col'>Update</th>
                    <th scope='col'>Delete</th>
                  </tr>
                </thead>


                <tbody>
                    <?php
                      include 'config.php';
                      $allData = mysqli_query($conn,"SELECT * FROM `crud`");

                      while($row=mysqli_fetch_array($allData)){
                      echo "<tr>
                          <td>$row[id]</td>
                          <td>$row[name]</td>
                          <td>$row[price]</td>
                          <td><img src='$row[image]' alt='Product_Image' width='100px'></td>
                          <td><a class='btn btn-success' href='update.php? id=$row[id]'>Edit</a></td>
                          <td><a class='btn btn-danger' href='delete.php? id=$row[id]'>Delete</a></td>
                        </tr>
                        


                        
                    
                        
                        
                        ";
                        
                      }
                      
                    ?>
                </tbody>
               


            </table>
    </div> 







  </body>
</html>