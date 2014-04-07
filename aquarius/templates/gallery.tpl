{extends main.tpl}
{block name='content'}
    <h1>{$title2|default:$title}{edit}</h1>
    {$text}
    <div class="row">
        {if $pictures}
            {foreach from=$pictures item=picture name=loop}
                <a class="col-sm-6 col-md-3" href="{$picture.file}" data-toggle="lightbox" data-gallery="multiimages" data-title="{$picture.legend}" gallery="gal">
                    <img src="{resize image=$picture.file w=330}" alt="" class="thumbnail img-responsive" >
                </a>
            {/foreach}
        {/if}
    </div>
{/block}
{block name=js}<script src="/js/ekko-lightbox.js"></script>{/block}