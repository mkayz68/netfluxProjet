{include file='template/header.tpl'}
           
    <br/>
    <br/> 

    {block name='listing'}
        <div class="container">
            <div class="row justify-content-md-center">  
                {foreach from=$tabSeries item=$serie}
                    <div class="blockSerie col-4 border border-white bg-dark">
                        <br/>
                        <h3 class="text-center bordeaux border border-white"><strong>{$serie->getNomSerie()}</strong></h3>
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
                                <img src="{$link->getImageRedim('Synopsis', 200, $serie->getNomSerie())}" alt="image du synopsis pour la présentation de la série" class="d-block w-100">
                            </div>
                            <h4 class="text-center bordeaux">Synopsis</h4>
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
    {if empty($titreSerie)}
    {block name="pagination"}
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="index.php?page={$pageCourante}&precedente=1">Précédent</a></li>
                {foreach from=$tabPagination item=$pagination}
                    {$pagination}
                {/foreach}
                <li class="page-item"><a class="page-link" href="index.php?page={$pageCourante}&suivante=1">Suivant</a></li>
            </ul>
        </nav>
    {/block}
    {/if}

    {block name="javaScriptAdditionnel"}
    {/block}

{include file='template/footer.tpl'}
    