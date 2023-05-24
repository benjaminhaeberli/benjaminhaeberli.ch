<?php

declare(strict_types=1);

namespace KirbySeo;

use Kirby\Cms\App;
use Kirby\Cms\Field;
use Kirby\Cms\Page;
use Kirby\Cms\Site;
use Kirby\Toolkit\A;
use Kirby\Cms\Url;

final class KirbySeo
{
    public ?Field  $metaTitle        = null;
    public ?Field  $metaDescription  = null;
    public ?Field  $metaKeywords     = null;
    public string $metaRobots       = '';
    public string $metaUrl          = '';
    public string $metaImageUrl     = '';
    public string  $metaCanonicalUrl = '';

    public string $ogType           = '';
    public ?Field $ogSitename       = null;
    public string $ogLocale          = '';

    public string $twitterCard      = '';
    public string $twitterSite      = '';
    public string $twitterCreator   = '';

    final public function __construct(Page $page, App $kirby, Site $site)
    {
        $this->metaTitle        =   $page->kirbyseometatitle();
        $this->metaDescription  =   $page->kirbyseometadesc();
        $this->metaKeywords     =   $page->kirbyseokeywords();
        $this->metaRobots       =   'index, follow, noodp';
        $this->metaUrl          =   $page->url();
        /* $this->metaImageUrl        =   $page->shareimage()->toFile() ? $page->shareimage()->toFile()->crop(1280, 720)->url() : ''; */
        $this->metaImageUrl        =   Url::to('assets/og_image.jpg');
        $this->metaCanonicalUrl        =   $page->kirbyseocanonicalurl()->isNotEmpty() ? $page->kirbyseocanonicalurl()->toString() :  site()->url();

        // Facebook Meta
        $this->ogType        =   'website';
        $this->ogSitename        =   $site->title();
        $this->ogLocale        =   A::first(kirby()->language()->locale());

        // Twitter  Meta
        $this->twitterCard        =   'summary_large_image';
        $this->twitterSite        =   $site->socialtwitterurl()->isNotEmpty() ? $site->socialtwitterurl() : '';
        $this->twitterCreator        =   $site->twittercreator()->isNotEmpty() ? $site->twittercreator() : '';
    }
}
