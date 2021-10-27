<html>
  <h1>Hello Must</h1>
<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://ipinfo.io/");
curl_exec($ch);
$ip = curl_getinfo($ch,CURLINFO_PRIMARY_IP);
curl_close($ch);
echo $ip; 
?>
<img src='src/benz.jpg'>
</html>
