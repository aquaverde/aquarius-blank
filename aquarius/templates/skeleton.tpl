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
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/form.css" rel="stylesheet">
    {block name=style}{/block}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="/favicon.ico">
  </head>
  <body>
    {block name=body}{/block}
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/utilities.js"></script>
    {block name=js}{/block}
    <script src="/js/init.js"></script>
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
