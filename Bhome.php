
<?php

session_start();



if (isset($_SESSION['username'])) {



echo '   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF=8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="aaa.css" rel="stylesheet" id="bootstrap-css">
    
    
    <title> Blog </title>
</head>

     <body>

     <table class="table table-striped table-dark table-hover"> 
     ';

     echo "
         <th scope='col'> <h3> Assalamulaikum Dear </h3> </th>
         <th scope='col'><a href='bhome.php'> <h3> HOME </h3> </a></th>
         <th scope='col'><a href='#'> <h3> PROFILE </h3></th>
         <th scope='col'><a href='logout.php'> <h3> LOGOUT </h3>  </a></th>
    </table>
    ";
     
    echo '
            <div class="container">
        <div class="bg-success text-white p-3">
            <h1>MY Personal Blog!</h1>
        </div>
            
            <div class="product-card">
            <div class="badge">NEW</div>
    
            <div class="product-tumb">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/47/DEF_CON_17_CTF_competition.jpg" alt="">
            </div>
    
            <div class="product-details">
                <span class="product-catagory">Technology</span>
                <h4>How start CTF!</h4>
                <p>
                CTF: Capture the Flag is a type of information security competition that challenges competitors to solve a variety of tasks. It is a special type of cybersecurity competition designed to challenge computer participants to solve computer security problems or capture and defend computer systems. Typically, these competitions are team-based and attract a diverse range of participants including students, enthusiasts, and professionals. A CTF competition may take a few hours, a full day, or several days.

                Why CTF?
                Computer security represents a challenge for education due to its interdisciplinary nature. The topics of computer security range from theoretical aspects of computer technology to applied aspects of information technology management. This makes it difficult to encapsulate the feeling of constituting computer security professionals.
    
                 </p>
    
                <div class="product-bottom-details">
                    <div class="product-price"> 02/02/22 - WEDNESDAY </div>
                </div>
    
            </div>
        </div>
        


        <div class="product-card">
        <div class="badge">top</div>

        <div class="product-tumb">
            <img src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20200709202022/How-to-Start-a-Career-in-Software-Testing-A-Complete-Guide.png" alt="">
        </div>

        <div class="product-details">
            <span class="product-catagory">Technology</span>
            <h4>How to Start a Career in Software Testing!</h4>
            <p>
            Whenever you use any Software or Application, you always look out for better interface, functionality, user experience, and other aspects. But… did you ever think that who ensures the fulfillment of these criteria while development? Yes, these are Software Testers who exists behind this process. Software Tester ensures that the end-product meets all the specific requirements without any bugs or issues before it’s release.  Indeed, Software Testing is one of the most sought-after career domains in the IT world and you can consider it to start your career as a Software Testing Professional!!

            Now the question arises – What is Software Testing? Software Testing is a practice of assessing the functionality of a software application to determine whether the developed product (software, application, etc. ) meets the specified requirements or not. Moreover, Software Testing involves the process of identification of bugs or defects in the project to ensure the quality of the product. There are various reasons such as Product Quality, User Satisfaction, Security aspects, etc. that make Software Testing an integral of the tech industry. Before moving further, let’s take a look at several major roles & responsibilities of a Software Tester in an organization:

             </p>

            <div class="product-bottom-details">
                <div class="product-price"> 02/02/22 - WEDNESDAY </div>
            </div>

        </div>
    </div>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <div class="container">


        <div class="row">
            <div class="col-12 col-md-6 col-lg-3">
                <img class="img-fluid img-thumbnail" src="pic/ncd.jpg" alt="">
                <h6> "National Cyber Drill 2021" - open competition, registration is closed </h6>
                <button class="btn btn-success m-auto"> click to read...</button>

            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <img class="img-fluid img-thumbnail" src="pic/fh.png" alt="" width="100%">
                <h6> Flag Hunt 2021 (CTF_BD) </h6>
                <button class="btn btn-success m-auto"> click to read...</button>
            </div>


            <div class="col-12 col-md-6 col-lg-3">
                <img class="img-fluid img-thumbnail" src="https://www.softwaretestingclass.com/wp-content/uploads/2018/07/API-Testing.png" alt="" width="100%">
                <h6> What Is API Testing and Why Should We Be Using It? </h6>
                <button class="btn btn-success m-auto"> click to read...</button>
            </div>
            
            <div class="col-12 col-md-6 col-lg-3">
                <img class="img-fluid img-thumbnail" src="https://content.techgig.com/thumb/msid-71647396,width-860,resizemode-4/Facebook-includes-third-party-apps-and-websites-to-bug-bounty-program.jpg" alt="" width="100%">
                <h6> TOP Bug Bounty Programs & Websites (Jan 2022 Updated List) </h6>
                <button class="btn btn-success m-auto"> click to read...</button>
            </div>
            

            </div>
            </div>
</body>

        '; 
}


else{
    echo "<script> location.href='loginPHP.html' </script>";
}

?>
