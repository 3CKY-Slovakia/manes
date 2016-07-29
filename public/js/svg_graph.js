(function($) {

    $(window).load(function() {
        var graph_desktop = document.getElementById('graph_desktop').contentDocument;

        if(graph_desktop) {
            var $tooltip1 = $(graph_desktop.getElementById('tooltip1'));
            var $tooltip2 = $(graph_desktop.getElementById('tooltip2'));
            var $tooltip3 = $(graph_desktop.getElementById('tooltip3'));

            var $info1 = $(graph_desktop.getElementById('info1'));
            var $info2 = $(graph_desktop.getElementById('info2'));
            var $info3 = $(graph_desktop.getElementById('info3'));

            $info1.mouseenter(function() {
                $tooltip1.stop( true, true ).fadeIn();
            });

            $info1.mouseleave(function() {
                $tooltip1.stop( true, true ).fadeOut();
            });

            $info2.mouseenter(function() {
                $tooltip2.stop( true, true ).fadeIn();
            });
            $info2.mouseleave(function() {
                $tooltip2.stop( true, true ).fadeOut();
            });

            $info3.mouseenter(function() {
                $tooltip3.stop( true, true ).fadeIn();
            });
            $info3.mouseleave(function() {
                $tooltip3.stop( true, true ).fadeOut();
            });
        }
    });
})(jQuery);