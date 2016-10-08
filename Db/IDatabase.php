<?php
namespace Db;
interface IDatabase{
    function connect();
    function query();
    function close();
}