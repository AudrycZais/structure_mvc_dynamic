<?php

    function findAll(PDO $conn) : array  {
        $sql = "select *
                from posts
                order by created_at desc
                limit 10;";

        $rs=$conn ->query($sql);
        return $rs->fetchAll(PDO::FETCH_ASSOC);

    }