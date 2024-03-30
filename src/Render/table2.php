<?php
namespace Syndicate\Render;

use Approach\Render\Attribute;
use Approach\Render\Container;
use Approach\Render\HTML;
use Approach\Render\Node;
use Approach\Render\Stream;
use Stringable;

class Table2 extends HTML
{
  public function __construct(
    public null|string|Stringable $tag = 'table',
    public null|string|Stringable $id = null,
    null|string|array|Node|Attribute $classes = null,
    public null|array|Attribute $attributes = new Attribute,
    public null|string|Stringable|Stream|self $content = null,
    public array $styles = [],
    public bool $prerender = false,
    public bool $selfContained = false,
    // Table specific props
    public null|array $headers = [],
    public null|array $rows = [],
  ) {
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

    $this->nodes[] = $this->Headers();
    // $this->nodes = array_merge($this->nodes, $this->Rows());
    $this->nodes = $this->nodes + $this->Rows();
  }

  private function Headers(): HTML
  {
    $returningheaderRow = new HTML(tag: 'tr');
    foreach ($this->headers as $header) {
      $returningheaderRow->nodes[] = new HTML(tag: 'th', content: $header);
    }
    return $returningheaderRow;
  }

  private function Rows(): array
  {
    $returnedrows = [];
    foreach ($this->rows as $row) {
      $tableRow = new HTML(tag: 'tr');
      foreach ($row as $data) {
        $tableRow->nodes[] = new HTML(tag: 'td', content: $data);
      }
      $returnedrows[] = $tableRow;
    }
    return $returnedrows;
  }
}
