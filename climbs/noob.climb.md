# UI Components Climb

## Destination

Come up with the components for creating a dashboard UI

## Survey

### Carousel

A carousel would act as the generic container that would be capable of
holding images or svg supported rederables accompanied by a caption or a 
child div that acts as the caption

This would help make the process of creating album like UI's, as mentioned below
with ease

![Carousel](static/carousel.png)

**Obstacles**:

- Fitting Images of various sizes in approriate formats
- Maintaining assositivity between the captions and the images

### Popup

A popup can be made such that it has all the in built functionality needed to
essentially make it a popup, with it acting as the generic container for holding
any Renderable Text within it

It can also come with a exit button and blur effect, added by JS and CSS by default
(eventually)

**Obstacles**:

- The container has to be in a way independent from it's content
- The manipulation behaviours on the popup should not be effected by it's content
- The default implemented JS functionality should be customizable and extendable
- The option for the user to add functionality to the popup it self, example: Removing
the close option etc
- Keep track of the button / activation mechanism of the popup

### Dropdown Button

This would essentially be a button that has an embedded dropdown that would can be
binded to a different action can be manipulated by the use

This could also act as a dropdown in general as well

**Obstacles**:

- Design the structure for the dropdown arrangement

### Tabs

Tabs would enable the userland to make and design functional dashboard that are modular.
The tabs would be containers with logic that would also make them associated to particular buttons
which would "activate" them, ie display them on the main screen

**Obstacles**:

- Design the Structure of the tab arrangement
- Come up with how to associate the button and the tab
- Make the JS implementation simple
