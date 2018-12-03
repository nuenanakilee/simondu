<?php
//udah tau lah ini apa ?
?>
<html>
 <head>
  <title>Selamat Datang </title> 
 <style>
 body
   {
    font-family:Calibri;
   }
 </style>  
 </head>
 <body>
 <?php
  if($role == "Administrator")
  {
 ?>
 <h2>Hai <?php 
            //mngambil nama session                             
 echo $pengguna->nmkppn;?>, anda login sebagai Administrator <?php echo anchor('login/logout', 'Keluar &raquo;');
 echo "  
  yes berhasil berhasil berhasil hore :v , ~ wkwkw ";
  
 ?></h2>
 <?php
 }elseif($role == "Operator")
 {
  ?>
  <h2>Hai <?php echo $pengguna->nmkppn;?>, anda login sebagai Operator <?php echo anchor('login/logout', 'Keluar &raquo;');?></h2>
  <?php
 }
 ?>
 </body>
</html>