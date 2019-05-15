{extends file="template/netflux.tpl"}

{if empty($titreSerie)}
{block name='listing'}
    {foreach from=$nomSerie item=$nom}
    <h2 class="text-center text-white">{$nom.nomSerie}</h2>
    <br/>
    <div class="row justify-content-center">
        <img src="{$link->getImageRedimArticle(500, $nom.nomSerie)}">
    </div>
    {/foreach}
    <br/>
    {foreach from=$articles item=$article}
    <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                        <details>
                            <summary class="text-center text-white">
                                <h3>{$article.nomArticle}</h3>
                                <p>Ecrit le {$article.dateArticle|date_format:"%d/%m/%Y"}</h3>
                            </summary>
                            <br/>
                            <p class="text-white">{$article.articleSerie}</p>
                            <br/>
                            <p class="text-white text-right">Ecrit par {$article.auteurArticle}</p>      
                        </details>
                    </div>
                </div>
            </div>
    {/foreach}
    <br/>
    <br/> 
{/block}

{block name='pagination'}

{/block}

{else}
{block name='listing'}
    <div class="container">
        <div class="row justify-content-md-center">  
            {foreach from=$tabSeries item=$serie}
                <div class="col-4 border border-white bg-dark">
                    <br/>
                    <h3 class="text-center text-white"><strong>{$serie->getNomSerie()}</strong></h3>
                    <br/>
                    <div>
                        <p class="text-left text-white"><strong>Catégories :</strong>
                            <br/>
                        {foreach from=$tabTypeCat item=$categorie}
                            {if $serie->getIdSerie() == $categorie.idSerie}
                                -{$categorie.typeCategorie}
                                <br/> 
                            {/if}
                        {/foreach}
                        </p>
                        <p class="text-left text-white"><strong>Date de Début :</strong> {$serie->getDateDebut()|date_format:"%d/%m/%Y"}</p>
                        {if ($serie->getDateFin() == null)}
                            <p class="text-left text-white"><strong>Date de fin :</strong> En cours</p>
                        {else}
                            <p class="text-left text-white"><strong>Date de fin :</strong> {$serie->getDateFin()|date_format:"%d/%m/%Y"}</p>
                        {/if}
                        <p class="text-left text-white"><strong>Nombres de Saisons :</strong> {$serie->getNbrSaisons()}</p>
                        <div>
                            <img src="{$link->getImageRedimSynop(200, $serie->getNomSerie())}" class="d-block w-100">
                        </div>
                        <details>
                            <summary class="text-center text-white"><h4>Synopsis</h4></summary>
                            <p class="text-center text-white">{$serie->getSynopSerie()}</p>
                        </details>
                        <br/>
                        <a class="btn btn-primary btn-outline-light btn-block" href="{$link->getArticleLink($serie->getIdSerie())}">Découvrir</a>
                    </div>
                    <br/>
                </div>
                <br/>
            {/foreach}
        </div>
    </div>
    <br/>
    <br/>
{/block}
{/if}

</body>
</html>
