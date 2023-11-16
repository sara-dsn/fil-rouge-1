



            <div class="parallax-body">

<div class="container-fluid">
<?php
include('header.php');
?>
 
   <main>
    <?php
    if(isset($_GET['page'])&&$_GET['page']=='acceuil')
    include('acceuil.php');
    ?>
   </main>


<?php
include('footer.php');
?>
</div>