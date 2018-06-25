$<?php

class DB {

    public function insert($sql)
    {
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=shop42", 'root', "SvituSone4ko");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec($sql);
            echo "succcess";
            return $pdo->lastInsertId();
        } catch (PDOException $e) {
            echo "INSERT ERROR: " . $e->getMessage();
            exit(-1);
        }
    }

    public function get($sql)
    {
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=shop42", 'root', "SvituSone4ko");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetchAll();
            return $data;
        } catch (PDOException $e) {
            echo "INSERT ERROR: " . $e->getMessage();
            exit(-1);
        }
    }

    public function checkLoginPassword($sql) {
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=shop42", 'root', "SvituSone4ko");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetchAll();
            return $data;
        } catch (PDOException $e) {
            echo "INSERT ERROR: " . $e->getMessage();
            exit(-1);
        }
    }

    public function updateDataUser($sql) {
		try {
            $pdo = new PDO("mysql:host=localhost;dbname=shop42", 'root', "SvituSone4ko");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
		}
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }

        $conn = null;
	}
}


