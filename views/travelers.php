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

    <a href="" >Agregar </a>

    <br />
    <br />

    <table border ="1" width="80%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>LastName</th>
                <th>Email</th>
                <th>City</th>
                <th>PhoneNumber</th>
            </tr>
        </thead>

        <tbody>
            <?php 
                foreach($data["travelers"] as $dato){
                    echo "<tr>";
                        echo "<td>".$dato["id"]."</td>";
                        echo "<td>".$dato["name"]."</td>";
                        echo "<td>".$dato["lastName"]."</td>";
                        echo "<td>".$dato["email"]."</td>";
                        echo "<td>".$dato["city"]."</td>";
                        echo "<td>".$dato["phoneNumber"]."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>


    </table>
</body>
</html>