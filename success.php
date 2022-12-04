<?php 
    $title = 'Entry Submitted'; 
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    if(isset($_POST['submit'])){
        //store the values from $_POST
        $pname = $_POST['InputPokemon'];

        //call insert function and check if executed successfully
        $isSuccess = $crud->insert($pname);

        if($isSuccess){
            echo '<h1 class="text-center text-success">Entry Has been Submitted</h1>';
        }

        else {
            echo '<h1 class="text-center text-danger">Entry Failed to be Submitted</h1>';
        }
    }
?>

    <div class="card" style="width: 18rem;">
        <div class="card-header">Entry</div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Pokemon: <?php echo $_POST['InputPokemon'];?></li>
        </ul>
    </div>
<br>
<?php require_once 'includes/footer.php';?>