<!DOCTYPE>
    <html>
        <title>
        </title>
        <body>
            <form action="loginTraitement.php" method="post">
                <table>
                    <tr>
                        <td>Email:</td>
                        <td><input type="text" placeholder="Email" name="email"/></td>
                    </tr>
                    <tr>
                        <td>Mot de passe:</td>
                        <td><input type="password" placeholder="Email" name="password"/></td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" name="connexion" value="CONNEXION">SE CONNECTER</button>
                            <span class="loginMsg"><?php echo @$msg;?></span>
                        </td>
                    </tr>
                </table>
            </form>
        </body>
    </html>