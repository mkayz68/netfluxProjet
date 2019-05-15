{extends file="template/netflux.tpl"}

    {if empty($titreSerie)}
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
                                        <img src="{$link->getImageRedimSynop(200,$serie->getNomSerie())}" class="d-block w-100">
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
    {block name="pagination"}
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="categorie.php?id={$id}&page={$pageCourante}&precedente=1">Précédent</a></li>
                {foreach from=$tabPagination item=$pagination}
                    {$pagination}
                {/foreach}
                <li class="page-item"><a class="page-link" href="categorie.php?id={$id}&page={$pageCourante}&suivante=1">Suivant</a></li>
            </ul>
        </nav>
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