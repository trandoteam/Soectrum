<?php
include 'config.php';

extract($_POST);

$name= "Suraj Kumar";
$product_name = "pants";

if(isset($data) and isset($rating)){


// $data = mysqli_real_escape_string($conn,$_POST['data']);

$sql = "select * from customer_review where  name=? and product_name=?";

$result = $conn->prepare($sql);

$result->execute([$name,$product_name]);



if($result->rowCount()>0){
echo "Alreay given rating to this product";
}
else{
    $date = date("Y-m-d");
    $sql1 = "insert into customer_review values('0',?,?,?,?,?)";
    $result1 = $conn->prepare($sql1);

    $result1->execute([$name,$data,$date,$rating,$product_name]);
    echo "Rating given successfully";

}
}



if(isset($r)){
 
$sql = "select * from customer_review";

$result = $conn->prepare($sql);

$result->execute();  

if($result->rowCount()>0){

    $response ='';

    while($row = $result->fetch()){
        $d_date = date("d",strtotime($row['review_date']));
        $y_date = date("Y",strtotime($row['review_date']));
        $m_date = date("F",strtotime($row['review_date']));
     
        $response .= ' <li><p> <img src="../images/gift2.jpeg" style="border-radius: 50%; width: 30px; height: 30px;">&nbsp;&nbsp;<strong>'.$row['name'].'</strong><br> <span>';
        
        for($i=1;$i<=$row['rating'];$i++){
            $response .= '<i class="fa fa-star text-warning"></i>';
        }
        
        $response .= ' Reviewed on  '.$d_date." ".$m_date." ".$y_date.'</span><br><span>'.$row['review_msg'].'</span></p></li>';
    }
    echo $response;



}






}



if(isset($mydata)){

    $sql = "select * from customer_review where  rating > ?";

    $result= $conn->prepare($sql);

    $result->execute(['0']);

    $count = $result->rowCount();

    $rating1 = $rating2=$rating3=$rating4=$rating5=0;
    while($row = $result->fetch()){
        if($row['rating'] == 5){
            $rating5++;
        }
        else if($row['rating'] == 4){
            $rating4++;
        }
        else if($row['rating'] == 3){
            $rating3++;
        }
        else if($row['rating'] == 2){
            $rating2++;
        }
        else if($row['rating'] == 1){
            $rating1++;
        }

    }

    $data = '<tr>
    <td>5 star</td>
    <td> <div class="progress ">
        <div class="progress-bar bg-warning progress-bar-striped" style="width:'.(($rating5*100)/$count).'%"></div>
        </div>
    </td>
    <td>'.(floor(($rating5*100)/$count)).'%</td>
  </tr>
  <tr>
    <td>4 star</td>
    <td>
        <div class="progress ">
        <div class="progress-bar bg-warning progress-bar-striped" style="width:'.(($rating4*100)/$count).'%"></div>
        </div>
    </td>
    <td>'.(floor(($rating4*100)/$count)).'%</td>
  </tr>
  <tr>
    <td>3 star</td>
    <td> 
         <div class="progress ">
         <div class="progress-bar bg-warning progress-bar-striped" style="width:'.(($rating3*100)/$count).'%"></div>
         </div>
    </td>
    <td>'.(floor(($rating3*100)/$count)).'%</td>
  </tr>
  <tr>
    <td>2 star</td>
    <td>
         <div class="progress ">
         <div class="progress-bar bg-warning progress-bar-striped" style="width:'.(($rating2*100)/$count).'%"></div>
         </div>
    </td>
    <td>'.(floor(($rating2*100)/$count)).'%</td>
  </tr>
  <tr>
    <td>1 star</td>
    <td>
        <div class="progress ">
        <div class="progress-bar bg-warning progress-bar-striped" style="width:'.(($rating1*100)/$count).'%"></div>
        </div>
    </td>
    <td>'.(floor(($rating1*100)/$count)).'%</td>
  </tr>';




  echo $data;


}









?>