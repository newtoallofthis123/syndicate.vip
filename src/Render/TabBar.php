<?php
namespace Syndicate\Render;

use Approach\Render\Attribute;
use Approach\Render\Container;
use Approach\Render\HTML;
use Approach\Render\Node;
use Approach\Render\Stream;
use Stringable;

require_once __DIR__ . '/../../support/lib/vendor/autoload.php';

class TabBar extends HTML
{
    private $tabCount = 0;

    public function __construct(
        public null|string|Stringable $tag = 'div',
        public null|string|Stringable $id = null,
        null|string|array|Node|Attribute $classes = null,
        public null|array|Attribute $attributes = new Attribute,
        public null|string|Stringable|Stream|self $content = null,
        public array $styles = [],
        public bool $prerender = false,
        public bool $selfContained = false,
        // TabBar related stuff
        public null|array|Container $tabs = null,
    ) {
        parent::__construct(
            tag: $tag,
            id: $id,
            classes: $classes,
            attributes: $attributes,
            content: $content,
            styles: $styles,
            prerender: $prerender,
            selfContained: $selfContained
        );

        $this->fromArray($tabs);
    }

    /**
     * @param array<int, HTML|Tab> $tabs
     */
    public function fromArray(array $tabs): void
    {
        foreach ($tabs as $tab) {
            $this->addTab($tab);
        }
    }

    /**
     * @param Tab|HTML $tab
     */
    public function addTab($tab): void
    {
        $this->tabCount++;
        $this->nodes[] = $tab;
        $this->tabs = &$this->nodes[$this->tabCount - 1];
    }
}
