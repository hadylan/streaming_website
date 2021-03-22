function fetchResource(path) {
    return fetch(path)
        .then( function(response) {
            return response.json();
    })
}