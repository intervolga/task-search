<?
include_once $_SERVER['DOCUMENT_ROOT'] . '/search/include/core.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/search/include/template/header.php';
$query = $_GET['q'];
$items = findInDatabase($query)
?>
<div class="row">
	<div class="col-md-6 offset-md-3">
		<form action="" method="get" id="search-form">
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="Найти в базе данных" name="q" value="<?=htmlspecialchars($query)?>" autocomplete="off" id="search-input">
				<div class="input-group-append">
					<button class="btn btn-outline-secondary" type="submit">Найти</button>
				</div>
			</div>
		</form>
	</div>
</div>
<? if (strlen($query)): ?>
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<? if ($items): ?>
				<div class="alert alert-success">
					По вашему запросу &laquo;<b><?=htmlspecialchars($query)?></b>&raquo; найдено записей: <?=count($items)?>
				</div>
				<div class="list-group">
					<? foreach ($items as $item): ?>
						<a href="<?=htmlspecialchars($item['URL'])?>" class="list-group-item list-group-item-action">
							<?=htmlspecialchars($item['NAME'])?>
						</a>
					<? endforeach ?>
				</div>
			<? else: ?>
				<div class="alert alert-warning">
					По вашему запросу &laquo;<b><?=htmlspecialchars($query)?></b>&raquo; ничего не найдено
				</div>
			<? endif ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 offset-md-3 text-center">
			<a href="/search/" id="new-search">Новый поиск</a>
		</div>
	</div>
<? elseif(isset($query)): ?>
	<div class="row">
		<div class="col-md-6 offset-md-3 text-center">
			<div class="alert alert-info">
				Пустой поисковый запрос
			</div>
		</div>
	</div>
<? endif ?>
<?
include_once $_SERVER['DOCUMENT_ROOT'] . '/search/include/template/footer.php';