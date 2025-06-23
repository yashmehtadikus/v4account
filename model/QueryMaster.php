<?php
class QueryMaster{

/* ###########################################  Simple Select   ######################################## */

public function select_data($table,$field,$id,$orderby)
		{
		$conn=db();
			if((trim($field)!=NULL || trim($field)!='' ) || $field!='all')
				{
					$field = $field;
				}
			else
				{
					$field ="*";
				}
				// Check ID null or not
			if($id=='' || $id==NULL)
				{
					$where="" ;
				}
			else
				{
					$where=" WHERE ".$id."";
				}
				 // Check Order by null or not
			if($orderby=='' || $orderby==NULL)
				{
					$order="" ;
				}
			else
				{
		$order=" ORDER BY ".$orderby."";
				}
		// Create Quiery
		
    	 $query = "SELECT ".$field." FROM `".$table."` ".$where. $order.""; 
		$result = mysqli_query($conn,$query);
		
		try
			{
			  return $result;
			}
		catch(Exceptiomn $e)
			{
			  echo $e->message;
			}
		
		}
public function select_data1($table,$field,$id,$orderby)
		{
		$conn=db();
			if((trim($field)!=NULL || trim($field)!='' ) || $field!='all')
				{
					$field = $field;
				}
			else
				{
					$field ="*";
				}
				// Check ID null or not
			if($id=='' || $id==NULL)
				{
					$where="" ;
				}
			else
				{
					$where=" WHERE ".$id."";
				}
				 // Check Order by null or not
			if($orderby=='' || $orderby==NULL)
				{
					$order="" ;
				}
			else
				{
		$order=" ORDER BY ".$orderby."";
				}
		// Create Quiery
		
    	 $query = "SELECT ".$field." FROM ".$table." ".$where. $order.""; 
		$result = mysqli_query($conn,$query);
		
		try
			{
			  return $result;
			}
		catch(Exceptiomn $e)
			{
			  echo $e->message;
			}
		
		}


	public function insert_data($table,$column)
	{
        $conn=db();
	    $value=implode("', '",$column);
	    $feild=implode("`, `",array_keys($column));
		$query = " insert into ".$table." (`".$feild."`) values('$value')"; 
		$result = mysqli_query($conn,$query);
		try{
		$insert_id = mysqli_insert_id($conn);
		return $insert_id;
		}catch(Exception $e){
		  echo $e->message;
		  }
	
	}
	
	public function update_data($table,$feild,$id){
		$conn=db();
	        $query = " UPDATE `".$table."` SET ".$feild." WHERE ".$id."";
		$result = mysqli_query($conn,$query);
		try{
		return true;
		}catch(Exceptiomn $e){
		  echo $e->message;
		}
	}
	
	public function delete_data($table,$id){
		$conn=db();
		 $query = " DELETE FROM `".$table."`  WHERE ".$id."";
		$result = mysqli_query($conn,$query);
		try{
		return true;
		}catch(Exceptiomn $e){
		  echo $e->message;
		}
	}
	
	
	
}

?>
