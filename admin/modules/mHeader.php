<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div>
        <div id="header">
            <h2>XƯỞNG MỘC DÂN ĐÀM</h2>
            <div id="topmenu">
                <?php
                $current = "";
                if (isset($_GET['key'])) {
                    switch ($_GET['key']) {
                        case "hsx":
                        case "hsxThem":
                        case "hsxSua":
                            $current = "hsx";
                            break;
                        case "sp":
                        case "psThem":
                        case "spSua":
                            $current = "sp";
                            break;
                        case "lsp":
                        case "lspThem":
                        case "lspSua":
                            $current = "lsp";
                            break;
                        case "user":
                        case "userThem":
                        case "userSua":
                            $current = "user";
                            break;
                        case "donhang":
                        case "donhangThem":
                        case "donhangSua":
                            $current = "donHang";
                            break;
                    }
                }
                ?>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a <?php if ($current == "") echo 'class="current"'; ?> class="navbar-brand" href="index.php">TRANG CHỦ</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a <?php if ($current == "hsx") echo 'class="current"'; ?> class="nav-link" href="index.php?key=hsx">HÃNG SẢN XUẤT</a>
                                </li>
                                <li class="nav-item">
                                    <a <?php if ($current == "lsp") echo 'class="current"'; ?> class="nav-link" href="index.php?key=lsp">LOẠI SẢN PHẨM</a>
                                </li>
                                <li class="nav-item">
                                    <a <?php if ($current == "sp") echo 'class="current"'; ?> class="nav-link" href="index.php?key=sp">SẢN PHẨM</a>
                                </li>
                                <li class="nav-item">
                                    <a <?php if ($current == "user") echo 'class="current"'; ?> class="nav-link" href="index.php?key=user">USERS</a>
                                </li>
                                <li class="nav-item">
                                    <a <?php if ($current == "donHang") echo 'class="current"'; ?> class="nav-link" href="index.php?key=donhang">Quản lý đơn hàng</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
        </div>

    </div>
</body>

</html>