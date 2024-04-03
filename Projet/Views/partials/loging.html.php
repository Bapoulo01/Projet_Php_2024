
<form method="post" action="<?=WEBROOT;?>">
        <h4>Page Connexion</h4>     
        <hr>
        <div>
            <label>Login</label>
            <input type="text" name="login" placeholder="login">
        </div>
        <div>
            <label>password</label>
             <input type="password" name="mdp" placeholder="password">
        </div>  

    <button type=submit name="action" value="send"> Se connecter</button>
    <div>
        <?php if (isset($message)) {
            echo($message);
        }?>
    </div>
    </form>