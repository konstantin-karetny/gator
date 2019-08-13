$(window).scroll(() => {
    let range  = $(window).height() / 3,
        top    = $(window).scrollTop() + range + $('#header').outerHeight(true),
        bottom = top + range;
    $('.meme.meme.indexfront video').each((i, el) => {
        let y1 = $(el).offset().top,
            y2 = top;
        y1 + $(el).outerHeight(true) < y2 || y1 > bottom
            ? el.pause()
            : el.play();
    });
});

class IndexFront
{
    static dislike(id)
    {
        fetch(
            window.location.origin + '/dislike',
            {
                body : JSON.stringify({
                    id : id
                }),
                credentials: 'same-origin',
                headers : {
                    'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                },
                method : 'POST'
            }
        )
            .then(response => {
                if (response.ok) {
                    return response.json();
                }
                alert('An error has occurred');
            })
            .then(res => {
                alert('Succesfully disliked');
            })
            .catch(error => {
                alert('An error has occurred: ' + error);
            });
    }

    static like(id)
    {
        App.request(
            'like',
            {
                id : id
            },
            res => alert('Liked')
        );
    }
}