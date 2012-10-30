{extends skeleton.tpl}

{block name=style}
    <link href="/lib/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/lib/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <style>
        {literal}
        html, body { background: #f2f2f2;  }
        body { padding-top: 15%;  }
        .container { width: 300px; }
        .container > .content { background-color: #fff; padding: 20px; margin: 0 -20px; -webkit-border-radius: 10px 10px 10px 10px; -moz-border-radius: 10px 10px 10px 10px; border-radius: 10px 10px 10px 10px; -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15); -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15); box-shadow: 0 1px 2px rgba(0,0,0,.15);}
        .login-form { margin-left: 65px; }
    </style>
    {/literal}
{/block}

{block name='body'}
    <div class="container">
        <div class="content">
            <div class="row">
              <div class="login-form">
                  <h4>{wording Login}</h4>
                    <form action="" method="post" name="login" id="loginform" enctype="multipart/form-data" class="form">
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
                                <button type="submit" value="Login" name="backend_login" class="btn">{wording Login}</button>
                            </div>    
                        </div>
                    </form>
              </div>
            </div>
        </div>
    </div>
{/block}
