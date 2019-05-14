{extends file="template/netflux.tpl"}

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

</body>
</html>
