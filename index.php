<html lang="ja">
<head>
　<meta charset=”UTF-8″>
　   <link rel="stylesheet" href="index.css" />
</head>
<form action="reserve.php" method="post">
    <div class="form-group">
        <h2 class="heading">宿泊代表者情報</h2>



        <div class="grid">
            <div class="col-2-3">
                <input placeholder="example@email.com" type="text" id="email" class="floatLabel" name="email">
                <label for="email">メールアドレス</label>
            </div>


            <div class="col-2-3">

                <input placeholder="山田" type="text" id="name1Kanji" class="floatLabel" name="name1Kanji">
                <label for="name">姓</label>
            </div>

            <div class="col-2-3">
                <input placeholder="太郎" type="text" id="name2Kanji" class="floatLabel" name="name2Kanji">
                <label for="name">名</label>
            </div>

            <div class="col-2-3">

                <input placeholder="ヤマダ" type="text" id="name1Kana" class="floatLabel" name="name1Kana">
                <label for="name1Kana">セイ</label>
            </div>
            <div class="col-2-3">
                <input placeholder="タロウ" type="text" id="name2Kana" class="floatLabel" name="name2Kana">
                <label for="name2Kana">メイ</label>
            </div>

            <div class="col-2-3">
                <input maxlength="11" placeholder="（例）09012345678" size="20" type="text" class="floatLabel"
                    aria-invalid="false" name="phone">
                <label for="phone">電話番号</label>
            </div>
            <div class="col-2-3">
                <div class="controls">
                
                    <select name="todouhuken" class="floatLabel">
                        <option value="">県を選択</option>
                        <option value="北海道">　北海道</option>
                        <option value="青森県">　青森県</option>
                        <option value="岩手県">　岩手県</option>
                        <option value="宮城県">　宮城県</option>
                        <option value="秋田県">　秋田県</option>
                        <option value="山形県">　山形県</option>
                        <option value="福島県">　福島県</option>
                        <option value="栃木県">　栃木県</option>
                        <option value="群馬県">　群馬県</option>
                        <option value="茨城県">　茨城県</option>
                        <option value="埼玉県">　埼玉県</option>
                        <option value="千葉県">　千葉県</option>
                        <option value="東京都">　東京都</option>
                        <option value="神奈川県">　神奈川県</option>
                        <option value="山梨県">　山梨県</option>
                        <option value="長野県">　長野県</option>
                        <option value="新潟県">　新潟県</option>
                        <option value="富山県">　富山県</option>
                        <option value="石川県">　石川県</option>
                        <option value="福井県">　福井県</option>
                        <option value="静岡県">　静岡県</option>
                        <option value="岐阜県">　岐阜県</option>
                        <option value="愛知県">　愛知県</option>
                        <option value="三重県">　三重県</option>
                        <option value="滋賀県">　滋賀県</option>
                        <option value="京都府">　京都府</option>
                        <option value="大阪府">　大阪府</option>
                        <option value="兵庫県">　兵庫県</option>
                        <option value="奈良県">　奈良県</option>
                        <option value="和歌山県">　和歌山県</option>
                        <option value="鳥取県">　鳥取県</option>
                        <option value="島根県">　島根県</option>
                        <option value="岡山県">　岡山県</option>
                        <option value="広島県">　広島県</option>
                        <option value="山口県">　山口県</option>
                        <option value="徳島県">　徳島県</option>
                        <option value="香川県">　香川県</option>
                        <option value="愛媛県">　愛媛県</option>
                        <option value="高知県">　高知県</option>
                        <option value="福岡県">　福岡県</option>
                        <option value="佐賀県">　佐賀県</option>
                        <option value="長崎県">　長崎県</option>
                        <option value="熊本県">　熊本県</option>
                        <option value="大分県">　大分県</option>
                        <option value="宮崎県">　宮崎県</option>
                        <option value="鹿児島県">　鹿児島県</option>
                        <option value="沖縄県">　沖縄県</option>
                        <option value="その他">　その他</option>
                    </select>
                    
                    <input type="text" id="full-address" class="floatLabel" name="full-address">
                    <label for="todouhuken">住所</label>
                </div>
            </div>
           
            <div class="col-1-3">
                <div class="controls">
                    <input type="text" id="postcode" class="floatLabel" name="postcode">
                    <label for="postcode">郵便番号</label>
                </div>
            </div>
        </div>

    </div>
    <!--  Details -->
    <div class="form-group">
        <h2 class="heading">予約詳細</h2>
        <div class="grid">
            <div class="col-1-4 col-1-4-sm">
                <div class="controls">
                    <input type="date" id="arrive" class="floatLabel" name="checkIn"
                        value="<?php echo date('Y-m-d'); ?>">
                    <label for="arrive" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;チェックイン日</label>
                </div>
            </div>
            <div class="col-1-4 col-1-4-sm">
                <div class="controls">
                    <i class="fa fa-sort"></i>
                    <select class="floatLabel" name="numStay">
                        <option value="blank"></option>
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <label for="fruit"><i class="fa fa-male"></i>&nbsp;&nbsp;泊数</label>
                </div>
            </div>
        </div>
        <div class="grid">
            <div class="col-1-3 col-1-3-sm">
                <div class="controls">
                    <i class="fa fa-sort"></i>
                    <select class="floatLabel" name="numPeople">
                        <option value="blank"></option>
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <label for="fruit"><i class="fa fa-male"></i>&nbsp;&nbsp;宿泊人数</label>
                </div>
            </div>

        </div>
        <div class="grid">

            <div class="controls">
                <textarea name="comments" class="floatLabel" id="comments"></textarea>
                <label for="comments">備考</label>

            </div>


            <input type="submit" value="予約" name="submit">


        </div>
    </div> <!-- /.form-group -->
</form>


</html>