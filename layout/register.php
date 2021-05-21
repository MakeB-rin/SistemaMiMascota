<?php
  ob_start(); 
  include "../admin/db_connection.php";

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $image = $_POST['image'];
    $type = $_POST['type'];
    $status = 1;
    
    //Encriptamiento de contraseña 
    $password = md5($password);



    $query = "INSERT INTO users(name, username, email, password, image,status, type) 
                VALUES ('$name','$username','$email','$password','$image','$status','$type')";
    //verificar que el correo no se repita
    $verificar_correo =mysqli_query($dbconnection,"SELECT * FROM users WHERE email = '$email'");
    if(mysqli_num_rows($verificar_correo )> 0){
        echo'
        <script>
            alert("Este correo ya registrado, intenta con otro diferente");
            window.location = "../index.php";
        </script>
            ';
            exit();
    }
    
    //verificar que el nombre de usuario no se repita
    $verificar_correo =mysqli_query($dbconnection,"SELECT * FROM users WHERE username = '$username'");
    if(mysqli_num_rows($verificar_correo )> 0){
        echo'
        <script>
            alert("Este nombre de usuario ya registrado, intenta con otro diferente");
            window.location = "../index.php";
        </script>
            ';
            exit();
    }

    $ejecutar = mysqli_query($dbconnection,$query);
    
    if($ejecutar){
        echo'
        <script>
            alert("Usuario almacenado exitosamente");
            window.location = "../index.php";
        </script>
            ';
    }else{
        echo'
        <script>
            alert("Intentalo nuevamente, usuario no almacenado exitosamente");
            window.location = "../index.php";
        </script>
            ';

    }

    mysqli_close($dbconnection);
    
?>
