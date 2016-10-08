<?php
namespace Db;
class MySQL implements IDatabase
{
    function connect()
    {
        echo "www";
    }

    function query()
    {
        echo "qqq";
    }

    function close()
    {
        // TODO: Implement close() method.
    }

}