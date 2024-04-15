If the user already has a badge to use, then it can be accessed by the following code:

``` php
$badge = new Badge(id:"bad", name: $name, val: $val, color: $color, link: $link);
```

```html
<div id="bad">
    <div id="name">
        <a href="$link">$name</a>
    </div>
    <div id="val">
        <a href="$link">$value</a>
    </div>
</div>
```
