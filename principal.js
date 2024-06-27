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
        function mostrarUbi() {
            var direccion = "Carretera int. Km. 3 tramo Cd. obregón - Esperanza, Zona Nte, 85010 Cdad. Obregón, Son.";
            var enlace = "https://www.google.com/maps/search/?api=1&query=" + encodeURIComponent(direccion);
            var mapaEmbed = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3537.7057660973765!2d-109.92818832373925!3d27.54059883282495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86c81516c1503269%3A0x7e2204eeadcd25d0!2sGraciela&#39;s%20Restaurant!5e0!3m2!1ses-419!2smx!4v1719468309726!5m2!1ses-419!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
            var proposito = document.getElementById('pUbi');
            
            if (proposito.style.display === 'block') {
                proposito.style.display = 'none';
            } else {
                proposito.innerHTML = direccion + '<br><a href="' + enlace + '" target="_blank">Ver en Google Maps</a><br>' + mapaEmbed;
                proposito.style.display = 'block';
            }
        }
        
        function mostrarRS() {
            var facebookLink = '<a href="https://www.facebook.com/gracielasrestaurante/?locale=es_LA" target="_blank" style="color: black;">Facebook</a><br>';
            var instagramLink = '<a href="https://www.instagram.com/gracielasrestaurante/" target="_blank" style="color: black;">Instagram</a>';
            var proposito = document.getElementById('redes');
        
            if (proposito.style.display === 'block') {
                proposito.style.display = 'none';
            } else {
                proposito.innerHTML = facebookLink + instagramLink;
                proposito.style.display = 'block';
            }
        }
        function mostrarH() {
            var horario = `
                <p><strong>Horario del Restaurante:</strong></p>
                <p>Martes a Viernes: 8:00 AM - 1:00 PM</p>
                <p>Sábado y Domingo: 8:00 AM - 3:00 PM</p>
            `;
            var elementoHorario = document.getElementById('horario');

            if (elementoHorario.style.display === 'block') {
                elementoHorario.style.display = 'none';
            } else {
                elementoHorario.innerHTML = horario;
                elementoHorario.style.display = 'block';
            }
        }