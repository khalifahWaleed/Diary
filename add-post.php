<?php
error_reporting(0);
include('conncet.php');
include('header.php');
$title=$_POST['input-title'];
$post=$_POST['input-post'];
$send =$_POST['input-send'];
if(isset($send)){
$query="INSERT INTO post(title,post) VALUES('$title','$post')";
    mysqli_query($conn,$query);
    echo "Post published Successfully";
}
?>
    <!-- ADD Post-->
    <div class="add-post">
     <div class="container">
        <h4>Add Post</h4>
<form action="add-post.php" method="POST">
        <label >Title</label>
        <input type="text" placeholder="Enter a Title" name="input-title">
        <label >Post</label>
        <input type="text" placeholder="Enter a Post" name="input-post">
        <a><button class="btn indigo" name="input-send">Post</button></a>

</form>
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