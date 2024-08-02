<form method=post action='welcome.php'>
    
    <label for="firstName">First Name: </label>
    <input type=text name=firstName id="firstName">
    <br><br>

    <label for="lastName">last Name: </label>
    <input type=text name=lastName id="lastName">
    <br><br>


    <label for="adress">Adress: </label><br>
    <textarea name="adress" id="adress" ></textarea>
    <br><br>

    <label for="country">select your country:</label>
    <select name="country" id="country" style="width:100px">
        <option value="Egypt">Egypt</option>
        <option value="ٍSudia">Sudia</option>
        <option value="Libya">Libya</option>
        <option value="Sudan">Sudan</option>
    </select>
    <br><br>

    
    <label for="gender" > Gender:  </label>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male"> male </label>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female"> female</label><br>
    <br><br>

    
    <label for="skills" > skills:  </label><br>
    <input type="checkbox" id="PHP" value="PHP" name="skills[]">
    <label for="PHP"> PHP</label><br>
    <input type="checkbox" id="js" value="js" name="skills[]">
    <label for="larval"> js</label><br>
    <input type="checkbox" id="HTML" value="HTML" name="skills[]">
    <label for= "html"> html</label>
    <br><br>


    <label for="userName">userName: </label>
    <input type=text name=userName id="userName">
    <br><br>

    <label for="password">Password: </label>
    <input type=password name=password id="password">
    <br><br>

    <label for="department">Department: </label>
    <input type=text name=department id="department" placeholder="Computer Science">
    <br><br>
    <br><br>

    <div>
            <span>qwE132</span>
            <br><br>
            <span>
                place insert code in the next box
            </span>
            <br><br>
            <input type="text">

        
    </div>

    <br><br>
    <input type="submit" value='login'>
    <input type="reset" value='reset'>

</form>