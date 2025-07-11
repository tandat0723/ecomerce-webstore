<?php
include_once "part/header.php"
?>

<body>
    <div class="wrapper">
        <section class="form sigup">
            <header>Chat App</header>
            <form action="#">
                <div class="error-text"></div>

                <!-- row -->
                <div class="name-details">
                    <div class="field input">
                        <label for="">Tên</label>
                        <input type="text" name="fname" placeholder="Nhập tên" required>
                    </div>
                    <div class="field input">
                        <label for="">Họ</label>
                        <input type="text" name="fname" placeholder="Nhập họ" required>
                    </div>
                </div>
                <div class="field input">
                    <label for="">Email</label>
                    <input type="text" name="email" placeholder="Nhập email" required>
                </div>
                <div class="field input">
                    <label for="">Mật khẩu</label>
                    <input type="text" name="password" placeholder="Nhập mật khẩu" required>
                </div>
                <div class="field image">
                    <label for="">Avatar</label>
                    <input type="file" name="image" accept="image/x-png, image/jpeg, image/jpg" placeholder="Email" required>
                </div>
                <div class="field button">
                    <input type="button" value="Bắt đầu">
                </div>
            </form>
            <div class="link">Đã có tài khoản <a href="login.php">Đăng nhập ngay</a></div>
        </section>
    </div>

</body>
</html>