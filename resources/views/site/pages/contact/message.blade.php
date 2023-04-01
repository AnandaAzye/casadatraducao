
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <style type="text/css">
        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 300;
            font-display: swap;
            src: local('Montserrat Light'), local('Montserrat-Light'), url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_cJD7g0.woff) format('woff');
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v15/JTUSjIg1_i6t8kCHKm45xW0.woff) format('woff');
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            src: local('Montserrat Medium'), local('Montserrat-Medium'), url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_ZpC7g0.woff) format('woff');
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 600;
            font-display: swap;
            src: local('Montserrat SemiBold'), local('Montserrat-SemiBold'), url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_bZF7g0.woff) format('woff');
        }

        @font-face {
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://fonts.gstatic.com/s/montserrat/v15/JTURjIg1_i6t8kCHKm45_dJE7g0.woff) format('woff');
        }

        td,
        span,
        a,
        p,
        b {
            font-family: 'Montserrat', Verdana, Arial, sans-serif;
            color: #000000;
        }

        /* CLIENT-SPECIFIC STYLES */
        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        /* RESET STYLES */
        img {
            border: 0;
            outline: none;
            text-decoration: none;
        }

        table {
            border-collapse: collapse !important;
        }

        body {
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }

        /* iOS BLUE LINKS */
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        li {
            text-align: -webkit-match-parent;
            display: list-item;
        }
    </style>
    <!-- [if gte mso 9]>
  <style type="text/css">
   td, span, a, div, p, font { font-family: Calibri, Arial, sans-serif !important; }
   li {text-align:-webkit-match-parent; display:list-item;text-indent: -1em;}
  </style>
  <![endif]-->
</head>

<body style="margin:0; padding:0; background-color:#F2F2F2;">
    <center>
        <table bgcolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="600" border="0">
            <tbody>
                <tr>
                    <td height="30"></td>
                </tr>
                <tr>
                    <td width="800">
                        <table align="center" valign="center" width="500" border="0"
                            style="margin:0 auto; text-align: center;">
                            <tbody>
                                <tr>
                                    <td>
                                        <h1
                                            style="font-family: 'Montserrat', Verdana, Arial, sans-serif; font-style: normal;font-weight: 700; font-size: 25px; line-height: 35px; margin: 0; text-align: center;">
                                            Novo Contato!</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="10"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p
                                            style="font-family: 'Montserrat', Verdana, Arial, sans-serif; font-style: normal; font-weight: 500; font-size: 18px; line-height: 33px; margin: 0; text-align: center;">
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td height="20"></td>
                </tr>
                <tr>
                    <td align="center" height="5">
                        <table align="center" valign="center" height="5" width="60" border="0"
                            style="margin:0 auto;">
                            <tbody>
                                <tr>
                                    <td bgcolor="#00DBE6" height="5" width="60"
                                        style="background: #00DBE6; height: 5px; width: 60px; margin: 0 auto"></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td height="40"></td>
                </tr>
                <tr>
                    <td>
                        <table align="center" valign="center" width="500" border="0" style="margin:0 auto;">
                            <tbody>
                                <tr>
                                    <td>
                                        <h3
                                            style="font-family: 'Montserrat', Verdana, Arial, sans-serif; font-style: normal; font-weight: 500; font-size: 19px; line-height: 25px; margin: 0; text-align: left;">
                                        </h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td height="20">Houve um novo contato realizado pelo o site! Segue abaixo as informações:</td>
                                </tr>

                                <tr>
                                    <td height="20"><br>Nome: <b>{!! $data['nome'] !!}</b></td>
                                </tr>
                                <tr>
                                    <td height="20"> Email: <b>{!! $data['email'] !!}</b></td>
                                </tr>
                                <tr>
                                    <td height="20">Telefone: <b>{!! $data['telefone'] !!}</b></td>
                                </tr>
                                <tr>
                                    <td height="20">Mensagem: <b>{!! $data['mensagem'] !!}</b></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p
                                            style="font-family: 'Montserrat', Verdana, Arial, sans-serif; font-style: normal;font-weight: 400; font-size: 15px; line-height: 20px; margin: 0;">
                                            <br /><b>Casa da Tradução.</b></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td height="30"></td>
                </tr>
            </tbody>
        </table>
    </center>
</body>

</html>
