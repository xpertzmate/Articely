"use strict";

(function ($) {
  $(document).ready(function () {
    _ATY_HEADER.init();
  }); // Run right away
})(jQuery);
"use strict";
"use strict";

var _ATY_HEADER = {
  showSearchPopup: function showSearchPopup() {
    jQuery('[data-id="_aty-search-popup"]').addClass('_aty-active');
  },
  hideSearchPopup: function hideSearchPopup() {},
  init: function init() {
    alert('Hi');
    jQuery(document).on('click', '._aty-search-block svg , _aty-mobile-search-icon svg', function () {
      _ATY_HEADER.showSearchPopup();
    });
  }
};