<?php
/**
  Template Name: Search Form
 * */
?>
<form action="<?php echo home_url('/') ?>" method="get" accept-charset="utf-8" id="searchform" role="search">
    <div class="form-group">
        <label for="s"></label>
        <input type="text" name="s" id="s" class="form-control "  placeholder="Pesquisar" required title="Digite algo para que possamos buscar" />

        <input type="submit" id="searchsubmit" class="btn  bg-marrom" value="Pesquisar" />

    </div>
</form>

