// import Font Awesome core
import { library, dom } from '@fortawesome/fontawesome-svg-core';

// Import Font Awesome Pro Light
import {
 faBars, faTimes
} from '@fortawesome/pro-light-svg-icons';

import {
 faFacebookF
} from '@fortawesome/free-brands-svg-icons';

import {

} from '@fortawesome/free-regular-svg-icons';

import {
} from '@fortawesome/free-solid-svg-icons';
import { from } from 'rxjs/observable/from';

// add the imported icons to the library
library.add(faFacebookF);

// tell FontAwesome to watch the DOM and add the SVGs when it detects icon markup
dom.watch();