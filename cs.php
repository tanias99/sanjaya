<script>
<button onclick="var jsVar = "<?php 
$nomor = array("6283174500115"); 
$nohp = $nomor[array_rand($nomor)]; 
$text = "Hi kak , Saya Ingin Beli Atau Konsultasi Dulu Tentang *Kapsul Mujizat* Nya, Ready ?";
header("Location: https://api.whatsapp.com/send?phone=$nohp&text=$text"); ?>"">
</script>