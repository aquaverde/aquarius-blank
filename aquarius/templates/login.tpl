{extends main.tpl}
{block name='content'}
    <div class="row">
        <div class="span12">
            <h1>{$restriction_node->title}</h1>
            {$restriction_node->text1}
            {literal}
            <script language="javascript" type="text/javascript" src="/lib/inhouse/md5.js"></script>
            <script><!--
                function encryptPassword() {
                        var form = document.login;
                        form.fe_passwordhash.value = MD5(MD5(form.password.value)+form.challenge.value);
                        form.password.value = form.password.value.replace(/./g, '*');
                }
            --></script>
            {/literal}
            <form action="" method="post" id="loginform" name="login" onsubmit="encryptPassword();">
                <label for="login">{wording Username}</label>
                <input type="text" name="fe_username" id="login" class="ef" />
                <label for="password">{wording Password}</label>
                <input type="password" name="fe_password" id="password" class="ef" />
                <input type="hidden" name="fe_passwordhash" value=""  />
                <input type="hidden" name="challenge" value="{$session_id}"  />
                <br/>
                <input type="submit" value="{wording Login}" class="btn" />
            </form>
        </div>
    </div>
{/block}
