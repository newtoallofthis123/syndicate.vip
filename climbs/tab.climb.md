# Tab HTMl Structure Climb

## Destination

Define the HTML structure for a tab.

## Survey Environment

### Parallel Labels

In this approach, we would be using a combination of labels and content
This can be generalized as a tree structure as follows

- Tabs
    - Labels
    - Content

This can be represented as semantic HTML:

```html
<div class="tabs">
    <div class="labels">
    </div>
    <div class="content">
    </div>
</div>

```

These labels and content blocks can exist almost in parallel and this can
ideally allow the user to enter in the content block directly when futhure implemented

Also, this would make manipulation using JS or using Approach Modules a lot simplier
as it almost establishes a heirarchial structure.

**Obstacles**:

- Dynamic Conversion might be a bit difficult. 
- Proper mechanisms have to be established to keep track of the content blocks

[TICK] Viable Approach

### Attribute Tracking

In this method, a the labels and content are treated as almost seperate blocks, corealted 
only together using a common attribute value, that can either be decided by the user 
or predetermined to whatever makes sense: `tab-activates`

This would look as follows in semantic HTML:

```html
<div class="Tabs">
    <div class="labels">
        <div class="label" tab-activates="1"></div>
        <div class="label" tab-activates="2"></div>
    </div>
    <div class="content">
        <div class="contentBox" tab-activated="1"></div>
        <div class="contentBox" tab-activated="2"></div>
    </div>
</div>
```

The `tab-activates` attribute corelates the label and content together
essentially having a way to keep track

**Obstacles**:

- JS manipulation would be complicated by attribute manipulation
- Since the structure itself doesn't have to strict, it would be a double edged sword:
    More user power, but harder to maintain a coherent natural structure
- Attributes have to be baked into the dynamic HTML, constricting the user and
    having the possibilty of more errors

[TICK] Viable

### Simple Label Tracking

This is very similar to the first method, the only difference being, the html structure
or the subsequent class doesn't in fact track the label, rather the label is more symbolically

The semantic HTML structure would look something like this:

```html
<div class="Tabs">
    <div class="Tab">
        <div class="content"></div>
    </div>
</div>
```

**Obstacles**:

- Harder to maintain a coherent structure
- Dynamic Implementation would have an over head tracking system to keep track of the content
- JS manipulation would be very hard
- Not the most easily stylable

[IN DOUBT]
