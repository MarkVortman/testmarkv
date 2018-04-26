<?php
$title =  'Регистрация';
include 'temps/temp.php'
?>
<center><form  method="POST" action="reg.php" style="background-color: white; border: 2px; width: 520px; height: 200px; padding: 40px">
<font size="+5" >Registration</font><br><br>
<p align="left">Nickname<font color="red">*</font><br><input size="50" type="text" name="username"></p>
<p align="left">Password<font color="red">*</font><br><input type="password" name="pass"></p>
<p align="left">Email<font color="red">*</font><br><input type="email" name="email"></p>
<input type="submit"></center></form>
<center><form  method="POST" action="auth.php" style="background-color: white; border: 2px; width: 520px; height: 200px; padding: 40px">
<font size="+5" >Autorisation</font><br><br>
<p align="left">Nickname or email<font color="red">*</font><br><input size="50" type="text" name="username"></p>
<p align="left">Password<font color="red">*</font><br><input type="password" name="pass"></p>
<input type="submit"></center></form>

</body>
</html>