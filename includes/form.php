<?php
//temp-converter.php
//logic for Fahrenheit to Celcius, Celcius to Fahrenheit and Fahrenheit to Kelvin.

//fahrenheit to celcius - (F - 32) * 5/9 = C
//celcius to fahrenheit - (C * 9/5) + 32 = F
//fahrenheit to kelvin - (F + 459.67) * 5/9 = K
//kelvin to fahrenheit - (K * 9/5) - 459.67 = F
//celcius to kelvin - C + 273.15 = K
//kelvin to celcius - K - 273.15 = C


// *****************************
// ADD: Save temp in form form is submitted, so that it doesn't get lost if there are errors.




// empty error message variables
$same_unit_err = '';
$empty_temp_err = '';
$select_frm_err = '';
$select_to_err = '';


if (isset($_POST['temp'])) {
    $temp = $_POST['temp'];
} else {
    $temp = '';
}

if (isset($_POST['from'])) {
    $from = $_POST['from'];
} else {
    $from = '';
}

if (isset($_POST['to'])) {
    $to = $_POST['to'];
} else {
    $to = '';
}


// if submit button is clicked, check for errors

if (isset($_POST['submit'])) {


    if ($from == $to) {
        $same_unit_err = '⚠ Please select different units to convert from and to';
    } else {
        $same_unit_err = '';
    }

    if (empty($temp)) {
        $empty_temp_err = '⚠ Please enter a temperature';
    } else {
        $empty_temp_err = '';
    }

    if (empty($from)) {
        $select_frm_err = '⚠ Please select a unit to convert from';
    } else {
        $select_frm_err = '';
    }

    if (empty($to)) {
        $select_to_err = '⚠ Please select a unit to convert to';
    } else {
        $select_to_err = '';
    }
}


// logic for conversion

if (isset($_POST['submit'])) {
    if (empty($empty_temp_err) && empty($same_unit_err) && empty($select_frm_err) && empty($select_to_err)) {
        if ($from == 'fahrenheit' && $to == 'celcius') {
            $result = ($temp - 32) * 5 / 9;
        } elseif ($from == 'celcius' && $to == 'fahrenheit') {
            $result = ($temp * 9 / 5) + 32;
        } elseif ($from == 'fahrenheit' && $to == 'kelvin') {
            $result = ($temp + 459.67) * 5 / 9;
        } elseif ($from == 'kelvin' && $to == 'fahrenheit') {
            $result = ($temp * 9 / 5) - 459.67;
        } elseif ($from == 'celcius' && $to == 'kelvin') {
            $result = $temp + 273.15;
        } elseif ($from == 'kelvin' && $to == 'celcius') {
            $result = $temp - 273.15;
        }
    }
}


?>

<!-- html form goes here-->

<fieldset>

    <form action="" method="post">
        <h1>
            Temperature Converter
        </h1>
        <p>
            Enter a temperature and select the units to convert from and to.
        </p>

        <label for="temp">Temperature</label>
        <input class="temp" type="number" name="temp" value="<?php if (isset($_POST[$temp])) {
                                                                    echo $temp;
                                                                } ?>">

        <!-- temp err -->
        <span class="error"><?php echo $empty_temp_err; ?></span>
        <br>
        <ul>
            <label for="from">Convert:</label>

            <!-- radio selection -->
            <li>
                <input type="radio" name="from" value="fahrenheit" <?php if (isset($from) && $from == 'fahrenheit') {
                                                                        echo 'checked="checked"';
                                                                    } ?>>Fahrenheit (&#8457)
            </li>
            <li>
                <input type="radio" name="from" value="celcius" <?php if (isset($from) && $from == 'celcius') {
                                                                    echo 'checked="checked"';
                                                                } ?>>Celcius (&#8451;)
            </li>
            <li>
                <input type="radio" name="from" value="kelvin" <?php if (isset($from) && $from == 'kelvin') {
                                                                    echo 'checked="checked"';
                                                                } ?>>Kelvin (&#8490;)
            </li>
            <!-- from err -->
            <span class="error"><?php echo $select_frm_err; ?></span>
            <br>
        </ul>
        <hr />
        <ul>
            <label for="to">To:</label>

            <!-- radio selection -->
            <li>
                <input type="radio" name="to" value="fahrenheit" <?php if (isset($to) && $to == 'fahrenheit') {
                                                                        echo 'checked="checked"';
                                                                    } ?>>Fahrenheit (&#8457;)
            </li>
            <li>
                <input type="radio" name="to" value="celcius" <?php if (isset($to) && $to == 'celcius') {
                                                                    echo 'checked="checked"';
                                                                } ?>>Celcius (&#8451;)
            </li>
            <li>
                <input type="radio" name="to" value="kelvin" <?php if (isset($to) && $to == 'kelvin') {
                                                                    echo 'checked="checked"';
                                                                } ?>>Kelvin (&#8490;)
            </li>
        </ul>
        <!-- to err -->
        <span class="error"><?php echo $select_to_err; ?></span>
        <br>
        <!-- unit err -->
        <span class="error"><?php echo $same_unit_err; ?></span>
        <br>
        <!-- submit/reset -->
        <input type="submit" name="submit" value="Convert">
        <input type="button" onClick="window.location.href='<?php echo $_SERVER['PHP_SELF'] ?>'" value="Reset">
        <br>


    </form>
</fieldset>


<section>
    <div class="container">
        <div class="row">
            <div class="result-card">
                <h2>Result</h2>
                <?php
                // display result if no error
                if (isset($result)) {
                    echo $temp . '&#176; ' . $from . ' = ';
                    echo round($result, 2);
                    echo '&#176; ' . $to;
                }
                ?>
            </div>
        </div>
    </section>


    <!-- flow chart -->
    <!-- start with a form -->
    <!-- user input -->
    <!-- user selects units to convert from -->
    <!-- user selects units to convert to -->
    <!-- user clicks submit -->
    <!-- php logic -->
    <!-- if user input is empty -->
    <!-- display error -->
    <!-- if user selects same unit -->
    <!-- display error -->
    <!-- if user selects no unit -->
    <!-- display error -->
    <!-- if user selects different units -->
    <!-- convert -->
    <!-- display result -->
    <!-- if user clicks reset -->
    <!-- clear form -->
    <!-- clear result -->
    <!-- end php logic -->
    <!-- end form -->

