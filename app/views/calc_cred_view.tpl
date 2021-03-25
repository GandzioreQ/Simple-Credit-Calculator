{extends file="main.tpl"}

{block name=content}
<form action="{$conf->action_root}calcCompute" method="post">
    <h1 id="Calc">Kalkulator Kredytowy</h1>
    <div class="box">
        <label for="id_amount">Kwota pożyczki:</label>
        <input id="id_amount" type="text" name="amount" placeholder="Podaj kwotę pożyczki" />
        <label for="id_period">Termin spłaty (w latach): </label>
        <input id="id_period" type="text" name="period" placeholder="Podaj ilość lat" />
        <label for="id_rate">Oprocentowanie(%): </label>
        <input id="id_rate" type="text" name="rate" placeholder="Podaj oprocentowanie" />
    </div>
    

    <div class="button">
        <input type="submit" class="count-button" value="Oblicz ratę" />	
        
    </div>
    {if isset($res->result)}
    <div class="final-result">
      
            <p class="final-result-style">Rata miesięczna: {$res->result} zł.</p>
       
    </div>
     {/if}   
</form>	
<div class="error">
   
    {if $msgs->isError()}
            <ol class = "error">
                {foreach  $msgs->getErrors() as $err}
                {strip}
                    <li>{$err}</li>
                {/strip}
                {/foreach}
                </ol>
        {/if}
    

</div>
{/block}

{block name=footer}
<p>	
    @ 2021 | Strona wykanana przez Daniel Gandyra 
</p>
{/block}