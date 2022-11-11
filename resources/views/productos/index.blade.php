@extends('prueba')

@section('content')

    <div class="flex flex-row my-6">

        <div class="basis-7/12 ">
            <img src="{{URL::asset('img/suave.png')}}" class=" float-right" alt="Flowbite Logo">
        </div>

        <div class="basis-5/12 px-2">

            <br>
            <p class="text-xl font-semibold">Tarjetas de visita tacto suave</p>
            <br>

            <form action="#" method="post">
                @csrf

                <select name="" id="tamano" class="w-[400px] border border-slate-200 rounded-lg h-11 px-2" oninput="calcularprecio()">
                    <option selected>Tamaño</option>
                    <option class="" value="1">Standar (85 x 55 mm) una cara</option>
                    <option class="" value="2">Cuadrada (65 X 65 mm) una cara</option>
                    <option class="" value="3">Standar (85 x 55 mm) dos caras</option>
                    <option class="" value="4">Cuadrada (65 X 65 mm) dos caras</option>
                </select>

                <br><br>

                <select name="" id="tamano" class="w-[400px] border border-slate-200 rounded-lg h-11 px-2" oninput="calcularprecio()">
                    <option selected>Acabado</option>
                    <option class="" value="1">Mate</option>
                    <option class="" value="2">Brillante</option>
                    <option class="" value="3">Barniz UV</option>
                    <option class="" value="4">Efecto metalico</option>
                    <option class="" value="5">Extra grueso</option>
                    <option value="6">Estampado dorado</option>
                    <option value="7">Estampado plateado</option>
                </select>

                <br><br>

                <select name="" id="cantidad" class="w-[400px] border border-slate-200 rounded-lg h-11 px-2" oninput="calcularprecio()">
                    <option selected>Cantidad</option>
                    <option class="" value="100">100</option>
                    <option class="" value="250">250</option>
                    <option class="" value="500">500</option>
                    <option class="" value="1000">1000</option>
                    <option class="" value="2000">2000</option>
                    <option class="" value="5000">5000</option>
                    <option class="" value="10000">10000</option>
                </select>

                <br><br>

                <button class="bg-gray-800 text-slate-100 w-[400px] border border-slate-200 rounded-lg h-12">
                    Ver diseños
                    <br>
                    Elige una de nuestras plantillas
                </button>

                <br><br>

                <div class="w-[400px] border border-slate-200 rounded-lg text-center">
                    ¿Ya tienes un diseño? Súbelo
                    <input type="file" name="archivo" id="archivo" accept=".pdf" class="rounded-lg w-full">
                </div>

                <br>

                <div class="w-[400px] border border-slate-200 rounded-lg text-center">
                    <a href="https://www.canva.com/search/templates?q=tarjetas%20de%20presentación" target="_blank">
                        Haz tú diseño con la ayuda de Canva
                        <br>
                        Recuerda elegir un diseño con el tamaño que necesitas
                    </a>
                </div>

                <br>

                <p id="precio" class="w-[400px] border border-slate-200 rounded-lg h-11 px-2" > </p>

            </form>

            <script src="{{asset('js/test.js')}}" type="text/javascript"></script>
        </div>
    </div>



@endsection
