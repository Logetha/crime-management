<?php
include_once 'DbConfig.php';
 
class Crud extends DbConfig
{
    
    public function getData($query)
    {        
        $result = $this->connection->query($query);
        
        if ($result == false) {
            return false;
        } 
        
        $rows = array();
        
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        
        return $rows;
    }
        
    public function execute($query) 
    {
        $result = $this->connection->query($query);
        
        if ($result == false) {
            echo 'Error: cannot execute the command';
            return false;
        } else {
            return true;
        }        
    }

    public function update($tblname, $field, $validate, $op="AND")
    {
        $field_set = "";
        foreach ($field as $fkey => $fvalue) {
            $field_set = $field_set."$fkey='$fvalue',";
        }
        $field_set = rtrim($field_set,",");

        $validate_set = "";
        foreach($validate as $key => $value)
        {
            $validate_set = $validate_set."$key='$value'$op";
        }
        $validate_set = rtrim($validate_set, "$op");

        $update = "UPDATE $tblname SET $field_set WHERE $validate_set";
        $update_fire = mysqli_query($this->con, $update);
        if($update_fire)
        {
            return $update_fire;
        }
        else
        {
            return false;
        }
    }
    
    public function delete($id, $table) 
    { 
        $query = "DELETE FROM $table WHERE id = $id";
        
        $result = $this->connection->query($query);
    
        if ($result == false) {
            echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
            return false;
        } else {
            return true;
        }
    }
 
    public function escape_string($value)
    {
        return $this->connection->real_escape_string($value);
    }
}
?>