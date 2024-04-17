<?php
namespace Syndicate\Render;

use Approach\Render\Attribute;
use Approach\Render\HTML;
use Approach\Render\Node;
use Approach\Render\Stream;
use Stringable;

require_once __DIR__ . '/../../support/lib/vendor/autoload.php';

/*
 * Tile
 *
 * Implements a Tile in Render, has an icon and a Title
 *
 * Example:
 *
 * $tile = new Tile(title: "Google", icon: $icon);
 */
class Tile extends HTML
{
    public null|string|Stringable|Stream|self $button = '';

    public function __construct(
        public null|string|Stringable $tag = 'div',
        public null|string|Stringable $id = null,
        null|string|array|Node|Attribute $classes = null,
        public null|array|Attribute $attributes = new Attribute,
        public $content = null,
        public array $styles = [],
        public bool $prerender = false,
        public bool $selfContained = false,
        public null|string|Stringable|Stream|self $icon = '',
        public null|string|Stringable|Stream|self $title = ''
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

        $this->nodes['button'] = new HTML(tag: 'button', classes: ['content']);
        $this->nodes['button']['icon'] = $icon;
        $this->icon = &$this->nodes['button']['icon'];
        $this->nodes['button']['title'] = new HTML(tag: 'h1', content: $title);
        $this->title = &$this->nodes['button']['title'];
    }
}
