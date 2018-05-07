let botao = document.querySelector('button');
botao.addEventListener('click', function(){

    let category = document.querySelector('#category').value;


    let api = 'https://private-7cf60-4youseesocialtest.apiary-mock.com/timeline';

    let request = new XMLHttpRequest();

    request.open ('GET', api);

    request.onload = function(){
        let midia = JSON.parse(request.responseText);

        let thumbnail = document.querySelector('#thumbnail');
        thumbnail.innerHTML = midia.thumbnail;
        
        let type = document.querySelector('#type');
        thumbnail.innerHTML = midia.type;

        let description = document.querySelector('#description');
        thumbnail.innerHTML = midia.description;
    }

    request.send();



});