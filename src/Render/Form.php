<?php
namespace Syndicate;

require_once __DIR__ . '/../../support/lib/vendor/autoload.php';

use Approach\Render\Attribute;
use Approach\Render\HTML;
use Approach\Render\Node;
use Approach\Render\Stream;
use Stringable;

class Form extends HTML
{
    public function __construct(
        public null|string|Stringable $title = null,
        public null|string|Stringable $id = null,
        null|string|array|Node|Attribute $classes = null,
        public null|array|Attribute $attributes = new Attribute,
        public null|string|Stringable|Stream|self $content = null,
        public array $styles = [],
        public bool $prerender = false,
        public bool $selfContained = false,
        // Form stuff
        public null|string|Stringable|Stream|self $action = '',
        public null|string|Stringable|Stream|self $method = 'POST',
    ) {}
}
