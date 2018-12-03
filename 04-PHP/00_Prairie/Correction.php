<?php
/**
 * Read date in form, give number of days between current date and given date.
 *
 * PHP version 7.2
 *
 * @category Exercices
 * @package  Prairie
 * @author   Hans Vanpee <hvanpee.ext@simplon.co>
 * @file
 * @license  2018, https://simplon.co
 * @link     https://simplon.co
 */

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Exercice PHP - Prairie</title>
  </head>
  <body>
    <h1>Exercice PHP - Prairie</h1>
    <form>
      <label for="date">Date</label>
      <input id="date" name="date" type="date"></input>
      <input type="submit" value="Valider"></input>
    </form>
    <?php
    if (isset($_GET['date'])) {
        $date = date_create($_GET['date']);
        $now = date_create()->setTime(0, 0, 0);
        $diff = date_diff($date, $now)->format('%a');
        echo "<p>Nombre de jours entre ${_GET['date']} et aujourd'hui : $diff</p>";
    }
    ?>
  </body>
</html>
