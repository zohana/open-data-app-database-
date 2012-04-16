<?php

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (empty($id)) {
	header('Location: index.php');
	exit;
}

require_once 'includes/db.php';
require_once 'includes/functions.php';

$sql = $db->prepare('
	SELECT id, name, adr,  longitude, latitude, rate_count, rate_total
	FROM museums
	WHERE id = :id
');

$sql->bindValue(':id', $id, PDO::PARAM_INT);
$sql->execute();
$museums = $sql->fetch();

if (empty($museums)) {
	header('Location: index.php');
	exit;
}

$title = $museums['name'];

if ($museums['rate_count'] > 0) {
	$rating = round($museums['rate_total'] / $museums['rate_count']);
} else {
	$rating = 0;
}

$cookie = get_rate_cookie();

include 'includes/theme-top.php';

?>

<h2><?php echo $museums['name']; ?></h2>
<div class="ratedeco">
    <dl>
         <dt>Average Rating:</dt><dd><meter value="<?php echo $rating; ?>" min="0" max="5"><?php echo $rating; ?> out of 5</meter></dd>
        <dt id="address1">Address:</dt><dd><?php echo $museums['adr']; ?></dd>
        <dt id="address">Longitude:</dt><dd><?php echo $museums['longitude']; ?></dd>
        <dt id="address">Latitude:</dt><dd><?php echo $museums['latitude']; ?></dd>
     </dl>
</div> 
   
<div class="ra">
<?php if (isset($cookie[$id])) : ?>
	
        <h3>Your rating</h3>
            <ol class="rater rater-usable">
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                    <?php $class = ($i <= $cookie[$id]) ? 'is-rated' : ''; ?>
                    <li class="rater-level <?php echo $class; ?>">★</li>
                <?php endfor; ?>
            </ol>

	<?php else : ?>

		<h3>Rate</h3>
        <ol class="rater rater-usable">
            <?php for ($i = 1; $i <= 5; $i++) : ?>
            	<li class="rater-level"><a href="rate.php?id=<?php echo $museums['id']; ?>&rate=<?php echo $i; ?>">★</a></li>
            <?php endfor; ?>
        </ol>
	
<?php endif; ?>
</div>
    <div class="sign">
        <a class="homy" href = "index.php">Home</a>
    </div>
<?php

include 'includes/theme-bottom.php';

?>
