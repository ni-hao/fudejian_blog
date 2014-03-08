(function($){
	// Demo code
  var MyPlugin = function(element, options){
    var elem = $(element);
    var obj = this;
    var settings = $.extend({
      param: 'defaultValue'
    }, options || {});

    // Public method - can be called from client code
    this.publicMethod = function(){
      console.log('public method called!');
    };

    // Private method - can only be called from within this object
    var privateMethod = function(){
      console.log('private method called!');
    };
  };

  $.fn.myplugin = function(options){
    return this.each(function(){
      var element = $(this);

      // Return early if this element already has a plugin instance
      if (element.data('myplugin')) return;

      // pass options to plugin constructor
      var myplugin = new MyPlugin(this, options);

      // Store plugin object in this element's data
      element.data('myplugin', myplugin);
    });
  };
  
  // Menu Plugin
  
  var HeaderMenu = function(element){
    var elem = $(element);
    var obj = this;
	elem.children().hover(
	function(){console.info("1");},
	function () {console.info("2");
		$(this).children("ul").stop(true, true).hide(1);
  }
);
	elem.children().children("a").hover(
	function () {console.info("3");
		$(this).next("ul").stop(true, true).show(1);
  },
  function(){console.info("4");}
);
	elem.children().children("ul").hover(
	function () {console.info("5");
		$(this).next("ul").stop(true, true).show(1);
  },
  function(){
	  console.info("6");
		$(this).children("ul").stop(true, true).hide(1);}
);
  };

  $.fn.headerMenu = function(){
    return this.each(function(){
      var element = $(this);

      // Return early if this element already has a plugin instance
      if (element.data('headerMenu')) return;

      // pass options to plugin constructor
      var headerMenu = new HeaderMenu(this);

      // Store plugin object in this element's data
      element.data('headerMenu', headerMenu);
    });
  };
  
})(jQuery);