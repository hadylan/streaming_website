getMovie("#update_movie");
let movie = document.querySelector("#update_movie");

function getUpdate() {
    fetchResource('./php_scripts/getSelectedMovie.php?movie='+movie.value).then( function(json) {
        document.querySelector("#id").value = json[0].id;
        document.querySelector("#titleToUpdate").value = json[0].title;
        document.querySelector("#descriptionToUpdate").value = json[0].description;
        document.querySelector("#pictureToUpdate").value = json[0].picture;
        document.querySelector("#linkToUpdate").value = json[0].link;
        document.querySelector("#yearToUpdate").value = json[0].year;
    })

    fetchResource('./php_scripts/getCategories.php').then( function(json) {
        let selectCategorie = document.querySelector("#categoryToUpdate");
        while (selectCategorie.firstChild) {
            selectCategorie.removeChild(selectCategorie.firstChild);
        }
        json.forEach(function(data) {
            let option = document.createElement('option');
            option.value = data.id;
            option.innerText = data.category;
            selectCategorie.appendChild(option);
        });
    })

    fetchResource('./php_scripts/getGender.php').then( function(json) {
        let selectCategorie = document.querySelector("#genderToUpdate");
        while (selectCategorie.firstChild) {
            selectCategorie.removeChild(selectCategorie.firstChild);
        }
        json.forEach(function(data) {
            let option = document.createElement('option');
            option.value = data.id;
            option.innerText = data.gender;
            selectCategorie.appendChild(option);
        });
    })
}