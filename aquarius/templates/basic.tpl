{extends main.tpl}
{block name='content'}
    <h1>{$title2|default:$title}{edit}</h1>
    <div class="row">
        <div class="col-md-8">
            {$text}
        </div>
        <div class="col-md-4">
            {if $pictures}
                {foreach from=$pictures item=picture name=loop}
                    <img class="thumbnail pull-right" src="{resize image=$picture.file w=330}" alt="{$picture.legend}">
                {/foreach}
            {/if}
        </div>
    </div>
{/block}