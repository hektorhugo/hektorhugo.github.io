!function(t){function i(){this._alertWindow.css({marginLeft:-this._alertWindow.halfWidth(),marginTop:-this._alertWindow.halfHeight()})}function n(i){var n=t("<div class='wow-alert-overlay'></div><div class='wow-alert-content'><p>"+i+"</p><a href='#'>"+this.options.label+"</a></div>");return this._alertOverlay=t(n[0]),this._alertWindow=t(n[1]),this._actionButton=this._alertWindow.find("a"),this._alertOverlay.appendTo("body"),this._alertWindow.appendTo("body"),[this._alertOverlay,this._alertWindow]}function e(){var t=this;this._actionButton.bind("click",function(i){i.preventDefault(),t.options.autoClose&&o(),t.options.success&&t.options.success()})}function o(){this._alertOverlay.remove(),this._alertWindow.remove()}var a={label:"OK",autoClose:!0};jQuery.fn.extend({halfWidth:function(){var i=0;return this.each(function(){i+=t(this).outerWidth()/2}),i},halfHeight:function(){var i=0;return this.each(function(){i+=t(this).outerHeight()/2}),i}}),window.alert=function(o,r){this.options=t.extend(a,r),n(o),i(),e()}}(jQuery);