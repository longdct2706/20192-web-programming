<html>
    <head><title>A (Not Quite) Simple Form</title></head>
    <body>
        <form action="https://accounts.google.com/signup/v2/webcreateaccount?continue=https%3A%2F%2Fwww.google.com%2F&hl=vi&dsh=S973605187%3A1584785969223983&gmb=exp&biz=false&flowName=GlifWebSignIn&flowEntry=SignUp" method="POST">
            <br/>Full name: <input type="text" size="15" maxlength="20" name="fname"><br/>
            <br/>Password : <input type="password" size="15" maxlength="20" name="fpass"><br/>
            Gender :
            <input type="radio" name="fgender" value="Male" checked > Male
            <input type="radio" name="fgender" value="Female"> Female
            <br/>
            <br><input type="checkbox" name="fpolicy" value="policy">Agree to our policy<br>
            <br><input type="checkbox" name="fads" value="newsletter" checked>Agree to receive our newsletter<br>
            <br><input type="checkbox" name="fads" value="partners" checked>Agree to receive newsletters from our partners<br>
            We can contact you by 
            <br>
            <select name="fcontact" size="3" multiple>
                <option>Email</option>
                <option>SMS</option>
                <option>Phone</option>
            </select> 
            <br>
            Any other opinions? Let us know 
            <br>
            <textarea rows="4" cols="50" name="fcmt">
                Your comments here 
            </textarea>
            <br>
            Click submit to start our initial PHP program. 
            <br>
            <input type="submit" value="Click to Submit">
            <input type="reset" value="Erase and Restart">
        </form>
    </body>
</html>