<?php

class Config{
	private $dbhost = "localhost";
	private $dbuser = "root";
	private $dbpass = "";
	private $dbname = "online_crime_reporting";
	public $con;

	public function __construct()
	{
		$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
		if(!$this->con)
		{
			return false;
		}
	}

	public function insert($tbl_name, $data)
	{
		$field_set = "";

		foreach($data as $f_key => $f_value)
		{
			$field_set = $field_set."$f_key='$f_value',";
		}

		$field_set = rtrim($field_set,",");

		$query = "INSERT INTO $tbl_name SET $field_set";
		$query_fire = mysqli_query($this->con, $query);
		if($query_fire)
		{
			return $query_fire;
		}
		else
		{
			return false;
		}
	}

	public function validation($form_data)
	{
		$form_data = trim( stripcslashes( htmlspecialchars( $form_data ) ) );
		return $form_data;
	}

	public function select($tblname)
	{
		$view = "SELECT * FROM $tblname";
		$set = mysqli_query($this->con, $view);
		if(mysqli_num_rows($set) == 1)
		{
			$select_assoc = mysqli_fetch_assoc($set);
			if($select_assoc)
			{
				return $select_assoc;
			}
			else
			{
				return false;
			}	
		}
		else
		{
			$select_all = mysqli_fetch_all($set, MYSQLI_ASSOC);
			if($select_all)
			{
				return $select_all;
			}
			else
			{
				return false;
			}
		}
	}

	public function select_assoc($tblname, $where, $op="AND")
	{
		$where_set = "";

		foreach($where as $wkey => $wvalue)
		{
			$where_set = $where_set."$wkey='$wvalue'$op";
		}

		$where_set = rtrim($where_set,"$op");

		$select = "SELECT * FROM $tblname WHERE $where_set";
		$select_query = mysqli_query($this->con, $select);
		$select_data = mysqli_fetch_assoc($select_query);
		if($select_data)
		{
			return $select_data;
		}
		else{
			return false;
		}
	}

	 public function delete($id, $table) 
    { 
        $query = "DELETE FROM $table WHERE id = $id";
        
        $result = $this->con->query($query);
    
        if ($result == false) {
            echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
            return false;
        } else {
            return true;
        }
    }
 
    public function escape_string($value)
    {
        return $this->con->real_escape_string($value);
    }

}

?>