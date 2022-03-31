function loadImage(url) {
    return new Promise(resolve => {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', url, true);
        xhr.responseType = "blob";
        xhr.onload = function (e) {
            const reader = new FileReader();
            reader.onload = function(event) {
                const res = event.target.result;
                resolve(res);
            }
            const file = this.response;
            reader.readAsDataURL(file);
        }
        xhr.send();
    });
}

let signaturePad = null;

window.addEventListener('load', async () => {

    const canvas = document.querySelector("canvas");
    canvas.height = canvas.offsetHeight;
    canvas.width = canvas.offsetWidth;

    signaturePad = new SignaturePad(canvas, {});

    const form = document.querySelector('#form');
    form.addEventListener('submit', (e) => {
        e.preventDefault();

     
        let nombre = document.getElementById('nombre').value;
        let nombre1 = document.getElementById('nombre1').value;
        let nombre2 = document.getElementById('nombre2').value;
        let state = document.getElementById('state').value;
        let state2 = document.getElementById('state2').value;
        let nombre3 = document.getElementById('nombre3').value;
        let nombre4 = document.getElementById('nombre4').value;
        let nombre5 = document.getElementById('nombre5').value;
        let nombre6 = document.getElementById('nombre6').value;
        let nombre7 = document.getElementById('nombre7').value;
        let nombre8 = document.getElementById('nombre8').value;
        let nombre9 = document.getElementById('nombre9').value;
        let nombre10 = document.getElementById('nombre10').value;
        let nombre11 = document.getElementById('nombre11').value;
        let nombre12 = document.getElementById('nombre12').value;
        let nombre13 = document.getElementById('nombre13').value;
        let nombre14 = document.getElementById('nombre14').value;
        let nombre15 = document.getElementById('nombre15').value;
        let nombre16 = document.getElementById('nombre16').value;
        let nombre17 = document.getElementById('nombre17').value;
        let nombre18 = document.getElementById('nombre18').value;
        let nombre20 = document.getElementById('nombre20').value;
        let nombre21 = document.getElementById('nombre21').value;
        let nombre24 = document.getElementById('nombre24').value;
        let nombre25 = document.getElementById('nombre25').value;
        let nombre27 = document.getElementById('nombre27').value;
        let nombre28 = document.getElementById('nombre28').value;
        let nombre29 = document.getElementById('nombre29').value;
        let nombre30 = document.getElementById('nombre30').value;
        let nombre31 = document.getElementById('nombre31').value;
        let nombre32 = document.getElementById('nombre32').value;
        let nombre33 = document.getElementById('nombre33').value;
        let nombre34 = document.getElementById('nombre34').value;
        let nombre35 = document.getElementById('nombre35').value;
        let nombre36 = document.getElementById('nombre36').value;
        let nombre37 = document.getElementById('nombre37').value;
        let nombre38 = document.getElementById('nombre38').value;
        let nombre39 = document.getElementById('nombre39').value;
        let nombre40 = document.getElementById('nombre40').value;
        let nombre41 = document.getElementById('nombre41').value;
        let hijos1 = document.querySelector('input[name="hijos1"]:checked').value;
        let hijos2 = document.querySelector('input[name="hijos2"]:checked').value;
        let hijos3 = document.querySelector('input[name="hijos3"]:checked').value;
        let hijos4 = document.querySelector('input[name="hijos4"]:checked').value;
        let hijos5 = document.querySelector('input[name="hijos5"]:checked').value;
        let hijos6 = document.querySelector('input[name="hijos6"]:checked').value;
        let hijos7 = document.querySelector('input[name="hijos7"]:checked').value;
        let numeroHijos = "0";
        let discapacidad = document.querySelector('input[name="discapacidad"]:checked').value;
        let discapacidadDesc = "";


        //para corregir fecha setear la hora como 00:00:00

        let d1 = document.getElementById('txtfecha1').value;
        const date1 = new Date(d1+'T00:00:00');
        var fecha1 = date1.getDate() + "-" + (date1.getMonth()+1) + "-" + date1.getFullYear();

        let d2 = document.getElementById('txtfecha2').value;
        const date2 = new Date(d2+'T00:00:00');
        var fecha2 = date2.getDate()  + "-" + (date2.getMonth()+1) + "-" + date2.getFullYear();

        let d3 = document.getElementById('txtfecha3').value;
        const date3 = new Date(d3+'T00:00:00');
        var fecha3 = date3.getDate()  + "-" + (date3.getMonth()+1) + "-" + date3.getFullYear();

       



        let chk1 =0 ;
        if(document.getElementById("chk1").checked === true)
        {
            chk1 =1 ;
        }

        let chk2 =0 ;
        if(document.getElementById("chk2").checked === true)
        {
            chk2 =1 ;
        }

        8
      
        generatePDF(nombre,nombre1,nombre2,nombre3,nombre4 ,nombre5 ,nombre6 ,nombre7 ,nombre8 ,nombre9 ,nombre10 ,nombre11 ,nombre12 ,nombre13,nombre14, nombre15, nombre16, nombre17, nombre18,  nombre20, nombre21, nombre24, nombre25, nombre27, nombre28, nombre29, nombre30, nombre31, nombre32, nombre33, nombre34, nombre35, nombre36, nombre37, nombre38, nombre39, nombre40, nombre41,hijos1,hijos2,hijos3,hijos4,hijos5,hijos6,hijos7,numeroHijos,discapacidad,discapacidadDesc,fecha1,fecha2,fecha3, chk1,chk2,state, state2);
    })

});

