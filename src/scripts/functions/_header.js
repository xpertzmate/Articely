let _ATY_HEADER = {
    showSearchPopup() {
        jQuery('[data-id="_aty-search-popup"]').addClass('_aty-active');
        this.hideSearchPopup();
    },
    hideSearchPopup() {
        jQuery(document).mouseup(function (e) {
            var container = jQuery('[data-id="_aty-search-popup"] .search-field');
            // if the target of the click isn't the container nor a descendant of the container
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                jQuery('._aty-search-block svg , _aty-mobile-search-icon svg').removeClass('_aty-active');
                jQuery('[data-id="_aty-search-popup"]').addClass('_aty-active');
            }
        });

    },
    init() {
        jQuery(document).on('click', '._aty-search-block svg , _aty-mobile-search-icon svg', function () {
            jQuery(this).addClass('_aty-active');
            _ATY_HEADER.showSearchPopup();
        });

    }

};