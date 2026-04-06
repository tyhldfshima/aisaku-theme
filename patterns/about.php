<?php
/**
 * Title: AI-SAKU: 会社概要（建設業）
 * Slug: aisaku/about
 * Categories: aisaku
 * Keywords: about, 会社概要, 建設
 * Description: 画像左・テキスト右の2カラム会社概要セクション
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"textColor":"secondary","fontSize":"2-xl"} -->
	<h2 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-2-xl-font-size" style="margin-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e( '会社概要', 'aisaku' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.jpg' ) ); ?>" alt="<?php esc_attr_e( '会社外観', 'aisaku' ); ?>" style="border-radius:8px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:heading {"level":3,"textColor":"secondary","fontSize":"xl"} -->
			<h3 class="wp-block-heading has-secondary-color has-text-color has-xl-font-size"><?php esc_html_e( '地域に根ざして20年、確かな技術と信頼', 'aisaku' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"text"} -->
			<p class="has-text-color has-text-color"><?php esc_html_e( '当社は創業以来、地域の皆様の住まいづくりをお手伝いしてまいりました。新築住宅からリフォーム、外構工事まで、お客様一人ひとりのご要望に丁寧にお応えいたします。', 'aisaku' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"text"} -->
			<p class="has-text-color has-text-color"><?php esc_html_e( '国家資格を持つ職人が在籍し、設計から施工、アフターフォローまで自社一貫体制で対応。安心してお任せいただけます。', 'aisaku' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"primary","style":{"border":{"radius":"4px"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" style="border-radius:4px"><?php esc_html_e( '会社情報をもっと見る', 'aisaku' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
