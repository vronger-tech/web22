<h2>Regisztrálja magát, ha még nem felhasználó!</h2>

    <form action="<?= SITE_ROOT ?>regisztralas" method="post">

        <fieldset>

            <h2>Regisztráció</h2>

            <br>

            <input type="text" name="vezeteknev" placeholder="vezetéknév" required><br><br>

            <input type="text" name="utonev" placeholder="utónév" required><br><br>

            <input type="text" name="felhasznalo" placeholder="felhasználói név" required><br><br>

            <input type="password" name="jelszo" placeholder="jelszó" required><br><br>

            <input type="submit" name="regisztracio" value="Regisztráció" >

            <br>&nbsp;

        </fieldset>

    </form>