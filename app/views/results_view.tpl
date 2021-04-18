{extends file="main.tpl"}

{block name=navigation}
<div id="Start" class="header">
		<div class="nav-bar">
			<p>
				Orange Calculator
			</p>
			<ol>
				<li><a href="#Start">Start</a></li>
				<li><a href="{$conf->action_url}calcShow" href="#Calc">Kalkulator</a></li>
                <li><a href="{$conf->action_url}results">historia</a></li>
				<li><a href="{$conf->action_url}logout">Wyloguj</a></li>
			</ol>
		</div>
	</div>



{/block}


{block name="content"}
<table class="table result-table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Kwota</th>
                <th scope="col">Lata</th>
                <th scope="col">Procent</th>
                <th scope="col">Rata</th>
                <th scope="col">Data</th>
            </tr>
        </thead>
        <tbody>
            {foreach $credit as $c}
            {strip}
                <tr>
                    <td>{$c["idwynik"]}</td>
                    <td>{$c["kwota"]}</td>
                    <td>{$c["lat"]}</td>
                    <td>{$c["procent"]}</td>
                    <td>{$c["rata"]}</td>
                    <td>{$c["data"]}</td>
                </tr>
            {/strip}
            {/foreach}
        </tbody>
    </table>

{/block}



     


<div class="footer">
		<p>	
			@ 2021 | Strona wykanana przez Daniel Gandyra 
		</p>
	</div>
