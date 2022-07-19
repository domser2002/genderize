<!DOCTYPE html>
<html>
    <head>
        <script src="api.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        $response = file_get_contents('https://restcountries.com/v2/region/europe?fields=alpha2Code,name');

        $response = json_decode($response);
        foreach($response as $array)
        {
        echo "<br>";
        echo $array->alpha2Code;
        echo "->";
        echo $array->name;
        }
        echo "<br>";
        $response = file_get_contents('https://api.genderize.io?name=peter&country_id=US');
        echo $response;
        ?>
        <form id="form">
            Podaj kraj:
            <select>
                <option value="PL">Polska</option>
            </select>
            <br></br>
            Podaj imię:
            <input type='text'>
        </form>
    </body>
</html>