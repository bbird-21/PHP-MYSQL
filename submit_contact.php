<?php

$allowed_extension = ['jpg', 'png', 'gif', 'jpeg'];

if ( !isset($_FILES['screenshot']) && $_FILES['screenshot']['error'] ) {
	echo 'Invalid Syntax';
	return ;
}

if ( $_FILES['screenshot']['size'] > 1000000 ) {
	echo 'Exceeding authorized size';
	return ;
}

$fileInfo = pathinfo($_FILES['screenshot']['name']);
$extension = $fileInfo['extension'];

if ( !in_array($extension, $allowed_extension) ) {
	echo $extension . $allowed_extension[0];
	echo 'Invalid extension';
	return ;
}

echo $_FILES['screenshot']['name'];

if (!move_uploaded_file($_FILES['screenshot']['tmp_name'], 'uploads/' . basename($_FILES['screenshot']['name'])) )
	return ;
echo "L'envoi a bien été effectué !";

?>

<h1> Your Data </h1>

<div class="card">


	<div class="card-body">
		<p class="cardt-text"><b>Email</b> : <?php echo htmlspecialchars($_POST['email']); ?> </p>
		<p class="card-text"><b>Message</b> : <?php echo htmlspecialchars($_POST['message']); ?> </p>
	</div>