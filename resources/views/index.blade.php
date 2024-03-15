<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">

    <!-- Styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Inter', sans-serif;
        }
        .formbold-mb-3 {
            margin-bottom: 15px;
        }
        .formbold-relative {
            position: relative;
        }
        .formbold-opacity-0 {
            opacity: 0;
        }
        .formbold-stroke-current {
            stroke: currentColor;
        }
        #supportCheckbox:checked ~ div span {
            opacity: 1;
        }

        .formbold-main-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 48px;
        }

        .formbold-form-wrapper {
            margin: 0 auto;
            max-width: 570px;
            width: 100%;
            background: white;
            padding: 40px;
        }

        .formbold-img {
            margin-bottom: 45px;
        }

        .formbold-form-title {
            margin-bottom: 30px;
        }
        .formbold-form-title h2 {
            font-weight: 600;
            font-size: 28px;
            line-height: 34px;
            color: #07074d;
        }
        .formbold-form-title p {
            font-size: 16px;
            line-height: 24px;
            color: #536387;
            margin-top: 12px;
        }

        .formbold-input-flex {
            display: flex;
            gap: 20px;
            margin-bottom: 15px;
        }
        .formbold-input-flex > div {
            width: 50%;
        }
        .formbold-form-input {
            text-align: center;
            width: 100%;
            padding: 13px 22px;
            border-radius: 5px;
            border: 1px solid #dde3ec;
            background: #ffffff;
            font-weight: 500;
            font-size: 16px;
            color: #536387;
            outline: none;
            resize: none;
        }
        .formbold-form-input:focus {
            border-color: #6a64f1;
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }
        .formbold-form-label {
            color: #536387;
            font-size: 14px;
            line-height: 24px;
            display: block;
            margin-bottom: 10px;
        }

        .formbold-checkbox-label {
            display: flex;
            cursor: pointer;
            user-select: none;
            font-size: 16px;
            line-height: 24px;
            color: #536387;
        }
        .formbold-checkbox-label a {
            margin-left: 5px;
            color: #6a64f1;
        }
        .formbold-input-checkbox {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border-width: 0;
        }
        .formbold-checkbox-inner {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 20px;
            height: 20px;
            margin-right: 16px;
            margin-top: 2px;
            border: 0.7px solid #dde3ec;
            border-radius: 3px;
        }

        .formbold-btn {
            font-size: 16px;
            border-radius: 5px;
            padding: 14px 25px;
            border: none;
            font-weight: 500;
            background-color: #6a64f1;
            color: white;
            cursor: pointer;
            margin-top: 25px;
        }
        .formbold-btn:hover {
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }

    </style>
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
<div class="formbold-main-wrapper">
    <div class="formbold-form-wrapper">

        <h3 style="color:green">{{ $message ?? null }}</h3>
        <h3 style="color:red">{{ $error ?? null }}</h3>

        <form action="{{ route('contact.store') }}" method="POST">
            @csrf
            <div class="formbold-form-title">
                <h2 class="">Contact Info Form</h2>
            </div>

            <div class="formbold-input-flex">
                <div>
                    <label for="firstname" class="formbold-form-label">
                        First name
                    </label>
                    <input
                        type="text"
                        name="firstname"
                        id="firstname"
                        class="formbold-form-input"
                    />
                </div>
                <div>
                    <label for="lastname" class="formbold-form-label"> Last name </label>
                    <input
                        type="text"
                        name="lastname"
                        id="lastname"
                        class="formbold-form-input"
                    />
                </div>
            </div>

            <div class="formbold-input-flex">
                <div>
                    <label for="email" class="formbold-form-label"> Email </label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        class="formbold-form-input"
                    />
                </div>
                <div>
                    <label for="phone" class="formbold-form-label"> Phone number </label>
                    <input
                        type="text"
                        name="phone"
                        id="phone"
                        class="formbold-form-input"
                    />
                </div>
            </div>

            <div class="formbold-mb-3">
                <label for="address" class="formbold-form-label">
                    Address
                </label>
                <input
                    type="text"
                    name="address"
                    id="address"
                    class="formbold-form-input"
                />
            </div>

            <button class="formbold-btn">Register Now</button>
        </form>
    </div>
</div>
</body>
</html>
