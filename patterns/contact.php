<?php
/**
 * Title: AI-SAKU: お問い合わせ導線（建設業）
 * Slug: aisaku/contact
 * Categories: aisaku
 * Keywords: contact, お問い合わせ, フォーム
 * Description: お問い合わせフォームページへの誘導セクション
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"secondary","fontSize":"2-xl"} -->
	<h2 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-2-xl-font-size" style="margin-bottom:var(--wp--preset--spacing--20)"><?php esc_html_e( 'お問い合わせ', 'aisaku' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"textColor":"text"} -->
	<p class="has-text-align-center has-text-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e( 'ご質問・ご相談・お見積りのご依頼は、下記フォームよりお気軽にお送りください。通常2営業日以内にご返信いたします。', 'aisaku' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"8px","width":"1px","color":"#e2e8f0"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="border-color:#e2e8f0;border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-columns">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3,"textColor":"primary","fontSize":"lg"} -->
				<h3 class="wp-block-heading has-primary-color has-text-color has-lg-font-size"><?php esc_html_e( 'フォームでのお問い合わせ', 'aisaku' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"text","fontSize":"sm"} -->
				<p class="has-text-color has-text-color has-sm-font-size"><?php esc_html_e( '24時間受付中。お名前・ご連絡先・ご相談内容をご記入ください。', 'aisaku' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"primary","style":{"border":{"radius":"4px"}}} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" style="border-radius:4px"><?php esc_html_e( 'お問い合わせフォームへ', 'aisaku' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3,"textColor":"primary","fontSize":"lg"} -->
				<h3 class="wp-block-heading has-primary-color has-text-color has-lg-font-size"><?php esc_html_e( 'お電話でのお問い合わせ', 'aisaku' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"1.5rem"}},"textColor":"secondary"} -->
				<p class="has-secondary-color has-text-color" style="font-size:1.5rem;font-weight:700"><?php esc_html_e( '0120-000-000', 'aisaku' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"textColor":"text","fontSize":"sm"} -->
				<p class="has-text-color has-text-color has-sm-font-size"><?php esc_html_e( '受付時間：9:00〜18:00（日祝除く）', 'aisaku' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
