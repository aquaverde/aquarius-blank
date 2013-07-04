{extends main.tpl}

{block name='content'}
<div id="content-wrapper">
	<div id="content">
		
		<h1>{$title2|default:$title} {edit}</h1>	
		
		{$text}
		{$text1}
		
        {menu boxed=true depth=3}
            {if $entry.levelhead}
                {if $entry.depth > 0}<li>{/if}
                <ul class="level{$entry.depth}">
            {/if}
            {if $entry.node}
                <li>
                    <div class="sitemap-item">{link node=$entry.node}{$entry.node->get_contenttitle()}{/link}</div>
                </li>
            {/if}
            {if $entry.levelfoot}
                </ul>
                {if $entry.depth > 0}</li>{/if}
            {/if}
        {/menu}		
	
	</div>	
</div>
{/block}
