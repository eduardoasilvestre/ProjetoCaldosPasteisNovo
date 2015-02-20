            <form id="formSatisfacao" method="post" action="processaSatisfacao.php">
					<div class="form_description">
			<h2 style="text-align:center;">Formul�rio de Pesquisa de Satisfa��o</h2>
			<h4 style="text-align:justify;">Este formul�rio cont�m algumas perguntas sobre a Primeira Noite de Past�is e a Segunda Noite de Caldos do IFTM. O intutito
            deste formul�rio � obter um feedback da popula��o com respeito a qualidade do evento. A equipe do IFTM pretende tentar atender
             as sugest�es da pesquisa para que os pr�ximos eventos sejam ainda melhores.</h4>
		</div>
			<ul >

        <li id="li_1" >
		<label class="description" for="element_1">Nome: </label>
		<div>
			<input id="element_1" name="element_1" class="formCss" type="text" maxlength="255"  size="80" value=""/>
		</div>
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Coment�rios sobre o evento: </label>
		<div>
			<textarea id="element_2" class="formCss" name="element_2" rows="10" cols="65"></textarea>
		</div>
		</li>		<li id="li_3" >
		<label class="description" for="element_3">O que voc� achou do evento ? D� a sua nota abaixo: </label>
  <div>
<br />
<input id="element_3_1" name="element_3" class="element radio" type="radio" value="5" />
<label class="choice" for="element_3_1">5 - O evento me satisfez completamente. A organiza��o e gen�ros aliment�cios oferecidos me deixaram bastante satisfeitos.</label>
<br /><br />
<input id="element_3_2" name="element_3" class="element radio" type="radio" value="4" />
<label class="choice" for="element_3_2">4 - O evento me satisfez quase que completamente. Alguns pequenos detalhes na organiza��o e/ou na qualidade dos g�neros aliment�cios deixaram a desejar.</label>
<br /><br />
<input id="element_3_3" name="element_3" class="element radio" type="radio" value="3" />
<label class="choice" for="element_3_3">3 - O evento me satisfez parcialmente. Alguns problemas prejudicaram a qualidade do evento.</label>
<br /><br />
<input id="element_3_4" name="element_3" class="element radio" type="radio" value="2" />
<label class="choice" for="element_3_4">2 - O evento n�o me satisfez. Houveram problemas vis�veis de qualidade que impactaram na qualidade do evento.</label>
<br /><br />
<input id="element_3_5" name="element_3" class="element radio" type="radio" value="1" />
<label class="choice" for="element_3_5">1 - O evento n�o me satisfez em nada. A qualidade ficou bem abaixo da expectativa com grandes problemas na organiza��o e com os alimentos.</label>

		</div>
		</li>

					<li class="buttons">
			    <input type="hidden" name="flag" value="true" />

				<input id="saveForm" onMouseOver="return validaSatisfacao();" class="saveButton" type="submit" name="submit" value="Salvar" />
		</li>
			</ul>
		</form>
