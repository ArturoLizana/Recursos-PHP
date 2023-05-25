
<h2 class="pagina__heading"><?php echo $titulo; ?></h2>
<p class="pagina__descripcion">Choisissez jusqu'à 5 événements auxquels vous souhaitez assister en personne.</p>

<div class="eventos-registro">
    <main class="eventos-registro__listado">
        <h3 class="eventos-registro__heading--conferencias">&lt;Conférences /></h3>
        <p class="eventos-registro__fecha">Vendredi 5 octobre</p>

        <div class="eventos-registro__grid">
            <?php foreach($eventos['conferencias_v'] as $evento ) { ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php } ?>
        </div>

        <p class="eventos-registro__fecha">Samedi 6 octobre</p>
        <div class="eventos-registro__grid">
            <?php foreach($eventos['conferencias_s'] as $evento ) { ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php } ?>
        </div>

        <h3 class="eventos-registro__heading--workshops">&lt;Ateliers /></h3>
        <p class="eventos-registro__fecha">Vendredi 5 octobre</p>

        <div class="eventos-registro__grid eventos--workshops">
            <?php foreach($eventos['workshops_v'] as $evento ) { ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php } ?>
        </div>

        <p class="eventos-registro__fecha">Samedi 6 octobre</p>
        <div class="eventos-registro__grid eventos--workshops">
            <?php foreach($eventos['workshops_s'] as $evento ) { ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php } ?>
        </div>

    </main>

    <aside class="registro">
        <h2 class="registro__heading">Votre inscription</h2>

        <div id="registro-resumen" class="registro__resumen"></div>

        <div class="registro__regalo">
            <label for="regalo" class="registro__label">Choisir un cadeau</label>
            <select id="regalo" class="registro__select">
                <option value="">-- Sélectionnez votre cadeau --</option>
                <?php foreach($regalos as $regalo) { ?>
                    <option value="<?php echo $regalo->id; ?>"><?php echo $regalo->nombre; ?></option>
                <?php } ?>
            </select>
        </div>

        <form id="registro" class="formulario">
            <div class="formulario__campo">
                <input type="submit" class="formulario__submit formulario__submit--full" value="Registrarme">
            </div>
        </form>
    </aside>
</div>
  