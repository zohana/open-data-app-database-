
<?php

require_once 'includes/db.php';

$results = $db->query('
	SELECT id, name, adr, latitude, longitude, rate_count, rate_total
	FROM museums
	ORDER BY name ASC
');

include 'includes/theme-top.php';

?>


<form id="geo-form">
	<div><label for="adr">Address</label>
	<input id="adr"></div>
</form>
<button id="geo">search</button>

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



<div id="map"></div>

<?php

include 'includes/theme-bottom.php';

?>
