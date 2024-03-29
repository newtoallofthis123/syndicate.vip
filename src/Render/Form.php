<?php
namespace Syndicate\Render;

require_once __DIR__ . '/../../support/lib/vendor/autoload.php';

use Approach\Render\Attribute;
use Approach\Render\Container;
use Approach\Render\HTML;
use Approach\Render\Node;
use Approach\Render\Stream;
use Stringable;

class Form extends HTML
{
    private $formEleCount = 0;

    public function __construct(
        public null|string|Stringable $tag = 'form',
        public null|string|Stringable $id = null,
        null|string|array|Node|Attribute $classes = null,
        public null|array|Attribute $attributes = new Attribute,
        public null|string|Stringable|Stream|self $content = null,
        public array $styles = [],
        public bool $prerender = false,
        public bool $selfContained = false,
        // Form stuff
        public null|string|Stringable|Stream|self $action = '',
        public null|string|Stringable|Stream|self $method = 'POST',
        public null|string|HTML|Stringable|FormEle $formEle = null,
        public null|array|Container $children = null,
    ) {
        if ($attributes instanceof Attribute) {
            $attributes = $attributes->toArray();
        }
        if ($action) {
            $attributes['action'] = $action;
        }
        if ($method) {
            $attributes['method'] = $method;
        }

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

        if ($formEle) {
            $this->addFormEle($formEle);
        }
    }

    // @param $formEle: String|HTML|Stringable
    public function addFormEle($formEle): void
    {
        if(!$formEle->label){
            $formEle->label = $formEle->name;
        }
        $this->formEleCount++;
        $this->nodes[] = $formEle;
        $this->children = &$this->nodes[$this->formEleCount];
    }
}
