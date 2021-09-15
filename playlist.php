
<?php 
include 'top.php';
include 'function.php';
  


     $list_sql = "SELECT * FROM `playlist` ";
     $res= mysqli_query($con,$list_sql);
?>

        <div class="container">
        <div class="row">
    <?php if (mysqli_num_rows($res)) {
         $i=0;
         while ($row = mysqli_fetch_assoc($res)) {
    ?>
            <div class="col-md-3">
                   <h2>
                        <span style="color: tomato;"> <?php echo $row['playlist_name'];?></span>
                   </h2> 
                <a href="<?php echo $row['list_link']?>">
                    <div class="overlay-container card">
                        <img src="assets/img/Html.png" class="card-img-top overlay-img" alt="...">
                        <div class="overlay">
                            <div class="overlay-text">Get Full aceess of course</div>
                        </div>  
                    </div>
                </a>
            </div>
           
        <?php }
        $i++;
        }?>
        </div>
    </div>
    <?php include 'footer.php'?>
 
 