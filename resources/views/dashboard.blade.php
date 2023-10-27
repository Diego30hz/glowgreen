<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EcoCID @yield('titulo')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-700 font-mono">
    <header class="bg-gray-800 p-5">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <i class="fas">
                    <img src="{{ asset('6.png') }}" alt="Logo de la Empresa" class="w-8 h-8 mr-2">
                </i>
                <h1 class="text-3xl font-black text-white">Ecocid</h1>
            </div>
            <div class="flex gap-4">
                <div class="flex items-center text-white">
                    <i class="fas fa-user fa-lg mr-2"> <img src="{{ asset('perfil.png') }}" alt="pefil icono" class="w-8 h-8 mr-2"></i>
                    <span class='font-bold'>{{auth()->user()->username}}</span>
                </div>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="font-bold uppercase text-white text-sm border border-white p-2 rounded hover:scale-110 transition-transform duration-300">Cerrar Sesion</button>
                </form>
            </div>
        </div>
    </header>
    <main class="container mx-auto mt-5 p-4">
        <div class="flex">
            <!-- Menú de opciones (parte izquierda) -->
            <div class="w-1/4 pr-4 text-white border border-white p-2 rounded">
                <div class="p-4 rounded-md">
                    <div class="flex items-center mb-2">
                        <i class="fas fa-icon-1 text-blue-500 text-2xl mr-2"><img src="{{ asset('television.png') }}" class="w-40 h-40 mr-2"></i>
                    </div>
                    <!-- Tercer botón de icono y texto -->
                    <div class="flex items-center justify-center mb-2">
                        <span>
                            <button id="botonLimiteConsumo" class="font-bold uppercase text-white text-sm border border-white p-2 rounded hover:scale-110 transition-transform duration-300">
                                Agregar Alerta
                            </button>
                        </span>
                    </div>
                    
                    <div class="flex items-center justify-center mb-2">
                        <span>
                            <button id="botonPausarMediciones" class="font-bold uppercase text-white text-sm border border-white p-2 rounded hover:scale-110 transition-transform duration-300">
                                Pausar Mediciones
                            </button>
                        </span>
                    </div>
                    
                </div>
            </div>
            <div class="mb-6 mx-4">
                <!-- Elementos para mostrar los valores de Amperios, kW y kWh -->
                <div class="w-40 h-40 rounded-full text-white text-center flex items-center justify-center border-4 border-white mb-4">
                    <span id="amperiosValue" class="text-3xl">A</span>
                </div>
                <div class=" w-40 h-40 rounded-full text-white text-center flex items-center justify-center border-4 border-white mb-4">
                    <span id="kwValue" class="text-3xl">kV</span>
                </div>
                <div class=" w-40 h-40 rounded-full text-white text-center flex items-center justify-center border-4 border-white">
                    <span id="kwhValue" class="text-3xl">kWh</span>
                </div>
            </div>
            
            <!-- Contenido (parte derecha) -->
            <div class="w-3/4 mx-4">
                <div class="shadow mb-6 text-white text-sm border border-white p-2 rounded ">
                    <h2 class="text-xl font-semibold mb-2">Escalas de Amperaje</h2>
                    <div class="bg-gray-200 w-full h-12 rounded-lg mb-4">
                        <div id="escalaAmperaje" class="bg-blue-500 h-full text-white text-center leading-12" style="width: 0%;"></div>
                    </div>
            
                    <!-- Escala de amperaje dinámica -->
                    <div class="flex justify-between">
                        <div id="minAmperaje">0,1 A</div>
                        <div id="maxAmperaje">1 A</div>
                    </div>
                    <div class="shadow mt-6 text-white text-sm border border-white p-2 rounded">
                        <h2 class="text-xl font-semibold mb-2">Sugerencias de Consumo</h2>
                        <div class="mb-4">
                            <h3 class="text-lg font-semibold mb-2">Sugerencia 1: Apaga los dispositivos en modo de espera</h3>
                            <p>Apagar completamente tus dispositivos electrónicos en lugar de dejarlos en modo de espera puede ahorrar una cantidad significativa de energía a lo largo del tiempo. </p>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-2">Sugerencia 2: Utiliza iluminación LED</h3>
                            <p>Cambia tus bombillas incandescentes por bombillas LED. </p>
                        </div>
                    </div>
                </div>
                <div class="shadow mt-6 text-white text-sm border border-white p-2 rounded">
                    <h2 class="text-xl font-semibold mb-2">Resumen</h2>
                    <div class="flex justify-between">
                        <div class="flex items-center justify-center">
                            <div class="w-48 h-48 rounded-full  text-white text-4xl flex items-center justify-center border-4 border-white mb-4">
                                <span id="consumoAcumulado" class="text-xl">kWh</span>
                            </div>
                        </div>                        
                        <div class="flex items-center justify-center">
                            <div class="w-48 h-48 rounded-full  text-white text-center flex items-center justify-center border-4 border-white">
                                <span id="costoAproximado" class="text-xl">A</span>
                            </div>
                        </div>                        
                    </div>
                </div>
                
            </div>
            <div class="shadow text-white text-sm border border-white p-2 rounded">
                <h2 class="text-xl font-semibold mb-2">Tabla de Datos de Consumo</h2>
                <table id="tablaConsumo" class="w-full table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Hora</th>
                            <th class="px-4 py-2">Amperios</th>
                            <th class="px-4 py-2">kW</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2" id="fila1Hora"></td>
                            <td class="border px-4 py-2" id="fila1Amperios"></td>
                            <td class="border px-4 py-2" id="fila1KW"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                                               
        </div>
    </main>
    <script>
        // Función para actualizar los valores de Amperios, kW y kWh
        function actualizarValores(amperios, kW, kWh) {
            document.getElementById('amperiosValue').textContent = amperios.toFixed(3) + ' A';
            document.getElementById('kwValue').textContent = kW.toFixed(3) + ' kW';
            document.getElementById('kwhValue').textContent = kWh.toFixed(3) + ' kWh';
    
            // Actualizar el valor acumulado en la variable
            energiaAcumuladaKWh += kWh;
            document.getElementById('consumoAcumulado').textContent = energiaAcumuladaKWh.toFixed(3) + ' kWh';
    
            // Calcular el costo aproximado en pesos argentinos
            const costoPorKWh = 3500 / 300; // $3500 para 300 kWh
            const costoAproximado = costoPorKWh * energiaAcumuladaKWh;
            document.getElementById('costoAproximado').textContent = costoAproximado.toFixed(2) + ' ARS';
        }
    
        // Función para dar el valor ajustado en el rango especificado
        function DarValorAjustado(min, max) {
            return Math.random() * (max - min) + min;
        }
    
        // Tensión constante en voltios
        const tensionVoltios = 220; // Cambia esto según tu configuración
    
        // Variable para almacenar la energía acumulada en kWh
        let energiaAcumuladaKWh = 0;
    
        // Contador de mediciones
        let mediciones = 0;
    
        // Variable para el intervalo de medición
        let intervaloMedicion;
    
        // Función para realizar mediciones
        function realizarMedicion() {

            const valorAmperios = DarValorAjustado(0.7, 1.245);
    
            // Calcular la potencia instantánea en kW
            const potenciaKW = (tensionVoltios * valorAmperios) / 1000;
    
            // Calcular el tiempo en horas (intervalo en segundos)
            const intervaloTiempoSegundos = 1; // Cambia esto según tu necesidad
            const tiempoHoras = intervaloTiempoSegundos / 3600; // Convertir segundos a horas
    
            // Calcular la energía en kWh 
            const energiaKWh = potenciaKW * tiempoHoras;
    
            // Incrementar el contador de mediciones
            mediciones++;
            let limiteConsumoKWh = 1;

            // Agregar evento al botón para configurar el límite de consumo
            botonLimiteConsumo.addEventListener('click', () => {
                const limiteIngresado = prompt('Por favor, ingresa tu límite de consumo en kWh:');
                if (limiteIngresado !== null) {
                    limiteConsumoKWh = parseFloat(limiteIngresado);
                    alert(`Tu límite de consumo es: ${limiteConsumoKWh} kWh`);
                }
            });
    
            // Actualizar los valores en la página
            actualizarValores(valorAmperios, potenciaKW, energiaKWh);
    
            // Realizar la predicción de kWh cada 25 mediciones
            if (mediciones % 25 === 0) {
                console.log("Predicción de kWh:", energiaAcumuladaKWh);
            }
            if (energiaAcumuladaKWh >= limiteConsumoKWh) {
            alert(`¡Has alcanzado o superado tu límite de consumo de ${limiteConsumoKWh} kWh!`);
            }
        }
    
        // Bucle setInterval para realizar mediciones periódicas
        intervaloMedicion = setInterval(realizarMedicion, 1000); // Realizar la medición cada 1 segundo
    
        // Agregar eventos a los botones
        const botonLimiteConsumo = document.querySelector('#botonLimiteConsumo');
        const botonPausarMediciones = document.querySelector('#botonPausarMediciones');
        const botonReiniciarContadores = document.querySelector('#botonReiniciarContadores');
    
        botonLimiteConsumo.addEventListener('click', () => {
            const limiteConsumo = prompt('Por favor, ingresa tu límite de consumo en kWh:');
            if (limiteConsumo !== null) {
                alert(`Tu límite de consumo es: ${limiteConsumo} kWh`);
            }
        });
    
        // Variable para controlar si las mediciones están pausadas o no
        let medicionesPausadas = false;

        // Variable para almacenar el tiempo de pausa en segundos
        let tiempoDePausa = 120; // 2 minutos en segundos

        // Evento click para pausar/reanudar las mediciones
        botonPausarMediciones.addEventListener('click', () => {
            if (!medicionesPausadas) {
                // Pausar las mediciones
                medicionesPausadas = true;
                botonPausarMediciones.textContent = 'Reanudar Mediciones';

                // Detener el intervalo de medición
                clearInterval(intervaloMedicion);

                // Configurar un temporizador para reanudar después de 2 minutos
                setTimeout(() => {
                    // Reanudar las mediciones después de 2 minutos
                    medicionesPausadas = false;
                    botonPausarMediciones.textContent = 'Pausar Mediciones';

                    // Reiniciar el intervalo de medición
                    intervaloMedicion = setInterval(realizarMedicion, 1000);
                }, tiempoDePausa * 1000); // Multiplicar por 1000 para convertir segundos a milisegundos
            }
        });

        document.querySelector('#botonIniciarMediciones').addEventListener('click', () => {
            // Cambiar el estado de mediciones a activado
            medicionesPausadas = false;

            // Cambiar el texto del botón a "Pausar Mediciones"
            document.querySelector('#botonPausarMediciones').textContent = 'Pausar Mediciones';

            // Iniciar el intervalo de medición
            intervaloMedicion = setInterval(realizarMedicion, 1000);
        });

        function actualizarEscalaAmperaje(amperaje) {
            // Asume que el valor máximo de amperaje es 1 A
            const valorMaxAmperaje = 1;

            // Calcula el porcentaje de amperaje en relación al valor máximo
            const porcentajeAmperaje = (amperaje / valorMaxAmperaje) * 100;

            // Actualiza el ancho de la barra de escala de amperaje
            document.querySelector('#escalaAmperaje').style.width = porcentajeAmperaje + '%';

            // Actualiza los valores mínimo y máximo de la escala de amperaje
            const minAmperaje = 0.1;
            const maxAmperaje = 1;
            const amperajeMedido = (porcentajeAmperaje / 100) * (maxAmperaje - minAmperaje) + minAmperaje;

            document.querySelector('#minAmperaje').textContent = minAmperaje + ' A';
            document.querySelector('#maxAmperaje').textContent = maxAmperaje + ' A';

            // Actualiza el texto del valor de amperaje medido
            document.querySelector('#amperiosValue').textContent = amperaje.toFixed(3) + ' A';
            document.querySelector('#kwValue').textContent = (amperaje * tensionVoltios / 1000).toFixed(3) + ' kW';
            document.querySelector('#kwhValue').textContent = (amperaje * tensionVoltios / 1000 * tiempoHoras).toFixed(3) + ' kWh';
        }
        function actualizarTabla() {
        // Obtener la fecha y hora actual
        const fechaHoraActual = new Date();
        const horaActual = fechaHoraActual.toLocaleTimeString();

        // Simular valores de medición aleatorios
        const amperiosMedicion = Math.random() * 0.9 + 0.1; // Entre 0.1 y 1.0 amperios
        const kWMedicion = Math.random() * 9 + 1; // Entre 1.0 y 10.0 kW

        // Actualizar la tabla con los valores de medición y la hora actual
        document.getElementById('fila1Hora').textContent = horaActual;
        document.getElementById('fila1Amperios').textContent = amperiosMedicion.toFixed(3);
        document.getElementById('fila1KW').textContent = kWMedicion.toFixed(3);
        }

    // Iniciar el bucle de actualización cada 5 segundos (5000 milisegundos)
    setInterval(actualizarTabla, 5000);


        

        
    </script>
    
    

    
    
    

</body>
</html>
