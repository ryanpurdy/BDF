<?php print_r($data) ?>
<?php foreach ($data as $d): ?>


    <h2><?php echo $d['name'] ?></h2>
    <div id="main"> 
        <?php echo $d['organization'] ?>
    </div>
    <p><a href="index.php/Clients/detail/<?php echo $d['clientID'] ?>">More Details TEST</a></p>

<?php endforeach ?>