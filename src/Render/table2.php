<?php
namespace Syndicate\Render;

use Approach\Render\Attribute;
use Approach\Render\Container;
// use Approach\Render\HTML;
use Approach\Render\Node;
use Approach\Render\Stream;
use Stringable;

class Table2 extends Container
{
  public function __construct(
    public string $tag = 'table',
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
    parent::__construct([
      'tag'=> [$tag],
      'id'=> $id,
      'classes'=> $classes,
      'attributes'=> $attributes,
      'content'=> $content,
      'styles'=> $styles,
      'prerender'=> $prerender,
      'selfContained' => $selfContained,
    ]);
    $this->tag = $tag;

    $this->nodes[] = $this->Headers();
    // $this->nodes = array_merge($this->nodes, $this->Rows());
    $this->nodes = $this->nodes + $this->Rows();
  }
   
  private function Headers(): Container
  {
    $returningheaderRow = new Container(); 
    $returningheaderRow->tag = 'tr';
    foreach ($this->headers as $header) {
      $returningheaderRow->nodes[] = new Node('th', $header);
    }
    return $returningheaderRow;
  }

  private function Rows(): array
  {
    $returnedrows = [];
    foreach ($this->rows as $row) {
      $tableRow = new Container(); 
      $tableRow->tag = 'tr';
      foreach ($row as $data) {
        $tableRow->nodes[] = new Node('td', $data);
      }
      $returnedrows[] = $tableRow;
    }
    return $returnedrows;
  }
}


