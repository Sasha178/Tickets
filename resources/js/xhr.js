document.addEventListener('change', change, true);

function change(event) {
    if (event.target.id === 'route') {
        event.preventDefault();
        let directionA = 0;
        document.getElementById('time').innerHTML = '';
        document.getElementById('price').innerHTML = '';
        document.getElementById('travelTime').innerHTML = '';

        let btnAdd = document.getElementById('btnAdd');
        btnAdd.addEventListener('click', function (event) {
            if (event.currentTarget === btnAdd) {
                let formInput = document.querySelector('input.form-control.col-md-6');
                formInput.value--;
                let listPrice = document.getElementById('price');
                let price = listPrice.getAttribute('data_price')
                this.offsetParent.parentElement.children[3].lastElementChild.lastElementChild.children[0].textContent = price * formInput.value;
            }
        })
        let btnSubtract = document.getElementById('btnSubtract');
        btnSubtract.addEventListener('click', function (event) {
            if (event.currentTarget === btnSubtract) {
                let formInput = document.querySelector('input.form-control.col-md-6');
                formInput.value++;
                let listPrice = document.getElementById('price');
                let price = listPrice.getAttribute('data_price')
                this.offsetParent.parentElement.children[3].lastElementChild.lastElementChild.children[0].textContent = price * formInput.value;
            }
        })
        if (event.target.value === 'из A в B') {
            directionA = 1;

            let request = new XMLHttpRequest();
            let url = `direction/${directionA}`
            request.open('GET', url, true);
            request.onload = function () {
                if (request.status === 200) {
                    let stringList = '';
                    if (directionA === 1) {
                        let listRequest = JSON.parse(request.response);
                        console.log(listRequest)
                        for (let item of listRequest.listItemTime) {
                            stringList = stringList + `<option value="${item}">${item}</option>`;
                        }
                        for (let item of listRequest.listItemPrice) {
                            var listPrice = `<span id="price">${item} </span>`;
                            let list = document.getElementById('price');
                            list.setAttribute('data_price', item);

                        }
                        for (let item of listRequest.travelTime) {
                            var travelTime = `<span id="travelTime">${item} минут</span>`;

                        }

                    }
                    document.getElementById('travelTime').insertAdjacentHTML('afterbegin', travelTime);
                    document.getElementById('price').insertAdjacentHTML('afterbegin', listPrice);
                    document.getElementById('time').insertAdjacentHTML('afterbegin', stringList);

                }
            }
            request.send();
        }

        if (event.target.value === 'из B в A') {
            directionA = 2;

            let request = new XMLHttpRequest();
            let url = `direction/${directionA}`
            request.open('GET', url, true);
            request.onload = function () {
                if (request.status === 200) {
                    let stringList = '';
                    if (directionA === 2) {

                        let RequestList = JSON.parse(request.response);
                        console.log(RequestList)
                        for (let item of RequestList.listItemTime) {
                            stringList = stringList + `<option value="${item}">${item}</option>`;
                        }
                        for (let item of RequestList.listItemPrice) {
                            listPrice = `<span id="price">${item} p</span>`;
                        }
                        for (let item of RequestList.travelTime) {
                            travelTime = `<span id="travelTime">${item} минут</span>`;
                        }

                    }
                    document.getElementById('travelTime').insertAdjacentHTML('afterbegin', travelTime);
                    document.getElementById('price').insertAdjacentHTML('afterbegin', listPrice);
                    document.getElementById('time').insertAdjacentHTML('afterbegin', stringList);

                }
            }
            request.send();
        }
        if (event.target.value === 'из A в B и обратно в А') {
            directionA = 3;

            let request = new XMLHttpRequest();
            let url = `direction/${directionA}`
            request.open('GET', url, true);
            request.onload = function () {
                if (request.status === 200) {
                    let stringList = '';
                    if (directionA === 3) {
                        let listRequest = JSON.parse(request.response);
                        for (let items of listRequest) {
                            stringList = stringList + `<option value="${items}">${items}</option>`;
                        }
                    }
                    document.getElementById('time').insertAdjacentHTML('afterbegin', stringList);

                }
            }
            request.send();
        }

    }
}


