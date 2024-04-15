<?php
namespace Syndicate\Render;

use Approach\Approach;
use Approach\nullstate;
use Approach\Render\Attribute;
use Approach\Render\HTML;
use Approach\Render\Node;
use Stringable;
use Traversable;

require_once __DIR__ . '/../../support/lib/vendor/autoload.php';

class Tabs extends HTML
{
    public const tag = 'div';

    public function RenderHead(): Traversable
    {
        $tabsList = new HTML(tag: 'ul');
        
        foreach ($this->_node_labels as $value => $index) {
            $x = $this->getNodeLabelIndex($index);
            // $y = $this->getLabeledNode($index);
            $a = $this->getNodeLabelIndex($value);
            // $b = $this->getLabeledNode($value);

            // $c = $this->getNodeLabelIndex($x);
            // $d = $this->getNodeLabelIndex($a);
            
            $e = $this->getLabeledNode($x);
            $f = $this->getLabeledNode($a);

            echo PHP_EOL.'$x: '.$x.' $a: '.$a.' $e: '.$e.' $f: '.$f.PHP_EOL;
            
            if($index instanceof nullstate){
                echo 'Value not found in node labels: '.$value.' <br/>'.PHP_EOL;
                continue;
            }
            $active = $this->getLabeledNode($index);
        
            $tabsList[] = new HTML(tag: 'li', content: $value);
            $active->attributes['data-tab'] = $value;
            
            // if ($index != nullstate::undefined) {
            //     $node_index = $this->_labeled_nodes[$index];
            //     $active_node = $this->nodes[$node_index];
            // }
        }
        /// OOO new errors / null states lol
        $this->prefix = $tabsList->render();
        foreach (parent::RenderHead() as $value) {
            yield $value;
        }
    }

    public function __construct(
        public null|string|Stringable $id = null,
        null|string|array|Node|Attribute $classes = null,
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
