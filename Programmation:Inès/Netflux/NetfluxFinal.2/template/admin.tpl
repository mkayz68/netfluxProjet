{extends file="template/netflux.tpl"}

    {block name='carousel'}
        <img src='images/administration.jpeg' alt="image d'administration" class="d-block w-100 position-relative">
        {if isset($tabMessage)}
            <div class="container ">
                <div id="messageControl" class="text-center justify-content-md-center centered position-absolute">
                    <p>
                    {foreach from=$tabMessage item=message}
                        {$message}<br/>
                    {/foreach}
                    </p>
                </div>
            </div>
        {/if}
    {/block}

    {if empty($titreSerie)}
    {block name='listing'}
        <h2 class="text-center text-primary">Ajouter</h2>
        <details>
            <summary class="text-white h3 text-center">Ajouter une Série</summary>
            <br/>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row justify-content-center">
                    <div class="form-group">
                        <label class="text-white">Nom de la Série : </label>
                        <input type="text" name='nomSerie' required="required" class="form-control"> 
                        <br/>
                        <label class="text-white">Catégorie n°1 : </label>
                        <select id='typeCategorie1' name='typeCategorie1' required="required" class="form-control">
                            {foreach from=$typeCategories item=$categorie}
                                <option value="{$categorie->getTypeCategorie()} {$categorie->getIdCategorie()}"> {$categorie->getTypeCategorie()} 
                            {/foreach}
                        </select>
                        <br/>
                        <label class="text-white">Catégorie n°2 : </label>
                        <select id='typeCategorie2' name='typeCategorie2' required="required" class="form-control">
                        <option>
                            {foreach from=$typeCategories item=$categorie}
                                <option value="{$categorie->getTypeCategorie()} {$categorie->getIdCategorie()}"> {$categorie->getTypeCategorie()}
                            {/foreach}
                        </select>
                        <br/>
                        <label class="text-white">Nombre de Saisons : </label>
                        <input type="number" name="nbrSaisons" required="required" value="1" min="1" class="form-control">
                        <br/>
                        <label class="text-white">Date de début :</label>
                        <input type="date" name="dateDebut" required="required" class="form-control">
                        <br/>
                        <label class="text-white">Date de fin :</label>
                        <input type="date" name="dateFin" class="form-control">
                        <br/>
                        <label class="text-white">Synopsis :</label>
                        <br/>
                        <textarea  name="synopSerie" required="required" rows="5" cols="50"></textarea>
                        <br/>
                        <br/>
                        <label class="text-white">Image Synopsis :</label>
                        <input type="hidden" name="MAX_FILE_SIZE" required="required" value="1048576"/>
                        <br/>
                        <input class="text-white" type="file" name="imageSynop"/>
                    </div>        
                </div>
                <p class="text-center">
                    <button type="submit" value="créer une série" name="creerSerie" class="btn btn-primary ">Créer</button>
                </p>
                <br/>
            </form>
        </details>
        <details>
            <summary class="h3 text-white text-center">Ajouter un Article</summary>
            <br/>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row justify-content-center">
                    <div class="form-group">
                        <select type='text' id='idSerie' name='idSerie' list='idSerie' class="form-control">
                            {foreach from=$tabSeries item=$serie}
                                <option value="{$serie->getNomSerie()} {$serie->getIdSerie()}">{$serie->getNomSerie()} 
                            {/foreach}
                        </select>
                        <br/>
                        <label class="text-white">Nom de l'Article :</label>
                        <input type="text" name='nomArticle' required="required" class="form-control"/>
                        <br/>
                        <label class="text-white">Nom de l'Auteur :</label>
                        <input type="text" name='auteurArticle' required="required" class="form-control"/>
                        <br/>
                        <label class="text-white">Article :</label>
                        <br/>
                        <textarea  name="articleSerie" required="required" rows="5" cols="50"></textarea>
                        <br/>
                        <label class="text-white">Image Article :</label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576"/>
                        <br/>
                        <input class="text-white" type="file" name="imageArticle"/>
                        <br/>
                    </div>
                </div>
                <p class="text-center">
                    <button type="submit" value="créer un article" name="creerArticle" class="btn btn-primary">Créer</button>
                </p>
            </form>
        </details>
        <br/>
        <br/>
        <h2 class="text-center text-primary">Modifier</h2>
        <details>
            <summary class="text-white h3 text-center">Modifier une Série</summary>
            <br/>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row justify-content-center">
                    <div class="form-group">
                        <label class="text-white">Série à modifier : </label>
                        <select type='text' id='idSerie' name='idSerieModif' list='idSerie' class="form-control">
                            {foreach from=$tabSeries item=$serie}
                                <option value="{$serie->getNomSerie()} {$serie->getIdSerie()}" >{$serie->getNomSerie()} 
                            {/foreach}
                        </select>
                        <br/>
                        <label class="text-white">Nouveau nom : </label>
                        <input type="text" name='nomSerie' class="form-control"> 
                        <br/>
                        <label class="text-white">Nombre de Saisons : </label>
                        <input type="number" name="nbrSaisons" value="empty" min="1"  class="form-control">
                        <br/>
                        <label class="text-white">Date de début :</label>
                        <input type="date" name="dateDebut" class="form-control">
                        <br/>
                        <label class="text-white">Date de fin :</label>
                        <input type="date" name="dateFin" class="form-control">
                        <br/>
                        <label class="text-white">Nouveau synopsis :</label>
                        <br/>
                        <textarea  name="synopSerie" rows="5" cols="50" ></textarea>
                        <br/>
                        <br/>
                        <label class="text-white">Nouvelle image :</label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576"/>
                        <br/>
                        <input class="text-white" type="file" name="imageSynop"/>
                        <br/>
                    </div>        
                </div>
                <p class="text-center">
                    <button type="submit" value="modifier un article" name="modifierSerie" class="btn btn-primary ">Modifier</button>
                </p>
            </form>
            <br/>
        </details>
        <details>
            <summary class="h3 text-center text-white">Modifier un Article</summary>
            <br/>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row justify-content-center">
                    <div class="form-group">
                        <label class="text-white">Article à modifier :</label>
                        <select type='text' id='article' name='article' list='article' class="form-control">
                            {foreach from=$articles item=$nomArticle}
                                <option value="{$nomArticle.idArticle} {$nomArticle.nomArticle} / {$nomArticle.nomSerie} {$nomArticle.idSerie}">{$nomArticle.nomArticle} / {$nomArticle.nomSerie}
                            {/foreach}
                        </select>
                        <br/>
                        <label class="text-white">Modifier le nom de l'Article :</label>
                        <input type="text" name='nomArticle' class="form-control"/>
                        <br/>
                        <label class="text-white">Modifier le nom de l'Auteur :</label>
                        <input type="text" name='auteurArticle' class="form-control"/>
                        <br/>
                        <label class="text-white">Modifier l'article :</label>
                        <br/>
                        <textarea  name="articleSerie" rows="5" cols="120"></textarea>
                        <br/>
                        <br/>
                        <label class="text-white">Nouvelle image :</label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1048576"/>
                        <br/>
                        <input class="text-white" type="file" name="imageArticle"/>
                        <br/>
                    </div>
                </div>
                <p class="text-center">
                    <button type="submit" value="créer un article" name="modifierArticle" class="btn btn-primary">Modifier</button>
                </p>
            </form>
        </details>
        <br/>
        <br/>
        <h2 class="text-center text-primary">Supprimer</h2>
        <details>
            <summary class="h3 text-white text-center">Supprimer une Série</summary>
            <br/>
            <form action="" method="POST">
                <div class="row justify-content-center">
                    <div class="form-group">
                        <label class="text-white">Série à supprimer :</label>
                        <select type='text' id='idSerie' name='idSerie' list='idSerie' class="form-control">
                            {foreach from=$tabSeries item=$serie}
                                <option value="{$serie->getNomSerie()} {$serie->getIdSerie()}">{$serie->getNomSerie()}
                            {/foreach}
                        </select>
                    </div>
                </div>
                <p class="text-center">
                    <button type="submit" value="supprimer une série" name="supprSerie" class="btn btn-primary">Supprimer</button>
                </p>
            </form>
        </details>
        <details>
            <summary class="h3 text-white text-center">Supprimer un Article</summary>
            <br/>
            <form action="" method="POST">
                <div class="row justify-content-center">
                    <div class="form-group">
                        <label class="text-white">Article à supprimer :</label>
                        <select type='text' name='article' list='article' class="form-control">
                            {foreach from=$articles item=$nomArticle}
                                <option value="{$nomArticle.idArticle} {$nomArticle.nomArticle} / {$nomArticle.nomSerie} {$nomArticle.idSerie}">{$nomArticle.nomArticle} / {$nomArticle.nomSerie}
                            {/foreach}
                        </select>
                    </div>
                </div>
                <p class="text-center">
                    <button type="submit" value="supprimer un article" name="supprArticle" class="btn btn-primary">Supprimer</button>
                </p>
            </form>
        </details>
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
    {/if}

   </body>
</html>
