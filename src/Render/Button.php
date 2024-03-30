<?php

namespace Syndicate\Render;

require_once __DIR__ . '/../../support/lib/vendor/autoload.php';

use Approach\Render\Attribute;
use Approach\Approach\Container;
use Approach\Render\Container as RenderContainer;
use Approach\Render\HTML;
use Approach\Render\Node;
use Approach\Render\Stream;
use Stringable;

class Button extends FormEle {
    public function __construct(
        public null|string|Stringable $id = null,
        null|string|array|Node|Attribute $classes = null,
        public null|array|Attribute $attributes = new Attribute,
        public null|string|Stringable|Stream|self $content = null,
        public array $styles = [],
        public bool $prerender = false,
        public bool $selfContained = false,
        // Button stuff
        public null|string|Stringable|Stream $placeholder = "",
        public null|string|Stringable|Stream $link = "!#",
        public null|string|Stringable|Stream $width = "30",
        public null|string|Stringable|Stream $height = "10",
        
        // public null|string|Stringable|Stream $img = ""
    ) {
        parent::__construct(
            tag: 'button',
            id: $id,
            classes: $classes,
            attributes: $attributes,
            content: $content,
            styles: $styles,
            prerender: $prerender,
            selfContained: false,
        );
        if ($placeholder) {
            $this->attributes['placeholder'] = $placeholder;
        }

        $this->attributes['link'] = $link;
        $this->styles['width'] = $width;
        $this->styles['height'] = $height;
    }

}