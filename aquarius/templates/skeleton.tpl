<!DOCTYPE html>
<html lang="{$lg}">
  <head>
    <meta charset="utf-8">
    <title>{transform function='strip_tags'}{strip}
    {block name='title'}
        {load node=root var=root}
        {if $content->htmltitle}{$content->htmltitle}{else}{$root->htmltitle} | {nodepath_html_title exclude="1,"}{/if}
    {/block}
    {/strip}{/transform}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{getfield node=$node field='metadescription' inherit=true}" />
    <meta name="keywords" content="{getfield node=$node field='metakeywords' inherit=true}" />
    <meta name="author" content="aquaverde.ch" />
    <meta name="generator" content="CMS aquarius {$smarty.const.AQUARIUS_VERSION}" />

    <link href="/lib/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/lib/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/lib/colorbox/colorbox.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/form.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    {block name=body}{/block}
    
    <script src="/lib/bootstrap/js/jquery.js"></script>    
    <script src="/lib/inhouse/javascript.js"></script>
    <script src="/lib/colorbox/jquery.colorbox.js"></script>
    <script src="/lib/bootstrap/js/bootstrap-transition.js"></script>
    <script src="/lib/bootstrap/js/bootstrap-alert.js"></script>
    <script src="/lib/bootstrap/js/bootstrap-modal.js"></script>
    <script src="/lib/bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="/lib/bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="/lib/bootstrap/js/bootstrap-tab.js"></script>
    <script src="/lib/bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="/lib/bootstrap/js/bootstrap-popover.js"></script>
    <script src="/lib/bootstrap/js/bootstrap-button.js"></script>
    <script src="/lib/bootstrap/js/bootstrap-collapse.js"></script>
    <script src="/lib/bootstrap/js/bootstrap-carousel.js"></script>
    <script src="/lib/bootstrap/js/bootstrap-typeahead.js"></script>
    {block name=javascript}{/block}
    <script src="/lib/jquery/jquery.init.js"></script>
    
  </body>
</html>
