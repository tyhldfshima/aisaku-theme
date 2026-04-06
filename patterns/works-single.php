<?php
/**
 * Title: AI-SAKU: 施工事例詳細（建設業）
 * Slug: aisaku/works-single
 * Categories: aisaku
 * Keywords: works, detail, ビフォーアフター
 * Description: ビフォーアフター画像と工事概要テーブルの施工事例詳細
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"textColor":"secondary","fontSize":"2-xl"} -->
	<h2 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-2-xl-font-size" style="margin-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e( '○○市 A様邸 外壁塗装工事', 'aisaku' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"secondary","fontSize":"lg"} -->
	<h3 class="wp-block-heading has-secondary-color has-text-color has-lg-font-size" style="margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e( 'ビフォー・アフター', 'aisaku' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700"}},"textColor":"text","fontSize":"sm"} -->
				<p class="has-text-align-center has-text-color has-text-color has-sm-font-size" style="font-weight:700"><?php esc_html_e( 'Before', 'aisaku' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
				<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.jpg' ) ); ?>" alt="<?php esc_attr_e( '施工前', 'aisaku' ); ?>" style="border-radius:8px"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700"}},"textColor":"primary","fontSize":"sm"} -->
				<p class="has-text-align-center has-primary-color has-text-color has-sm-font-size" style="font-weight:700"><?php esc_html_e( 'After', 'aisaku' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"8px"}}} -->
				<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/placeholder.jpg' ) ); ?>" alt="<?php esc_attr_e( '施工後', 'aisaku' ); ?>" style="border-radius:8px"/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|30"}}},"textColor":"secondary","fontSize":"lg"} -->
	<h3 class="wp-block-heading has-secondary-color has-text-color has-lg-font-size" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e( '工事概要', 'aisaku' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:table {"style":{"border":{"color":"#e2e8f0","width":"1px"}}} -->
	<figure class="wp-block-table"><table class="has-border-color" style="border-color:#e2e8f0;border-width:1px">
		<tbody>
			<tr><td><strong><?php esc_html_e( '工事内容', 'aisaku' ); ?></strong></td><td><?php esc_html_e( '外壁塗装・屋根塗装', 'aisaku' ); ?></td></tr>
			<tr><td><strong><?php esc_html_e( 'エリア', 'aisaku' ); ?></strong></td><td><?php esc_html_e( '○○県○○市', 'aisaku' ); ?></td></tr>
			<tr><td><strong><?php esc_html_e( '建物種別', 'aisaku' ); ?></strong></td><td><?php esc_html_e( '木造2階建て', 'aisaku' ); ?></td></tr>
			<tr><td><strong><?php esc_html_e( '施工期間', 'aisaku' ); ?></strong></td><td><?php esc_html_e( '約2週間', 'aisaku' ); ?></td></tr>
			<tr><td><strong><?php esc_html_e( '費用目安', 'aisaku' ); ?></strong></td><td><?php esc_html_e( '80〜120万円', 'aisaku' ); ?></td></tr>
		</tbody>
	</table></figure>
	<!-- /wp:table -->

	<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|30"}}},"textColor":"secondary","fontSize":"lg"} -->
	<h3 class="wp-block-heading has-secondary-color has-text-color has-lg-font-size" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e( '担当者コメント', 'aisaku' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textColor":"text"} -->
	<p class="has-text-color has-text-color"><?php esc_html_e( '築15年で外壁の色褪せやひび割れが目立ってきたため、塗り替えをご依頼いただきました。高耐久のシリコン塗料を使用し、美しい仕上がりとなりました。お客様にも大変ご満足いただけました。', 'aisaku' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
