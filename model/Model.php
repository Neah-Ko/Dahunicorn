<?php
class Model {
	public function __construct() {}
	public function __toString() {}


	public function __get($fieldName) {
		$varName = "_".$fieldName;
		$className = get_class($this);
		if (property_exists($className, $varName))
			return $this->$varName;
		else if ($fieldName == "TABLE_NAME") {
			$refClass = new ReflectionClass($className);
			$table = $refClass->getStaticPropertyValue('TABLE_NAME');
			return $table;
		}
		else if ($fieldName != "externalClasses")
			throw new Exception("Unknown variable: ".$fieldName);
	}

	public function __set($fieldName, $value) {
		$varName = "_".$fieldName;
		if ($value != null) {
			if (property_exists(get_class($this), $varName)) {
				$this->$varName = $value;
				$class = get_class($this);
				$table = $this->TABLE_NAME;
				$tableId = substr($table, -3)."_id";
				$classId = "_".$tableId;
				if(property_exists(get_class($this), $classId)) {
					$st = db()->prepare("update $table set $fieldName=:val where $tableId=:id");
					$st->bindValue(":val", $value);
					$id = $tableId;
					$st->bindValue(":id", $this->$id);
					$st->execute();
				}
			} else {
				throw new Exception("Unknown variable: ".$fieldName);
			}
		}
	}

}
?>
