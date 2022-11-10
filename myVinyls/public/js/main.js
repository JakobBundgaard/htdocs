function search(artist) {
    console.log(artist);
    fetchSearchData(artist);
}

function fetchSearchData(artist) {
    $('#results').html('');
    fetch('albums/apisearch', {
        method: 'POST',
        body: new URLSearchParams('artist=' + artist)
    })
        .then(res => res.json())
        .then(res => viewSearchResult(res))
        .catch(e => console.log('Error: ' + e))
}

function viewSearchResult(data) {
    $('#results').html('');
    let templateStr = $('#card_template').html();
    let newStr = data.map(function (obj) {
        let s = '' + templateStr;
        s = s.replace(/{{:(.*)}}/gm, function (m, prop) {
            return obj[prop];
        })
        return s;
    }).join(' ')
    $('#results').html(newStr);
}


