<?php
include('connexion.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>form</title>
    <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
    <link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>
<body>
    <div class="wrap-contact100" class="bg-colors">
		<div class="contact100-form-title" style="background-image: url(img/bg-01.jpg);">
			<span class="contact100-form-title-1">
				Order Infos
			</span>
		</div>
		<form class="contact100-form validate-form" method="POST" id="frmContactus" >
		<?php


  $result = $conn->query(
    "SELECT * FROM plate WHERE DATE(jour) = CURDATE() order by rand() limit 1 ");
    while($row = mysqli_fetch_array($result)){
      echo"<input type='hidden' id='Nom' name='Nom' value=".$row['Nom'].">";
    }
    ?>

			<div class="wrap-input100 validate-input" data-validate="Name is required">
				<span class="label-input100">Nom:</span>
				<input class="input100" type="text" name="Fname" id="Fname" placeholder="Enter le Nom">
				<span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Name is required">
				<span class="label-input100">Prenom:</span>
				<input class="input100" type="text" name="Prenom" id="Prenom" placeholder="Enter Prenom">
				<span class="focus-input100"></span>
			</div>
			<div class="wrap-input100 validate-input" data-validate="Phone is required">
				<span class="label-input100">Phone:</span>
				<input class="input100" type="text" name="Phone" id="Phone" placeholder="Enter phone number">
				<span class="focus-input100"></span>
			</div>
			<div class="wrap-input100 validate-input" data-validate="Message is required">
				<span class="label-input100">Adress:</span>
				<textarea class="input100" name="Adress" id="Adress" placeholder="Your Adress..."></textarea>
				<span class="focus-input100"></span>
			</div>
			<div class="wrap-input100 validate-input" data-validate="Message is required">
				<span class="label-input100">Message:</span>
				<textarea class="input100" name="Message" id="Message" placeholder="Your Message..."></textarea>
				<span class="focus-input100"></span>
			</div>
			<span style="color:green; height:50px;" id="msg"></span>
			<div class="container-contact100-form-btn">
				<button class="contact100-form-btn" type="submit" name="submit" id="submit"> Confirme order </button>
			</div>
			
		</form>
	</div>

	<script>
	  jQuery('#frmContactus').on('submit',function(e){
		jQuery('#msg').html('');
		jQuery('#submit').html('Please wait');
		jQuery('#submit').attr('disabled',true);
		jQuery.ajax({
			url:'insert.php',
			type:'post',
			data:jQuery('#frmContactus').serialize(),
			success:function(result){
				jQuery('#msg').html(result);
				jQuery('#submit').html('submit');
				jQuery('#submit').attr('disabled',false);
				jQuery('#frmContactus')[0].reset();
			}
		});
		e.preventDefault();
	  });
	  </script>


</body>
</html>