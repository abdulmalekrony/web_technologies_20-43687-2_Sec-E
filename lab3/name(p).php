<html>
<head>
    <title>Name</title>
</head>
<body>  
    <form method= "post" action= "" enctype= ""> <fieldset>
                <legend>name</legend>
            <input type="text" name="username" id=""placeholder
            <input type="submit" value="submit">
            </fieldset>
    </form> 
    <?php
    $name= "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
       echo "your name is : ".$name;
    }
    ?>
    </body>
    </html>