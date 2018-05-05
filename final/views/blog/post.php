
<?php include('views/elements/header.php'); $this->userObject = new User(); ?>
<?php 
if( is_array($post) ) {
	extract($post);
	?>

<div class="container">
	<div class="page-header">
        <?php
            if($isAdmin){
                echo'<a href="'.BASE_URL.'manageposts/edit/'.$pID.'"  style="float:right"><small>Edit Post</small></a>';
            }
        ?>


        <h1><?php echo $title;?></h1>
        <h6 style="color:#bdbdbd;"><?php $d = new DateTime( $date); echo $d->format("l, F d, Y h:i:s ")?> - Author: <?php echo $first_name;?> <?php echo $last_name;?> - Category: <?php echo $name;?></h6>
  </div>

<?php echo $content;?>
    <br>
    <a href="<?php echo BASE_URL?>blog" ><small><< Back to Blog</small></a>
</div>
<?php } ?>

<br>
<div class="container">
<h4>Comments</h4>



<?php
//Login Button (for posting comments
if(!isset($_SESSION['uID'])){

    echo '<a href="'.BASE_URL.'login/" role="button" class="btn btn-primary">Login to Post a Comment</a>';

    $_SESSION['redirect'] = 'blog';
}

//Add comments box (if logged in)
if(isset($_SESSION['uID'])){
    echo'
        <form action="'.BASE_URL.'blog/addComment" method="post">
            <input name="pID" value="'.$thisID.'" style="display:none">
            <input name="uID" value="'.$_SESSION["uID"].'" style="display:none">
            <label for="commentText">Enter your Comment:</label>
            <textarea name="commentText"></textarea>
            <br>
            <button id="submit" type="submit" class="btn btn-primary" >Submit Comment</button>
        </form>
    ';
}
// Comments feed
foreach($comments as $row){
    $date = new DateTime($row['date']);
    echo "<hr>";
    echo $this->userObject->getUserNameFromID($row['uID']) . ' - ' . $date->format("D F d, Y h:iA");
    if($this->userObject->isAdmin()){
        echo'
        <form action="'.BASE_URL.'blog/deleteComment" method="post">
            <input name="pID" value="'.$thisID.'" style="display:none">
            <input name="cID" value="'.$row["commentID"].'" style="display:none">
            <button id="submit" type="submit" class="btn btn-danger" style="float:right">Delete Comment</button>
        </form>
        ';
    }
           echo '<br>';
    echo $row['commentText'];

}




?>
</div>



<?php include('views/elements/footer.php');?>