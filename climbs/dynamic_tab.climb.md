# Dynamically generating the Tab HTML

## Destination

As concluded in the previous climb, the structure or rather semantic
structure of the HTML was decided. Now, the goal is to make it dynamic
to the userland, using Render.

## Survey Environment

### Implementation using 2 Arrays

We would split the tabs UI into two board branches, each 
represented almost by two arrays:

```
$_labeled_nodes = [];
$_node_labels = [];
```

The labeled nodes would act as a container for holding the tab content
while the node labels would almost act as the container for the
key related to the node, like an index

Hence, the labeled_nodes would act as the index for node_labels

This would also enable the use of `$nodes[$index]` 

**Obstacles**:

- Appropriate methods have to be implemented in order to keep track
of the nodes
- The render process has to be modified a little bit

### Modulize the classes in the same structure

Another way, would be to split the tabs class into 3 main sub classes, 
which would co-relate together, essentially rendering the UI, all emdeded
in a parent node

The three proposed child / sub classes would be:
1. Tabs - The main parent
2. TabButton - Acts as the key / button
3. TabContent - The actual tab content

**Obstacles**:

- Would be constricting for the user to have particular classes
- All the points mentioned in `tabs.climbs.md` Survey #2

### Combination of the last two

The labeled_nodes would have the previous idea's tabs, in place
of normal nodes.
This would be more pragmatic and would make the userland
experience, especially with types a bit easier

This would help it maintain and coherent and understandable structure,
while still having all the advantages of the parallel array method

**Obstacles**:

- Would complicate the implementation
- Would introduce user constraints
- The labeled_nodes would be harder to track or make it more general
