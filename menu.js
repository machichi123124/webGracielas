function fechaTR()
        {
            // Creamos array con los meses y dias en español
            const meses = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];
            const dias = ['Domingo', 'Lunes', 'martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
            //objeto de fecha
            var fecha_ES = new Date();
            //Seleccionar objeto de html
            var fecha=document.getElementById("reloj");

            //guardamos horas minutos y segundos en variables independientes
            hora = fecha_ES.getHours()
            minuto = fecha_ES.getMinutes()
            segundo = fecha_ES.getSeconds()
            //condición para mostrar hora, minutos y segundos de manera correcta
            if(minuto<=9){
                minuto="0"+minuto;
            }
            if(segundo<=9){
                segundo="0"+segundo;
            }
            if(hora<=9){
                hora="0"+hora;
            }
            //imprimir 
            fecha.innerHTML=(dias[fecha_ES.getDay()] + ', ' + fecha_ES.getDate() + ' de ' + meses[fecha_ES.getMonth()] + ' de ' + fecha_ES.getUTCFullYear())+
            "<br>"+"🕐"+hora + " : " + minuto + " : " + segundo+"🕐";
        }