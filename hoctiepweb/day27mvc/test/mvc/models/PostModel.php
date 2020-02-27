<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 1/12/2020
 * Time: 1:57 PM
 */

class PostModel
{

    public function getPost()
    {
        define("DB_SERVER","localhost");
        define("DB_USER","root");
        define("DB_PASSWORD","");
        define("DB_NAME","mvctest");

        $connection=mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);
        if (mysqli_connect_error()) {
            echo "connect error: " . mysqli_connect_error();
        }

        $result = $connection->query('select * from mvcpost');

        $posts = array();

        if ($result && $result->num_rows > 0) {
            while ($post = mysqli_fetch_assoc($result)) {
                $posts[] = $post;
            }
        }
        return $posts;


    }


}

?>