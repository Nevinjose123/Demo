<?php
if(isset($_POST['sub']))
{
	$file_name=$_FILES['file']['name'];
	$temp=$_FILES['file']['tmp_name'];
	
	$name="Nevin Jose";
	$email="nevin.logezy@gmail.com";
	$to="$name <$email>";
	$from        = "John-Smith ";
	$subject     = "Here is your attachment";
	$mainMessage = "Hi, here's the file.";
	$fileatt     = "$temp";
	$fileatttype = "application/pdf";
	$fileattname = "$file_name";
	$headers = "From: $from";
	
	// File
$file = fopen($fileatt, 'rb');
$data = fread($file, filesize($fileatt));
fclose($file);

// This attaches the file
$semi_rand     = md5(time());
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
$headers      .= "\nMIME-Version: 1.0\n" .
"Content-Type: multipart/mixed;\n" .
" boundary=\"{$mime_boundary}\"";
$message = "This is a multi-part message in MIME format.\n\n" .
"-{$mime_boundary}\n" .
"Content-Type: text/plain; charset=\"iso-8859-1\n" .
"Content-Transfer-Encoding: 7bit\n\n" .
$mainMessage  . "\n\n";

$data = chunk_split(base64_encode($data));
$message .= "--{$mime_boundary}\n" .
"Content-Type: {$fileatttype};\n" .
" name=\"{$fileattname}\"\n" .
"Content-Disposition: attachment;\n" .
" filename=\"{$fileattname}\"\n" .
"Content-Transfer-Encoding: base64\n\n" .
$data . "\n\n" .
"-{$mime_boundary}-\n";

// Send the email
if(mail($to, $subject, $message, $headers)) {

    echo "The email was sent.";

}
else {

    echo "There was an error sending the mail.";

}	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body><br />
<br />
<br />
<h2 align="center"><strong> Send mail with Attachment</strong></h2>
<br />
<br />
<br />

<form method="post" enctype="multipart/form-data">
<div class="form-group">
<label>Upload:</label>
<input type="file" name="file" />
<input type="submit" name="sub" value="Send Mail" />
</div>
</form>
</body>
</html>