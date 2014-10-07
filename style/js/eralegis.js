/*
  eralegis.js -- jQuery helper library for rendering Era Legis dates

  Read documentation at http://khephera.net/date/eralegis.html

  Copyright (c) 2012 Clay Fouts

*/

var eralegis = {base_url: 'http://khephera.net/date/'};

var attrmap = {
    'lang': 'lang',
    'tz': 'tz',
    'romanYear': 'roman_year',
    'showTerse': 'show_terse',
    'showDeg': 'show_deg',
    'showDow': 'show_dow',
    'showYear': 'show_year'
};

( function ($) {

    function updateDate(element, success, failure) {
        var span = $(element);
        var params = {};
        if ( span.text().match('\{') ) {
            // Assume noise unless there's a template token included
            params['template'] = span.html();
        }
        for (var opt in attrmap) {
            if (typeof span.data(opt) != 'undefined') {
                params[attrmap[opt]] = span.data(opt);
            }
        }

        $.ajax({
            url: eralegis.base_url + (span.data('evdate') || ''),
            data: params,
            dataType: 'json',
            headers: { 'Accept': 'application/json' },
            crossDomain: true,
            success: success,
            error: failure
        });
    }

    $(document).ready( function() {
        $('.date93').each( function() {
            var element = this;
            updateDate( this, function(date) {
                $(element).html(date.plain);
            });
        });
    });

})(jQuery);

