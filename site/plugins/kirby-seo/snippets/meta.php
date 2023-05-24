<?php

use KirbySeo\KirbySeo;
use Kirby\Toolkit\Html;

$kirbyseo = new KirbySeo(page(), kirby(), site());
?>

<?= Html::tag('title', [$kirbyseo->metaTitle]) . PHP_EOL ?>

<?= Html::tag('base', null, ["href" => site()->url()]) . PHP_EOL ?>

<?= Html::tag('meta', null, ["name" => "description", "content" => $kirbyseo->metaDescription]) . PHP_EOL ?>
<?= Html::tag('meta', null, ["name" => "keywords", "content" => $kirbyseo->metaKeywords]) . PHP_EOL ?>

<?= Html::tag('meta', null, ["property" => "og:title", "content" => $kirbyseo->metaTitle]) . PHP_EOL ?>
<?= Html::tag('meta', null, ["property" => "og:type", "content" => $kirbyseo->ogType]) . PHP_EOL ?>
<?= Html::tag('meta', null, ["property" => "og:site_name", "content" => $kirbyseo->ogSitename]) . PHP_EOL ?>
<?= Html::tag('meta', null, ["property" => "og:url", "content" => $kirbyseo->metaUrl]) . PHP_EOL ?>
<?= Html::tag('meta', null, ["property" => "og:image", "content" => $kirbyseo->metaImageUrl]) . PHP_EOL ?>
<?= Html::tag('meta', null, ["property" => "og:description", "content" => $kirbyseo->metaDescription]) . PHP_EOL ?>
<?= Html::tag('meta', null, ["property" => "og:locale", "content" => $kirbyseo->ogLocale]) . PHP_EOL ?>

<?= Html::tag('meta', null, ["name" => "twitter:title", "content" => $kirbyseo->metaTitle]) . PHP_EOL ?>
<?= Html::tag('meta', null, ["name" => "twitter:card", "content" => $kirbyseo->twitterCard]) . PHP_EOL ?>
<?= Html::tag('meta', null, ["name" => "twitter:site", "content" => $kirbyseo->twitterSite]) . PHP_EOL ?>
<?= Html::tag('meta', null, ["name" => "twitter:creator", "content" => $kirbyseo->twitterCreator]) . PHP_EOL ?>
<?= Html::tag('meta', null, ["name" => "twitter:image", "content" => $kirbyseo->metaImageUrl]) . PHP_EOL ?>
<?= Html::tag('meta', null, ["name" => "twitter:description", "content" => $kirbyseo->metaDescription]) . PHP_EOL ?>

<?= Html::tag('meta', null, ["name" => "robots", "content" => $kirbyseo->metaRobots]) . PHP_EOL ?>

<?= Html::tag('link', null, ["href" => $kirbyseo->metaCanonicalUrl, "rel" => "canonical"]) . PHP_EOL ?>
