/* Color Field
===================================================================================================================== */

import $ from 'jQuery';
import 'bootstrap-colorpicker';

$.entwine('silverware.colorfield', function($) {
  
  // Handle Color Field Wrapper:
  
  $('.field.colorfield .wrapper').entwine({
    
    onmatch: function() {
      $(this).colorpicker();
      this._super();
    }
    
  });
  
});
