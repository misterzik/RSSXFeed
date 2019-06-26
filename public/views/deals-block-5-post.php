<?php
header('Content-Type: text/html; charset=utf-8');

if (!ini_get('date.timezone')) {
	date_default_timezone_set('Europe/Prague');
}

require_once './assets/library/feeder/Feed.php';

$rss = Feed::loadRss($deals_block_5_post);

?>

<h1><?php echo htmlSpecialChars($rss->title) ?></h1>

<p><i><?php echo htmlSpecialChars($rss->description) ?></i></p>

<?php
$i = 0;
foreach ($rss->item as $item) :
	if ($i == 15) break;
	?>
	<h5><a href="<?php echo htmlSpecialChars($item->link) ?>"><?php echo htmlSpecialChars($item->title) ?></a></h5>
	<small><?php echo date("j.n.Y H:i", (int)$item->timestamp) ?></small></h2>
	<blockquote>
		<p><em>
				<?php if (isset($item->{'content:encoded'})) : ?>
					<div><?php echo $item->{'content:encoded'} ?></div>
				<?php else : ?>
					<p><?php //echo htmlSpecialChars($item->description)
						echo $item->description
						?></p>
				<?php endif ?>

			</em></p>
	</blockquote>
	<?php
	$i++;
endforeach
?>