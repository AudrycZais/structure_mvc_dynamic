<?php

namespace App\Models\CommentsModel;

function findAllByPostId(\PDO $conn, int $id) :array {
        $sql = "SELECT *
                FROM comments 
                WHERE id = :id;";
        $rs = $conn->prepare($sql);
        $rs->bindValue(':id', $id, \PDO::PARAM_INT);
        $rs->execute();
        return $rs->fetchAll(\PDO::FETCH_ASSOC);
}