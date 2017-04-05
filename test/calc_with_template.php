<?php
require_once __DIR__."/render.php";
$calcs = array("Property price", "Down payment", "Interest", "Years", "Amount paid monthly");

$data = array(
  "calcs" => $calcs,
);

$output = render_template(__DIR__."/calc.tpl.php",$data);
echo $output;
