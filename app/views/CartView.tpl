{extends file="main.tpl"}
{block name=intro}
    <div class="jumbotron top-space">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{$conf->action_root}main">Strona główna</a></li>
                
            
                <p>Przejrzyj zawartość swojego koszyka przed finalizacją zamówienia.</p>
                <table>
                  <thead>
 <li class="list-group-item">
                                        <div class="row">

<div class="col-md-3">
                   <th>Produkt</th>
</div>
  <div class="col-md-3">                   
<th>Zamówienie</th>
</div>
   <div class="col-md-3">                  
<th>Modyfikacja</th>
</div>
     </div>
                                    </li>
              </thead>
                  <tbody>
                    {foreach $cart as $row}
              				<tr>
              					<td>{$row["Id_sprzet"]}</td>
		       <td>{$row["Id_wypozyczenia"]}</td>
                        <td>
			<a href="{$conf->action_url}cartDelete/{$row['Id_sprzet']}" class="button alt small">Usuń</a>
                        </td>
              				</tr>
			{foreachelse}
						<h2>Pusto</h2>
                      <p>Przejdz do listy sprzętu!</p>
              			{/foreach}
                  </tbody>
                </table>
              </section>
						</div>
				</div>
        <div class="col-4 col-12-medium">

		
							
                    <h2>Zakup</h2>
                  <p>Suma zakupów:&nbsp;<strong>120,00 zł‚</strong></p>
                  <p>Odbierz zarezerwowany sprzęt w naszej wypożyczalni!</p>
  								
                    <a href="{$conf->action_root}cartFinalize" class="button icon fa-file-alt">Zakup</a>
  								
	
				</div>
			</div>
</div>
		
	</div>
</div>
{/block}
