// JavaScript Document


;(function(_fn, $, undefined){
	
	"use strict";

	var $document = $(document);
	var $window = $(window);
	var ready = $.domReady || $;
	
	function saveButton(){
		
		var save = $document.find('[type="submit"][name="save"]');
		var publish = $document.find('[type="submit"][name="publish"]');
		
		function _save(e){
			
			
			if (((e.ctrlKey || e.metaKey) && (e.keyCode || e.which)===83) ||
			   ((event.control || event.meta) && event.key === 's') ||
			   (event.which === 115 && event.ctrlKey) && (event.which === 19)) {
				
				save.trigger('click');
				publish.trigger('click');

				e.preventDefault();
				return false;
			}
			
		}
		
		$document.on('keydown',_save);
		//$document.on('keypress',_save);
		$document.on('keypress','meta+s',_save);
	}
	
	
	_fn.init = function(){
		
		saveButton();
		
	};
	
	ready(function(){
		_fn.init();
	});
	
	
})(window.SQSaveShortcut = window.SQSaveShortcut || {}, jQuery);