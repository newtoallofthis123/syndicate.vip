<?php

namespace Syndicate\Render;

require_once __DIR__ . '/../../support/lib/vendor/autoload.php';

use Approach\Render\Attribute;
use Approach\Render\Node;
use Approach\Render\Stream;
use Stringable;
use Approach\Render\HTML;

class Card extends FormEle
{
    public function __construct(
        public null|string|Stringable $tag = 'div',
        public null|string|Stringable $id = null,
        null|string|array|Node|Attribute $classes = null,
        public null|array|Attribute $attributes = new Attribute,
        public array $styles = [],
        public bool $prerender = false,
        public bool $selfContained = false,
        // Card stuff
        public null|string|Stringable|Stream $title = "",
        public null|string|Stringable|Stream $subtitle = "",
        public null|string|Stringable|Stream $content = "",
    ) {
        parent::__construct(
            tag: 'div',
            id: $id,
            classes: $classes,
            attributes: $attributes,
            content: $content,
            styles: $styles,
            prerender: $prerender,
            selfContained: false,
        );
        $card = new HTML(classes: 'Card');
        $card[] = new HTML(classes: 'CardHeader', content: $title);
        $card[] = new HTML(classes: 'CardSubHeader', content: $subtitle);
        $card[] = new HTML(classes: 'CardContent', content: $content);
    }
}
