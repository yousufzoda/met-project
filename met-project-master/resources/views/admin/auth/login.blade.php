<!DOCTYPE html>
<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="author" content="Itcorp">
    <title>Хуш омадед ба МEТ</title>
    <link href="/libs/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        // Shared ID
        gtag('config', 'UA-118965717-3');
        // Bootstrap ID
        gtag('config', 'UA-118965717-5');
    </script>
</head>
<body class="app flex-row align-items-center">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-group">
                <div class="card text-white  py-5 d-md-down-none" style="width:44%; background-color:#07294d;">
                    <div class="card-body mt-2 text-center">
                        <img style="width: 19rem" src="/front/images/logo-2.svg" alt="">
                    </div>
                </div>
                <div class="card p-4">
                    <div class="card-body">

                        <form action="{{route('login')}}" method="post">
                            @csrf
                            <h1>Логин</h1>
                            <p class="text-muted">Ба акаунти худ ворид шавед</p>
                            @error('email')
                            <p class="text-danger m-0 mb-1 font-weight-bold"> Парол ё логин нодуруст ворид шудааст </p>
                            @enderror
                            <div class="input-group mb-3
                                 @error('email') border border-danger @enderror
                                ">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="icon-user"></i>
                                </span>
                                </div>
                                <input value="{{old('email')}}" class="form-control " type="text" name="email" placeholder="E-mail">
                            </div>
                            <div class="input-group mb-4
                                 @error('email') border border-danger @enderror
                                ">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="icon-lock"></i>
                                </span>
                                </div>
                                <input  class="form-control" type="password" name="password" placeholder="Парол">
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <button class="btn btn-primary px-4" type="submit">Логин</button>
                                </div>
                                <div class="col-8 text-right">
                                    <button class="btn btn-link px-0" type="button">Рамзро фаромуш кардед?</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
