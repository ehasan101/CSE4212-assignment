<!doctype html>
<html lang="en">

<head>
  <title>Harvest vase</title>
  <!-- <link href="https://fonts.googleapis.com/css?family=Bentham|Playfair+Display|Raleway:400,500|Suranna|Trocchi" rel="stylesheet"> -->
  
  <link href="aaa.css" rel="stylesheet" id="bootstrap-css">
</head>




<body>


	<!-- <div class="product-card">
		<div class="badge">NEW</div>

		<div class="product-tumb">
			<img src="https://upload.wikimedia.org/wikipedia/commons/4/47/DEF_CON_17_CTF_competition.jpg" alt="">
		</div>

		<div class="product-details">
			<span class="product-catagory">Technology</span>
			<h4>How start CTF!</h4>
			<p>
                CTFs are one of my favorite hobbies. I love the feeling of solving a particularly difficult task and seeing all the puzzle pieces click together. I'd like this post to serve as an introduction to CTF for those in the dev.to community that may not know what it is.

             </p>

			<div class="product-bottom-details">
				<div class="product-price"> 02/02/22 - WED </div>
			</div>

		</div>
	</div> -->

<!-- ------------------ -->



<thead>
                  <tr>

                    <th scope='col'>ID</th>
                    <th scope='col'>photo</th>
                    <th scope='col'>cata</th>
                    <th scope='col'>title</th>
                    <th scope='col'>body</th>
                    <th scope='col'>date</th>
                    <th scope='col'>Update</th>
                    <th scope='col'>Delete</th>
                  </tr>
                </thead>




<tbody>
                    <?php
                      include 'config.php';
                      $allData = mysqli_query($conn,"SELECT * FROM `blog`");

                      while($row=mysqli_fetch_array($allData)){

                      echo "<tr>
                          <td>$row[id]</td>

                          <td>$row[date]</td>
                          <td>$row[price]</td>

                          <td><img src='$row[photo]' alt='Product_Image' width='100px'></td>

                          <td><a class='btn btn-warning' href='update.php? id=$row[id]'>Update</a></td>

                          <td><a class='btn btn-danger' href='delete.php? id=$row[id]'>Delete</a></td>

                        </tr> 
                        ";
                      }
                    ?>
                </tbody>





</body>
</html>