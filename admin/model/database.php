<?php

	class database
	{
		var $connection=null;
		function __construct()
		{
			$this->connection= mysql_connect("localhost","root","");
		    mysql_select_db("elearning",$this->connection);
		    mysql_query("set names 'utf8'"); 
		}
		

		public function Query($sql){
			$this->result = mysql_query($sql);
			return $this->result;
		}
		public function LoadAllRow($result){
			$array = array();
			while ($data = mysql_fetch_assoc($result)) {
				$array[] = $data;
			}
			return $array;
		}

		public function LoadOneRow($result){
			$array = array();
			$array = mysql_fetch_assoc($result);
			return $array;
		}

		
		public function insert($table, $data){

	        $field_list = '';
	        $value_list = '';

	        foreach ($data as $key => $value){
	            $field_list .= ",$key";
	            $value_list .= ",'".mysql_escape_string($value)."'";
	        }
	        $sql = 'INSERT INTO '.$table. '('.trim($field_list, ',').') VALUES ('.trim($value_list, ',').')';
	 
	        return mysql_query($sql);
	    }

	    public function Update($table, $data, $where){
	        $sql = '';
	        foreach ($data as $key => $value){
	            $sql .= "$key = '".mysql_escape_string($value)."',";
	        }

	        $query = 'UPDATE '.$table. ' SET '.trim($sql, ',').' WHERE '.$where;
	 
	        return mysql_query($query);
	    }

		public function Delete($table, $where){

	        $sql = "DELETE FROM $table WHERE $where";
	        return mysql_query($sql);
	    }
	}
?>