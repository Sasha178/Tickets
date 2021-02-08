document.addEventListener('change', change, true);

function change(event) {
    if (event.target.id === 'route') {

        let directionA = 0;
        if (event.target.value === 'из A в B') {
            document.getElementById('time').innerHTML = '';
            directionA = 1;
            console.log(directionA)
        }

        if (event.target.value === 'из B в A') {
            document.getElementById('time').innerHTML = '';
            directionA = 2;
        }
        if (event.target.value === 'из A в B и обратно в А') {
            directionA = 3;
        }
        let request = new XMLHttpRequest();
        let url = `direction/${directionA}`
        request.open('GET', url, true);
        request.onload = function () {
            if (request.status === 200) {
                let stringList = '';
                if (directionA === 3) {
                    let listRequest = JSON.parse(request.response);
                    for (let items of listRequest){
                        for (let item of items ){
                            stringList = stringList + `<option value="${item}">${item}</option>`;
                            console.log(item)
                        }
                    }
                }
                document.getElementById('time').insertAdjacentHTML('afterbegin', stringList);

            }
        }
        request.send();
    }
}


