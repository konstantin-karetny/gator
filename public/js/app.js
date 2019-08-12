jQuery(document).ready($ => {
    $('[data-toggle="tooltip"]').tooltip();
});

class App
{
    static request(url, data, callback = () => {}, params = {})
    {
        console.log(url);

        fetch(
            url,
            $.extend(
                {
                    body        : JSON.stringify(data),
                    credentials : 'same-origin',
                    method      : 'POST',
                    headers     : {
                         Accept        : 'application/json, text-plain, */*',
                        'Content-Type' : 'application/json',
                        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                    }
                },
                params
            )
        )
            .then(response => {
                console.log('response:');
                console.log(response);
                if (response.ok) {
                    return response.json();
                }
                alert('An error has occurred in response');
            })
            .then(res => {
                console.log('res:');
                console.log(res);
                alert('Succesfully disliked');
            })
            .catch(error => {
                console.log('error:');
                console.log(error);
                alert('An error has occurred in catch: ' + error);
            });
    }
}