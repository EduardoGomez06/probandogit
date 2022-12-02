<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Form-v8 by Colorlib</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="css/sourcesanspro-font.css">

    <link rel="stylesheet" href="css/style1.css" />
    <meta name="robots" content="noindex, follow">
    <script
        nonce="e6d01d9f-2a2b-4a3b-881f-85f1838c29d9">(function (w, d) { !function (cM, cN, cO, cP) { cM.zarazData = cM.zarazData || {}; cM.zarazData.executed = []; cM.zaraz = { deferred: [], listeners: [] }; cM.zaraz.q = []; cM.zaraz._f = function (cQ) { return function () { var cR = Array.prototype.slice.call(arguments); cM.zaraz.q.push({ m: cQ, a: cR }) } }; for (const cS of ["track", "set", "debug"]) cM.zaraz[cS] = cM.zaraz._f(cS); cM.zaraz.init = () => { var cT = cN.getElementsByTagName(cP)[0], cU = cN.createElement(cP), cV = cN.getElementsByTagName("title")[0]; cV && (cM.zarazData.t = cN.getElementsByTagName("title")[0].text); cM.zarazData.x = Math.random(); cM.zarazData.w = cM.screen.width; cM.zarazData.h = cM.screen.height; cM.zarazData.j = cM.innerHeight; cM.zarazData.e = cM.innerWidth; cM.zarazData.l = cM.location.href; cM.zarazData.r = cN.referrer; cM.zarazData.k = cM.screen.colorDepth; cM.zarazData.n = cN.characterSet; cM.zarazData.o = (new Date).getTimezoneOffset(); if (cM.dataLayer) for (const cZ of Object.entries(Object.entries(dataLayer).reduce(((c_, da) => ({ ...c_[1], ...da[1] }))))) zaraz.set(cZ[0], cZ[1], { scope: "page" }); cM.zarazData.q = []; for (; cM.zaraz.q.length;) { const db = cM.zaraz.q.shift(); cM.zarazData.q.push(db) } cU.defer = !0; for (const dc of [localStorage, sessionStorage]) Object.keys(dc || {}).filter((de => de.startsWith("_zaraz_"))).forEach((dd => { try { cM.zarazData["z_" + dd.slice(7)] = JSON.parse(dc.getItem(dd)) } catch { cM.zarazData["z_" + dd.slice(7)] = dc.getItem(dd) } })); cU.referrerPolicy = "origin"; cU.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(cM.zarazData))); cT.parentNode.insertBefore(cU, cT) };["complete", "interactive"].includes(cN.readyState) ? zaraz.init() : cM.addEventListener("DOMContentLoaded", zaraz.init) }(w, d, 0, "script"); })(window, document);</script>
</head>

