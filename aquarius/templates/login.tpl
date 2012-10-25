{extends main.tpl}
{block name=style}
    <script language="javascript" type="text/javascript" src="/lib/inhouse/md5.js"></script>
    {literal}
    <script>
        function encryptPassword() {
                var form = document.login;
                form.fe_passwordhash.value = MD5(MD5(form.password.value)+form.challenge.value);
                form.password.value = form.password.value.replace(/./g, '*');
        }
    </script>
    {/literal}
{/block}
{block name=content}
    <div class="span12">
        <div class="row">
          <div class="login-form">
            <h1>{$restriction_node->title}</h1>
              {$restriction_node->text1}
              <h4>{wording Login}</h4>
                <form action="" method="post" name="login" id="loginform" enctype="multipart/form-data" class="form" onsubmit="encryptPassword();">
                    <div class="control-group">
                        <div class="controls">
                            <input type="text" name="fe_username" id="login" placeholder="{wording Username}">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <input type="password" name="fe_password" id="password" placeholder="{wording Password}">
                        </div>
                    </div>            
                    <div class="control-group">
                        <div class="controls">
                            <input type="hidden" name="fe_passwordhash" value=""  />
                            <input type="hidden" name="challenge" value="{$session_id}"  />                        
                            <button type="submit" value="Login" name="backend_login" class="btn">{wording Login}</button>
                        </div>    
                    </div>
                </form>
            </div>
        </div>
    </div>
{/block}

