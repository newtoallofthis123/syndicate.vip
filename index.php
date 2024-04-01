<?php
namespace Syndicate;

require_once __DIR__ . '/support/lib/vendor/autoload.php';

use Syndicate\Render\Tab;
use Syndicate\Render\TabBar;
use Syndicate\Render\TabVisual;

$visual = new TabVisual(title: 'Tab 1', icon: 'home');
$visual2 = new TabVisual(title: 'Tab 2', icon: 'settings');
$visual3 = new TabVisual(title: 'Tab 3', icon: 'person');
$tab = new Tab(visual: $visual, activates: 'tab1', chainer: '1');
$tab1 = new Tab(visual: $visual2, activates: 'tab2', chainer: '2');
$tab2 = new Tab(visual: $visual3, activates: 'tab3', chainer: '3');

$tabbar = new TabBar(tabs: [$tab]);

$tabbar->fromArray([$tab1, $tab2]);

echo $tabbar;
