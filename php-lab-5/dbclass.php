<?php

//للاسف النور قطع وقت شرح اللاب بالضبط ف مكنتش عارفه بصراحه اعمل
//interface
//ولا لا

//DatabaseInterface defines the db methods
interface DatabaseInterface
{
    public function connect($host, $username, $password, $database);
    public function insert($table, $columns);
    public function select($table);
    public function update($table, $id, $fields);
    public function delete($table, $id);
}

class Database implements DatabaseInterface
{
    //db connection.
    private $connection;

    //connection credentials
    public function connect($host, $username, $password, $database) 
    {
        //make connection
        $this->connection = new mysqli($host, $username, $password, $database);
        
        //had to search online for connect_errno because there were so many db errors that wamp didnt display 
        if ($this->connection->connect_errno) {
            echo 'error';
        }
    }

    public function insert($table, $columns)
    {
        //return columns array keys
        $columns_str = implode(",", array_keys($columns));

        //from index 0 fill ? $columns times 
        $values_str = implode(",", array_fill(0, count($columns), "?"));

        //prepare
        $stmt = $this->connection->prepare("INSERT INTO $table ($columns_str) VALUES ($values_str)");
        //bind. no other way to do it except varaidic functions because column number differs
        $stmt->bind_param(str_repeat("s", count($columns)), ...array_values($columns));
        if (!$stmt->execute())
        {
            echo 'error';
        }
    }

    public function select($table)
    {
        $result = $this->connection->query("SELECT * FROM $table");
        if (!$result) {
            echo 'error';
        }

        //put rows in array and return it
        $rows = array();
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }

    //takes id as parameter to know which id to go to
    public function update($table, $id, $fields)
    {
        $fields_str = "";
        $params = array();

        //had to search online for this part, sorry
        foreach ($fields as $key => $value)
        {
            $fields_str = $fields_str . "$key=?,";
            $params[] = $value;
        }

        //trim from string end
        $fields_str = rtrim($fields_str, ",");
        $stmt = $this->connection->prepare("UPDATE $table SET $fields_str WHERE id=?");
        $params[] = $id;

        //bind also variadic function depending on number of columns made
        $stmt->bind_param(str_repeat("s", count($params)), ...$params);
        if (!$stmt->execute())
        {
            echo'error';
        }
    }

    public function delete($table, $id)
    {
        $stmt = $this->connection->prepare("DELETE FROM $table WHERE id=?");
        $stmt->bind_param("i", $id);
        if (!$stmt->execute())
        {
            echo 'error';
        }
    }
}
?>