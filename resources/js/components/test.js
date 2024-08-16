import { driver } from "driver.js";
import "driver.js/dist/driver.css";


// const driverObj = driver({
//     showProgress: true,
//     steps: [
//       { element: '#first-element', popover: { title: 'Title', description: 'Description' } },
//       { element: '#second-element', popover: { title: 'Title', description: 'Description' } },
//       { element: '#third-element', popover: { title: 'Title', description: 'Description' } },
//     ]
// });

const driverObj = driver();
// driverObj.highlight();

driverObj.highlight({
    element: '#first-element',
    popover: {
      title: 'Title for the Popover',
      description: 'Description for it',
    },
  });
