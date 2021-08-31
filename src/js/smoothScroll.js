$( function () {
	$( 'a[href^="#"]' ).on( 'click', function () {
		// 位置の調整用
		// 数値を大きくするとより下までスクロールする
		const adjust = 0;
		// 何ミリ秒かけてスクロールするかを指定
		const speed = 700;
		const href = $( this ).attr( 'href' );
		// 要素のhrefが'#'か空白のときはトップへ戻る
		const target = $( href === '#' || href === '' ? 'html' : href );
		const position = target.offset().top + adjust;
		$( 'body, html' ).animate(
			{
				scrollTop: position,
			},
			speed
		);

		return false;
	} );
} );
