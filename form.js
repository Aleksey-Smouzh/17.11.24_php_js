function walidacijaForm() {
    let imie = document.getElementById('imie').value
    let email = document.getElementById('email').value
    let news = document.getElementById('news').value

    let blad = document.getElementById('blad');

    if (imie === "" || email === "" || news === "") {
        blad.innerHTML = "wsziske polia musi byc napisano!"
        return false

    }
    let wzorzecEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!wzorzecEmail.text(email)) {
        blad.innerText = "podaj normalny mail"
        return false
    }

    return false
}