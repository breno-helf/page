<?php  
   $url = $_POST['http://i.imgur.com/F39EVyR.png'];  
   echo "<script>document.getElementById('imagem').innerHTML = '<img src={$url}>'</script>";
?>
<div id='imagem'>
</div>