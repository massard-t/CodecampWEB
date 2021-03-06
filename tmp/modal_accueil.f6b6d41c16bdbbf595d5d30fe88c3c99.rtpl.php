<?php if(!class_exists('raintpl')){exit;}?><div class="ui small modal login transition fly up">
    <div class="close icon"><i class="fa fa-close"></i></div>
    <div class="header">Se connecter</div>
    <div class="content">
        <form class="ui inverted form" method="post" action="src/log_in.php">
            <div class="two fields">
                <div class="field">
                    <label style="color: black; text-align: center"><i class="fa fa-envelope"></i> Adresse email</label>
                    <input name="mail" placeholder="john.doe@exemple.com" type="text">
                </div>
                <div class="field">
                    <label style="color: black; text-align: center"><i class="fa fa-lock"></i> Mot de passe</label>
                    <input name="password" placeholder="******" type="password">
                </div>
            </div>
            <div class="inline field">
                <div class="ui slider checkbox">
                    <input name="check_terms" class="hidden" tabindex="0" type="checkbox">
                    <label style="color: black">Je suis en accord avec les conditions generales d'utilisation du site.</label>
                </div>
            </div>
            <br />
            <br />
            <center><button class="ui submit button inverted colored green large" type="submit" name="login_submit">Se connecter</button></center>
        </form>
    </div>
</div>
<div class="ui small modal register transition fly up">
    <div class="close icon"><i class="fa fa-close"></i></div>
    <div class="header">S'inscrire</div>
    <div class="content">
        <form class="ui inverted form" method="post" action="includes/checks/check_sign_in.php">
            <div class="two fields">
                <div class="field">
                    <label style="color: black;"><i class="fa fa-user"></i> Prenom</label>
                    <input name="firstname" placeholder="John" type="text">
                </div>
                <div class="field">
                    <label style="color: black;"><i class="fa fa-user"></i> Nom</label>
                    <input name="lastname" placeholder="Doe" type="text">
                </div>
            </div>
            <div class="field">
                <label style="color: black;"><i class="fa fa-calendar"></i> Date de naissance</label>
                <input name="birthday" placeholder="18/11/96" type="text">
            </div>
            <div class="two fields">
                <div class="field">
                    <label style="color: black;"><i class="fa fa-envelope"></i> Adresse email</label>
                    <input name="email" placeholder="john.doe@exemple.com" type="text">
                </div>
                <div class="field">
                    <label style="color: black;"><i class="fa fa-send"></i> Adresse postale</label>
                    <input name="address" placeholder="Rue, Ville, Zip" type="text">
                </div>
            </div>
            <div class="field">
                <label style="color: black;"><i class="fa fa-lock"></i> Mot de passe</label>
                <input name="password" placeholder="Entrez un mot de passe" type="password">
            </div>
            <div class="inline field">
                <div class="ui slider checkbox">
                    <input name="check_terms" class="hidden" tabindex="0" type="checkbox">
                    <label style="color: black">Je suis en accord avec les conditions generales d'utilisation du site.</label>
                </div>
            </div>
            <br />
            <br />
            <center><button class="ui submit button inverted colored blue large" type="submit" name="register_submit">S'inscrire</button></center>
        </form>
    </div>
</div>