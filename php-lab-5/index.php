<?php
include 'dbclass.php';

//TEST FILE
//PLEASE NOTE: MAKE SURE TO COMMENT THE UPDATE AND DELETE WHEN INSERTING
            // MAKE SURE TO COMMENT THE INSERT AND DELETE WHEN UPDATING
            //MAKE SURE TO COMMENT THE UPDATE AND INSERT WHEN DELETING
            //REFRESH AT LEAST MORE THAN 2 TIMES


// Connect to the database
$db = new Database();
$db->connect('localhost', 'root', 'rahafhazem5122002', 'table2');

// Insert a record
$db->insert('table2', array('id' => 1, 'name' => 'rrrrrr'));

// Select all records
$rows = $db->select('table2');
print_r($rows);

// Update a record
$db->update('table2', 1, array('name' => 'rahaf'));

// Delete a record
$db->delete('table2', 1);
?>