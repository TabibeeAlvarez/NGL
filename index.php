<?php

    include_once("connections.php");
    $con = connections();

    $sql = "SELECT * FROM `message_list`";
    $messages = $con->query($sql) or die ($con->error);
    $row = $messages->fetch_assoc();

    if(isset($_POST['submit'])){

        $alyas = $_POST['nickName'];
        $mess = $_POST['message'];

        $sql = "INSERT INTO `message_list`(`alyas`, `message`) VALUES ('$alyas','$mess')";
        $con->query($sql) or die ($con->error);
    }
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabibee annonymous messages</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="index.css">
 </head>
 <body>
    <div class="container">
        <h1>Welcome to my annonymous website</h1>
            <div class="paper">
                <form action="" onsubmit="empty()" method="post"><br>

                <input type="text" name="nickName" id="alyas" placeholder="alyas/nickname" required ><br><br>
                <textarea name="message" id="" cols="50" rows="10" placeholder="message's" required ></textarea><br><br>
                <input type="submit" value="Submit Form" name="submit" id="submit" >

                </form>
            </div>
    </div>
    <script src="index.js" ></script>
 </body>
 </html>
 