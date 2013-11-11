{extends main.tpl}
{block name=content}      
    <div class="jumbotron">
        <h1>{$title2|default:$title}{edit}</h1>
        {$text}    
        <p>{link node=$pointer class="btn btn-primary btn-large"}Learn more &raquo;{/link}</p>
    </div>
    <div class="row">
        {list childrenof=news limit=3}
            <div class="col-md-4">
                <h2>{$title}{edit node=$item.node}</h2> 
                <p>{$summary}</p>
                <p><a href="{href node=$item.node}" class="btn btn-lg btn-primary">{wording View details} &raquo;</a></p>
            </div>
        {/list}
    </div>
{/block}