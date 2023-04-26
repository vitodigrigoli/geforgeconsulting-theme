<!-- Form -->
<section class="container">

    <form class="form container  neo--2" action="" method="post" id="form">
        
        <h2 class="text--2"><?php block_field('title') ?></h2>
        <?php block_field('description') ?>
        
        <div class="form__field">
            <input class="neo neo--inset" type="text" id="name" placeholder="Il tuo nome" required >
            <label for="name">Il tuo nome</label>
        </div>

        <div class="form__field">
            <input class="neo neo--inset" type="email" id="email" placeholder="La tua email" required>
            <label for="email">La tua email</label>
        </div>

        <textarea class="neo neo--inset" placeholder="Scrivi il tuo messaggio qui..." rows="7" required></textarea>

        <div class="form__checkbox">
            <input class="form__checkbox__input neo neo--inset" type="checkbox" id="privacy" required/>
            <label class="form__checkbox__label" for="privacy">Acconsento al trattamento dei dati personali e all'informativa sulla <a href="">privacy</a>.</label>
        </div>

        <input type="text" class="hp" id="hp">
        <input type="submit" class="button " value="Invia ora" >

    </form>

</section>

<!-- Popup -->
<div class="popup" id="popup__form">
    <div class="popup__text neo container">
        <h2 class="text--2" id="rs_form">Testo di prova</h3>
        <div class="arc"></div>
        <button class="button" onclick="togglePopup()">Chiudi</button>
    </div>
</div>