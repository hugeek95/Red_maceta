<?php 
session_start();

if(isset($_SESSION['user'])){
//echo "<script language=javascript>location.href=\"bienvenido.php\"; </script>";
echo "<script>alert('Bienvenido');</script>";
}else{
?>
<!doctype html>
<html>
<head>
<script src='https://www.google.com/recaptcha/api.js'></script>

<meta charset="utf-8">
<title>Dental shine</title>
<style type="text/css">
.tabla {	background-image:url(imgs/pres.jpg);
   background-repeat:no-repeat;	
}
</style>
</head>

<body>

<p>
  <marquee>
  </marquee>
</p>
<table width="700" height="559" border="0" align="center" class="tabla">
  <tr>
    <td width="703" height="555" align="left" valign="middle"><table width="640" height="355" align="center">
      <tbody>
        <tr>
          <td width="666" height="107" align="center" valign="top"><blockquote>
            <blockquote>
              <blockquote>
                <blockquote>
                  <blockquote>
                    <p><img src="imgs/logo.png" alt="" width="214" height="105"/></p>
                  </blockquote>
                </blockquote>
              </blockquote>
            </blockquote>
          </blockquote></td>
        </tr>
        <tr>
          <td height="242" align="center" valign="top"><form id="form1" name="form1" method="POST" action="login.php" >
            <table width="38%" border="0" align="center">
              <tbody>
                <tr>
                  <td width="21%"><p>Usuario:</p></td>
                  <td width="79%"><p>
                    <input type="text" name="user" id="user">
                  </p></td>
                </tr>
                <tr>
                  <td><p>Contraseña:</p></td>
                  <td><p>
                    <input type="password" name="pass" id="pass">
                  </p></td>
                </tr>
              </tbody>
            </table>
            <blockquote>
              <blockquote>
                <blockquote>
                  <blockquote>
                    <blockquote>
                      <div class="g-recaptcha" align="center" data-sitekey="6LcWqB8TAAAAAKQfCKJBvOL1ZjcyA3ME0_OUQW7D"></div>
                      <blockquote>
                        <p>
                          <input type="submit" width="38%" name="submit" id="submit" value="Ingresar" >
                        </p>
                      </blockquote>
                    </blockquote>
                  </blockquote>
                </blockquote>
              </blockquote>
            </blockquote>
          </form>
            <blockquote>
              <blockquote>
                <blockquote>
                  <blockquote>
                    <blockquote>
                      <blockquote>&nbsp;</blockquote>
                    </blockquote>
                  </blockquote>
                </blockquote>
              </blockquote>
            </blockquote></td>
        </tr>
      </tbody>
    </table></td>
  </tr>
</table>
</body>
</html>
<? } ?>