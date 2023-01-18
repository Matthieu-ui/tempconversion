<?php
//temp-converter.php
//logic for Fahrenheit to Celcius, Celcius to Fahrenheit and Fahrenheit to Kelvin.

//fahrenheit to celcius - (F - 32) * 5/9 = C
//celcius to fahrenheit - (C * 9/5) + 32 = F
//fahrenheit to kelvin - (F + 459.67) * 5/9 = K
//kelvin to fahrenheit - (K * 9/5) - 459.67 = F
//celcius to kelvin - C + 273.15 = K
//kelvin to celcius - K - 273.15 = C

//php logic goes here

?>

<!-- html form goes here-->
<?php
error_reporting(0);
$fahrenheit = $_POST['fahrenheit'];
$celsius = $_POST['celsius'];

if (isset($_POST['convert'])){
$f = $_POST['fahrenheit'];
$c = ($f-32) * 5/9;
$display = round($c,2)." ". "Degree's Celsius";

}

if (isset($_POST['clear'])) {
    $fahrenheit = "";
    $celsius = "";
}

?>

<h3>Fahrenheit To Celsius in PHP </h3>
<table>
    <form name="temperature" method="post">
        <tr>
            <td>Temperature in Fahrenheit</td>
            <td><input type="text" name="fahrenheit" value="<?php echo $fahrenheit; ?>"
            required autofocus></td>
</tr>
<tr>
    <tr><td>The Temperature in Celsius</td>
    <td><input type="text" name ="celsius:" value="<?php echo $display;?>"</td></tr></tr></tr></tr></tr>
    <td><input type="submit" value="Convert" name="convert" />
    &nbsp;&nbsp;&nbsp;

<input type="submit" value="Clear" name="clear" /></td>
</tr>
</form>
</table>

