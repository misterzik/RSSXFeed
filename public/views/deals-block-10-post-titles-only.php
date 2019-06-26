<?php
header('Content-Type: text/html; charset=utf-8');

if (!ini_get('date.timezone')) {
	date_default_timezone_set('Europe/Prague');
}

require_once './assets/library/feeder/Feed.php';

$rss = Feed::loadRss($articles_block_10_post_titles_only);

?>

<?php
$i = 0;
foreach ($rss->item as $item) :
	if ($i == 10) break;
	?>
	<ul>
		<li><a href="<?php echo htmlSpecialChars($item->link) ?>"><?php echo htmlSpecialChars($item->title) ?></a></li>
	</ul>

	<?php
	$i++;
endforeach
?>