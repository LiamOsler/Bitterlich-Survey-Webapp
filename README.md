# Bitterlich-Survey-Webapp
A forestry data collection application based on the Bitterlich Method

## Development status: Alpha

A webapp based on Relascopes and the Bitterlich sampling method: 
http://wiki.awf.forst.uni-goettingen.de/wiki/index.php/Bitterlich_sampling

Features implemented to date:
- Adding observation points to a leaflet webmap
- Exporting the points to a CSV file
- Camera input that replicates a Relascope (vertial stadia overlayed on camera input)
- Read the device accelerometer data
- Pivot table with observed values

Features to implement in the future:
- Visualization of collected data in tessalated plots (or choropleth maps)
- Continued development of the relascope, currently need:
  - Better placement of angle observation buttons
  - Interface calculated height the observation table
  - User tutorial
- Table header customization
- Write observations to database

Design considerations:
- Drop the generic splash page originally created to satisfy the requirements of an assignment and focus on explanation of Relascope function
  
Bugs:
- Modals can be exited by clicking their background, may be wise to disable this feature on mobile devices to prevent palm-presses and avoid data input loss


Stack:
- PHP (currently used for page templating, may be used for DML in future)
- Javascript (mapping and DOM manipulation)
- Bootstrap (page layout, UI elements, modal styling)
