
<?php
error_reporting(0);
include('conncet.php');
include('header.php');



$id=$_GET['id'];
$query="SELECT * FROM post WHERE id =". $id;
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);

?>
 <div class="article">
            <div class="container">
            <h5><?php echo $row['title']; ?></h5>
            <p> <?php echo $row['post'];?></p>

            </div>
        </div>


    <!-- Jquery -->
    <script src="js/jquery-3.6.0.min.js"></script>  
    <!-- Materilaze JS -->
    <script src="js/materialize.min.js"></script> 
    <script>
    
    $(document).ready(function(){
    $('.sidenav').sidenav();
  });

        </script>
</body>
</html>