<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
<style>

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border-radius: 25px;
    cursor: pointer;
    width: 100%;
}

.imgcontainer {
    text-align: center;
    padding-top: 80px;
}

img.avatar {
    width: 150px;
}

.container {
    padding: 25px;
    width: 300px;
    margin: auto;
}

</style>
<body>    
    <form action="validar.php" method="post">
  <div class="imgcontainer">
    <img src="/tesis/css/login.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Usuario</b></label>
    <input type="text" placeholder="Correo Institucional" name="uname" required>

    <label><b>Contraseña</b></label>
    <input type="password" placeholder="Matricula" name="psw" required>        
    <button type="submit">Iniciar Sesión</button>
</div> 
</body>
</html>
