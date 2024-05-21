<html>
    <head>
        <title></title>
        <style>
            .user-box{
                display: flex;
                justify-content: space-between;
                border: solid orange 1px;
                border-radius: 8px;
                padding: 0px 20px;
                margin: 20px;
                margin-left: 30%;
                margin-right: 30%;
            }
            .ids{
                text-align: center;
            }
            .btn{
                display: flex;
                justify-content: space-between;
                height: 30px;
                margin-left: 30%;
                margin-right: 30%;
            }
            .btn input{
                width: 40%;
            }
            .msg{
                color: red;
                text-align: center;
            }
        </style>
    </head>
    <body>
    <?php
        $c = mysqli_connect("localhost", "root", "", "Travels");
        if(!$c) die("Connection failed !!!");
        $em = trim($_GET["email"]);
        $sql = "SELECT * FROM Client WHERE email='".$em."'";
        $res = mysqli_query($c,$sql);
        $lines = mysqli_num_rows($res);
        if ($lines > 0){
            $row = mysqli_fetch_assoc($res);
            echo "<div class='user-box'>
                    <div>
                        <p class='tel'><span>phone: </span>".$row["tel"]."</p>
                        <p id='mail'><span>email: </span>".$row["email"]."</p>
                    </div>
                    <p id='adr'><span>adress: </span>".$row["adr"]."</p>
                </div>
                <p class='ids'>User name: ".$row["id"]."</p>
                <p class='ids'>Password: ".$row["pw"]."</p>";
        }
        ?>
        <div class="btn">
            <input type="button" value="Return" id="rtn">
            <input type="button" value="Confirm" id="conf">        
        </div>
        <?php 
            if($_GET["conf"]){
                $conf = trim($_GET["conf"]);
                $sql = "UPDATE Client SET type='confirmed' WHERE email='".$em."'";
                
                if(mysqli_query($c,$sql))
                    echo "<p class='msg'>Congratulation ! you are a confirmed client now ...</p>";
            }
        ?>
    </body>
    <script>
        function back(){
            window.location.href = "ex2.php";
        }
        function confirm(){
            email = this.parentElement.parentElement.firstChild.nextSibling.firstChild.nextSibling.firstChild.nextSibling.nextSibling.nextSibling.firstChild.nextSibling.textContent;;
            window.location.href = "ex3.php?email=" + encodeURIComponent(email) + "&conf=" + encodeURIComponent("true");
        }
        document.getElementById("rtn").addEventListener('click',back);
        document.getElementById("conf").addEventListener('click',confirm);
    </script>
</html>