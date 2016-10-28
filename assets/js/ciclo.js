$(function() {
                // Gallery
                $('div#gallery ul').cycle({
                    timeout: 5,
                    prev: '#gallery-controller-prev',
                    next: '#gallery-controller-next',
                    pager: '#gallery-navigation ul',
                    pagerAnchorBuilder: function (idx, slide) {
                        return '<li><a href="#">&nbsp;</a></li>';
                    }
                });
                // Navigation
                $(".scroll").click(function(event) {
                    event.preventDefault();
                    $('html, body').stop().animate({ scrollTop: $(this.hash).offset().top }, 800);
                });
            });