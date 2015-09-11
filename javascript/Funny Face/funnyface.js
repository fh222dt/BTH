//Frida Holmström Funny Face
var FHFF = FHFF || {};

(FHFF.funnyFace = function () {

    var faceParts = {
        makeDraggable: function () {
                        
            $('.draggable').draggable({ helper: 'clone' });
            
            $('.draggable').bind('dragstop', function (event, ui) {                
                /*$(ui.helper).clone(true).appendTo('body').addClass('full-size').draggable({ stack: ".draggable" })*/  //works in chrome
                $(ui.helper).clone(true).appendTo('body').width('auto').height('auto').draggable({ stack: ".draggable" })  //works in FF & chrome              
            });
        },

        trash: function () {
            $("#trash").droppable({
                accept: ".draggable",
                tolerance: 'pointer',
                drop: function (event, ui) {
                    $(ui.draggable).remove();
                }
            });
        },

        trashTalk: function () {
            $('#trash').hover(function () {
                $('#trash_talk').show();
            },
            function () {
                $('#trash_talk').hide();
            });
        },

        reload: function () {
            $('#reload').click(function () {
                location.reload(true);
            });
        },

        getRandom: function (min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        },


        parentControl: function () {
            var rand1 = faceParts.getRandom(1, 20);
            var rand2 = faceParts.getRandom(1, 20);

            $(function () {
                setTimeout(function () {
                    $('#pControl').addClass('animated bounceInDown');
                    $('#pControl').show();
                    
                    $("#math").prepend(rand1 +' + ' + rand2);
                }, 600000);     //600000 10 min
            });

            $('#pControlSend').on('click', function () {

                if ($('#input').val() == (rand1+rand2)) {
                    $('#pControl').removeClass('animated bounceInDown');
                    $('#pControl').addClass('animated bounceOutRight');
                }

                else if ($('#hint').length == 0) {
                    $('#pControlSend').before('<p id="hint">Försök igen!</p>');
                }
                    
                else {
                        $('#hint').effect('shake');
                }

                
                
            });
        },
                
        init: function () {
            faceParts.makeDraggable();
            faceParts.trash();
            faceParts.trashTalk();
            faceParts.reload();
            faceParts.parentControl();
        },

    }
    faceParts.init({
    });

    //alla menyers toggle
    var showMenus = {
        
        config: {
            effect: 'slideToggle',
            speed: 500
        },

        init: function (config) {
            $.extend(this.config, config);

            $('.menuheader')
            .on('click', this.show);
        },

        show: function () {
            var sm = showMenus,
                menu = sm.menu,
                config = sm.config;
            $(this).next('.menucontent')[config.effect](config.speed);
        },

    };

    showMenus.init({
        speed: 100      
    });
    
})();
