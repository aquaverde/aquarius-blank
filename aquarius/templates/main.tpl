{extends skeleton.tpl}
{block name=body}
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          {link node=root class=brand}bootstrap blank site{/link}
          {include file=navig.tpl}
        </div>
      </div>
    </div>
    <div class="container">
        {block name=content}{/block}
    </div>
{/block}