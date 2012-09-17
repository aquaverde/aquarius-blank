{extends main.tpl}
{block name='content'}
    <h1>{$title2|default:$title}{edit}</h1>
    {$text}
    {if $pictures}
        <ul class="thumbnails">
        {foreach from=$pictures item=picture name=loop}
            <li class="span2">
                <a href="{$picture.file}" class="gallery" rel="gal">
                    <img class="thumbnail" src="{resize image=$picture.file w=330}" alt="{$picture.legend}">
                </a>
            </li>
        {/foreach}
        </ul> 
    {/if}
{/block}