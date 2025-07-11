<?php
include_once "part/header.php"
?>

<body>
    <div class="wrapper">
        <section class="chat-area">
            <header>
                <a href="" class="back-icon">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <img src="https://i.pinimg.com/736x/ae/8d/4c/ae8d4cdb5926e9dff8f94ba4dccc9c4e.jpg" >
                <div class="details">
                    <span>Gái xinh</span>
                    <div>Đang hoạt động</div>
                </div>
            </header>
            <div class="chat-box">
            <div class="chat outgoing">
                <div class="details">
                    <p>hi</p>
                </div>
            </div>
            <div class="chat outgoing">
                <div class="details">
                    <p>Hello</p>
                </div>
            </div>
            <div class="chat outgoing">
                <div class="details">
                    <p>how are you?</p>
                </div>
            </div>
        </div>
        <form action="#" class="typing-area">
            <input type="text" name="incoming_id" class="incoming_id" id="" hidden>
            <input type="text" name="message" class="input-field" placeholder="Nhập nội dung">
            <button class="active">
                <i class="fab fa-telegram-plane"></i>
            </button>
        </form>
        </section>
    </div>
</body>
</html>