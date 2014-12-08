{extends main.tpl}
{block name='content'}
    <div class="row">
        <div class="col-md-8">
            <h1>{$title2|default:$title}{edit}</h1>
            {if $smarty.post.dynform_submit}
                <p>{process_dynform form_node=$node lg=$lg post_vars=$smarty.post submit_node_name=$content->title}</p>
            {else}
                {$text}
                {render_dynform form_node=$node lg=$lg}
            {/if}
        </div>
    </div>
{/block}