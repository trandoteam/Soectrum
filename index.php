<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class ="container-fluid">
<div class="row"> 

<div class="col-lg-4 ">
		 <h3>Customer reviews</h3>
 <table class="table">
  <thead>
    <th style="width: 20%;"></th>
    <th style="width: 60%;"> </th>
    <th style="width: 20%;"></th>
  </thead>
    <tbody class="tablecontent">
      
    </tbody>
  </table>

		 </div> <!-- col-lg-4 -->

     <div class="col-lg-8" style="">
       <h3 class="py-2">Write reviews</h3>
      <div class="row  mb-2" style="max-height: 300px; overflow: scroll;">
        <div class=" col-lg-12 bg-light" style="min-height: 300px;" >
          <ul class="py-2" style="list-style-type: none;" id="review_msg">
            <!-- <li><p> <img src="../images/gift2.jpeg" style="border-radius: 50%; width: 30px; height: 30px;">&nbsp;&nbsp;<strong>Govind Suman</strong><br><span><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>  Reviewed in India on 25 September 2019</span><br><span>The quality is good and fittings is also awesome...I just loved it</span></p></li> -->
            <!-- <li><p> <img src="../images/gift2.jpeg" style="border-radius: 50%; width: 30px; height: 30px;">&nbsp;&nbsp;<strong>Govind Suman</strong><br><span><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>  Reviewed in India on 25 September 2019</span><br><span>The quality is good and fittings is also awesome...I just loved it</span></p></li>
            <li><p> <img src="../images/gift2.jpeg" style="border-radius: 50%; width: 30px; height: 30px;">&nbsp;&nbsp;<strong>Govind Suman</strong><br><span><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>  Reviewed in India on 25 September 2019</span><br><span>The quality is good and fittings is also awesome...I just loved it</span></p></li>
            <li><p> <img src="../images/gift2.jpeg" style="border-radius: 50%; width: 30px; height: 30px;">&nbsp;&nbsp;<strong>Govind Suman</strong><br><span><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>  Reviewed in India on 25 September 2019</span><br><span>The quality is good and fittings is also awesome...I just loved it</span></p></li>
            <li><p> <img src="../images/gift2.jpeg" style="border-radius: 50%; width: 30px; height: 30px;">&nbsp;&nbsp;<strong>Govind Suman</strong><br><span><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>  Reviewed in India on 25 September 2019</span><br><span>The quality is good and fittings is also awesome...I just loved it</span></p></li> -->
          </ul>
        </div>
      </div>


       
        
          <form method="post">
          <div class="icons">
          <h5 class="mt-3">Please Rate Us</h5>
          <ul class="d-flex">
            <li><i class="fa fa-star" id="stars1" onclick="Star(1)"></i></li>
            <li><i class="fa fa-star" id="stars2" onclick="Star(2)"></i></li>
            <li><i class="fa fa-star" id="stars3" onclick="Star(3)"></i></li>
            <li><i class="fa fa-star" id="stars4" onclick="Star(4)"></i></li>
            <li><i class="fa fa-star" id="stars5" onclick="Star(5)"></i></li>
          </ul>
    

</div>
<div class="row">
    <div class="col-lg-10">
         <div class="form-group">
            <input type="text" id="name" name="name" class="form-control" placeholder="Enter comment here..." >
         </div>
          </div> <!-- col-lg-10 -->
          <div class="col-lg-2">
            <button type="submit" name="Submit" class="btn btn-primary" onclick="Submitreview()">Submit</button>
          </div>
          </form>
       </div> <!-- row -->
         
       
     </div> <!-- col-lg-8 -->

     </div></div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="index.js"></script>
    <script>
</script>




</body>
</html>


