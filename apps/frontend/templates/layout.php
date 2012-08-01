<!DOCTYPE html>
<html>
<head>
<?php include_http_metas() ?>
<?php include_metas() ?>
<?php include_title() ?>
<?php include_stylesheets() ?>
<?php include_javascripts() ?>
</head>
<body>

<div class="page">
	<div class="semipage-1">
		<div class="semipage-2">
			<?php echo $sf_content ?>
		</div>
	</div>
</div>

<div id="boxes">
	<div id="window">
		<div class="win-inner">
			<p>
				<span class="desc-title">Описание</span>
				<span class="close">Закрыть</span>
			</p>
			<div class="text"></div>
		</div>
	</div>
	<div id="mask"></div>
</div>

</body>
</html>