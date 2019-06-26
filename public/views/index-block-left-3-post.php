<?php
header('Content-Type: text/html; charset=utf-8');

if (!ini_get('date.timezone')) {
	date_default_timezone_set('Europe/Prague');
}

require_once './assets/library/feeder/Feed.php';

$rss = Feed::loadRss($index_block_left_3_post);

?>

<p><i><?php echo htmlSpecialChars($rss->description) ?></i></p>


<?php
$i = 0;
foreach ($rss->item as $item) :
	if ($i == 3) break;
	?>
	<h5><a href="<?php echo htmlSpecialChars($item->link) ?>"><?php echo htmlSpecialChars($item->title) ?></a></h5>
	<small><?php echo date("j.n.Y H:i", (int)$item->timestamp) ?></small></h2>
	<blockquote class="_feed_description">
		<p><em>
				<?php if (isset($item->{'content:encoded'})) : ?>
					<div class="_feed_desc_ins"><?php echo $item->{'content:encoded'} ?></div>
				<?php else : ?>
					<p><?php echo $item->description ?></p>
				<?php endif ?>
				<a href="<?php echo $site_readmore_link; ?>" class="_readMore"> <?php echo $site_readmore; ?> </a>
			</em></p>
	</blockquote>
	<?php
	$i++;
endforeach
?>