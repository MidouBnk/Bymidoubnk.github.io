<html>
    <head>
        <title></title>
        <style>
            form{
                display: flex;
                flex-direction: column;
                margin-left: 35%;
                margin-right: 35%;
            }
            input{
                border: solid orange 1px;
                border-radius: 8px;
                padding-left: 10px;
                height: 40px;
                margin: 10px;
            }
            input[type="submit"]{
                background-color: gray;
                border: none;
                color: white;
            }
            h1{
                text-align: center;f
            }
            p{
                color: red;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Create a new client</h1>
        <form action="ex1.php" method="post">
            <input type="text" placeholder="Your id" name="id" required>
            <input type="password" placeholder="Your password" name="pw" required>
            <input type="email" placeholder="Your email" name="em" required>
            <input type="text" placeholder="Your phone number" name="tel" required>
            <input type="text" placeholder="Your adress" name="adr" required>
            <input type="submit" value="Create" name="new">
        </form>
        <?php
            if(isset($_POST['new'])){
                $c = mysqli_connect("localhost", "root", "", "Travels");
                if(!$c) die("Connection failed !!!");
                $id = $_POST["id"];
                $pw = $_POST["pw"];
                $em = $_POST["em"];
                $tel = $_POST["tel"];
                $adr = $_POST["adr"];
                $sql = "INSERT INTO Client(id,pw,email,tel,adr) VALUES ('".$id."','".$pw."','".$em."','".$tel."','".$adr."')";
                if(mysqli_query($c,$sql)) echo "<p>new client added succesfully !</p>";
                else echo "<p>An error accured, impossible to add new client !!!</p>";
            }
        ?>        
    </body>
</html>