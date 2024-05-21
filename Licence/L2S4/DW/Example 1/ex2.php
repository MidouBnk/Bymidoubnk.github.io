<html>
    <head>
        <title></title>
        <style>
            .boxes{
                margin-left: 30%;
                margin-right: 30%;
            }
            .user-box{
                display: flex;
                justify-content: space-between;
                border: solid orange 1px;
                border-radius: 8px;
                padding: 0px 20px;
                margin: 20px;
            }
            .user-box:hover{
                cursor: pointer;
            }
            span{
                font-weight: bold;
            }
            .filter{
                color: blue;
            }
        </style>
    </head>
    <body>
        <?php
        $c = mysqli_connect("localhost", "root", "", "Travels");
        if(!$c) die("Connection failed !!!");
        $sql = "SELECT * FROM Client WHERE 1";
        $res = mysqli_query($c,$sql);
        $lines = mysqli_num_rows($res);
        if ($lines > 0){
            echo "<div class='boxes'>
                <div class='filter'><input type='checkbox' id='cb'> Only Mobilis phone number</div>";
            while($row = mysqli_fetch_assoc($res)){
            echo"<div class='user-box'>
                    <div>
                        <p class='tel'><span>phone:</span> ".$row["tel"]."</p>
                        <p class='mail'><span>email:</span> ".$row["email"]."</p>
                    </div>
                    <p class='adr'><span>adress:</span> ".$row["adr"]."</p>
                </div>";}
            echo "</div>";
        } 
        ?>
    </body>
    <script>
        function filter(){
            let tels = document.getElementsByClassName("tel");
            let act = document.getElementById("cb").checked;
            for (const tel of tels) {
                let s = tel.firstChild.nextSibling.textContent;
                if(act){
                    if (!s.match(/06\d+/))
                        tel.parentElement.parentElement.style.display = "none";
                }
                else tel.parentElement.parentElement.style.display = "flex";
            }
        }
        function details(){
            email = this.firstChild.nextSibling.firstChild.nextSibling.nextSibling.nextSibling.firstChild.nextSibling.textContent;
            window.location.href = "ex3.php?email=" + encodeURIComponent(email);
        }

        document.getElementById("cb").addEventListener("change",filter);
        
        for(const box of document.getElementsByClassName('user-box')){
            box.addEventListener('click',details);
        }
    </script>
</html>