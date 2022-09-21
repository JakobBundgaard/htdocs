// Languages
function changeLang() {
    console.log('From lang selecter');
    document.getElementById('language-form').submit();
}

// Images
function importData() {
    console.log('Image');
    let input = document.createElement('input');
    input.type = 'file';
    input.onchange = _ => {
        // you can use this method to get file and perform respective operations
        let files = Array.from(input.files);
        console.log(files);
    };
    input.click();
}

// Search
function show_artist_results() {
    const the_input = document.querySelector('#artist-input')
    if(the_input.value.length > 0) {
        console.log(the_input.value);
        // document.querySelector('results').style.display = 'block'
        get_albums_by_artist()
    }else {
        document.querySelector('#results').style.display = 'none'
    }
}

async function get_albums_by_artist() {
    console.log('From getByArtist');
    // Clear from-results div
    // document.querySelector('#results').innerHTML = ""
    let conn = await fetch('api-get-albums-by-artist.php')
    console.log(conn);
    let data = await conn.json()

    // let div_album = `
    //                 <div class="album">
    //                     <img class="img_city" src="#img#" alt="Destination">
    //                     <div class="from_city_name">
    //                         <p>xxx</p>
    //                         <p>Population: #pop#</p>
    //                     </div>
    //                     <div class="checkbox">
    //                         <input type="checkbox">
    //                     </div>
    //                 </div>
    //                 `

    let all_cities = ""
    for( let i = 0; i < data.length;  i++ ) {
        let city = data[i]
        let city_name = city.city_name
        // console.log(city_name)

        // Making a copy, so we dont touch the original blueprint
        let copy_div_city = div_city

        copy_div_city = copy_div_city.replace("xxx", city_name)
        copy_div_city = copy_div_city.replace("#img#", city.city_image)
        copy_div_city = copy_div_city.replace("#pop#",  city.population)

        all_cities += copy_div_city
    }
    // console.log(data)
    document.querySelector('#from-results').insertAdjacentHTML('afterbegin', all_cities)
    all_cities = ""
}