<?php 

	class DB
	{
		// Объект класса PDO
		private $db;

		// Соединение с БД
		public function __construct()
		{
			$dbinfo = require 'pdo.php';
			$this->db = $pdo;
		}

		// Операции над БД
		public function query($sql, $params = [])
		{
			// Подготовка запроса
			$stmt = $this->db->prepare($sql);
			
			// Обход массива с параметрами 
			// и подставление значений
			if ( !empty($params) ) {
				foreach ($params as $key => $value) {
					$stmt->bindValue(":$key", $value);
				}
			}
			
			// Выполняем запрос
			$stmt->execute();
			// Возвращаем ответ
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

        public function getAll($table, $sql = '', $params = [])
		{
			return $this->query("SELECT * FROM $table" . $sql, $params);
		}

		public function getRow($table, $sql = '', $params = [])
		{
			$result = $this->query("SELECT * FROM $table" . $sql, $params);
			return $result[0]; 
		}

	}

?>