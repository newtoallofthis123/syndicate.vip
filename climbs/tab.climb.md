# Orchestrated Climbs:

## Destination

Implementing a tab interface for the syndicate dashboard, 
that should be easy to implement, yet be customizable to the core

## Survey Environment

The following a viable approachs:

### Make a tab Imprint:

- Would have very good UX
- Needs a good idea using the imprint layer in order to effectively implement.
- The imprint layer can simplify the process quite a bit by the effective use of
iterators and tokens, which would be quite powerful.

**Viability**

[x] Rejected since none of us has a good idea of imprint


### Make Different Tab Classes

- Would be theoritically easy to implement.
- The idea by nature would require the modulization of the class, helping the user
maintain clarity while making / using the tabs UI.

#### Implementation of Tabs in classes

The most logical implementation would be one of the following:

**Have three classes: TabBar, Tab and TabContent:**

- This would entail having the tabbar, the main parent container, which would
encapsulate / hold the whole of the TabsUI

- Then, the  array of `Tab`'s', which would have a tab button made up of a 
visual class can be in another container.

- Then, the a container having different tab content classes, which hold the actual 
content that the userland want to have in a particular tab can be held

- The tabs would all be in a container and the content in another. However, an effective
way to essentially allow them to talk to each other can be discussed.

- Two ways they can:
    1. Using a pure js + id prefix approach (Would add another dependency layer)
    2. Using a common `tab-chainer` which would make chainer and associating the tabs a bit easier

    Out of the two approachs, the second one seems to be the most logical

- Only one tabcontent would be active based on it's `tab-activated` attribute
that can be controlled as the user wants

- A few drawbacks of this would be the fact that the userland as well as the developer
has to use and maintain 3 different classes, each intricate with attributes and all 
in order for this to work

**Viability**

- Seems quite viable. This would need only the use of standard HTML and Container classes
in the Approach/Render.

## Review Findings

The second approach seems like a viable choice.
It provides an easy implementation while being pragmatic and modular.
So it makes sense

### Time:

About 3 days for planning, execution and testing

### Budget: ~

### Resource Use:

Me

### Tasks:

1. Design Climb Specs for Tab
2. Come up with vague implementation of the classes
3. Write the indivisual classes
4. Write the integration
5. Test

## Climb

Started work on a priliminary work on the classes.
They seem to work quite well

It is overall implemented into 3 classes:
1. `Tab`: Contains the actual tab button
2. `TabContent`: Contains the tab content along with the activation sequence
3. `TabBar`: Encapsulates the Tab and TabContent

ONGOING STILL
