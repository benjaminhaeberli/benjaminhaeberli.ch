<?php

return [
    [
        'pattern' => 'sitemap.xml',
        'action'  => function (): \Kirby\Cms\Response {
            /* $pages = site()->pages()->index(); */
            $pages = site()->index()->listed()->limit(500);

            // fetch the pages to ignore from the config settings,
            // if nothing is set, we ignore the error page
            $ignore = kirby()->option('sitemap.ignore', ['error']);

            $content = snippet('sitemap', ['pages' => $pages, 'ignore' => $ignore], true);

            // return response with correct header type
            return new Kirby\Cms\Response($content, 'application/xml');
        }
    ],
    [
        'pattern' => 'sitemap',
        'action'  => fn () => go('sitemap.xml', 301)
    ],
    [
        'pattern' => 'index',
        'action'  => fn () => go('/', 301)
    ],
    [
        'pattern' => 'index.html',
        'action'  => fn () => go('/', 301)
    ],
    [
        'pattern' => 'index.html',
        'action'  => fn () => go('/', 301)
    ],
    [
        'pattern' => 'index.php',
        'action'  => fn () => go('/', 301)
    ],
];
