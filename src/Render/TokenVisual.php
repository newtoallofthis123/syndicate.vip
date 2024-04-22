<?php
namespace Syndicate\Render;

use Approach\Render\HTML;
use Approach\Render\Node;
use Stringable;

require_once __DIR__ . '/../../support/lib/vendor/autoload.php';

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
