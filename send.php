<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$to="tamansarikencana@gmail.com";
$message="VISITOR WEB TAMANSARI KENCANA";
$headers = "Dear, Admin Tamansari Kencana" . "\r\n";
$headers .= "Saya butuh info lengkap tentang Tamansari Kencana Apartment" . "\r\n";
// More headers
$headers .= 'From:'.$name.' <'.$phone.'>'."\r\n" . 'Reply-To: '.$name.' <'.$phone.'>'."\r\n";
$headers .= '' . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
@mail($to,$message,$headers);
if (@mail) { ?>
<script language="javascript" type="text/javascript">
alert('Thank you for the message. We will contact you shortly.');
window.location = 'home.html';
</script>
<?php
}
else { ?>
<script language="javascript" type="text/javascript">
alert('Message failed. Please, send an email to tamansarikencana@gmail.com');
window.location = 'index.html';
</script>
<?php
}
?>