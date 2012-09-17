{extends main.tpl}
{block name='content'}
    <div class="row">
        <div class="span8">
            <h1>{$title2|default:$title}{edit}</h1>
            {$text}
        </div>
        <div class="span4">
            {if $pictures}
                {foreach from=$pictures item=picture name=loop}
                    <img class="thumbnail" src="{resize image=$picture.file w=330}" alt="{$picture.legend}">
                {/foreach}
            {/if}
        </div>
{/block}