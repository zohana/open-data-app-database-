<?php /*?>*
*small description: Displays the list and the map for the Open Data
*
*@package
*@copyright 2012 Priyanka Gite
*@author Priyanka Gite <zohana28@yahoo.com>
*@link https://github.com/zohana/open-data-app-database-
*@link http://ottawa-museums.phpfogapp.com/
*@license New BSD Licence
*@version 1.0.0
<?php */?>



	<a class="sin1" href = "/admin/sign-in.php">Admin</a>

<?php

require_once 'includes/db.php';

$results = $db->query('
	SELECT id, name, adr, latitude, longitude, rate_count, rate_total
	FROM museums
	ORDER BY name ASC
');

include 'includes/theme-top.php';

?>

<div class = "form1">
<form id="geo-form">
	<label for="adr">Address</label>
	<input id="adr">
    <button id="adr1">Search</button>
</form>
<button id="geo">Current Location</button>
</div>


<div id="map"></div>
<ul class="museums">

<?php foreach ($results as $museums) : ?>
	<?php
		if ($museums['rate_count'] > 0) {
			$rating = round($museums['rate_total'] / $museums['rate_count']);
		} else {
			$rating = 0;
		}
	?>
	<li itemscope itemtype="http://schema.org/TouristAttraction" data-id="<?php echo $museums['id']; ?>" class="box">
		<strong class="distance">
		<a href="single.php?id=<?php echo $museums['id']; ?>" itemprop="name"><?php echo $museums['name']; ?></a>
		<span itemprop="geo" itemscope itemtype="http://schema.org/GeoCoordinates">
			<meta itemprop="latitude" content="<?php echo $museums['latitude']; ?>">
			<meta itemprop="longitude" content="<?php echo $museums['longitude']; ?>">
		</span>
		<?php /*?><meter value="<?php echo $rating; ?>" min="0" max="5"><?php echo $rating; ?> out of 5</meter><?php */?>
		<ol class="rater">
		<?php for ($i = 1; $i <= 5; $i++) : ?>
			<?php $class = ($i <= $rating) ? 'is-rated' : ''; ?>
			<li class="rater-level <?php echo $class; ?>">★</li>
		<?php endfor; ?>
		</ol></strong>
	</li>
<?php endforeach; ?>
</ul>





<?php

include 'includes/theme-bottom.php';

?>
