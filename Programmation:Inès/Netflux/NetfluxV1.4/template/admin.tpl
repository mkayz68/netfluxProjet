{extends file="template/netflux.tpl"}

{block name='listing'}
    {if isset($tabMessage)}
        <div class="container">
            <div class="text-danger text-center justify-content-md-center">
                <p>
                {foreach from=$tabMessage item=message}
                    {$message}<br/>
                {/foreach}
                </p>
            </div>
        </div>
    {/if}
    <h2 class="text-center">Ajouter</h2>
    <details>
        <summary class=" h3 text-center">Ajouter une Série</summary>
        <br/>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row justify-content-center">
                <div class="form-group">
                    <label>Nom de la Série : </label>
                    <input type="text" name='nomSerie' class="form-control"> 
                    <br/>
                    <label>Catégorie n°1 : </label>
                    <select id='typeCategorie1' name='typeCategorie1' class="form-control">
                        {foreach from=$typeCategories item=$categorie}
                            <option> {$categorie->getTypeCategorie()} {$categorie->getIdCategorie()}
                        {/foreach}
                    </select>
                    <br/>
                    <label>Catégorie n°2 : </label>
                    <select id='typeCategorie2' name='typeCategorie2' class="form-control">
                    <option>
                        {foreach from=$typeCategories item=$categorie}
                            <option> {$categorie->getTypeCategorie()} {$categorie->getIdCategorie()}
                        {/foreach}
                    </select>
                    <br/>
                    <label>Nombre de Saisons : </label>
                    <input type="number" name="nbrSaisons" value="1" class="form-control">
                    <br/>
                    <label>Date de début :</label>
                    <input type="date" name="dateDebut" class="form-control">
                    <br/>
                    <label>Date de fin :</label>
                    <input type="date" name="dateFin" class="form-control">
                    <br/>
                    <label>Synopsis :</label>
                    <br/>
                    <textarea  name="synopSerie" rows="5" cols="50"></textarea>
                    <br/>
                    <label>Image Synopsis :</label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="1048576"/>
                    <br/>
                    <input type="file" name="imageSynop"/>
                </div>        
            </div>
            <p class="text-center">
                <button type="submit" value="créer une série" name="creerSerie" class="btn btn-primary ">Créer</button>
            </p>
            <br/>
            </details>
            <details>
                <summary class="h3 text-center">Ajouter un Article</summary>
                <br/>
                <div class="row justify-content-center">
                    <div class="form-group">
                        <select type='text' id='idSerie' name='idSerie' list='idSerie' class="form-control">
                            {foreach from=$tabSeries item=$serie}
                                <option>{$serie->getNomSerie()} {$serie->getIdSerie()}
                            {/foreach}
                        </select>
                        <br/>
                        <label>Nom de l'Article :</label>
                        <input type="text" name='nomArticle' class="form-control"/>
                        <br/>
                        <label>Nom de l'Auteur :</label>
                        <input type="text" name='auteurArticle' class="form-control"/>
                        <br/>
                        <label>Article :</label>
                        <br/>
                        <textarea  name="articleSerie" rows="5" cols="50"></textarea>
                        <br/>
                        <label>Image Article :</label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576"/>
                        <br/>
                        <input type="file" name="imageArticle"/>
                        <br/>
                    </div>
                </div>
                <p class="text-center">
                    <button type="submit" value="créer un article" name="creerArticle" class="btn btn-primary">Créer</button>
                </p>
            </form>
        </details>

        <h2 class="text-center">Modifier</h2>
        <details>
        <summary class=" h3 text-center">Modifier une Série</summary>
        <br/>
        <form action="" method="POST">
            <div class="row justify-content-center">
                <div class="form-group">
                    <label>Série à modifier : </label>
                    <select type='text' id='idSerie' name='idSerieModif' list='idSerie' class="form-control">
                        {foreach from=$tabSeries item=$serie}
                            <option>{$serie->getNomSerie()} {$serie->getIdSerie()}
                        {/foreach}
                    </select>
                    <br/>
                    <label>Nouveau nom : </label>
                    <input type="text" name='nomSerie' class="form-control"> 
                    <br/>
                    <label>Nombre de Saisons : </label>
                    <input type="number" name="nbrSaisons" value="1" class="form-control">
                    <br/>
                    <label>Date de début :</label>
                    <input type="date" name="dateDebut" class="form-control">
                    <br/>
                    <label>Date de fin :</label>
                    <input type="date" name="dateFin" class="form-control">
                    <br/>
                    <label>Nouveau synopsis :</label>
                    <br/>
                    <textarea  name="synopSerie" rows="5" cols="50"></textarea>
                    <br/>
                </div>        
            </div>
            <p class="text-center">
                <button type="submit" value="modifier un article" name="modifierSerie" class="btn btn-primary ">Modifier</button>
            </p>
            <br/>
            </details>
            <details>
                <summary class="h3 text-center">Modifier un Article</summary>
                <br/>
                <div class="row justify-content-center">
                    <div class="form-group">
                        <label>Article à modifier :</label>
                        <select type='text' name='article' list='article' class="form-control">
                            {foreach from=$articles item=$nomArticle}
                                <option>{$nomArticle.idArticle} {$nomArticle.nomArticle} / {$nomArticle.nomSerie} {$nomArticle.idSerie}
                            {/foreach}
                        </select>
                        <label>Modifier le nom de l'Article :</label>
                        <input type="text" name='nomArticle' class="form-control"/>
                        <br/>
                        <label>Modifier le nom de l'Auteur :</label>
                        <input type="text" name='auteurArticle' class="form-control"/>
                        <br/>
                        <label>Modifier l'article :</label>
                        <br/>
                        <textarea  name="articleSerie" rows="5" cols="100"></textarea>
                        <br/>
                    </div>
                </div>
                <p class="text-center">
                    <button type="submit" value="créer un article" name="modifierArticle" class="btn btn-primary">Modifier</button>
                </p>
            </form>
        </details>
    
        <h2 class="text-center">Supprimer</h2>
{/block}


</body>
</html>
