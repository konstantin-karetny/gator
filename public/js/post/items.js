$(window).scroll(() => {
    let range  = $(window).height() / 3,
        top    = $(window).scrollTop() + range + $('#header').outerHeight(true),
        bottom = top + range;
    $('.post.items video').each((i, el) => {
        let y1 = $(el).offset().top,
            y2 = top;
        y1 + $(el).outerHeight(true) < y2 || y1 > bottom
            ? el.pause()
            : el.play();
    });
});