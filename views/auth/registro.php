<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Inscrivez-vous à DevWebcamp</p> 

    <?php 
        require_once __DIR__ . '/../templates/alertas.php';
    ?>

    <form method="POST" action="/registro" class="formulario">
        <div class="formulario__campo">
            <label for="nombre" class="formulario__label">Votre nom</label>
            <input
                type="text"
                class="formulario__input"
                placeholder="Votre nom"
                id="nombre"
                name="nombre"
                value="<?php echo $usuario->nombre; ?>"
            >
        </div>

        <div class="formulario__campo">
            <label for="apellido" class="formulario__label">Nom de famille</label>
            <input
                type="text"
                class="formulario__input"
                placeholder="Votre nom de famille"
                id="apellido"
                name="apellido"
                value="<?php echo $usuario->apellido; ?>"
            >
        </div>

        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input
                type="email"
                class="formulario__input"
                placeholder="Tu Email"
                id="email"
                name="email"
                value="<?php echo $usuario->email; ?>"
            >
        </div>

        <div class="formulario__campo">
            <label for="password" class="formulario__label">Mot de passe</label>
            <input
                type="password"
                class="formulario__input"
                placeholder="Votre mot de passe"
                id="password"
                name="password"
            >
        </div>

        <div class="formulario__campo">
            <label for="password2" class="formulario__label">Répéter mot de passe</label>
            <input
                type="password"
                class="formulario__input"
                placeholder="Répéter le mot de passe"
                id="password2"
                name="password2"
            >
        </div>

        <input type="submit" class="formulario__submit" value="Créer un compte">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">Vous avez déjà un compte ? S'identifier</a>
        <a href="/olvide" class="acciones__enlace">Vous avez oublié votre mot de passe ?</a>
    </div>
</main>