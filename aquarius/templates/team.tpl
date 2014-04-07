{extends main.tpl}
{block name='content'}
    <h1>{$title2|default:$title}{edit}</h1>
    {$text}
    <div class="row">        
        {list childrenof=$node}
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    {if $picture.file}<img src="{resize image=$picture.file w=330}" alt="{$picture.legend}">{/if}
                    <div class="caption">
                        <h4>{$name} {$prename}</h4>
                        <p>{$function}</p>
                    </div>
                </div>
            </div>
        {/list}
    </div>
{/block}