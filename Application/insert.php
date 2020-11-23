<?php
include('connexion.php');
$msg="";

if(isset($_POST['Fname']) && isset($_POST['Prenom']) && isset($_POST['Phone']) && isset($_POST['Adress'])  && isset($_POST['Message'])){
	$Fname=mysqli_real_escape_string($conn,$_POST['Fname']);
	$Prenom=mysqli_real_escape_string($conn,$_POST['Prenom']);
	$Phone=mysqli_real_escape_string($conn,$_POST['Phone']);
    $Adress=mysqli_real_escape_string($conn,$_POST['Adress']);
    $Message=mysqli_real_escape_string($conn,$_POST['Message']);
    $Nom=mysqli_real_escape_string($conn,$_POST['Nom']);
	
	
	
    mysqli_query($conn,"INSERT INTO commande (Fname,Prenom,Phone,Adress,Message,Nom) VALUE ('$Fname','$Prenom','$Phone','$Adress','$Message','$Nom')");
    
	$msg="The oredr is on the way to you, Bes7aaa!!";
	
    $html="<table>
    <tr>
    <td>Fname</td>
    <td>$Fname</td>
    </tr>
    <tr>
    <td>Prenom</td>
    <td>$Prenom</td>
    </tr>
    <tr>
    <td>Phone</td>
    <td>$Phone</td>
    </tr>
    <tr>
    <td>Adress</td>
    <td>$Adress</td>
    </tr>
    <tr>
    <td>Message</td>
    <td>$Message</td>
    </tr>
    <tr>
    <td>Nom</td>
    <td>$Nom</td>
    </tr>
    </table>";
	
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="tt951920@gmail.com";//email here
	$mail->Password="Brief2020";//Password here
	$mail->SetFrom("tt951920@gmail.com");//email here
	$mail->addAddress("tt951920@gmail.com");//email here
	$mail->IsHTML(true);
	$mail->Subject="New order";//Subject
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		//echo "Mail send";
	}else{
		//echo "Error occur";
	}
	echo $msg;
}
?>