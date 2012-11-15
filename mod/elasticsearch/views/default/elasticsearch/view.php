<?php
/**
 * Elastic Search 
 *
 * @package elasticsearch
 */

$item = $vars['item'];

$icon = elgg_view_entity_icon($item->getOwnerEntity(), 'small');

$title = "<a href=\"{$item->getURL()}\">$item->title</a>";

$body = "<p class=\"mbn\">$title</p>";

$description = $item->description;

if (strlen($description) > 500) {

    // truncate string
    $stringCut = substr($string, 0, 500);

    // make sure it ends in a word so assassinate doesn't become ass...
    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
}
$body .= $string;
if ($extra_info) {
	$body .= "<p class=\"elgg-subtext\">$extra_info</p>";
}
$body .= "<p class=\"elgg-subtext\">" . elgg_view_friendly_time($item->time_created) . "</p>";

echo elgg_view_image_block($icon, $body);
