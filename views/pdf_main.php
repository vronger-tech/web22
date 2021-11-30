<h2>Pdf letöltés</h2>
<form action="<?= SITE_ROOT ?>pdf2" method="post">
<br>
   <p>Kattintson a pdf letöltéséhez:</p>
   
    <input type="submit" value="Letöltés">
</form>
<h2><br><?= (isset($viewData['uzenet']) ? $viewData['uzenet'] : "") ?><br></h2>