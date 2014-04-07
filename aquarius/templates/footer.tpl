<hr>
<div class="footer">
    {usecontent node=root}
        <div class="pull-left">{$footer}</div>
    {/usecontent}
    <ul class="nav navbar pull-right">
        {list childrenof=root filter="has menu_position footer"}
            <li{if $active} class="active"{/if}>{link node=$item.node}{$title}{/link}
        {/list}
    </ul>
</div>
