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

class TextArea extends FormEle
{
    public function __construct(
        public null|string|Stringable $id = null,
        null|string|array|Node|Attribute $classes = null,
        public null|array|Attribute $attributes = new Attribute,
        public null|string|Stringable|Stream|self $content = null,
        public array $styles = [],
        public bool $prerender = false,
        public bool $selfContained = false,
        // TextArea stuff
        public null|string|Stringable|Stream $placeholder = "",
        public null|string|Stringable|Stream $rows = "30",
        public null|string|Stringable|Stream $cols = "100",
    ) {
        parent::__construct(
            tag: 'textarea',
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

        $this->attributes['rows'] = $rows;
        $this->attributes['cols'] = $cols;
    }
}
