<header class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
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
        <ul class="nav navbar-nav navbar-right">
            {foreach_language node=$node}
                <li{if $entry.lg == $lg} class="active"{/if}><a href="{href node=$entry.node lg=$entry.lg}">{$entry.lg}</a></li>
            {/foreach_language}
        </ul>
    </div>
</header>
