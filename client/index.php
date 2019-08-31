<?php 
	$SOCKET_SERVER = "http://localhost:3000";
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="author" content="Wayou">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MYCAHT</title>
        <link rel="stylesheet" href="styles/main.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="wrapper">
            <div class="banner">
                <span id="status"></span>
            </div>
            <div id="historyMsg">
            </div>
            <div class="controls" >
                <div id = "chat-input-box">
                    <textarea id="messageInput" placeHolder="enter to send"></textarea>
                </div>
                <input id="sendBtn" type="button" value="SEND" class="btn">
                </div>
            </div>
        </div>
        <div id="loginWrapper">
            <p id="info">connecting to server...</p>
            <div id="nickWrapper">
                <input type="text" class="form-control" placeHolder="nickname" id="nicknameInput" />
                <input type="button" value="OK" id="loginBtn" class="btn"/>
            </div>
        </div>
        <script src="<?php echo $SOCKET_SERVER ?>/socket.io/socket.io.js"></script>
        <script src="scripts/hichat.js"></script>
        <script src="scripts/inputEmoji.js"></script>
        <script>
            $(function () {
                $('#messageInput').emoji({place: 'after'});
            })
        </script>
    </body>
</html>
