<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mail</title>
</head>

<body>
<?php
ob_start();
$durum = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recaptcha = $_POST['g-recaptcha'];
    if (!empty($recaptcha)) {
        include "curl.php";
        $google_url = "https://www.google.com/recaptcha/api/siteverify";
        $secret = '6LfX9AwUAAAAAJWYGIK3GWTdWuQYztdhUjie-hVP';
        $ip = $_SERVER['REMOTE_ADDR'];
        $url = $google_url . "?secret=" . $secret . "&response=" . $recaptcha . "&remoteip=" . $ip;
        $res = curlKullan($url);
        $res = json_decode($res, true);
        if ($res['success']) {
 			if(isset($_POST['mail']) && isset($_POST['text']) && isset($_POST['message'])) {
   			 if(empty($_POST['mail']) || empty($_POST['text']) || empty($_POST['message'])) {
    		  echo 'Lütfen boş yer bırakmayın!';
			  header("refresh:1;url=index.php");
			   } else {
  		     $ad = strip_tags($_POST['mail']);
 		     $eposta = strip_tags($_POST['message']);
    		   $konu = strip_tags($_POST['text']);
   			   $icerik = 'Ad: ' . $ad . '<br/>E-Posta: '. $eposta . '<br/>' . $mesaj;
  			    mail('abyssgameworks@gmail.com', $konu, $icerik);
				  header("refresh:0;url=index.php");
   		}
} else {
   echo 'Lütfen Formu Kullanın!';
   header("refresh:1;url=index.php");
}
        } else {
            $durum = "Lütfen bot olmadığınızı doğrulayın.";
			header("refresh:1;url=index.php");
        }
    } else {
        $durum = "Lütfen bot olmadığınızı doğrulayın.";
		header("refresh:1;url=index.php");
    }
}
 ?>
</body>
</html>