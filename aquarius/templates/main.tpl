{extends skeleton.tpl}
{block name=body}
    {include file=navig.tpl}
    <div class="container">
        {load node=root var=root}
        {link node=home}<img src="/interface/logo.png" alt="{$root->title}" class="logo" />{/link}
        {block name=content}{/block}
        {include file=footer.tpl}
    </div>
{/block}