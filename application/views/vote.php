<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <title>Vote for your Celebrity</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
function myFunction(id) {
  $.post("http://localhost/fanvote/index.php/Contro/vote",
    {
        celeb_id: id
    },
    function(data, status){
       if(data)
{
location.reload();
}
    });
}
</script>
<style>
.img-responsive {
  max-width: 90%; /* or to whatever you want here */
  max-height: auto; /* or to whatever you want here */
}
</style>
</head>
<body>

<div class="container">
<center>  <h2>Vote for your celebrity</h2></center><br><hr><br>
  <div class="row">
 
<?php
 foreach($celeb as $celebrity){
?>
  
    <div class="col-sm-6">
      <div class="thumbnail">   
          <img src="http://localhost/fanvote/upload/<?php echo $celebrity['celeb_img']; ?>" alt="Fjords"  class="img-responsive" height="480" width="320">
          <div class="caption">
            <p><?php echo $celebrity['celeb_name'];?></p>
          </div>
         <div class="caption">
            <p><button type="button" onclick="myFunction(this.id)" class="btn btn-success" id="<?php echo $celebrity['id']; ?>">VOTE</button></p>
          </div>
      </div>
    </div>


<?php
}
?>



  </div>



</div>

</body>
</html>
