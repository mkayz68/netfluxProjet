{extends file="template/netflux.tpl"}

{block name='listing'}
    {foreach from=$nomSerie item=$nom}
    <h2 class="text-center">{$nom.nomSerie}</h2>
    <div class="row justify-content-center">
        <img src="{$link->getImageRedimArticle(500, $nom.nomSerie)}">
    </div>
    {/foreach}
    <br/>
    {foreach from=$articles item=$article}
        <details>
            <summary class="text-center text-white">
                <h3>{$article.nomArticle}</h3>
                <p>Ecrit le {$article.dateArticle}</h3>
            </summary>
            <br/>
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                        <p class="text-white">{$article.articleSerie}</p>
                        <br/>
                        <p class="text-white text-right">Ecrit par {$article.auteurArticle}</p>
                    </div>
                </div>
            </div>
        </details>
    {/foreach}
    <br/>  
{/block}

</body>
</html>
