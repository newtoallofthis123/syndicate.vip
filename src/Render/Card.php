<?php
namespace Syndicate\Render;

require_once __DIR__ . '/../../support/lib/vendor/autoload.php';

use Approach\Render\Attribute;
use Approach\Render\Container;
use Approach\Render\HTML as RenderContainer;
use Approach\Render\Node;
use Approach\Render\Stream;
use Stringable;

class Card extends FormEle {
    public function __construct (
        public null|string|Stringable $id = null,
        null|string|array|Node|Attribute $classes = null,
        public null|array|Attribute $attributes = new Attribute,
        public null|string|Stringable|Stream|self $content = null,
        public array $styles = [],
        public bool $prerender = false,
        public bool $selfContained = false,
        // Card stuff
        public null|string|Stringable|Stream $title = "",
        public null|string|Stringable|Stream $subtitle = "",
        public null|string|Stringable|Stream $img = "",
        public null|string|Stringable|Stream $link = "!#",
        public null|string|Stringable|Stream $width = "30",
        public null|string|Stringable|Stream $height = "10",
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
        if ($title) {
            $this->attributes['title'] = $title;
        }
        if ($subtitle) {
            $this->attributes['subtitle'] = $subtitle;
        }
        if ($img) {
            $this->attributes['img'] = $img;
        }
        $this->attributes['link'] = $link;
        $this->styles['width'] = $width;
        $this->styles['height'] = $height;
    }
}