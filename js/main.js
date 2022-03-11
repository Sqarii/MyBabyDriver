let searchInput = document.querySelector('#search-input');

searchInput.addEventListener('keyup', searchFilter);

function searchFilter(){
    let filter = searchInput.value.toUpperCase();
    let searchHints = document.querySelector('#search-hints');
    let a = searchHints.getElementsByClassName('a');

    if(searchInput.value != ""){
        
        searchHints.style.display = "flex";
        
        for(let i=0; i<a.length; i++){
            txtValue = a[i].textContent || a[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } 
            else{
                a[i].style.display = "none";
            }
        }
    }
    else{
        searchHints.style.display = "none";
    }

}
