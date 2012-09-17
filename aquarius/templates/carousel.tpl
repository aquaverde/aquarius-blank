{extends main.tpl}
{block name='content'}
    <div class="row-fluid">
        <h1>{$title2|default:$title}{edit}</h1>
        {$text}
        <div id="myCarousel" class="carousel slide">
            <!-- Carousel items -->
            <div class="carousel-inner">
                {foreach from=$pictures item=picture name=loop}
                    <div class="item{if $smarty.foreach.loop.first} active{/if}">
                        <img src="{$picture.file}" alt="{$picture.legend}">
                        <div class="carousel-caption"><p>{$picture.legend}</p></div>
                    </div>
                {/foreach}
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
    </div>
{/block}