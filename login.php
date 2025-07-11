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
                <div class="field input">
                    <label for="">Email</label>
                    <input type="text" name="email" placeholder="Nhập email" required>
                </div>
                <div class="field input">
                    <label for="">Mật khẩu</label>
                    <input type="text" name="password" placeholder="Nhập mật khẩu" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Bắt đầu">
                </div>
            </form>
            <div class="link">Chưa có tài khoản <a href="index.php">Đăng ký ngay</a></div>
        </section>
    </div>

</body>
</html>