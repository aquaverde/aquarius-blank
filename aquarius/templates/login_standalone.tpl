{extends skeleton.tpl}

{block name=style}
    <style>
        {literal}
        html, body { background: #f2f2f2;  }
        body { padding-top: 15%;  }
        .container { width: 300px; }
        .container > .content { background-color: #fff; padding: 20px; margin: 0 -20px; -webkit-border-radius: 10px 10px 10px 10px; -moz-border-radius: 10px 10px 10px 10px; border-radius: 10px 10px 10px 10px; -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15); -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15); box-shadow: 0 1px 2px rgba(0,0,0,.15);}
        .login-form { margin-left: 65px; }
    </style>
    <script language="javascript" type="text/javascript" src="/lib/inhouse/md5.js"></script>
    <script>
        function encryptPassword() {
                var form = document.login;
                form.fe_passwordhash.value = MD5(MD5(form.password.value)+form.challenge.value);
                form.password.value = form.password.value.replace(/./g, '*');
        }
    </script>
    {/literal}
{/block}

{block name='body'}
    <div class="container">
        <div class="content">
            <div class="row">
              <div class="login-form">
                  <h4>{wording Password}</h4>
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
    </div>
{/block}