<body class="form-v8">
    <div class="page-content">
        <div class="form-v8-content">
            <div class="form-left">
                <img src="https://w0.peakpx.com/wallpaper/975/740/HD-wallpaper-colorful-pallets-colorful-pallets-design-background.jpg" height="560px" width="480"
                    alt="form">
            </div>
            <div class="form-right">
                <div class="tab">
                    <div class="tab-inner">
                        <button class="tablinks" onclick="openCity(event, 'sign-up')" id="defaultOpen">Sign Up</button>
                    </div>
                    <div class="tab-inner">
                        <button class="tablinks" onclick="openCity(event, 'sign-in')">Sign In</button>
                    </div>
                </div>
                <form class="form-detail" action="#" method="post">
                    <div class="tabcontent" id="sign-up">
                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="text" name="full_name" id="full_name" class="input-text" required>
                                <span class="label">Username</span>
                                <span class="border"></span>
                            </label>
                        </div>
                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="text" name="your_email" id="your_email" class="input-text" required>
                                <span class="label">E-Mail</span>
                                <span class="border"></span>
                            </label>
                        </div>
                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="password" name="password" id="password" class="input-text" required>
                                <span class="label">Password</span>
                                <span class="border"></span>
                            </label>
                        </div>
                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="password" name="comfirm_password" id="comfirm_password" class="input-text"
                                    required>
                                <span class="label">Comfirm Password</span>
                                <span class="border"></span>
                            </label>
                        </div>
                        <div class="form-row-last">
                            <input type="submit" name="register" class="register" value="Register">
                        </div>
                    </div>
                </form>
                <form class="form-detail" action="#" method="post">
                    <div class="tabcontent" id="sign-in">
                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="text" name="full_name_1" id="full_name_1" class="input-text" required>
                                <span class="label">Username</span>
                                <span class="border"></span>
                            </label>
                        </div>
                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="text" name="your_email_1" id="your_email_1" class="input-text" required>
                                <span class="label">E-Mail</span>
                                <span class="border"></span>
                            </label>
                        </div>
                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="password" name="password_1" id="password_1" class="input-text" required>
                                <span class="label">Password</span>
                                <span class="border"></span>
                            </label>
                        </div>
                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="password" name="comfirm_password_1" id="comfirm_password_1"
                                    class="input-text" required>
                                <span class="label">Comfirm Password</span>
                                <span class="border"></span>
                            </label>
                        </div>
                        <div class="form-row-last">
                            <input type="submit" name="register" class="register" value="Sign In">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
        integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
        data-cf-beacon='{"rayId":"7732c5a3db49100e","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}'
        crossorigin="anonymous"></script>

    <style>
        body {
            margin: 0
        }

        .page-content {
            width: 100%;
            margin: 0 auto;
            background-image: -moz-linear-gradient(136deg, rgb(0, 158, 253) 0%, rgb(42, 245, 152) 100%);
            background-image: -webkit-linear-gradient(136deg, rgb(0, 158, 253) 0%, rgb(42, 245, 152) 100%);
            background-image: -ms-linear-gradient(136deg, rgb(0, 158, 253) 0%, rgb(42, 245, 152) 100%);
            display: flex;
            display: -webkit-flex;
            justify-content: center;
            -o-justify-content: center;
            -ms-justify-content: center;
            -moz-justify-content: center;
            -webkit-justify-content: center;
            align-items: center;
            -o-align-items: center;
            -ms-align-items: center;
            -moz-align-items: center;
            -webkit-align-items: center
        }

        .form-v8-content {
            background: #fff;
            width: 937px;
            border-radius: 8px;
            -o-border-radius: 8px;
            -ms-border-radius: 8px;
            -moz-border-radius: 8px;
            -webkit-border-radius: 8px;
            box-shadow: 0 8px 20px 0 rgba(0, 0, 0, .15);
            -o-box-shadow: 0 8px 20px 0 rgba(0, 0, 0, .15);
            -ms-box-shadow: 0 8px 20px 0 rgba(0, 0, 0, .15);
            -moz-box-shadow: 0 8px 20px 0 rgba(0, 0, 0, .15);
            -webkit-box-shadow: 0 8px 20px 0 rgba(0, 0, 0, .15);
            margin: 177px 0;
            font-family: source sans pro, sans-serif;
            color: #fff;
            position: relative;
            display: flex;
            display: -webkit-flex
        }

        .form-v8-content .form-left {
            margin-bottom: -4px
        }

        .form-v8-content .form-left img {
            border-top-left-radius: 8px;
            border-bottom-left-radius: 8px
        }

        .form-v8-content .form-right {
            padding: 30px 0;
            position: relative;
            width: 100%;
            background: #3d5983;
            border-top-right-radius: 8px;
            border-bottom-right-radius: 8px
        }

        .form-v8-content .tab {
            margin: 5px 0 48px;
            width: 100%;
            display: flex;
            display: -webkit-flex;
            justify-content: space-between;
            -o-justify-content: space-between;
            -ms-justify-content: space-between;
            -moz-justify-content: space-between;
            -webkit-justify-content: space-between
        }

        .form-v8-content .tab .tab-inner {
            width: 100%
        }

        .form-v8-content .tab .tablinks {
            background: 0 0;
            border: none;
            outline: none;
            -o-outline: none;
            -ms-outline: none;
            -moz-outline: none;
            -webkit-outline: none;
            font-family: source sans pro, sans-serif;
            font-size: 28px;
            font-weight: 400;
            color: #ccc;
            padding-bottom: 22px;
            border-bottom: 3px solid;
            border-bottom-color: rgba(255, 255, 255, .2);
            width: 100%
        }

        .form-v8-content .tab .tablinks.active {
            font-weight: 700;
            color: #fff;
            border-bottom-color: #30e1df
        }

        .form-v8-content .form-detail {
            padding: 0 40px
        }

        .form-v8-content .form-row {
            width: 100%;
            position: relative
        }

        .form-v8-content .form-row .form-row-inner {
            position: relative;
            width: 100%
        }

        .form-v8-content .form-row .form-row-inner .label {
            position: absolute;
            top: -2px;
            left: 10px;
            font-size: 18px;
            color: #f2f2f2;
            font-weight: 400;
            transform-origin: 0 0;
            transition: all .2s ease;
            -moz-transition: all .2s ease;
            -webkit-transition: all .2s ease;
            -o-transition: all .2s ease;
            -ms-transition: all .2s ease
        }

        .form-v8-content .form-row .form-row-inner .border {
            position: absolute;
            bottom: 31px;
            left: 0;
            height: 1px;
            width: 100%;
            background: #53c83c;
            transform: scaleX(0);
            -moz-transform: scaleX(0);
            -webkit-transform: scaleX(0);
            -o-transform: scaleX(0);
            -ms-transform: scaleX(0);
            transform-origin: 0 0;
            transition: all .15s ease;
            -moz-transition: all .15s ease;
            -webkit-transition: all .15s ease;
            -o-transition: all .15s ease;
            -ms-transition: all .15s ease
        }

        .form-v8-content .form-detail .input-text {
            margin-bottom: 31px
        }

        .form-v8-content .form-detail input {
            width: 100%;
            padding: 0 10px 15px;
            border: 1px solid transparent;
            border-bottom: 1px solid;
            border-bottom-color: rgba(255, 255, 255, .2);
            background: 0 0;
            appearance: unset;
            -moz-appearance: unset;
            -webkit-appearance: unset;
            -o-appearance: unset;
            -ms-appearance: unset;
            outline: none;
            -moz-outline: none;
            -webkit-outline: none;
            -o-outline: none;
            -ms-outline: none;
            font-size: 18px;
            color: #fff;
            font-weight: 300;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -o-box-sizing: border-box;
            -ms-box-sizing: border-box
        }

        .form-v8-content .form-detail .form-row .input-text:focus {
            border-bottom: 1px solid #53c83c;
            background: 0 0
        }

        .form-v8-content .form-detail .form-row .input-text:focus+.label,
        .form-v8-content .form-detail .form-row .input-text:valid+.label {
            transform: translateY(-26px) scale(1);
            -moz-transform: translateY(-26px) scale(1);
            -webkit-transform: translateY(-26px) scale(1);
            -o-transform: translateY(-26px) scale(1);
            -ms-transform: translateY(-26px) scale(1)
        }

        .form-v8-content .form-detail .form-row .input-text:focus+.border,
        .form-v8-content .form-detail .form-row .input-text:valid+.border {
            transform: scaleX(1);
            -moz-transform: scaleX(1);
            -webkit-transform: scaleX(1);
            -o-transform: scaleX(1);
            -ms-transform: scaleX(1)
        }

        .form-v8-content .form-detail .register {
            background: #fff;
            border-radius: 5px;
            -o-border-radius: 5px;
            -ms-border-radius: 5px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            width: 160px;
            border: none;
            margin: 5px 0 50px 0;
            cursor: pointer;
            font-family: source sans pro, sans-serif;
            color: #333;
            font-weight: 700;
            font-size: 18px
        }

        .form-v8-content .form-detail .register:hover {
            background: #ccc
        }

        .form-v8-content .form-detail .form-row-last input {
            padding: 11px
        }

        @media screen and (max-width:991px) {
            .form-v8-content {
                margin: 180px 20px;
                flex-direction: column;
                -o-flex-direction: column;
                -ms-flex-direction: column;
                -moz-flex-direction: column;
                -webkit-flex-direction: column
            }

            .form-v8-content .form-left {
                width: 100%
            }

            .form-v8-content .form-left img {
                width: 100%;
                border-bottom-left-radius: 0;
                border-top-right-radius: 8px
            }

            .form-v8-content .form-right {
                width: auto;
                border-top-right-radius: 0;
                border-bottom-left-radius: 8px
            }

            .form-v8-content .tab {
                margin-top: 45px
            }

            .form-v8-content .form-detail .register {
                margin-bottom: 80px
            }
        }

        @media screen and (max-width:325px) {
            .form-v8-content .tab {
                flex-direction: column;
                -o-flex-direction: column;
                -ms-flex-direction: column;
                -moz-flex-direction: column;
                -webkit-flex-direction: column
            }
        }

        <style></body></html>