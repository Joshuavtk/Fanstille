<div class="wrap">
    <div class="article-wrap">
        {foreach from=$articles_list item=one_article}
            <article>
                <h1> {$one_article.title} </h1>
                <div class="imageDiv">
                    <img src="{$filePath}{$one_article.image}" class="articleImage">
                </div>
                <div> {$one_article.content} </div>
            </article>
        {/foreach}
    </div>
</div>

