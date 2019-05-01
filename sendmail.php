<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$to="tamansarikencana@gmail.com";
$subject=$_POST['subject'];
$message=$_POST['message'];
// More headers
$headers .= 'From:'.$name.' <'.$phone.'>.'.$email.''"\r\n";
$headers .= '' . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
@mail($to,$subject,$message);
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
window.location = 'contact.html';
</script>
<?php
}
?>