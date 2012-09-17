<div class="nav-collapse collapse">
<ul class="nav">
  {list childrenof=root filter="has menu_position main"}
        {loadnodes childrenof=$item.node var=subitems honor_show_in_menu=true}                
        {if $subitems|@count}
            <li class="dropdown">
            <a href="{href node=$item.node}" class="dropdown-toggle" data-toggle="dropdown">{$title} <b class="caret"></b></a>
            <ul class="dropdown-menu">
                {foreach from=$subitems item=subitem name=subnavig}
                    <li{if $subitem.active} class="active"{/if}>{link node=$subitem.node}{$subitem.content->title}{/link}</li>
                {/foreach}
            </ul>
        {else}
            <li{if $active} class="active"{/if}>{link node=$item.node}{$title}{/link}
        {/if}
    </li>
  {/list}
</ul>
</div>
