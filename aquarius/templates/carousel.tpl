{extends main.tpl}
{block name='content'}
    <h1>{$title2|default:$title}{edit}</h1>
    {$text}
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            {foreach from=$pictures item=picture name=indicators}
                <li data-target="#carousel-example-generic" data-slide-to="{$smarty.foreach.indicators.index}" class="{if $smarty.foreach.indicators.first} active{/if}"></li>
            {/foreach}
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner">
            {foreach from=$pictures item=picture name=loop}
                <div class="item{if $smarty.foreach.loop.first} active{/if}">
                    <img src="{$picture.file}" alt="{$picture.legend}">
                    <div class="carousel-caption"><p>{$picture.legend}</p></div>
                </div>
            {/foreach}
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
{/block}
