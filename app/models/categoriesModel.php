<?php
namespace App\Model\CategoriesModel;

function findAll(\PDO $conn):array
{
    $sql = "SELECT *
            FROM categories
            ORDER BY name ASC;";

    $rs = $conn->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}