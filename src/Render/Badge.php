<?php
namespace Syndicate\Render;

use Approach\Render\Attribute;
use Approach\Render\HTML;
use Approach\Render\Node;
use Stringable;

require_once __DIR__ . '/../../support/lib/vendor/autoload.php';

class Badge extends HTML
{
    public function __construct(
        public null|string|Stringable $tag = 'div',
        public null|string|Stringable $id = null,
        null|string|array|Node|Attribute $classes = null,
        public null|array|Attribute $attributes = new Attribute,
        public $content = null,
        public array $styles = [],
        public bool $prerender = false,
        public bool $selfContained = false,
        public null|Node|Stringable|string|self $name = '',
        public null|Node|Stringable|string|self $value = '',
        public null|Node|Stringable|string|self $link = '',
    ) {
        parent::__construct(
            tag: $tag,
            id: $id,
            classes: ['Badge'],
            attributes: $attributes,
            content: $content,
            styles: $styles,
            prerender: $prerender,
            selfContained: $selfContained,
        );

        $this->nodes['name'] = new HTML(tag: 'span');
        $this->nodes['name']['link'] = new HTML(tag: 'a', attributes: ['href' => $link], content: $this->name);
        $this->name = &$this->nodes['name'];

        $this->nodes['value'] = new HTML(tag: 'span');
        $this->nodes['value']['link'] = new HTML(tag: 'a', attributes: ['href' => $link], content: $this->value);
        $this->value = &$this->nodes['value'];
    }
}
