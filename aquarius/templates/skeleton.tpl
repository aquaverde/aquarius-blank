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
    {block name=style}{/block}

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    {block name=javascript}{/block}

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
    <script src="/lib/bootstrap/js/bootstrap.js"></script>    
    <script src="/lib/jquery/jquery.init.js"></script>    
    <script src="/lib/inhouse/javascript.js"></script>
    <script src="/lib/colorbox/jquery.colorbox.js"></script>

    {if $root->googleanalytics}
        {literal}
            <script>
                $(window).load(function() {
                    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
                    $.ajax({
                        url: gaJsHost+'google-analytics.com/ga.js', type: 'get', dataType: 'script', cache: true,
                        success: function() { try { _gat._getTracker("{/literal}{$root->googleanalytics}{literal}")._trackPageview(); } catch(err) {} }
                    });
                });
            </script>
        {/literal}
    {/if}
    
  </body>
</html>
