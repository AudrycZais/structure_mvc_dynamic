<?php
function formater_date(string $date, string $format = "d-m-Y") :string {
    $date = new DateTime($date);
    return $date->format($format);
}