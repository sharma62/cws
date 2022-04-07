# cws (Codewithsuraj.com)

Note :- This file to create a local code for the original site .
<?php include 'top.php'?>
<!-- main-contand area -->
<!-- secttion A  -->
<section>   
    <div class="container mt-3">
        <!-- row-1 -->
        <h2 class="bg-dark" style="font-weight: bold;">Web Development</h2>
        <div class="row text-center" >
            <div class="col-md-4 shadow " >
                <h2><span style="color: tomato;">Notice</span> <i class="fab fa-board"></i></h2>
                <marquee behavior="" direction="up">
                    <ol>
                        <li>HTML5 course   </li>
                        <li>CSS3 course going on</li>
                        <li>c </li>
                     </ol>
                </marquee>
            </div>
            <div class="col-md-8 ">
                <!-- nested row -->
                <!-- Row - 1 -->
                <div class="row">
                    <div class="col-md-6">
                        <h2> <span style="color: tomato;">PlayList</span></h2>
                        <a href="playlist.php">
                            <div class=" overlay-container card">
                                <img src="assets/img/Html.png" class="card-img-top overlay-img" alt="...">
                                <div class="overlay">
                                    <div class="overlay-text">Get Full aceess of course</div>
                                 </div>
                           </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <h2> <span style="color: tomato;">New</span></h2>
                        <a href=".php">
                            <div class=" overlay-container card">
                                <img src="assets/img/css-3.png" class="card-img-top overlay-img" alt="...">
                                <div class="overlay">
                                    <div class="overlay-text">Go in</div>
                                </div>
                           </div>
                        </a>        
                    </div>
               </div>                              
            </div>
        </div>
</div>
       
<!-- secttion B  -->
<div class="container py-4">
    <h2 class="bg-dark" style="font-weight: bold;">Contact Us 24x7</h2>
    <div class="row ">
        <div class="col-md-8">
          <form action="">
              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" placeholder="Name . . . ">
              </div>
              <div class="form-group">
                <label for="name">Email :</label>
                  <input type="email" class="form-control" placeholder="Email . . . ">
              </div>
              <div class="form-group">
                  <label for="name">Phone</label>
                  <input type="Nnumber" class="form-control" placeholder="Name . . . ">
              </div>
              <div class="form-group">
                <label for="name">Fill Description</label>
                <textarea type="text"  class="form-control" placeholder="Write Your Description . . . .  ?" ></textarea>
              </div>
              <button class="btn btn-primary ">Submit</button>
    
          </form>
    </div>
    <div class="col-md-4 shadow text-center py-3">
        <h2>Follow Me</h2>
        <hr>
         <div class="follow-page">
                <a href="#"> <i class="fa fa-facebook"></i></a>  
                <a href="#"> <i class="fa fa-instagram"></i></a>  
                <a href="#"> <i class="fa fa-linkedin"></i></a>  
                <a href="#"> <i class="fa fa-youtube"></i></a>  

         </div>        
    </div>
  </div>
 
</div>
 

<?php include 'footer.php'?>
