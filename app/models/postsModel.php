<?php
namespace App\Models\PostsModel;
    function findAll(\PDO $conn) : array  {
        $sql = "select *
                from posts
                order by created_at desc
                limit 10;";

        $rs=$conn ->query($sql);
        return $rs->fetchAll(\PDO::FETCH_ASSOC);

    }

    function findOneById(\PDO $conn, int $id = 1) :array {
        $sql = "SELECT *
                FROM posts 
                WHERE id = :id;";
        $rs = $conn->prepare($sql);
        $rs->bindValue(':id', $id, \PDO::PARAM_INT);
        $rs->execute();
        return $rs->fetch(\PDO::FETCH_ASSOC);
    }