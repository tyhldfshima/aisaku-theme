<?php
/**
 * Title: AI-SAKU: アクセス・会社情報（建設業）
 * Slug: aisaku/access
 * Categories: aisaku
 * Keywords: access, アクセス, 地図, 会社情報
 * Description: 住所・電話・営業時間・地図埋め込みのアクセスセクション
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"textColor":"secondary","fontSize":"2-xl"} -->
	<h2 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-2-xl-font-size" style="margin-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e( 'アクセス・会社情報', 'aisaku' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"45%"} -->
		<div class="wp-block-column" style="flex-basis:45%">
			<!-- wp:table {"style":{"border":{"color":"#e2e8f0","width":"1px"}}} -->
			<figure class="wp-block-table"><table class="has-border-color" style="border-color:#e2e8f0;border-width:1px">
				<tbody>
					<tr><td><strong><?php esc_html_e( '会社名', 'aisaku' ); ?></strong></td><td><?php esc_html_e( '株式会社○○建設', 'aisaku' ); ?></td></tr>
					<tr><td><strong><?php esc_html_e( '代表者', 'aisaku' ); ?></strong></td><td><?php esc_html_e( '代表取締役 ○○ ○○', 'aisaku' ); ?></td></tr>
					<tr><td><strong><?php esc_html_e( '所在地', 'aisaku' ); ?></strong></td><td><?php esc_html_e( '〒000-0000 ○○県○○市○○町1-2-3', 'aisaku' ); ?></td></tr>
					<tr><td><strong><?php esc_html_e( '電話番号', 'aisaku' ); ?></strong></td><td><?php esc_html_e( '0120-000-000', 'aisaku' ); ?></td></tr>
					<tr><td><strong><?php esc_html_e( 'FAX', 'aisaku' ); ?></strong></td><td><?php esc_html_e( '000-000-0000', 'aisaku' ); ?></td></tr>
					<tr><td><strong><?php esc_html_e( '営業時間', 'aisaku' ); ?></strong></td><td><?php esc_html_e( '9:00〜18:00', 'aisaku' ); ?></td></tr>
					<tr><td><strong><?php esc_html_e( '定休日', 'aisaku' ); ?></strong></td><td><?php esc_html_e( '日曜・祝日', 'aisaku' ); ?></td></tr>
					<tr><td><strong><?php esc_html_e( '許可番号', 'aisaku' ); ?></strong></td><td><?php esc_html_e( '○○県知事許可（般-00）第000000号', 'aisaku' ); ?></td></tr>
				</tbody>
			</table></figure>
			<!-- /wp:table -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"55%"} -->
		<div class="wp-block-column" style="flex-basis:55%">
			<!-- wp:html -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.828030613407!2d139.76493!3d35.6812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1234567890" width="100%" height="400" style="border:0;border-radius:8px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			<!-- /wp:html -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"textColor":"text","fontSize":"sm"} -->
			<p class="has-text-color has-text-color has-sm-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php esc_html_e( '○○駅から徒歩5分／駐車場3台完備', 'aisaku' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
