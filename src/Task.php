<?php
class Task
{
    private $description;

    function __construct($new_description)
    {
        $this->setDescription($new_description);
    }

    function setDescription($new_description)
    {
        $this->description = (string) $new_description;
    }

    function getDescription()
    {
        return $this->description;
    }

    function save()
    {
        array_push($_SESSION['list_of_tasks'], $this);
    }

    static function getAll()
    {
        return $_SESSION['list_of_tasks'];
    }

    static function deleteAll()
    {
        $_SESSION['list_of_tasks'] = array();
    }
}
?>