{extends file="template/netflux.tpl"}

{block name='listing'}
    {foreach from=$articles item=$article}
        <details>
            <summary class="text-center text-white"><h2>{$article.nomArticle}</h2></summary>
            <p class="text-center text-white">{$article.articleSerie}</p>
        </details>
    {/foreach}
{/block}

</body>
</html>
