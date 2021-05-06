<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>建築会社A</title>
</head>
<body>
    <!-- ヘッダー -->
    <header>
        <nav>
            <div class="row">
                <!-- ロゴ -->
                <div class="nav__logo col-3">
                    <div class="row nav__logo-area">
                        <div class="nav__logo-item col-4"><img src="./images/logo.webp" alt="ロゴ"></div>
                        <div class="nav__logo-name col-8"><span class="nav__logo-name_bold">もくらん建設</span><br><span class="nav__logo-name_nomal">株式会社</span></div>
                    </div>
                </div>
                <!-- メニュー -->
                <div class="nav__menu col-9">
                    <div class="row nav__menu-area">
                        <div class="dummy col-2"></div>
                        <a class="nav__menu-item nav__menu-item1 col-2" href="#">ホーム</a>
                        <a class="nav__menu-item nav__menu-item2 col-2" href="#">サービス</a>
                        <a class="nav__menu-item nav__menu-item3 col-2" href="#">会社情報</a>
                        <a class="nav__menu-item nav__menu-item4 col-2" href="#">実績紹介</a>
                        <a class="nav__menu-item nav__menu-item5 col-2" href="#">お問い合わせ</a>
                    </div>
                    <!-- コメント -->
                        <!-- リストよりdivよりaタグで表示したほうがいいかも -->
                        <!-- <div class="row nav__menu-area">
                            <div class="dummy col-2"></div>
                            <div class="nav__menu-item nav__menu-item1 col-2 float-right"><a href="#">ホーム</a></div>
                            <div class="nav__menu-item nav__menu-item2 col-2 float-right"><a href="#">サービス</a></div>
                            <div class="nav__menu-item nav__menu-item3 col-2 float-right"><a href="#">会社情報</a></div>
                            <div class="nav__menu-item nav__menu-item4 col-2 float-right"><a href="#">実績紹介</a></div>
                            <div class="nav__menu-item nav__menu-item5 col-2 float-right"><a href="#">お問い合わせ</a></div>
                        </div> -->
                        <!-- 右に寄ったけど順番が逆になる -->
                        <!-- <div class="nav__menu-items col-12 clearfix">
                                <div class="nav__menu-item nav__menu-item1 col-2 float-right"><a href="#">ホーム</a></div>
                                <div class="nav__menu-item nav__menu-item1 col-2 float-right"><a href="#">サービス</a></div>
                                <div class="nav__menu-item nav__menu-item1 col-2 float-right"><a href="#">会社情報</a></div>
                                <div class="nav__menu-item nav__menu-item1 col-2 float-right"><a href="#">実績紹介</a></div>
                                <div class="nav__menu-item nav__menu-item1 col-2 float-right"><a href="#">お問い合わせ</a></div>
                            </div>
                        </div> -->
                        <!-- リストよりdivで指定したほうがいいかも -->
                        <!-- <ul class="nav__menu-list">
                            <li class="nav__menu-item nav__menu-item-1"><a href="#">ホーム</a></li>
                            <li class="nav__menu-item nav__menu-item-2"><a href="#">サービス</a></li>
                            <li class="nav__menu-item nav__menu-item-3"><a href="#">会社情報</a></li>
                            <li class="nav__menu-item nav__menu-item-4"><a href="#">実績紹介</a></li>
                            <li class="nav__menu-item nav__menu-item-5"><a href="#">お問い合わせ</a></li>
                        </ul> -->
                    <!-- /コメント -->
                </div>
            </div>
        </nav>
    </header>
    <!-- /ヘッダー -->

    <!-- メイン -->
    <main>
        <!-- wrapper-1 -->
        <div class="wrapper wrapper-1">
            <video class="wrapper__video" src="./videos/file.mp4" autoplay loop muted></video>
            <div class="wrapper__catchcopy">
                <h1 class="wrapper__catchcopy-text">住みやすい未来を創る、<br>これからの都市設計。</h1>
                <img class="wrapper__catchcopy-img" src="./images/scroll.webp" alt="scroll">
            </div>
        </div>
        <!-- /wrapper-1 -->
        
        <!-- wrapper-2 -->
        <div class="wrapper wrapper-2 wrapper-grid3">
            <!-- <div class="aaa"> -->
                <h2 class="wrapper-2__h2">サービス</h2>
                <div class="row">
                    <div class="wrapper-2__section wrapper-2__section-1 col-4">
                        <div class="wrapper-2__section-inner">
                            <img class="wrapper-2__img" src="./images/wrapper-2__section-1.webp" alt="設計・製図建設プランニング画像">
                            <div class="wrapper-2__section-textbox">
                                <div class="wrapper-2__section-header">
                                    <h3 class="wrapper-2__h3">設計・製図<br>建設プランニング</h3>
                                </div>
                                <div class="wrapper-2__section-text">
                                    テキストの例です。テキストの例です。テキストの例です。テキストの例です。テキストの例です。テキストの例です。テキストの例です。テキストの例です。テキストの例です。
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-2__section wrapper-2__section-2 col-4">
                        <div class="wrapper-2__section-inner">
                            <img class="wrapper-2__img" src="./images/wrapper-2__section-2.webp" alt="建設模型3Dモデル製作">
                            <div class="wrapper-2__section-textbox">
                                <div class="wrapper-2__section-header">
                                    <h3 class="wrapper-2__h3">建設模型<br>3Dモデル製作</h3>
                                </div>
                                <div class="wrapper-2__section-text">
                                    テキストの例です。テキストの例です。テキストの例です。テキストの例です。テキストの例です。テキストの例です。テキストの例です。テキストの例です。テキストの例です。
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-2__section wrapper-2__section-3 col-4">
                        <div class="wrapper-2__section-inner">
                            <img class="wrapper-2__img" src="./images/wrapper-2__section-3.webp" alt="施工管理">
                            <div class="wrapper-2__section-textbox">
                                <div class="wrapper-2__section-header">
                                    <h3 class="wrapper-2__h3">施工管理</h3>
                                </div>
                                <div class="wrapper-2__section-text">
                                    テキストの例です。テキストの例です。テキストの例です。テキストの例です。テキストの例です。テキストの例です。テキストの例です。テキストの例です。テキストの例です。
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- </div> -->
        </div>
        <!-- /wrapper-2 -->
        
        <!-- wrapper-3 -->
        <div class="wrapper wrapper-3 wrapper-grid2">
            <div class="row">
                <div class="wrapper-3__section wrapper-3__section-1 col-6">
                    <div class="wrapper-3__section-inner">
                        <h2>会社情報</h2>
                    </div>
                </div>
                <div class="wrapper-3__section wrapper-3__section-2 col-6">
                    
                </div>
            </div>

        </div>
        <!-- /wrapper-3 -->
        
        <!-- wrapper-4 -->
        <!-- <div class="wrapper wrapper-4">
        </div> -->
        <!-- /wrapper-4 -->
        
        <!-- wrapper-5 -->
        <!-- <div class="wrapper wrapper-5">
        </div> -->
        <!-- /wrapper-5 -->
        
        <!-- wrapper-6 -->
        <!-- <div class="wrapper wrapper-6">
        </div> -->
        <!-- /wrapper-6 -->
        
        <!-- wrapper-7 -->
        <!-- <div class="wrapper wrapper-7">
        </div> -->
        <!-- /wrapper-7 -->
    </main>
    <!-- /メイン -->

    <!-- フッター -->
    <footer>
    </footer>
    <!-- /フッター -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>