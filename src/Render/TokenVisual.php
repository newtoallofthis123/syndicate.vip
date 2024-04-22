<?php
namespace Syndicate\Render;


use Approach\Render\Attribute;
use Approach\Render\HTML;
use Approach\Render\Node;
use Stringable;

require_once __DIR__ . '/../../support/lib/vendor/autoload.php';


/*
 * TokenVisual:
 *
 * Generates a very simple Badge, with clickable link that encompasses the badge
 *
 * Example:
 *
 * $TokenVisual = new TokenVisual(tag: 'div', name: 'Key', value: 'Value', source_url: 'https://approach.io')
 */
class TokenVisual extends HTML
{
    public function __construct(
        public $content = null,
        public array $styles = [],
        public bool $prerender = false,
        public bool $selfContained = false,
        public null|Node|Stringable|string|self $title = '',
        public null|Node|Stringable|string|self $name = '',
        public null|Node|Stringable|string|self $value = '',
        public null|Node|Stringable|string|self $source_url = '',
        public null|Node|Stringable|string|self $icon = '🎟️',
    ) {
        parent::__construct(
            content: $content,
            styles: $styles,
            prerender: $prerender,
            selfContained: $selfContained,
        );

        $this->prefix .= $this->icon . $this->prefix;
        $this->content .= ' token.';
        $this->attributes['title'] = $this->content;

        $this->nodes['name'] = new HTML(tag: "span", content: $this->name);
        $this->name = &$this->nodes['name'];

        $this->nodes['value'] = new HTML(tag: "span", content: $this->value);
        $this->value = &$this->nodes['value'];

        $this->nodes['source_url'] = new HTML(tag: "a", attributes: ["href" => $this->source_url], content: $this->source_url);
        $this->source_url = &$this->nodes['source_url'];

class TokenVisual extends HTML
{
    public function __construct(
        public null|Node|Stringable|string|self $name = '',
        public null|Node|Stringable|string|self $value = '',
        public null|Node|Stringable|string|self $sourceUrl = '',
        public null|Node|Stringable|string|self $title = '',
    ) {
        parent::__construct(
            tag: 'div'
        );

    }
}
