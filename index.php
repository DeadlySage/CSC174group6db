<?php 
    $title = 'Pokedex'; 
    require_once 'includes/header.php';
    require_once 'db/conn.php';
?>

    <h1 class="text-center">Pokemon Entry Portal</h1>

    <form method="post" action="success.php">
        <div class="mb-3">
            <label for="InputPokemon" class="form-label">Pokemon</label>
            <input type="text" class="form-control" id="InputPokemon" name="InputPokemon">
            <div id="pokemonHelp" class="form-text">please enter the name of the pokemon (ie. Pikachu).</div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary col-12">Submit</button>
    </form>
<br>
<br>
<br>
<?php require_once 'includes/footer.php';?>