<?
include_once $_SERVER['DOCUMENT_ROOT'] . '/search/include/db.php';

/**
 * Выполняет поиск по подстроке в таблице search и возвращает результат в виде массива
 *
 * @param string $query
 * @return array
 */
function findInDatabase($query)
{
	global $pdo;
	$items = [];
	if (strlen($query))
	{
		$sql = 'SELECT * FROM search WHERE NAME LIKE :query';
		$stmt = $pdo->prepare($sql);
		$stmt->execute(array(':query' => '%' . $query . '%'));
		$items = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	return $items;
}

/**
 * Возвращает количество записей в таблице search
 * 
 * @return int
 */
function countDatabase()
{
	global $pdo;
	$sql = 'SELECT COUNT(*) as CNT FROM search';
	$stmt = $pdo->query($sql);
	$item = $stmt->fetch(PDO::FETCH_ASSOC);

	return $item['CNT'];
}