async function generatePDF(nombre,nombre1,nombre2,nombre3,nombre4 ,nombre5 ,nombre6 ,nombre7 ,nombre8 ,nombre9 ,nombre10 ,nombre11 ,nombre12 ,nombre13,nombre14, nombre15, nombre16, nombre17, nombre18, nombre20, nombre21, nombre24, nombre25, nombre27, nombre28, nombre29, nombre30, nombre31, nombre32, nombre33, nombre34, nombre35, nombre36, nombre37, nombre38, nombre39, nombre40, nombre41,hijos1,hijos2,hijos3,hijos4,hijos5,hijos6,hijos7,numeroHijos,discapacidad,discapacidadDesc,fecha1,fecha2,fecha3, chk1,chk2,state,state2) {
    const image = await loadImage("cfra.jpg");
    const signatureImage = signaturePad.toDataURL();

    const pdf = new jsPDF('p', 'pt', 'letter');

    pdf.addImage(image, 'PNG', 0, 0, 565, 792);
    pdf.addImage(signatureImage, 'PNG', 138, 158, 300, 60);

   pdf.setFontSize(10);
    //pdf.text(curso, 260, 125);

    const date = new Date();
    pdf.text(date.getUTCDate().toString(), 445, 175);
    pdf.text((date.getUTCMonth() + 1).toString(), 465, 175);
    pdf.text(date.getUTCFullYear().toString(), 485, 175);

    
    pdf.setFontSize(13);

    if (parseInt(chk1) === 1) {
        pdf.text("X", 33, 379);
    } 

    if (parseInt(chk2) === 1) {
        pdf.text("X", 96, 379);
    } 


    pdf.setFontSize(10);
    pdf.text(nombre, 125, 99);
    pdf.text(nombre1, 434, 99);
    pdf.text(nombre2, 204, 120);
    pdf.text(nombre3, 115, 261);
    pdf.text(nombre4, 115, 261);
    pdf.text(nombre5, 69, 278);
    pdf.text(nombre6, 398, 278);
    pdf.text(nombre7, 105, 295);
    pdf.text(nombre8, 105, 312);
    pdf.text(nombre9, 315, 351);
    pdf.text(nombre10, 425, 377);
    pdf.text(nombre11, 377, 391);
    pdf.text(nombre12, 93, 445);
    pdf.text(nombre13, 238, 445);
    pdf.text(nombre14, 310, 445);
    pdf.text(nombre15, 384, 445);
    pdf.text(nombre16, 457, 445);
    pdf.text(nombre17, 93, 467);
    pdf.text(nombre18, 238, 467);
    pdf.text(nombre20, 384, 467);
    pdf.text(nombre21, 457, 467);
    pdf.text(nombre24, 310, 487);
    pdf.text(nombre25, 384, 487);
    pdf.text(nombre27, 93, 487);
    pdf.text(nombre28, 238, 487);
    pdf.text(nombre29, 310, 487);
    pdf.text(nombre30, 384, 487);
    pdf.text(nombre31, 457, 487);
    pdf.text(nombre32, 93, 487);
    pdf.text(nombre33, 238, 487);
    pdf.text(nombre34, 310, 487);
    pdf.text(nombre35, 384, 487);
    pdf.text(nombre36, 457, 487);
    pdf.text(nombre37, 93, 487);
    pdf.text(nombre38, 238, 487);
    pdf.text(nombre39, 310, 487);
    pdf.text(nombre40, 384, 487);
    pdf.text(nombre41, 457, 487);
    pdf.text(state, 487, 120);
     pdf.text(state2, 483, 120);

    pdf.text(fecha1.toString(), 92, 120);
    pdf.text(fecha2, 105, 351);
    pdf.text(fecha3, 190, 351);
  
  

    pdf.setFillColor(0,0,0);
        if (parseInt(hijos1) === 0) {
        pdf.circle(398, 500, 4, 'FD');
    } else {
        pdf.circle(368, 500, 4, 'FD');
       
    }

     if (parseInt(hijos2) === 0) {
        pdf.circle(324, 526, 4, 'FD');
    } else {
        pdf.circle(295, 526, 4, 'FD');
       
    }

     if (parseInt(hijos4) === 0) {
        pdf.circle(389, 604, 4, 'FD');
    } else {
       pdf.circle(352, 604, 4, 'FD');
       
    }
     if (parseInt(hijos3) === 0) {
        pdf.circle(465, 585, 4, 'FD');
    } else {
        pdf.circle(430, 585, 4, 'FD');
       
    }


     if (parseInt(hijos5) === 0) {
         pdf.circle(475, 618, 4, 'FD');
    } else {
         pdf.circle(442, 618, 4, 'FD');
       
    }

        if (parseInt(hijos6) === 0) {
        pdf.circle(383, 636, 4, 'FD');
    } else {
        pdf.circle(352, 636, 4, 'FD');
       
    }

     if (parseInt(hijos7) === 0) {
        pdf.circle(383, 636, 4, 'FD');
    } else {
        pdf.circle(352, 636, 4, 'FD');
       
    }

    if (parseInt(discapacidad) === 0) {
        pdf.circle(384, 651, 4, 'FD');
    } else {
        pdf.circle(347, 651, 4, 'FD');
        
    }

    //convertimos el PDF a blob en vez de descargar
    const pdfData = pdf.output('blob');

    //creamos el form data para enviar al servidor con el PDF generado
    const data = new FormData();
    data.append('pdf', pdfData);

    //enviamos PDF al servidor al script mailpdf.php
    fetch('mailemployer.php', {
        method: 'POST',
        body: data
    })
    .then(response => response.json())
    .then(data => alert(data.msg))
    .catch((err) => {
        console.log(err)
    })

}