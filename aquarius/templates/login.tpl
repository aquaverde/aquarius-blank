{extends main.tpl}
{block name=content}
    <div class="span12">
        <div class="row">
          <div class="login-form">
            <h1>{$restriction_node->title}</h1>
              {$restriction_node->text1}
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
{/block}

