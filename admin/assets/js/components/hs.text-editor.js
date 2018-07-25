/**
 * Text editor wrapper.
 *
 * @author Htmlstream
 * @version 1.0
 *
 */
;(function ($) {
  'use strict';

  $.HSCore.components.HSTextEditor = {
    /**
     *
     *
     * @var Object _baseConfig
     */
    _baseConfig: {
			height: 100,
			toolbar: false
		},

    /**
     *
     *
     * @var jQuery pageCollection
     */
    pageCollection: $(),

    /**
     * Initialization of Text editor wrapper.
     *
     * @param String selector (optional)
     * @param Object config (optional)
     *
     * @return jQuery pageCollection - collection of initialized items.
     */

    init: function (selector, config) {

      this.collection = selector && $(selector).length ? $(selector) : $();
      if (!$(selector).length) return;

      this.config = config && $.isPlainObject(config) ?
          $.extend({}, this._baseConfig, config) : this._baseConfig;

      this.config.itemSelector = selector;

      this.initTextEditor();

      return this.pageCollection;

    },

    initTextEditor: function () {
      //Variables
      var $self = this,
					config = $self.config,
          collection = $self.pageCollection;

      //Actions
      this.collection.each(function (i, el) {
        //Variables
        var $this = $(el),
            options = {
							height: 100,
							toolbar: false
						};

				$this.summernote(options);

        //Actions
        collection = collection.add($this);
      });
    }

  };

})(jQuery);
