{extends main.tpl}
{block name='content'}
    <h1>{$title2|default:$title}{edit}</h1>
    {$text}
        <ul class="thumbnails">
            {list childrenof=$node}
                <li class="span2">
                    <div class="thumbnail">
                        {if $picture.file}<img src="{resize image=$picture.file w=330}" alt="{$picture.legend}">{/if}
                        <h4>{$name} {$prename}</h4>
                        <p>{$function}</p>
                    </div>
                </li>
            {/list}
        </ul>
{/block}