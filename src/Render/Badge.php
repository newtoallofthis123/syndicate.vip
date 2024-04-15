<?php
namespace Syndicate\Render;

use Approach\Render\Attribute;
use Approach\Render\HTML;
use Approach\Render\Node;
use Stringable;
use Traversable;

use function PHPUnit\Framework\countOf;

require_once __DIR__ . '/../../support/lib/vendor/autoload.php';

class Badge extends HTML
{
    public function RenderHead(): Traversable{
        foreach (parent::RenderHead() as $value) {
            yield $value;
        }
    }

    public function __construct(
        public null|string|Stringable $tag = 'div',
        public null|string|Stringable $id = null,
        null|string|array|Node|Attribute $classes = null,
        public null|array|Attribute $attributes = new Attribute,
        public $content = null,
        public array $styles = [],
        public bool $prerender = false,
        public bool $selfContained = false,

        public null|Node|Stringable|string|self $name = "",
        public null|Node|Stringable|string|self $value = "",
        public null|Node|Stringable|string|self $link = "",
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

        $name_div = new HTML(tag: 'span');
        $name_div['link'] = new HTML(tag: 'a', attributes: ["href" => $link], content: $name);
        $value_div = new HTML(tag: 'span');
        $value_div['link'] = new HTML(tag: 'a', attributes: ["href" => $link], content: $value);
        $this->nodes['name'] = $name_div;
        $this->name = &$this->nodes['name'];
        $this->nodes['value'] = $value_div;
        $this->value = &$this->nodes['value'];
    }
}

// Styles have to look like
/* 
.badge { display: inline-block; //other container styles }
.badge span:first-child{ // key styles }
.badge span:last-child{ // value styles }
*/