<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Validate Info</title>
    </head>
    <body>
        <?php if (isset($_POST["email"]) || isset($_POST["url"]) || isset($_POST["phone"])){
            $email = $_POST["email"];
            $url = $_POST["url"];
            $phone = $_POST["phone"];
            
            $email_pattern = "/^[[:alnum:]]+@.+\.[[:alpha:]]+/";//"/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/";//"/^[[:alnum:]]+@.+\.[[:alpha:]]+/";
            $url_pattern = "/^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/";
            $phone_pattern = "/(09|01[2|6|8|9])+([0-9]{8})\b/";
            if (preg_match($email_pattern, $email))
                echo "Email valid<br>";
            else
                echo "Email invalid<br>";
            if (preg_match($url_pattern, $url))
                echo "URL valid<br>";
            else
                echo "URL invalid<br>";
            if (preg_match($phone_pattern, $phone))
                echo "Phone valid<br>";
            else
                echo "Phone invalid<br>";
        ?>
        <?php } else {?>
            <form action="validate.php" method="post">
                <table>
                    <tr>
                        <td>Email:</td>
                        <td><input type='text' size='20' name='email'></td>
                    </tr>
                    <tr>
                        <td>URL address:</td>
                        <td><input type="text" size="20" name="url"></td>
                    </tr>
                    <tr>
                        <td>Phone number:</td>
                        <td><input type="text" size="20" name="phone"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" value="Submit">
                            <input type=RESET value="Reset">
                        </td>
                    </tr>
                </table>
            </form>
        <?php }?>
    </body>
</html>
