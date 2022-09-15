async function get_flights() {
    // CLean flights div
    document.querySelector('#flights').innerHTML = ""

    // Get data from input field
    const search_for = document.querySelector('#search_flight_from').value 
    

    const conn = await fetch('api-search.php?from_city='+search_for)
    const flights = await conn.json()
    console.log(flights)

    // Loop through flights
    let all_flights = ""

    const original_flight_blueprint = `
        <div class="flight">
            <div class="from_city">
                <p>#from_city#</p>
                <p>Departure:  #departure_time#</p>
            </div>
            <div class="to_city">
                <p>#to_city#</p>
                <p>Arrival: #arrival_time#</p>
            </div>
        </div>`

    flights.forEach( flight => {
        let div_flight = original_flight_blueprint

        div_flight = div_flight.replace('#from_city#', flight.from_city_name)
        div_flight = div_flight.replace('#departure_time#', flight.departure_time)
        div_flight = div_flight.replace('#to_city#', flight.to_city_name)
        div_flight = div_flight.replace('#arrival_time#', flight.arrival_time)


        all_flights += div_flight
    })
    document.querySelector('#flights').insertAdjacentHTML('afterbegin', all_flights)

    // div_flight = div_flight.replace("#from_city#", from_city_name)
}