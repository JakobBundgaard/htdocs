// From cities

function show_from_results() {
    const the_input = document.querySelector('#from-input')
    if(the_input.value.length > 0) {
        document.querySelector('#from-results').style.display = 'block'
        get_cities_from()
    }else {
        document.querySelector('#from-results').style.display = 'none'
    }
}


function hide_from_results() {
    document.querySelector('#from-results').style.display = 'none'
}

async function get_cities_from() {
    // Clear from-results div
    document.querySelector('#from-results').innerHTML = ""
    let conn = await fetch('api-get-cities-from')
    let data = await conn.json()

    let div_city = `
                    <div class="from-city">
                        <img class="img_city" src="#img#" alt="Destination">
                        <div class="from_city_name">
                            <p>xxx</p>
                            <p>Population: #pop#</p>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox">
                        </div>
                    </div>
                    `

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

// To cities

function show_to_results() {
    const the_input = document.querySelector('#to-input')
    if(the_input.value.length > 0) {
        document.querySelector('#to-results').style.display = 'block'
        get_cities_to()
    }else {
        document.querySelector('#to-results').style.display = 'none'
    }
}

function hide_to_results() {
    document.querySelector('#to-results').style.display = 'none'
}

async function get_cities_to() {
    // Clear to-results div
    document.querySelector('#to-results').innerHTML = ""
    let conn = await fetch('api-get-cities-to')
    let data = await conn.json()

    //console.log(data);

    let div_city = `
                    <div class="to-city">
                        <img class="img_city" src="#img#" alt="Destination">
                        <div class="from_city_name">
                            <p>xxx</p>
                            <p>Population: #pop#</p>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox">
                        </div>
                    </div>
                    `

    let all_cities = ""
    document.querySelector('#to-results').innerHTML = '';
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
    document.querySelector('#to-results').insertAdjacentHTML('afterbegin', all_cities)
}



// function toggleFromCheckbox() {
//     const checkbox = document.querySelector('.checkbox').checked
//     // console.log('Check');

//     if( !checkbox === true) {
//         console.log('Check');
//         document.querySelector('#from-input').value = "HEY"
//         document.querySelector('#from-results').innerHTML = ''
//     }
// }

// function toggleToCheckbox() {
//     const checkbox = document.querySelector('.checkbox').checked
//     // console.log('Check');

//     if( !checkbox === true) {
//         console.log('Check');
//         document.querySelector('#to-input').value = "There"
//         document.querySelector('#to-results').innerHTML = ''
//     }
// }


