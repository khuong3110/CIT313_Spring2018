<?php include('views/elements/header.php');?>
<div class="page-header banner">
    <h1 class="banner_text">IUPUI CIT-313 Final Project</h1>
</div>
<div class="container">
<?php if(isset($_SESSION['message'])){?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <?php echo $_SESSION['message']?>
                <?php unset($_SESSION['message']); ?>
            </div>
        <?php }?>
    <hr>
    <div id="weatherbody">
            <div class="page-header">
                <h1>Current Weather for <?php echo $current->city['name']; ?> (<?php echo $zip; ?>)</h1>

            </div>
            <h4><?php echo ucwords($current->weather['value']);?> <img src="http://openweathermap.org/img/w/<?php echo $current->weather['icon'];?>.png"></h4>
            <h4>Temperature: <?php echo $current->temperature['value'];?>°F</h4>
            <h4>Wind: <?php echo $current->wind->speed['name'];?> (<?php echo $current->wind->speed['value'];?>MPS) from the <?php echo $current->wind->direction['name'];?></h4>
            <h4>Humidity: <?php echo $current->humidity['value'];?><?php echo $current->humidity['unit'];?></h4>

    </div>
    <hr>
	<div class="page-header">
    <h1> Latest News from <?php echo $channel_title; ?> </h1>
        

    </div>
    <?php
        for($i = 0; $i <$numItems; $i++){
            echo $feed_data['title'][$i];
            echo $feed_data['pub'][$i];
            echo $feed_data['desc'][$i];
        }
    ?>

</div>

<?php include('views/elements/footer.php');?>
