function getMovie(dir) {
fetchResource('./php_scripts/getMovies.php').then( function(json) {
    let select = document.querySelector(dir);
    json.forEach(function(data) {
        let option = document.createElement('option');
        option.value = data.id;
        option.innerText = data.title;
        select.appendChild(option);
    });
})
}