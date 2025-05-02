<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Import font Poppins -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        body {
            min-height: 100vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(180deg, #323B60 0%, #000000 100%);
            font-family: 'Poppins', Arial, Helvetica, sans-serif;
            box-sizing: border-box;
            overflow: hidden;
        }
        #login-wrapper {
            background: #fff;
            padding: 38px 32px 32px 32px;
            border-radius: 22px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.13);
            width: 100%;
            max-width: 380px;
            text-align: center;
        }
        #login-wrapper h2 {
            margin-bottom: 28px;
            font-size: 2.1rem;
            font-weight: 700;
            color: #111;
            letter-spacing: 0.5px;
        }
        .alert {
            color: #d8000c;
            background: #ffe6e6;
            padding: 11px;
            border-radius: 7px;
            text-align: center;
            margin-bottom: 18px;
            font-size: 1em;
        }
        .mb-3 {
            margin-bottom: 20px;
            text-align: left;
        }
        label {
            display: block;
            font-weight: 600;
            margin-bottom: 7px;
            color: #222;
            font-size: 1em;
        }
        .form-control {
            width: 100%;
            padding: 11px 13px;
            border: 2px solid #ececec;
            border-radius: 9px;
            font-size: 1em;
            margin-top: 2px;
            background: #fafbfc;
            transition: border-color 0.2s;
        }
        .form-control:focus {
            border-color: #323B60;
            outline: none;
        }
        .btn {
            width: 100%;
            padding: 13px 0;
            background: linear-gradient(90deg, #5b6ee1 0%, #323B60 100%);
            color: #fff;
            border: none;
            border-radius: 9px;
            font-size: 1.08em;
            font-weight: 600;
            margin-top: 15px;
            cursor: pointer;
            transition: background 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 10px rgba(50,59,96,0.08);
        }
        .btn:hover {
            background: linear-gradient(90deg, #323B60 0%, #5b6ee1 100%);
            box-shadow: 0 4px 18px rgba(50,59,96,0.12);
        }
        @media (max-width: 480px) {
            #login-wrapper {
                padding: 24px 8px 22px 8px;
                max-width: 98vw;
            }
        }
    </style>
</head>
<body>
    <div id="login-wrapper">
        <h2>Login</h2>
        <?php if (session()->getFlashdata('flash_msg')) : ?>
            <div class="alert">
                <?= session()->getFlashdata('flash_msg'); ?>
            </div>
        <?php endif; ?>
        <form action="<?= base_url('/user/login'); ?>" method="post">
            <?= csrf_field(); ?>
            <div class="mb-3">
                <label for="InputForEmail">Email</label>
                <input type="email" name="email" class="form-control" id="InputForEmail" placeholder="Masukkan email..." value="<?= set_value('email'); ?>" required autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="InputForPassword">Password</label>
                <input type="password" name="password" class="form-control" id="InputForPassword" placeholder="Masukkan password..." required autocomplete="off">
            </div>
            <button type="submit" class="btn">Masuk</button>
        </form>
    </div>
</body>
</html>
