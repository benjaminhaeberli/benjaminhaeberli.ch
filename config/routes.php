<?php

return [
    // ─── Calculator API ─────────────────────────────────────
    [
        'pattern' => 'calculateur/save',
        'method' => 'POST',
        'action' => function () {
            $json = file_get_contents('php://input');
            if (strlen($json) > 10000) {
                return new Kirby\Http\Response(json_encode(['error' => 'Payload too large']), 'application/json', 413);
            }

            $data = json_decode($json, true);
            if (! $data || ! isset($data['answers']) || ! isset($data['results'])) {
                return new Kirby\Http\Response(json_encode(['error' => 'Invalid data']), 'application/json', 400);
            }

            $data['createdAt'] = date('c');
            $id = bin2hex(random_bytes(4));
            $dir = kirby()->root('storage').'/calculator-results';

            if (! is_dir($dir)) {
                mkdir($dir, 0755, true);
            }

            file_put_contents($dir.'/'.$id.'.json', json_encode($data, JSON_UNESCAPED_UNICODE));

            return new Kirby\Http\Response(json_encode(['id' => $id]), 'application/json', 201);
        },
    ],
    [
        'pattern' => 'calculateur/r/(:any)',
        'method' => 'GET',
        'action' => function (string $id) {
            if (! preg_match('/^[a-f0-9]{8}$/', $id)) {
                return new Kirby\Http\Response(json_encode(['error' => 'Invalid ID']), 'application/json', 400);
            }

            $file = kirby()->root('storage').'/calculator-results/'.$id.'.json';

            if (! file_exists($file)) {
                return new Kirby\Http\Response(json_encode(['error' => 'Not found']), 'application/json', 404);
            }

            return new Kirby\Http\Response(file_get_contents($file), 'application/json');
        },
    ],
    // ─── Sitemap & Redirects ────────────────────────────────
    [
        'pattern' => 'sitemap.xml',
        'action' => function (): \Kirby\Cms\Response {
            /* $pages = site()->pages()->index(); */
            $pages = site()->index()->listed()->limit(500);
            $ignore = kirby()->option('sitemap.ignore', ['error']);
            $content = snippet('sitemap', ['pages' => $pages, 'ignore' => $ignore], true);

            return new Kirby\Cms\Response($content, 'application/xml');
        },
    ],
    [
        'pattern' => 'sitemap',
        'action' => fn () => go('sitemap.xml', 301),
    ],
    [
        'pattern' => 'index',
        'action' => fn () => go('/', 301),
    ],
    [
        'pattern' => 'index.html',
        'action' => fn () => go('/', 301),
    ],
    [
        'pattern' => 'index.html',
        'action' => fn () => go('/', 301),
    ],
    [
        'pattern' => 'index.php',
        'action' => fn () => go('/', 301),
    ],
];
