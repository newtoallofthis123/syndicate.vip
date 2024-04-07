<?php

namespace Syndicate\Render;
require_once __DIR__ . '/../../support/lib/vendor/autoload.php';

use Approach\Render\Attribute;
use Approach\Render\Container;
use Approach\Render\HTML;
use Approach\Render\Node;
use Approach\Render\Stream;
use Stringable;
// use Approach\Render\HTML;

class Table extends HTML
{
    public function __construct(
        public Stringable|string|null $tag = 'tr',
        public null|string|Stringable $id = null,
        null|string|array|Node|Attribute $classes = null,
        public null|array|Attribute $attributes = null,
        public null|string|Stringable|stream|self $content = null,
        public array $styles = [],
        public bool $prerender = false,
        public bool $selfContained = false,
    ) {
        parent::__construct(
            $tag,
            $id,
            $classes,
            $attributes,
            $content,
            $styles,
            $prerender,
            $selfContained
        );
    }
}
