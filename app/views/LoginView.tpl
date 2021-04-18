{extends file="main.tpl"}

{block name=content}
<form action="{$conf->action_url}login" method="post" >
	<h1>Logowanie</h1>
	
        <div class="pure-control-group">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login"/>
		</div>
        <div class="pure-control-group">
			<label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
		<div class="button">
			<input type="submit" value="zaloguj" class="count-button"/>
		</div>
	
</form>	

{include file='messages.tpl'}

{/block}