<div class="navbar navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
        {load node=root var=root}
        {link node=root class=brand}{$root->title}{/link}
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
        <div class="nav-collapse collapse pull-right">
            <ul class="nav">
                {foreach_language node=$node}
                    <li{if $entry.lg == $lg} class="active"{/if}><a href="{href node=$entry.node lg=$entry.lg}">{$entry.lg}</a></li>
                {/foreach_language}
            </ul>
        </div>
    </div>
  </div>
</div>
