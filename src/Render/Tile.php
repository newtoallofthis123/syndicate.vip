<?php
namespace Syndicate\Render;

use Approach\Render\Attribute;
use Approach\Render\HTML;
use Approach\Render\Node;
use Approach\Render\Stream;
use Stringable;

require_once __DIR__ . '/../../support/lib/vendor/autoload.php';

class Tile extends HTML{
    public function __construct(
        public null|string|Stringable $tag = 'div',
        public null|string|Stringable $id = null,
        null|string|array|Node|Attribute $classes = null,
        public null|array|Attribute $attributes = new Attribute,
        public $content = null,
        public array $styles = [
            ""
        ],
        public bool $prerender = false,
        public bool $selfContained = false,
        //tile stuff
        public null|string|Stringable|stream|self $icon = '',
        public null|string|Stringable|stream|self $title = ''
    ) {
        parent::__construct(
            tag: $tag,
            id: $id,
            classes: ['Tile'],
            attributes: [],
            content: $content,
            styles: [],
            prerender: $prerender,
            selfContained: $selfContained,
        );

        // $this->nodes['button'] = new HTML(tag: 'button', classes: ['content']);
        // $button = &$this->nodes['button'];
        // $button->nodes['icon'] = $icon;
        // $this->icon = &$button->nodes['icon'];
        // $button->nodes['title'] = new HTML(tag: 'h1', content: $title);
        // $this->title = &$button->nodes['title'];
        $this->button = new HTML(tag: 'button', classes: ['content']);
        $this->button->nodes['icon'] = $icon;
        $this->icon = &$this->button->nodes['icon'];
        $this->button->nodes['title'] = new HTML(tag: 'h1' , content: $title);
        $this->title = &$this->button->nodes['title'];
    }
}

/*
<div class="Tile">
  <button class="content">
    <h1>$title</h1>
    ...$icon
  </button>
</div>
*/
