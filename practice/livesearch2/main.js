function search(name) {
    console.log(name);
    fetchSearchData(name);
}

function fetchSearchData(name) {
    fetch('search.php',{
        method: 'POST',
        body: new URLSearchParams('name='  + name)
    })
    .then(res => res.json())
    .then(res => viewSearchResult(res))
    .catch(e => console.log('Error: ' + e))
}

function viewSearchResult(data) {
    const DataViewer = document.getElementById('dataViewer');

    DataViewer.innerHTML = "";

    for(let i = 0; i < data.length; i++) {
        const li = document.createElement("li");
        li.innerHTML = data[i]["name"];
        DataViewer.appendChild(li);
    }
}