<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Entrez votre nouveau mot de passe</p> 

    <?php
        require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <?php if($token_valido) { ?>
        <form method="POST" class="formulario">
            <div class="formulario__campo">
                <label for="password" class="formulario__label">Nouveau mot de passe</label>
                <input
                    type="password"
                    class="formulario__input"
                    placeholder="Tu Nuevo Password"
                    id="password"
                    name="password"
                >
            </div>

            <input type="submit" class="formulario__submit" value="Enregistrer le mot de passe">
        </form>
    <?php } ?>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">Vous avez déjà un compte ? S'identifier</a>
        <a href="/registro" class="acciones__enlace">Vous n'avez pas encore de compte ? Créer un compte</a>
    </div>
</main>