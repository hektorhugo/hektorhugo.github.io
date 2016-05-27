<?php
  include_once('../session.php');
?>
<?php
if($_POST["captcha"]==$_SESSION["captcha_code"]){
	$toEmail = "hugo_ver2.0@live.com.mx";
	$mailHeaders = "From: " . $_POST["contactName"] . "<". $_POST["contactEmail"] .">\r\n";
	if(mail($toEmail, $_POST["contactSubject"], $_POST["contactMessage"], $mailHeaders)) {
	print "<p class='success'>Correo electrónico enviado.</p>";
	} else {
	print "<p class='Error'>Problema con el Envío de correo.</p>";
	}
	print "<div class='alert alert-success'>Enviado Correctamente.</div>";
} else {
print "<script> alert('Error no coincide el Captcha');
			setTimeout(function() {
				document.getElementById('captcha').focus();
				document.getElementById('captcha').value = '';
			}, 10);
				document.getElementById('captcha').focus();
				document.getElementById('captcha').value = '';
			return false;
			}
		</script>
			";

print "<div class='alert-danger'>Error no coincide el Captcha.</div>";
}
?>
