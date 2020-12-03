<html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <link rel="stylesheet" href="assets\css\login.css">
</head>
<body>
<div class="container">
    <h3>Users</h3>
        <table>
        <tr> 
          <th> <font face="Arial">#</font> </th> 
          <th> <font face="Arial">Login</font> </th> 
          <th> <font face="Arial">Image</font> </th> 
        </tr>
            <?php
            require_once 'connection.php';
            $query = "SELECT * FROM `users`";
            if($result = $conn->query($query))
            {
                while($row = $result->fetch_assoc())
                {
                    $id = $row['id'];
                    $login = $row['login'];
                    $image = $row['img'];
                    echo"<tr>
                        <td>".$id."</td>
                        <td>".$login."</td>
                        <td><img src='".$image."' alt='' style='width:100px;height:100px;'/></td>
                    </tr>";
                }
                $result->free();
            }
            ?>
        </table>
</div>
 </body>
 <script src="assets\js\modal.js"></script>
</html>