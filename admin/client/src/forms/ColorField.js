/* Color Field
===================================================================================================================== */

import $ from 'jquery';
import 'bootstrap-colorpicker';

$.entwine('silverware.colorfield', function($) {
  
  // Handle Color Field Wrapper:
  
  $('.field.colorfield .wrapper').entwine({
    
    onmatch: function() {
      
      // Initialise Colorpicker:
      
      $(this).colorpicker();
      
      // Trigger Next Method:
      
      this._super();
      
    }
    
  });
  
});
