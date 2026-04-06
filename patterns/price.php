<?php
/**
 * Title: AI-SAKU: 料金目安（建設業）
 * Slug: aisaku/price
 * Categories: aisaku
 * Keywords: price, 料金, 費用
 * Description: 表形式の料金目安セクション
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"secondary","fontSize":"2-xl"} -->
	<h2 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-2-xl-font-size" style="margin-bottom:var(--wp--preset--spacing--20)"><?php esc_html_e( '料金目安', 'aisaku' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"textColor":"text","fontSize":"sm"} -->
	<p class="has-text-align-center has-text-color has-text-color has-sm-font-size" style="margin-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e( '※下記は参考価格です。建物の状態や面積により変動いたします。', 'aisaku' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"secondary","fontSize":"lg"} -->
	<h3 class="wp-block-heading has-secondary-color has-text-color has-lg-font-size" style="margin-bottom:var(--wp--preset--spacing--20)"><?php esc_html_e( '外壁塗装', 'aisaku' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:table {"style":{"border":{"color":"#e2e8f0","width":"1px"}}} -->
	<figure class="wp-block-table"><table class="has-border-color" style="border-color:#e2e8f0;border-width:1px">
		<thead><tr><th><?php esc_html_e( '項目', 'aisaku' ); ?></th><th><?php esc_html_e( '費用目安', 'aisaku' ); ?></th></tr></thead>
		<tbody>
			<tr><td><?php esc_html_e( 'シリコン塗料（30坪）', 'aisaku' ); ?></td><td><?php esc_html_e( '60〜90万円', 'aisaku' ); ?></td></tr>
			<tr><td><?php esc_html_e( 'フッ素塗料（30坪）', 'aisaku' ); ?></td><td><?php esc_html_e( '80〜120万円', 'aisaku' ); ?></td></tr>
			<tr><td><?php esc_html_e( '無機塗料（30坪）', 'aisaku' ); ?></td><td><?php esc_html_e( '100〜150万円', 'aisaku' ); ?></td></tr>
		</tbody>
	</table></figure>
	<!-- /wp:table -->

	<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|20"}}},"textColor":"secondary","fontSize":"lg"} -->
	<h3 class="wp-block-heading has-secondary-color has-text-color has-lg-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--20)"><?php esc_html_e( '屋根工事', 'aisaku' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:table {"style":{"border":{"color":"#e2e8f0","width":"1px"}}} -->
	<figure class="wp-block-table"><table class="has-border-color" style="border-color:#e2e8f0;border-width:1px">
		<thead><tr><th><?php esc_html_e( '項目', 'aisaku' ); ?></th><th><?php esc_html_e( '費用目安', 'aisaku' ); ?></th></tr></thead>
		<tbody>
			<tr><td><?php esc_html_e( '屋根塗装', 'aisaku' ); ?></td><td><?php esc_html_e( '30〜60万円', 'aisaku' ); ?></td></tr>
			<tr><td><?php esc_html_e( 'カバー工法', 'aisaku' ); ?></td><td><?php esc_html_e( '80〜150万円', 'aisaku' ); ?></td></tr>
			<tr><td><?php esc_html_e( '葺き替え', 'aisaku' ); ?></td><td><?php esc_html_e( '100〜200万円', 'aisaku' ); ?></td></tr>
		</tbody>
	</table></figure>
	<!-- /wp:table -->

	<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|20"}}},"textColor":"secondary","fontSize":"lg"} -->
	<h3 class="wp-block-heading has-secondary-color has-text-color has-lg-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--20)"><?php esc_html_e( 'リフォーム', 'aisaku' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:table {"style":{"border":{"color":"#e2e8f0","width":"1px"}}} -->
	<figure class="wp-block-table"><table class="has-border-color" style="border-color:#e2e8f0;border-width:1px">
		<thead><tr><th><?php esc_html_e( '項目', 'aisaku' ); ?></th><th><?php esc_html_e( '費用目安', 'aisaku' ); ?></th></tr></thead>
		<tbody>
			<tr><td><?php esc_html_e( 'キッチンリフォーム', 'aisaku' ); ?></td><td><?php esc_html_e( '50〜150万円', 'aisaku' ); ?></td></tr>
			<tr><td><?php esc_html_e( '浴室リフォーム', 'aisaku' ); ?></td><td><?php esc_html_e( '60〜120万円', 'aisaku' ); ?></td></tr>
			<tr><td><?php esc_html_e( 'トイレリフォーム', 'aisaku' ); ?></td><td><?php esc_html_e( '15〜40万円', 'aisaku' ); ?></td></tr>
		</tbody>
	</table></figure>
	<!-- /wp:table -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"text","fontSize":"sm"} -->
	<p class="has-text-align-center has-text-color has-text-color has-sm-font-size" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( '詳しいお見積りは無料で承ります。お気軽にお問い合わせください。', 'aisaku' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
