<?php
if ($_POST) {

  $message = $_POST['champtexte1'];
  $message .= $_POST['champtexte2'];
  $message .= $_POST['champtexte3'];
}

mail("happypok@happypok.fr", "sujet du courrier", $message, "From:happypok@happypok.fr");
