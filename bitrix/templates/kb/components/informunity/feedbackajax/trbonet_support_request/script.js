function af_support_popup_request(p) {
    var o = this;
    this.root = $(p.root);
    this.form = $(p.form);
    this.ajaxLoader = $(p.ajaxLoader);
    this.send = function(form) {
        var loadUrl = location.href;
        console.log($(form).serialize() + '&AJAX_FORM=support_popup_request');
        o.ajaxLoader.show();
        $.ajax({
            url: loadUrl,
            type: "POST",
            data: $(form).serialize() + '&AJAX_FORM=support_popup_request&submit=1'
        }).done(function(html) {
        	// alert(html);
            o.root.html(html);
            $(p.form + ' select').chosen({
			    disable_search: false,
			    allow_single_deselect: true,
			    width: '100%'
			});
            o.ajaxLoader.hide();
        });
    }
    this.init = function() {
    	$(document).on('submit', p.form, function(e) {
            o.send(p.form);
            e.preventDefault();
        });
    }
}