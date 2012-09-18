{extends skeleton.tpl}
{block name=body}

    <div id="header" class="container">
        {load node=root var=root}
        {link node=home}<img src="/interface/logo.png" alt="{$root->title}" class="logo" />{/link}
        {include file=navig.tpl}
    </div>
    
    <div class="container">
        {block name=content}{/block}
    </div>

    {include file=footer.tpl}
    
{/block}