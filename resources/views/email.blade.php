<!DOCTYPE HTML>
<html>

<head>
    <title>Thanks!</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Varela+Round&display=swap');

        html {
            display: flex;
            flex-direction: column;
            font-family: 'Poppins', sans-serif;
            font-family: 'Varela Round', sans-serif;
            justify-content: center;
            align-items: center
        }

        .container {
            width: 80vw;
            height: 70%;
            background-color: aliceblue;
            box-shadow: 1px 1px 1px 1px paleturquoise;
            border-radius: 10px;
            padding: 0.7em;
            flex-wrap: wrap;
        }

        .title {
            display: flex;
            text-align: center;
            flex-direction: row;
            align-items: center;
            width: 100%;
            flex-wrap: wrap;
            justify-content: center;
        }
        .title h3 {
            letter-spacing: 1px
        }

        img {
            width: 150px;
            height: 44px;
        }

        .info {
            width: 90%;
        }

        .info-col{
            word-wrap: break-word;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-inline: 5px;
        }
        .info-col p:nth-child(2){
            width: 10%;
        }
        .info-title{
            width: 35%;
        }
        .info-content{
            width: 55%;
        }
        .message {
            display: flex;
            align-items: center;
            text-align: left;
            background-color: antiquewhite;
            border-radius: 10px;
            padding-inline: 1em;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="{{ asset('/images/icons/logo.png') }}" alt="">
        <div class="title">
            <h3>NEW CONTACT</h3>
        </div>
        <hr>
        <div class="info">
            <div class="info-col">
                <p class="info-title">Name</p>
                <p>:</p>
                <p class="info-content">{{ $name }}</p>
            </div>
            <div class="info-col">
                <p class="info-title">Phone Number</p>
                <p>:</p>
                <p class="info-content">{{ $phone }}</p>
            </div>
            <div class="info-col">
                <p class="info-title">Email</p>
                <p>:</p>
                <p class="info-content">{{ $email }}</p>
            </div>
        </div>
        <p>Message :</p>
        <div class="message">
            <p>{{ $pesan }}</p>
        </div>
    </div>
</body>

</html>
