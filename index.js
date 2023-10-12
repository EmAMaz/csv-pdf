        const download_button = document.getElementById("dw_bt");
        let ticket = "";
         
        const contadorProductos = document.querySelector("#contador");                 
        const prod = document.querySelectorAll("#producto");
        const tablaTbody = document.querySelectorAll("#tabla-tbody");
        const titulo = document.getElementById("titulo-prueba");
        const check = document.querySelectorAll("#check");
        const buscador = document.getElementById("buscador");

        let ultimoElem = [];
        let bol = true;
        let contador = 0;  
        let palabras = "";
        let validoCheck = false;
        

        buscador.addEventListener("keyup", e =>{
            console.log(e.target.value);
            if(e.target.matches("#buscador")){
                prod.forEach(productos => {
                    productos.textContent.toLowerCase().includes(e.target.value.toLowerCase()) ? productos.classList.remove("filtro") : productos.classList.add("filtro");
                })
            }
        })
        
        check.forEach(elemen=>{
            console.log(elemen)
            elemen.addEventListener("click",function(e){
                if((contador > 0)&&(e.target.defaultValue == "Uno")){
                    return validoCheck = true;
                }else if((contador > 3)&&(contador % 4 == 0)&&(e.target.defaultValue == "Cuatro")){
                    console.log("el contador es mayor a cuatro y multiplo de 4");
                    return validoCheck = true;
                }else if((contador > 1)&&(contador % 2 == 0)&&(e.target.defaultValue == "Dos")){
                    console.log("el contador es mayor a dos y multiplo de 2");
                    return validoCheck = true;
                }
                else{
                    e.target.checked = false;
                    return validoCheck = false;
                }

            });
        });
        
        download_button.addEventListener("click", function(elemento){
            if(contador == 0){
                alert("Elija al menos un producto");
                elemento.preventDefault();
            }else if(validoCheck){
                contador = 0;
                contadorProductos.innerHTML = 0;
                ultimoElem=[];
                check.forEach(elemen=>{   
                    elemento.addEventListener("click",function(e){
                        if(!e.target.checked){
                            elemento.preventDefault();
                        }
                    })
                })
            }else{
                elemento.preventDefault();
            }
        });

        // download_button.addEventListener("click",(eree)=>{
        //     contador = 0;
        //     contadorProductos.innerHTML = 0;
        //     ultimoElem=[];
        //     check.forEach(elemen=>{         
        //         elemen.addEventListener("click",function(e){
        //             if(!e.target.checked){
        //                 eree.preventDefault();
        //             }
        //         })
        //     })
        // })

        prod.forEach(element=>{
            element.addEventListener("click", function(e){

                domtoimage.toJpeg(element).then((data)=>{
                    var link = document.createElement("a");
                    //PRODUCTOS REPETIDOS NO
                    if((!ultimoElem.includes(element.firstElementChild.innerHTML))){
                        contador++;
                        contadorProductos.innerHTML = contador;
                        link.download = element.firstElementChild.innerHTML + ".jpg";
                        link.href = data;
                        link.click();
                    }else{
                        alert("PRODUCTO YA SELECCIONADO");
                    }
                    ultimoElem.push(element.firstElementChild.innerHTML);
                });
                
                // domtoimage.toJpeg(element).then((data)=>{
                //         var link = document.createElement("a");
                //             contador++;
                //             contadorProductos.innerHTML = contador;
                //             link.download = element.firstElementChild.innerHTML;
                //             link.href = data;
                //             link.click();
                //         ultimoElem.push(element.firstElementChild.innerHTML);
                // }); 
            });
        });