
<html>
    <head><title>Your Info</title></head>
    <body>
        <?php
        $name = $_POST["fname"];
        $class= $_POST["fclass"];
        $uni = $_POST["funi"];
        $gender = $_POST["fgender"];
        $hobby = $_POST["fhobby"];
        $contact = $_POST["fcontact"];
        $cmt = $_POST["fcmt"];
        
        print("<br>Hello, $name<br>");
        print("<br>You are studying at $class, $uni<br>");
        print("<br>Your gender is $gender<br>");
        print("<br>Your hobby is");
        print("<ol>");
        foreach ($hobby as $i){
            print("<br><li>$i</li>");
        }
        print("</ol>"); 
        
        if (count($contact) == 0){
            print("You don't have any contact preferences");
        }
        else{
            print("<br>Your contact preference is");
            print("<ul>");
            foreach ($contact as $i){
                print("<br><li>$i</li>");
            }
        }
        print("</ul>");  
        print("<br>");
        if (strlen($cmt) == 0){
            print("You don't have any comment");
        }
        else{
            print("<br>Your comment is <br>$cmt<br>");
        }
        ?>        
    </body>
</html>