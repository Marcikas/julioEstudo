const contador = {
    val: 0
};

const count = contador; 

const myPromise = new Promise((resolve, reject) => {
    fetch('http://localhost:8080/api/index.php').then((data) => {
        count.val++;
        resolve(data)
    }).then((data) => {
        data = 3;
    })
    .catch((err) => {
        reject(err);
    })
});

const myPromise2 = new Promise((resolve, reject) => {
    var idade = 19;
    if (idade > 18) {          
        resolve(count.val);
    } else {
        reject("promise rejeitada");
    }
});



execPromise = async () => {
    try {
        let resolvida = await Promise.all([myPromise, myPromise2]);
        for (const promise in resolvida) {
            if (resolvida.hasOwnProperty(promise)) { 
                count.val++;               
                let paragrafo = document.createElement("p");
                paragrafo.innerHTML = count.val;                
                let body = document.querySelector("body");
                body.insertAdjacentElement("beforeend", paragrafo);         
            }
        }        
    } catch (error) {
        console.log(error)
    }
}

const botao = document.querySelector("button");
botao.addEventListener("click", () => {
    setInterval(() => {
        execPromise();
    }, 3000); 
})
