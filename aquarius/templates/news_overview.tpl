{extends main.tpl}
{block name='content'}
    <h1>{$title2|default:$title}{edit}</h1>
    {$text}
    <div class="panel-group" id="accordion">
        {list childrenof=$node}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse{$index}">
                            {$title}
                        </a>
                    </h4>
                </div>
                <div id="collapse{$index}" class="panel-collapse collapse{if $first} in{/if}">
                  <div class="panel-body">
                    {$text}
                  </div>
                </div>
            </div>
        {/list}
    </div>
{/block}
