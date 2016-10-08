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
        echo "qqqq";
        echo "11111111111";
    }

    function close()
    {
        // TODO: Implement close() method.
        echo "close";
    }

}