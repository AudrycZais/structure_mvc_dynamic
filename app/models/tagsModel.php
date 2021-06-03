<?php

function findAllByPostId($conn,int $id) : array  {
        $sql = "select *
                from tags t
                join posts_has_tags pht on pht.tag_id = t.id
                where pht.post_id=:id;";

        $rs=$conn->prepare($sql);
        $rs->bindValue(':id',$id,PDO::PARAM_INT);
        $rs->execute();
        return $rs->fetchAll(PDO::FETCH_ASSOC);

       
}