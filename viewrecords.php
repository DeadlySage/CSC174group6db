<?php 
    $title = 'Pokedéx DB'; 
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    //get pokemon from database
    $result = $crud->getPokemon();
?>

<table class="table table-striped">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Pokemon</th>
    </tr>
  </thead>
  <tbody>
    <?php while($r = $result->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo $r['id'] ?></td>
            <td><?php echo $r['pname'] ?></td>
        </tr>
    <?php }?>
  </tbody>
</table>

<br>
<br>
<br>
<?php require_once 'includes/footer.php';?>