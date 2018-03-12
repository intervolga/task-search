<?
/**
 * @global \PDO $pdo подключение к базе данных
 */
global $pdo;
try
{
	$pdo = new PDO('mysql:dbname=dbcrud;host=127.0.0.1', 'myuser', 'mypassword');
}
catch (PDOException $exception)
{
	echo $exception->getMessage();
	die;
}