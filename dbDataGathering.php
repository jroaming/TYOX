<?php
function generateShirtArticle($shirtData) {
    echo '
        <article name="shirt" class="article-shirt margin-1 vertical-padding-1 flexed-column blackened blue-sheen-hover cursor-trigger">
            <img src="res/images/default-shirt.png" alt="Shirt" class="article-image"/>
            <h2 class="article-title">'.$shirtData['sName'].'</h2>
        </article>
    ';
}
?>