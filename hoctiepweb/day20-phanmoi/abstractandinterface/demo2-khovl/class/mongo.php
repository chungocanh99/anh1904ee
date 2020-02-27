<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2/25/2020
 * Time: 10:57 PM
 */

class Mongo extends Database implements crud, log, search
{

    /**
     *
     */
    public function connect() {
        $connection = new MongoClient("mongodb://example.com.65432");
    }
    public function create()
    {
        // TODO: Implement create() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function read()
    {
        // TODO: Implement read() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function connect()
    {
        // TODO: Implement connect() method.
    }

    public function writeLog()
    {
        // TODO: Implement writeLog() method.
    }

    public function readLog()
    {
        // TODO: Implement readLog() method.
    }

}