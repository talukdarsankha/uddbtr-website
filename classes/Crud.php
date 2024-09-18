<?php
  /**
   *
   */
  require_once 'DbConfig.php';

  class Crud extends DbConfig {

    public function Read($TableName, $Condition) {

      // filter query with WHERE operator

      if ($Condition == "") {

        $Condition = "1";
        
      }

      // used to select catagories

      $sql = "SELECT * FROM ".$TableName." WHERE ".$Condition;

      // echo $TableName;

      $stmt = $this->connect()->prepare($sql);

      $stmtExec = $stmt -> execute();

      if ($stmtExec) {

        $Data = $stmt -> fetchAll(PDO:: FETCH_ASSOC);

        return $Data;

      } else {

        echo "An Error Occured.";

      }

    }


    public function Create($Data, $TableName) {

      $message = "";

      $implodeColumns = implode(', ', array_keys($Data));

      $implodePlaceholder = implode(', :', array_keys($Data));

      $sql = "INSERT INTO `". $TableName ."` ($implodeColumns) VALUES (:".$implodePlaceholder.")";

      $stmt = $this -> connect() -> prepare($sql);

              foreach ($Data as $key => $value) {

                $stmt -> bindValue(':'.$key, $value);

              }

              $stmtExec = $stmt -> execute();

                if ($stmtExec) {

                  $message = "Data Added Successfully";

                  return $message;

                } else {

                      $message = "Failed";
          
                      return $message;
          
                    }

        }

    // }

    public function SelectOne($TableName, $Condition) {

      $message = "";

      $stmt = "SELECT * FROM ".$TableName." WHERE ".$Condition;;

      $sql = $this -> connect() -> prepare($stmt);

      if ($sql -> execute()) {

        $Data = $sql -> fetchAll(PDO:: FETCH_ASSOC);

        return $Data;

      } else {

        $message = "Error Fetching Data";

        return $message;

      }

    }


    public function Update($TableName, $Fields, $Condition) {

      $message = "";

      $st = "";

      $counter = 1;

      $total_fields = count($Fields);

      foreach ($Fields as $key => $value) {
        
        if ($counter === $total_fields) {
          
          $set = "$key = :".$key;

          $st = $st.$set;

        } else {

          $set = "$key = :".$key.", ";

          $st = $st.$set;

          $counter++;

        }

      }

      $stmt = "";

      $stmt .= "UPDATE ".$TableName;

      $stmt .= " SET ".$st;

      $stmt .= " WHERE ".$Condition;

      $sql = $this -> connect() -> prepare($stmt);

      foreach ($Fields as $key => $value) {
        
        $sql -> bindValue(":".$key, $value);

      }

      if ($sql -> execute()) {

        $message = "Data Updated";

        return $message;

      } else {

        $message = "Error Updating Data";

        return $message;
        
      }

    }

    public function Delete($TableName, $Condition) {

      $message = "";

      $sql = "DELETE FROM `$TableName`";

      $sql .= " WHERE ".$Condition;

      $stmt = $this -> connect() -> prepare($sql);

      if ($stmt -> execute()) {

        $message = "Deleted";

        return $message;

      } else {

        $message = "Error Deleting Data";

        return $message;
        
      }
      
    }

    public function Count($TableName, $Condition) {

      $message = "";

      $sql = "SELECT * FROM `$TableName`";

      $sql .= " WHERE ".$Condition;

      $stmt = $this -> connect() -> prepare($sql);

      if ($stmt -> execute()) {

          $returnCount = $stmt -> rowCount();

          $message = $returnCount;

          return $message;

      } else {

        $message = "Error";

        return $message;
        
      }

    }

  }
?>
