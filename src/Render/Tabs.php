<?php
namespace Syndicate\Render;

use Approach\Render\Attribute;
use Approach\Render\HTML;
use Approach\Render\Node;
use Approach\Render\Streamability;
use Approach\nullstate;
use Stringable;
use Traversable;

require_once __DIR__ . '/../../support/lib/vendor/autoload.php';

class Tabs extends HTML
{
    public const tag = 'div';

    use Streamability;

    public function RenderHead(): Traversable
    {
        $buttonList = new HTML(tag: 'div', classes: ['Buttons']);
        foreach ($this->_node_labels as $value => $index) {
            if ($index instanceof nullstate) {
                echo 'Value not found in node labels: ' . $value . ' <br/>' . PHP_EOL;
                continue;
            } else {
                $node_index = $this->getNodeLabelIndex($index);
                $active = $this->getLabeledNode($node_index);
                $button = new HTML(tag: 'button', classes: ['tabs-btn'], content: $index);
                $active->attributes['data-tab'] = $index;
                $buttonList[] = $button;
            }
        }

        $this->prefix = $buttonList->render();
        foreach (parent::RenderHead() as $value) {
            yield $value;
        }
    }

    public function __construct(
        public null|string|Stringable $tag = 'div',
        public null|string|Stringable $id = null,
        null|string|array|Node|Attribute $classes = ['Tabs'],
        public null|array|Attribute $attributes = new Attribute,
        public $content = null,
        public array $styles = [],
        public bool $prerender = false,
        public bool $selfContained = false,
    ) {
        parent::__construct(
            tag: $this::tag,
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
