/*------------------------------------------------------
    Author : www.webthemez.com
    License: Commons Attribution 3.0
    http://creativecommons.org/licenses/by/3.0/
---------------------------------------------------------  */

(function ($) {
    "use strict";
    var mainApp = {

        initFunction: function () {
            /*MENU 
            ------------------------------------*/
            $('#main-menu').metisMenu();
			
            $(window).bind("load resize", function () {
                if ($(this).width() < 768) {
                    $('div.sidebar-collapse').addClass('collapse')
                } else {
                    $('div.sidebar-collapse').removeClass('collapse')
                }
            });     
        },

        initialization: function () {
            mainApp.initFunction();

        }

    }
    // Initializing ///

    $(document).ready(function () {
        mainApp.initFunction();

      var data = {
            "ale": datas
        };

        typeof $.typeahead === 'function' && $.typeahead({
            input: ".js-typeahead",
            minLength: 1,
            maxItem: 15,
            order: "asc",
            hint: true,
            group: {
                template: "Resulat"
            },
            maxItemPerGroup: 10,
            backdrop: {
                "background-color": "none"
            },
            href: "#",
            emptyTemplate: 'Membre introuvable',
            source: {
                Ale: {
                    data: data.ale
                }
            },
            callback: {
                onReady: function (node) {
                },
                onDropdownFilter: function (node, query, filter, result) {
                    console.log(query)
                    console.log(filter)
                    console.log(result)
                }
            },
            debug: true
        });

    });

}(jQuery));
