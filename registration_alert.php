
<?php
session_start();
include 'app_manage/header.php';
?>

<body>
    <div class="container-fluid shadow indexreg text-center ">
        <h3 class="mt-5" >User Authentication and Role Management System</h3>
    </div>
<div class="container-fluid">
    <div class="row">
        <?php
            include 'app_manage/menu.php';
        ?>
 
        <div class="col-md-10 text-center bodyarea relative">
            <h1 class="wc" >Registration successfully Completed!<br/><br/> <a href="registration.php"><h4>Back to Registration</h4> </a>
            </h1> 
            <!-- <?php 
                $data = file_get_contents("./users.txt");
                echo nl2br($data);
            ?>  -->
        </div>
        
    </div>
</div>

<?php
include 'app_manage/footer.php';
?>
 