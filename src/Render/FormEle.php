<?php
namespace Syndicate\Render;

require_once __DIR__ . '/../../support/lib/vendor/autoload.php';

use Approach\Render\Attribute;
use Approach\Render\HTML;
use Approach\Render\Node;
use Approach\Render\Stream;
use Stringable;

class FormEle extends HTML
{
    public function __construct(
        // Needed for HTML
        public null|string|Stringable $tag = null,
        public null|string|Stringable $id = null,
        null|string|array|Node|Attribute $classes = null,
        public null|array|Attribute $attributes = new Attribute,
        public null|string|Stringable|Stream|self $content = null,
        public array $styles = [],
        public bool $prerender = false,
        public bool $selfContained = false,
        // Declared by Input
        public null|string|Stringable|Stream|self $value = '',  // The value of the input
        public null|string|Stringable|Stream|self $name = '',  // The name of the input
    ) {
        if ($attributes instanceof Attribute) {
            $attributes = $attributes->toArray();
        }
        if ($name) {
            $attributes['name'] = $name;
        }
        if ($value) {
            $attributes['value'] = $value;
        }

        parent::__construct(
            tag: $tag,
            id: $id,
            classes: $classes,
            attributes: $attributes,
            content: $content,
            styles: $styles,
            prerender: $prerender,
            selfContained: $selfContained,
        );
    }
}
