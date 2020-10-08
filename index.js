var Rating=0 ;

function Submitreview(){
    var data = document.getElementById('name').value;
    if(data != '' || Rating != 0){
         $.ajax({
            url:'Addreview.php',
            type:'post',
            data:{
                data:data,
                rating:Rating,
            },
            success:function(data){
                if(data != ""){
                    alert(data);
                }
                Fetchreviews();
                Fetchrating();
                
            }
        })



    }
    else{
        alert("fill the details");
    }
}

Fetchreviews();
function Fetchreviews(){
    var review = "review";
    $.ajax({
            url:'Addreview.php',
            type:'post',
            data:{
                r:review,
            },
            success:function(data){
                $('#review_msg').html(data);
            }
        })




}


Fetchrating();

function Fetchrating(){
    var mydata = "rating";
    $.ajax({
        url:'Addreview.php',
        type:'post',
        data:{
            mydata:mydata,
        },
        success:function(data){
            $('.tablecontent').html(data);
        }
    })



}


function Star(x){
    Rating=x;
    for(var i=1;i<=5;i++){
        var starcolor = document.querySelector('#stars'+i); 
        starcolor.classList="fa fa-star";
    }
  for(var i=1;i<=x;i++){
     var starcolor = document.querySelector('#stars'+i);
     if(starcolor.classList == "fa fa-star"){
       starcolor.classList="fa fa-star text-warning";
     }
     else{
        starcolor.classList="fa fa-star";
     }
  }
  
}
  