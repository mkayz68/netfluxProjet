{extends file="template/netflux.tpl"}

{if empty($titreSerie)}
{block name='listing'}
    {foreach from=$nomSerie item=$nom}
    <h2 class="text-center text-white">{$nom.nomSerie}</h2>
    <br/>
    <div class="row justify-content-center">
        <img src="{$link->getImageRedim('Article', 500, $nom.nomSerie)}">
    </div>
    <br/>
    <br/>
    <div class="row justify-content-center">
        <div class= "col-6 border border-danger">
            <h3 class="text-center">Synopsis</h3>
            <br/>
            <p>{$nom.synopSerie}</p>
        </div>
    </div>
    {/foreach}
    <br/>
    {foreach from=$articles item=$article}
    <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-auto ">
                        <br/>
                        <br/>
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
                    <h3 class="text-center text-danger border border-white"><strong>{$serie->getNomSerie()}</strong></h3>
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
                            <img src="{$link->getImageRedim('Synopsis', 200, $serie->getNomSerie())}" class="d-block w-100">
                        </div>
                        <h4 class="text-center text-danger">Synopsis</h4>
                        <p class="text-center text-white">{$serie->getSynopSerie()|truncate}</p>
                        <br/>
                        <a class="btn btn-primary btn-outline-light btn-block" href="{$link->getArticleLink($serie->getIdSerie())}">Voir Plus</a>
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
