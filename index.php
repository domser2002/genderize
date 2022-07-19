<!DOCTYPE html>
<html>
    <head>
        <script src="ajax.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="result"></div>
        <form id="form" onsubmit="return ajaxcall();">
            Choose your country:
            <select name="country">
                <?php 
                $response = file_get_contents('https://restcountries.com/v2/region/europe?fields=alpha2Code,name');
                $response = json_decode($response);
                foreach($response as $array)
                {
                    echo "<option value=".$array->alpha2Code.">".$array->name."</option>";
                }
                ?>
            </select>
            <br></br>
            Put your name:
            <input type='text' name="name">
            <br>
            <input type="submit" value="Zatwierdź">
        </form>
        
    </body>
</html>