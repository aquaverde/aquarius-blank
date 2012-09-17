{extends main.tpl}
{block name='content'}
    <h1>{$title2|default:$title}{edit}</h1>
    {$text}
    <div class="accordion" id="accordion2">
        {list childrenof=news}
            <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse{$index}">
                    {$title}
                  </a>
                </div>
                <div id="collapse{$index}" class="accordion-body collapse{if $first} in{/if}">
                  <div class="accordion-inner">
                    {$text}
                  </div>
                </div>
            </div>
        {/list}
    </div>
{/block}