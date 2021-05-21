<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styles.css">

    <title>Registrarse</title>
</head>

<body>
    <div class="login-container">
        <div class="login-info-container">
            <h1 class="title">Registrarse</h1>

            <form action="layout/register.php" method="post">

                <input class="input" type="text" placeholder="Nombre Completo" name="name">
                <input class="input" type="text" placeholder="Nombre Usuario" name="username">
                <input class="input" type="email" placeholder="Correo Electronico" name="email">
                <input class="input" type="password" placeholder="Contraseña" name="password">
                
                <div class="form-group">
                    <label>Tipo de Usuario " 1 : Dueño 0 : Rescatista " </label>
                    <select class="input" name="type">
                        <option> </option>
                        <option value="1"> Dueño  </option>
                        <option value="0"> Rescatista </option>
                    </select>
                </div>
                <br>
                <input class="input" type="file" placeholder="imagen" name="image">
                <button class="btn">Registrarse</button>

 

                <br>
                <a href="index.php">Inicio</a>
            </form>

        </div>
        <img class="image-container" src="img/mascota4.jpg" alt="">
    </div>

</body>

</html>