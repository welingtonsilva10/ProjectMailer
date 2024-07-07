// Pegar a URL completa
// let fullUrl = window.location.href;
// console.log('Full URL:', fullUrl);

// Pegar a URI
let uri = window.location.pathname;
console.log('URI:', uri);

// Pegar os parâmetros de consulta
let queryString = window.location.search;
console.log('Query String:', queryString);

// Pegar os parâmetros de consulta como um objeto
// let params = new URLSearchParams(window.location.search);

// Iterar sobre os parâmetros de consulta
params.forEach((value, key) => {
    console.log(key, value);
});

let query = window.location.search;

console.log('query: ', query);

// let form = document.getElementById('form');

// Adiciona o ouvinte de evento 'submit'
form.addEventListener('submit', function(event) {
    event.preventDefault();
    
    // Define a nova URL para redirecionamento
    let newUrl = 'https://suasaudemental.com.br'+query;

    // Redireciona para a nova URL
    window.location.href = newUrl;
});




let form = document.getElementById('form');

form.addEventListener('submit', function(event) {

    let fullUrl = window.location.href;
    console.log('Full URL:', fullUrl);

    let url = new URL(fullUrl);
    console.log('URL:', url);

    let params = new URLSearchParams(url.search);
    console.log('params:', params);

    let newBaseUrl = 'https://suasaudemental.com.br/';

    let newUrl = newBaseUrl + '?' + params.toString();

    console.log('newUrl:', newUrl);

    newUrl;

    console.log(newUrl);
});