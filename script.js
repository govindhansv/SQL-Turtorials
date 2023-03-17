function Copy(id) {
    let text = document.getElementById(id).textContent;
    navigator.clipboard.writeText(text);
    alert("Copied the text: " + text);
}

function search() {
    document.getElementById('err').style.display = "none";

    let text = document.getElementById('search').value;
    text = text.toUpperCase();
    let ul = document.getElementById('list')
    list = ul.getElementsByTagName('li')
    
    for (let i = 0; i < list.length; i++) {
        let a = list[i].getElementsByTagName("h1")[0];
        let txtValue = a.innerText || a.textContent;

        if (txtValue.toUpperCase().indexOf(text) > -1 ) {
            document.getElementById('err').style.display = "none";
            list[i].style.display = "";
        }else{    
            list[i].style.display = "none";

            document.getElementById('err').style.display = "";
        }
    }
}