<?php
/**
 * Title: AI-SAKU: CTA（建設業）
 * Slug: aisaku/cta
 * Categories: aisaku
 * Keywords: cta, 電話, お問い合わせ
 * Description: 濃紺背景の電話番号・お問い合わせボタン付きCTA
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"secondary","textColor":"background","layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group alignfull has-background-color has-secondary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"background","fontSize":"xl"} -->
	<h2 class="wp-block-heading has-text-align-center has-background-color has-text-color has-xl-font-size" style="margin-bottom:var(--wp--preset--spacing--20)"><?php esc_html_e( 'まずはお気軽にご相談ください', 'aisaku' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"background","fontSize":"sm"} -->
	<p class="has-text-align-center has-background-color has-text-color has-sm-font-size" style="margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e( 'ご相談・お見積りは無料です。お電話またはフォームからお問い合わせください。', 'aisaku' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700","fontSize":"2.5rem","letterSpacing":"0.05em"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"accent"} -->
	<p class="has-text-align-center has-accent-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--10);font-size:2.5rem;font-weight:700;letter-spacing:0.05em"><?php esc_html_e( '0120-000-000', 'aisaku' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"textColor":"background","fontSize":"xs"} -->
	<p class="has-text-align-center has-background-color has-text-color has-xs-font-size" style="margin-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e( '受付時間：9:00〜18:00（日祝除く）', 'aisaku' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"accent","textColor":"secondary","style":{"typography":{"fontWeight":"700"},"border":{"radius":"4px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-secondary-color has-accent-background-color has-text-color has-background wp-element-button" style="border-radius:4px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--50);font-weight:700"><?php esc_html_e( 'お問い合わせフォームへ', 'aisaku' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
