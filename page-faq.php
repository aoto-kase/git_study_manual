<?php get_header(); ?>

<div class="contents">

  <section class="contents__faq">
    <h2>よくある質問</h2>
    <p>TecTecTecレーザー距離計　操作ガイド</p>
    <iframe class="contents__faq__iframe" width="560" height="315" src="https://www.youtube.com/embed/Rtnn8S2bjrQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

	  <h3>Q,計測数値が目測より短く表示される。</h3>
	  <h4>A,短く表示される場合、測定単位が（ｍ）になっている場合がございます。</h4>
	  
	  <h3>Q,計測数値が目測より長く表示される。</h3>
	  <h4>A,長く表示される場合、背景の木などを計測している場合がございます。<br>
	  測定のコツとしては測定ボタンを長押しで狙いを動かさないで計測してください。<br>
	  計測した瞬間は後ろを計測する場合がございますが、長押しすることでピンにあっています。</h4>

	  <h3>Q,発送日はいつ頃ですか？</h3>
	  <h4>A,弊社公式サイトでご購入の場合、土日祝を除く、平日14時までの注文で当日発送となります。<br>
	  その他楽天、Amazon、Yahooでご購入のかたは各サイトの発送要項をご確認ください。</h4>

	  <h3>Q,会員登録をしたいが、仮登録メールの返信がこない。</h3>
	  <h4>A,お客様のメールの受信設定をご確認下さい。<br>
	  ドメイン指定を解除していただくか、迷惑メールフォルダに受信されている可能性がございます。</h4>

	  <h3>Q,キャンセルについて</h3>
	  <h4>A,未開封に限り商品到着から7日間は返品を承っております。<br>
	  お客様都合での返品の場合、返品送料はお客様負担となりますので予めご了承ください。</h4>

	  <h3>Q,TecTecTecレーザー距離計にはどのような種類の電池を使用していますか？</h3>
	  <h4>A,ほとんどのお店で購入可能なＣＲ２型電池を使用しています。<br>
	  また、対応のCR2型電池は充電式ではありません。</h4>

	  <h3>Q,バッテリーの寿命はどれくらいですか？</h3>
	  <h4>A,使用頻度によって変化はありますが、平均して50ラウンド使用可能です。</h4>

	  <h3>Q,収納ケースの外側にある、小さな金属製のつまみはどのような目的で使用しますか？（ULT､VPROシリーズのみ）</h3>
	  <h4>A,つまみの反対側にある、ゴムと一緒に使用して、すばやく閉じることができます。</h4>

	  <h3>Q,バッテリーカバーはどこですか？</h3>
	  <h4>A,MINIの場合<br>
	  接眼レンズの下に電池収納カバーがありますので、「ツメ部分」を出して左に回して頂くと開けることができます。</h4>
	  <h4>A,ULT-Xの場合<br>
	  電源ボタンを上にした場合底の部分に電池ボックスがあります。<br>
	  「ツメ部分」を出して左に回して頂くと開けることができます。</h4>
	  <h4>A,VPRO500、VPRO500Sの場合<br>
	  接眼レンズの下に電池収納カバーがありますので、下にスライドして開けることができます。</h4>
	  
	  <img src="<?php echo get_template_directory_uri(); ?>/img/f-2.jpg" alt="">

	  <h3>Q,TecTecTecレーザー距離計は新ルールに対応してますか？</h3>
	  <h4>A,はい、すべてのTecTecTec社製のレーザー距離計は傾斜モード対応品も「切り替え」が可能の為、<br>
	  アマチュア公式戦での使用は認められています。（※各大会のローカルルールに従ってください。）</h4>
	  
    <br>
    <br>

    <h2>人気記事</h2>
    <p><a href="<?php echo get_permalink( get_page_by_path( 'comparison' )->ID ); ?>">距離計の比較</a></p>

    <p><a href="<?php echo get_permalink( get_page_by_path( 'contact-us' )->ID ); ?>">カスタマーサービス</a></p>
    <p>弊社距離計に関して、気になることがあれば、些細なことでも結構ですので、ご連絡お待ちしております。</p>

    <p><a href="https://members.shop-pro.jp/?mode=members_regi&shop_id=PA01429402">保証登録</a></p>
    <p>弊社の公式サイト以外のWebサイトで距離計を購入された場合は、会員登録していただくと、保証を12か月延長しておりますので是非ご利用下さい。</p>

  </section>

  <?php get_template_part('template-parts/contents' , 'point'); ?>


</div>











<?php get_footer(); ?>
