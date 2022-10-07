<?php
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelers</title>
</head>

<body>
    <h2>
        <?php 
        echo $data["titulo"];
        ?>
    </h2>

    <form id="nuevo" name="nuevo" method="POST" action="" autocomplete="off">
        Name: <input type="text" id="name" id="name" name="name"/><br />
        Last Name: <input type="text" id="lastName" id="lastName" name="lastName"/><br />
        eMail: <input type="text" id="email" id="email" name="email"/><br />
        City: <input type="text" id="city" id="city" name="city"/><br />
        Phone number: <input type="text" id="phoneNumber" id="phoneNumber" name="phoneNumber"/><br />

        <button id="guardar" name="guardar" type="submit"> Guardar </button>
    


    
    
</body>
</html>