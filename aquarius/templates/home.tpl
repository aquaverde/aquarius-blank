{extends main.tpl}
{block name=content}      
    <div class="hero-unit">
        <h1>{$title2|default:$title}{edit}</h1>
        {$text}    
        <p>{link node=$pointer class="btn btn-primary btn-large"}Learn more &raquo;{/link}</p>
    </div>
    <div class="row-fluid">
        {list childrenof=news limit=3}
            <div class="span4">
                <h2>{$title}{edit node=$item.node}</h2> 
                <p>{$summary}</p>
                <p>{link node=$item.node class=btn}{wording View details} &raquo;{/link}</p>
            </div>
        {/list}
    </div>
{/block}