<!DOCTYPE html>
<html>
    <head>
        <script src="ajax.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="result"></div>
        <form id="form" onsubmit="return ajaxcall();">
            Podaj kraj:
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
            Podaj imię:
            <input type='text' name="name">
            <br>
            <input type="submit" value="Zatwierdź">
        </form>
        
    </body>
</html>