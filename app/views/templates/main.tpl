<!DOCTYPE HTML>
<html  lang="pl">
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$page_title|default:"Tytuł domyślny"}</title>
	<link rel="stylesheet" type="text/css" href="{$conf->app_url}/css/calc_style.css">
	<script src="{$conf->app_url}/js/main.js"></script>
</head>
	
<body>
	{block name=navigation}{/block}
	<div class="box">
		<div class="section">
			<div class="container">
				{block name=content} Domyślna treść zawartości ... {/block}
			</div>
		</div>	
	</div>
	

</body>

</html>