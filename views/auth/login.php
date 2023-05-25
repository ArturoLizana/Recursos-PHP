<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Connectez-vous à DevWebcamp</p> 

    <?php 
        require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <form method="POST" action="/login" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input
                type="email"
                class="formulario__input"
                placeholder="Tu Email"
                id="email"
                name="email"
            >
        </div>

        <div class="formulario__campo">
            <label for="password" class="formulario__label">Mot de passe</label>
            <input
                type="password"
                class="formulario__input"
                placeholder="Tu Password"
                id="password"
                name="password"
            >
        </div>

        <input type="submit" class="formulario__submit" value="Login">
    </form>

    <div class="acciones">
        <a href="/registro" class="acciones__enlace">Vous n'avez pas encore de compte ? Créer un compte</a>
        <a href="/olvide" class="acciones__enlace">Vous avez oublié votre mot de passe ?</a>
    </div>
</main>