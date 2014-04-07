{extends skeleton.tpl}
{block name=body}
    <div class="container">
        {load node=root var=root}
        {link node=home}<img src="/interface/logo.png" alt="{$root->title}" class="logo" />{/link}
        {include file=navig.tpl}
        {load node=root var=root}
        {block name=content}{/block}
        {include file=footer.tpl}
    </div>
{/block}