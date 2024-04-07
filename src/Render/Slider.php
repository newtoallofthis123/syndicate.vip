<?php
namespace Syndicate\Render;

use Approach\Render\Attribute;
use Approach\Render\HTML;
use Approach\Render\Node;
use Approach\Render\Stream;
use Stringable;

require_once __DIR__ . '/../../support/lib/vendor/autoload.php';

class Slider extends HTML
{
    public null|HTML $rangeSlider = null;

    public function __construct(
        public null|string|Stringable $tag = 'div',
        public null|string|Stringable $id = null,
        null|string|array|Node|Attribute $classes = null,
        public null|array|Attribute $attributes = new Attribute,
        public null|string|Stringable|Stream|self $content = null,
        public array $styles = [],
        public bool $prerender = false,
        public bool $selfContained = false,
        // ProgressBar stuff
        public null|string|Stringable|Stream $child = '',
        public null|string|Stringable|Stream $color = '',
        public null|string $value = '0',
        public null|string $min = '0',
        public null|string $max = '100',
    ) {
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

        $this->nodes[] = $rangeSlider = new HTML(tag: 'input', classes: ['Range', ' Colored'], attributes: [
            'value' => $value,
            'type' => 'range',
            'min' => $min,
            'max' => $max
        ]);
        $this->rangeSlider = &$this->nodes[count($this->nodes) - 1];
        $this->nodes[] = $child;
        $this->child = &$this->nodes[count($this->nodes) - 1];
    }
}
